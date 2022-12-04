<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Admin\ReplyRequest;
use App\Managers\ReplyActionMapManager;
use App\Managers\ReplyKeywordManager;
use App\Models\Reply;
use App\Resources\Admin\ReplyResource;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as FoundationResponse;

class ReplyController extends BaseController
{
    public function show(Reply $reply)
    {
        $reply->load(['keywords', 'materials.image']);
        return $this->success(new ReplyResource($reply));
    }

    public function index(Request $request)
    {
        $limit = $request->input('limit');
        $replies = Reply::with(['keywords', 'materials.image'])->paginate($limit);
        return $this->success($replies);
    }

    public function store(ReplyRequest $request)
    {
        $matchType = $request->input('match_type');
        $keywords = $request->input('keywords', []);
        if (is_string($keywords)) {
            $keywords = json_decode($keywords, true);
        }
        $materials = $request->input('materials', []);
        if (is_string($materials)) {
            $materials = json_decode($materials, true);
        }

        \DB::transaction(function () use ($matchType, $keywords, $materials) {
            $reply = Reply::create(['match_type' => $matchType]);
            ReplyKeywordManager::updateWithReply($keywords, $reply->id);
            ReplyActionMapManager::updateWithReply($materials, $reply->id);
        });

        return $this->setStatusCode(FoundationResponse::HTTP_CREATED)->success('创建成功');
    }

    public function update(ReplyRequest $request)
    {
        $id = $request->input('id');
        $reply = Reply::findOrFail($id);
        $matchType = $request->input('match_type');
        $keywords = $request->input('keywords', []);
        if (is_string($keywords)) {
            $keywords = json_decode($keywords, true);
        }
        $materials = $request->input('materials', []);
        if (is_string($materials)) {
            $materials = json_decode($materials, true);
        }
        \DB::transaction(function () use ($id, $matchType, $keywords, $materials) {
            // 对关键词进行更新
            ReplyKeywordManager::updateWithReply($keywords, $id);
            // 对素材回复进行更新
            ReplyActionMapManager::updateWithReply($materials, $id);
            Reply::where('id', $id)->update(['match_type' => $matchType]);
        });
        return $this->success('修改成功');
    }

    public function destroy(ReplyRequest $request)
    {
        $id = $request->input('id');
        Reply::findOrFail($id)->delete();
        return $this->success('删除成功');
    }
}
