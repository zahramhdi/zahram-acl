<?php


namespace thirdly\acl\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens;
    protected $guarded;

    public function roles()
    {
        return $this->belongsToMany(Role::class,'role_user');
    }
    public static function generatePassword()
    {
        return Str::random(8);

    }
}