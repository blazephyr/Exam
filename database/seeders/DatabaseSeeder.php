<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $faker = Faker::create();

        $gender = $faker->randomElement(['male', 'female']);

    	foreach (range(1,10) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name($gender),
                'email' => $faker->email,
             
                'password' => $faker->password,
               
            ]);
        }

        $faker = Faker::create();

     
        $gender = $faker->randomElement(['male', 'female']);
    	foreach (range(1,10) as $index) {
            DB::table('songs')->insert([
                'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'artist' => $faker->name($gender),
                'lyrics' => $faker->paragraphs($nb = 10, $asText = true),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }

    }
}
