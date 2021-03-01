<?php


namespace thirdly\acl\Http\Middleware;


use Closure;
use thirdly\acl\Models\Role;
use thirdly\acl\Models\User;

class Permission
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        return $next($request);

        if (auth()->user()) {
            $user = User::where('id', auth()->user()->id)->with(['roles.permissions'])->first();

            if (collect($user->roles)->where('name','super_admin')->count())  return $next($request);

            foreach ($user->roles as $role) {
                $permissions = $role->permissions;
// get requested action
                $actionName = class_basename($request->route()->getActionname());
//            return $actionName;
// check if requested action is in permissions list
                foreach ($permissions as $permission) {
                    $_namespaces_chunks = explode('\\', $permission->controller);
                    $controller = end($_namespaces_chunks);
                    if ($actionName == $controller . '@' . $permission->method) {
                        // authorized request
                        return $next($request);
                    }
                }
            }
// none authorized request
            return response('Unauthorized Action', 403);

        }
        return response('Unauthorized Action', 403);

    }

}