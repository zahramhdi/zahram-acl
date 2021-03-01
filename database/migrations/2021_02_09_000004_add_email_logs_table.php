<?php
use \Illuminate\Database\Migrations\Migration;
use \Illuminate\Support\Facades\Schema;
use \Illuminate\Database\Schema\Blueprint;
use \thirdly\acl\Models\Permission;
use \thirdly\acl\Models\EmailLog;
class AddEmailLogsTable extends Migration
{
    public function up()
    {
        if (Schema::hasTable((new EmailLog())->getTable())) {
            Schema::table((new EmailLog())->getTable(), function (Blueprint $table) {
                if (!(Schema::hasColumn((new EmailLog())->getTable(), 'view')))
                    $table->string('view');
                if (!(Schema::hasColumn((new EmailLog())->getTable(), 'title')))
                    $table->string('title');
                if (!(Schema::hasColumn((new EmailLog())->getTable(), 'email')))
                    $table->string('email');
                if (!(Schema::hasColumn((new EmailLog())->getTable(), 'data')))
                    $table->text('data');
                if (!(Schema::hasColumn((new EmailLog())->getTable(), 'is_sent')))
                    $table->boolean('is_sent');
                if (!(Schema::hasColumn((new EmailLog())->getTable(), 'error')))
                    $table->boolean('error')->nullable();
                if (!(Schema::hasColumns((new EmailLog())->getTable(), ['created_at', 'updated_at'])))
                    $table->timestamps();
            });
        } else {
            Schema::create((new EmailLog())->getTable(), function (Blueprint $table) {
                $table->id();
                $table->string('view');
                $table->string('title');
                $table->string('email');
                $table->text('data');
                $table->boolean('is_sent');
                $table->text('error')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('role_user');
    }
}
