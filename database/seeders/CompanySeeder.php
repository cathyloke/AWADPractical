<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            DB::table('companies')->insert([
                'name' => $faker->name,
                'user_id' => 1,
            ]);
        }
    }
}
