<?php

namespace App\Http\Requests\Admin;


class ReplyRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'GET':
                return [
                    'id' => 'required,exists:replies,id'
                ];
            case 'POST':
                return [
                    'keywords' => ['required'],
                    'match_type' => ['required'],
                    'materials' => ['required']
                ];
            case 'PUT':
            case 'PATCH':
            case 'DELETE':
            default:
                return [];
        }
    }

    public function messages()
    {
        return [
            'id.required' => '必须填写ID',
            'id.exists' => '该条回复不存在',
            'keyword.required' => '关键词不能为空',
            'type.required' => '回复类别不能为空',
            'content.required' => '回复内容不能为空'
        ];
    }
}
