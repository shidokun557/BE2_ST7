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
            $table->string('company_id',11);
            $table->string('trainer_email');
            $table->string('trainer_phone',55);
        });
//        for ($i = 0; $i < 5; $i++){
//            DB::table('trainers')->insert([          
//            'trainer_name' => Str::random(10),
//            'company_id' => Str::random(10),
//            'trainer_email' => Str::random(10),
//            'trainer_phone' => Str::random(10),
//            ]);
//        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainers');
    }
}
