<?php
use \Illuminate\Database\Migrations\Migration;
use \Illuminate\Support\Facades\Schema;
use \Illuminate\Database\Schema\Blueprint;
class CreateRoleUserTable extends Migration
{
    public function up()
    {
        Schema::create('role_user',function (Blueprint $table ){
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('user_id');
            $table->primary(['user_id', 'role_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('role_user');
    }
}
