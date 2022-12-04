<?php

namespace App\Resources\Admin;

use Illuminate\Http\Resources\Json\JsonResource;

class ReplyResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'keywords' => $this->keywords,
            'match_type' => $this->match_type,
            'materials' => $this->materials,
        ];
    }
}
