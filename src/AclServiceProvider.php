<?php


namespace thirdly\acl;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use thirdly\acl\Console\Install;

class AclServiceProvider extends AclBaseServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->commands([
            Install::class
        ]);
    }

}