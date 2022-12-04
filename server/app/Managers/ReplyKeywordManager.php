<?php

namespace App\Managers;

use App\Models\ReplyKeyword;

class ReplyKeywordManager
{
    public static function updateWithReply(array $keywords, $replyId)
    {
        $existKeywordIds = [];
        foreach ($keywords as $keyword) {
            if (isset($keyword['id'])) {
                $existKeywordIds[] = $keyword['id'];
            } else {
                $replyKeyword = ReplyKeyword::create([
                    'keyword' => $keyword['keyword'],
                    'reply_id' => $replyId
                ]);
                $existKeywordIds[] = $replyKeyword['id'];
            }
        }

        $replyKeywords = ReplyKeyword::where('reply_id', $replyId)->get();
        foreach ($replyKeywords as $replyKeyword) {
            if (!in_array($replyKeyword['id'], $existKeywordIds)) {
                ReplyKeyword::where('id', $replyKeyword['id'])->delete();
            }
        }
    }
}
