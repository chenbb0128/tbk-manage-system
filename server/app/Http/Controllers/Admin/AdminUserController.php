<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Models\AdminUser;
use App\Resources\Admin\AdminUserResource;
use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as FoundationResponse;

class AdminUserController extends BaseController
{
    public function show(AdminUser $admin)
    {
        return $this->success(new AdminUserResource($admin));
    }

    public function info()
    {
        $admin = Auth::user();
        return $this->success(new AdminUserResource($admin));
    }

    public function index(Request $request)
    {
        $limit = $request->input('limit');
        $admins = AdminUser::paginate($limit);
        return $this->success($admins);
    }

    public function update(Request $request, $id)
    {
        $adminUser = AdminUser::findOrFail($id);
        $adminUser->update($request->all());
        return $this->success('更新成功');
    }

    public function store(Request $request)
    {
        AdminUser::create($request->all());
        return $this->setStatusCode(FoundationResponse::HTTP_CREATED)->success('用户注册成功');
    }
}
