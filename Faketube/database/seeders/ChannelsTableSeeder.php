<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('channels')->insert([
                'name' => $faker->company,
                'description' => $faker->sentence,
                'subscriberscount' => $faker->numberBetween(100, 5000),
                'url' => $faker->url,
                'created_at' =>now(),
                'updated_at' =>now()
            ]);
        }
    }
}
