<?php
use \Illuminate\Database\Migrations\Migration;
use \Illuminate\Support\Facades\Schema;
use \Illuminate\Database\Schema\Blueprint;
use \thirdly\acl\Models\Role;
class CreateRolesTable extends Migration
{
    public function up()
    {
        Schema::create((new Role())->getTable(),function (Blueprint $table ){
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists((new Role())->getTable());
    }
}
