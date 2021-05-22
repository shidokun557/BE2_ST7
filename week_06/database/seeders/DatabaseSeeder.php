<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(companiesSeender::class); 
        // Gọi hàm companiesSeeding đã tạo ở Seeder
        $this->call(trainersSeender::class);
        //Tương tự như trên

    }
}
