<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController;
use App\Managers\RobotReplyManager;
use App\Managers\UserManager;
use App\Models\Material;
use App\Models\User;
use App\Utils\StrUtil;
use Illuminate\Http\Request;

class RobotController extends BaseController
{
    public function messageReply(Request $request)
    {
        $keyword = $request->input('keyword');
        $message = '';
        $msgType = Material::TEXT;
        try {
            if (StrUtil::matchJd($keyword)) {
                // 京东商品匹配
                $message = RobotReplyManager::jdGoodsSearch($keyword);
            } elseif (StrUtil::matchTbTpwd($keyword)) {
                // 淘宝匹配的链接
                $message = RobotReplyManager::tbGoodsSearch($keyword);
            } else {
                $replyInfo = RobotReplyManager::parseOtherContent($keyword);
                $message = $replyInfo['message'];
                $msgType = $replyInfo['msg_type'];
            }
        } catch (\Exception $e) {
            \Log::error('消息回复出现错误，错误原因为:'.$e->getTraceAsString());
        }

        $data = [
            'message' => $message,
            'msg_type' => $msgType
        ];
        return $this->success($data);
    }

    /**
     * 同步用户数据
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function syncUsers(Request $request)
    {
        $userData = $request->input('users');
        if (is_string($userData)) {
            $userData = json_decode($userData, true);
        }
        foreach ($userData as $item) {
            try {
                $user = User::where('uid', $item['alias'])->first();
                if (empty($user)) {
                    $user = User::where('wx_id', $item['wx_id'])->first();
                }
                UserManager::saveWxUser($item, $user);
            } catch (\Exception $e) {
                \Log::error('用户数据更新失败：' . json_encode($item) . ',原因为：' . $e->getMessage());
            }
        }
        return $this->success('更新成功');
    }
}
