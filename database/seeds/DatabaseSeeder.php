<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->seedSponsors();

    }

    private function seedSponsors() {
        $faker = Faker\Factory::create();

        foreach (range(1, 10) as $i) {
            DB::table('products')->insert([
                'name' => $faker->name,
                'description_short' => $faker->text,
                'image' => $faker->image(null, 100, 200, 'business' )
            ]);
        }
    }

}
