<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Advert;
use App\Models\User;
use Illuminate\Support\Str;


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
         DB::unprepared(file_get_contents(__DIR__ .'/sql/categories.sql'));
         DB::unprepared(file_get_contents(__DIR__ .'/sql/regions.sql'));
         DB::unprepared(file_get_contents(__DIR__ .'/sql/cities.sql'));
         \App\Models\Advert::factory(10)->create();

        for($i =1 ; $i< Advert::count(); $i++ ){
            for($j =0;$j<rand(1,10);$j++){
                DB::table('photos')->insert([
                    'advert_id' => $i,
                    'is_main' => $j==0?1:0,
                    'link'=> Str::random(10).'.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }

        $faker = \Faker\Factory::create('ru_RU');
        for($i =1 ; $i< Advert::count(); $i++ ){
            if(Advert::find($i)->status == 'rejected'
            || Advert::find($i)->status == 'approved'
            || Advert::find($i)->status == 'soldout'){
                for($j=0;$j=rand(0,5); $j++){
                DB::table('moderations')->insert([
                    'moderated_at'  =>now(),
                    'advert_id' =>$i,
                    'user_id' =>User::where('role','moder')->orWhere('role','admin')->inRandomOrder()->first()->id,
                    'resolution'  => 'rejected',
                    'reason' => $faker->realText(256),
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
                }
            }
            if(Advert::find($i)->status == 'approved'
            || Advert::find($i)->status == 'soldout'){
                DB::table('moderations')->insert([
                    'moderated_at'  =>now(),
                    'advert_id' =>$i,
                    'user_id' =>User::where('role','moder')->orWhere('role','admin')->inRandomOrder()->first()->id,
                    'resolution'  => 'approved',
                    'reason' => null,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
    }
}
