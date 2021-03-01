<?php


namespace thirdly\acl\Models;


use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded;

    public function permissions()
    {
        return $this->belongsToMany(Permission::class,'role_permission');
    }
    public function users()
    {
        return $this->belongsToMany(User::class,'role_user');
    }
}