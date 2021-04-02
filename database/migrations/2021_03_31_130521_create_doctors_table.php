<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('doctors_id');
         
            $table->string('doctors_name', 100);
            $table->date('doctors_dob');
            $table->string('gender', 10);           
            $table->string('doctors_phone',20);
            $table->string('doctors_email',150);
            $table->string('doctors_password');
            $table->string('doctors_degree');
            $table->string('doctors_expert_in', 150);
            $table->text('doctors_local_address');
            $table->enum('doctors_status', ['Active', 'Inactive']);
            $table->string('doctors_photo');
            $table->string('doctors_roll', 10);

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
        Schema::dropIfExists('doctors');
    }
}
