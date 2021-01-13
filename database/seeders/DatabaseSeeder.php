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
         \App\Models\User::factory(10)->create();
         \App\Models\Category::factory(10)->create();
         DB::unprepared(file_get_contents(__DIR__ .'/sql/regions.sql'));
         DB::unprepared(file_get_contents(__DIR__ .'/sql/cities.sql'));
         \App\Models\Advert::factory(10)->create();
    }
}
