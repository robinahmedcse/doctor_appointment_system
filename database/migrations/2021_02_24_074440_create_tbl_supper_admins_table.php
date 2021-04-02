<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSupperAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_supper_admins', function (Blueprint $table) {
            $table->bigIncrements('s_admin_id');
            $table->string('s_admin_name');
            $table->string('s_admin_username');
            $table->string('s_admin_email'); 
            $table->string('s_admin_password');
            $table->tinyInteger('s_admin_role');
            $table->tinyInteger('s_admin_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_supper_admin');
    }
}
