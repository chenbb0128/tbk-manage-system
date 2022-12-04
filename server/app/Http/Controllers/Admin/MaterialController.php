<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\Material;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as FoundationResponse;

class MaterialController extends BaseController
{
    public function images(Request $request)
    {
        $limit = $request->input('limit');

        $images = Material::with('image')->where('type', Material::IMAGE)
            ->paginate($limit);
        return $this->success($images);
    }

    public function texts(Request $request)
    {
        $limit = $request->input('limit');
        $texts = Material::where('type', Material::TEXT)
            ->paginate($limit);
        return $this->success($texts);
    }

    public function textStore(Request $request)
    {
        $data = $request->all();
        $data['type'] = Material::TEXT;
        Material::create($data);
        return $this->setStatusCode(FoundationResponse::HTTP_CREATED)->success('添加成功');
    }

    public function textUpdate(Request $request, $id)
    {
        $material = Material::findOrFail($id);
        $material->update($request->all());
        return $this->success('更新成功');
    }
}
