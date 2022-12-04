<?php

namespace App\Managers;

use App\Models\ReplyActionMap;

class ReplyActionMapManager
{
    public static function updateWithReply(array $materials, $replyId)
    {
        ReplyActionMap::where('reply_id', $replyId)
            ->where('model_type', ReplyActionMap::MATERIAL_TYPE)
            ->delete();
        $insertMaterialData = [];
        foreach ($materials as $material) {
            $insertMaterialData[] = [
                'reply_id' => $replyId,
                'model_type' => ReplyActionMap::MATERIAL_TYPE,
                'model_id' => $material['id']
            ];
        }
        ReplyActionMap::insert($insertMaterialData);
    }
}
