<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Trainers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->bigIncrements('trainer_id');
            $table->string('trainer_name',55);
            $table->integer('company_id');
            $table->string('trainer_email');
            $table->string('trainer_phone',55);
        });

    }

    public function down()
    {
        Schema::dropIfExists('trainers');
    }
}
