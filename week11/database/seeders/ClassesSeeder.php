<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('classes')->insert([
                'teacher_id' => random_int(1, 10),
                'course_id' => random_int(1, 10),
                'class_name' => Str::random(10),
            ]);
        }
    }
}