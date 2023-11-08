<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $faker = Faker::create();
        foreach(range(1, 10) as $index) {
            DB::table('products')->insert([
                'name' =>  $faker->word,
                'description' => $faker->text($maxNbChars = 200),
                'price' => $faker->numberBetween($min = 1000, $max = 5000),
                'status' => 1,
                'created_at' => now(),
                'updated_at' =>now()
            ]);
        }
    }
}
