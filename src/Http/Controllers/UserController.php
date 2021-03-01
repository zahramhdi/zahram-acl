<?php


namespace thirdly\acl\Http\Controllers;


use Illuminate\Routing\Controller;
use thirdly\acl\Http\Requests\AddUserRole;
use thirdly\acl\Http\Requests\GetUserRole;
use thirdly\acl\Models\User;

class UserController extends Controller
{
    public function getRole(GetUserRole $request)
    {
       $user= User::with(['roles'])->findOrFail($request->user_id);
       return response()->json(['roles'=>$user->roles],200);
    }

    public function addRole(AddUserRole $request)
    {

        $user=User::findOrFail($request->user_id);
        $user->roles()->attach($request->role_id);
        return response()->json(null,204);


    }

}