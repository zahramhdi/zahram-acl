<?php
use \Illuminate\Database\Migrations\Migration;
use \Illuminate\Support\Facades\Schema;
use \Illuminate\Database\Schema\Blueprint;
use \thirdly\acl\Models\Permission;
class CreatePermissionsTable extends Migration
{
    public function up()
    {
        Schema::create((new Permission())->getTable(),function (Blueprint $table ){
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('key')->nullable();
            $table->string('controller');
            $table->string('method');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists((new Permission())->getTable());
    }
}
