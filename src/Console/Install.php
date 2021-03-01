<?php


namespace thirdly\acl\Console;


use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use twilio\acl\Models\User;

class Install extends Command
{
    protected $signature = 'acl:install';
    protected $description='';

    public function handle()
    {
        $this->comment('migrate...');
        Artisan::call('migrate');

        $this->comment('install passport...');
        Artisan::call('passport:install');

        $this->comment('Publishing acl Configuration...');
        Artisan::call('vendor:publish --tag=acl-config');

        $this->comment('Publishing acl-swagger Configuration...');
        Artisan::call('vendor:publish --tag=acl-swagger');


    }
}