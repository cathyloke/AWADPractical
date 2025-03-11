<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //seed 1 record
        // DB::table('users')->insert([
        //     'name'=>'Alice',
        //     'email'=>'alice@gmail.com',
        //     'password'=>'alice',
        // ]);
        
        //seed records by looping
        // for($i = 1;$i <= 10; $i++){
            //     DB::table('users')->insert([
                //         'name'=>Str::random(3),
                //         'email'=>Str::random(3).'@gmail.com',
                //         'password'=>Str::random(5),
                //     ]);
                // }
                
        //seed records by looping using realistic name
        $faker = Faker::create();
        for($i = 1;$i <= 10; $i++){
            DB::table('users')->insert([
                'name'=>$faker->name,
                'email'=>$faker->userName.'@gmail.com',
                'password'=>Str::random(5),
            ]);
        }
    
    }

}
