<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Migrations;

class companiesSeender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for ($i=0; $i <= 10000; $i++){ //Vòng lặp 1.000.000 lần để thêm vào
        DB::table('companies')->insert([
            'company_name' => Str::random(10) . $i, //Random ki tu
            'company_web' => Str::random(10) . $i,
            'company_address' => Str::random(10) . $i,
            'company_code' => Str::random(10) . $i,
            'company_phone' => Str::random(10) . $i,    
        ]);
       }
    }
}
