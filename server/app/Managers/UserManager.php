<?php

namespace App\Managers;

use App\Models\User;
use App\Utils\StrUtil;

class UserManager
{
    /**
     * 保存微信用户信息，并设置别名
     * @param array $userData
     * @param $user
     */
    public static function saveWxUser(array $userData, $user)
    {
        if (empty($user)) {
            // 不存在用户，则新增 然后再设置别名
            $uid = StrUtil::getUid(StrUtil::USER_UID_PREFIX);
            $user = User::create([
                'name' => $userData['name'],
                'uid' => $uid,
                'wx_id' => $userData['wx_id'],
                'wx_no' => $userData['wx_no'],
                'avatar' => $userData['avatar']
            ]);
        } else {
            // 已存在，则更新用户数据
            $user->name = $userData['name'];
            $user->wx_id = $userData['wx_id'];
            $user->wx_no = $userData['wx_no'];
            $user->avatar = $userData['avatar'];
            $user->save();
        }

    }
}
