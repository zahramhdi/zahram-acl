<?php

use \Illuminate\Database\Migrations\Migration;
use \Illuminate\Support\Facades\Schema;
use \Illuminate\Database\Schema\Blueprint;
use \thirdly\acl\Models\User;

class AddUsersTable extends Migration
{
    public function up()
    {
        if (Schema::hasTable((new User())->getTable())) {
            Schema::table((new User())->getTable(), function (Blueprint $table) {
                if (!(Schema::hasColumn((new User())->getTable(), 'first_name')))
                    $table->string('first_name')->nullable();
                if (!(Schema::hasColumn((new User())->getTable(), 'phone')))
                    $table->string('phone')->nullable();
                if (!(Schema::hasColumn((new User())->getTable(), 'email')))
                    $table->string('email')->unique();
                if (!(Schema::hasColumn((new User())->getTable(), 'password')))
                    $table->string('password');
                if (!(Schema::hasColumn((new User())->getTable(), 'remember_token')))
                    $table->string('remember_token')->nullable();
                if (!(Schema::hasColumns((new User())->getTable(), ['created_at', 'updated_at'])))
                    $table->timestamps();
            });
        } else {
            Schema::create((new User())->getTable(), function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('first_name')->nullable();
                $table->string('phone')->nullable();
                $table->string('email');
                $table->string('password');
                $table->string('remember_token')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::table((new User())->getTable(), function (Blueprint $table) {
            $table->dropColumn('first_name');
            $table->dropColumn('phone');
            $table->dropColumn('email');
            $table->dropColumn('password');
            $table->dropColumn('remember_token');
        });
    }
}
