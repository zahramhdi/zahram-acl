<?php


namespace thirdly\acl\Http\Controllers;


use Illuminate\Routing\Controller;
use thirdly\acl\Http\Requests\StoreRole;
use thirdly\acl\Models\Role;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::all();
        return response()->json(['roles' => $roles], 200);

    }

    public function show($id)
    {
        $role = Role::where('id', $id)->with(['permissions'])->first();
        return response()->json(['role' => $role], 200);
    }

    public function store(StoreRole $request)
    {
        $role = Role::create($request->only('name', 'description'));
        $role->permissions()->sync([$request->permission_id]);
        return response()->json(null, 204);
    }

    public function update(Role $role,StoreRole $request)
    {
        $role = $role->update($request->only('name', 'description'));
        $role->permissions()->sync([$request->permission_id]);
        return response()->json(null, 204);
    }

    public function destroy(Role $role)
    {
        $role->users()->detach();
        $role->permissions()->detach();
        $role->delete();
        return response()->json(null,204);
    }
}