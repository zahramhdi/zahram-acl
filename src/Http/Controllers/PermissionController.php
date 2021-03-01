<?php


namespace thirdly\acl\Http\Controllers;


use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use thirdly\acl\Http\Requests\StorePermission;
use thirdly\acl\Models\Permission;
use thirdly\acl\Models\Role;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return response()->json(['permissions' => $permissions], 200);
    }

    public function store()
    {
        $permission_ids = [];
//        return Route::getRoutes()->getRoutes();
        foreach (Route::getRoutes()->getRoutes() as $key => $route) {

            // get route action
            $action = $route->getActionname();
            $_action = explode('@', $action);

            $controller = $_action[0];
            $method = end($_action);
            // check if this permission is already exists
//return $this->permission_exist($controller, $method);
            if (!$this->permission_exist($controller, $method)) {
//                return $method;
                $permission = Permission::create([
                    'controller' => $controller,
                    'method' => $method,
                    'key'=>$route->uri
                ]);
                $permission_ids[] = $permission->id;
            }
        }
// find admin role.
        $admin_role = Role::where('name', 'super_admin')->first();
        if (!$admin_role) $admin_role=Role::create(['name'=>'super_admin','description'=>'']);
// atache all permissions to admin role
        $admin_role->permissions()->attach($permission_ids);
        return response()->json(null,204);
    }

    private function permission_exist($controller, $method)
    {
        $permissions= Permission::where(
            ['controller' => $controller, 'method' => $method]
        )->count();
        return $permissions>0;
    }


}