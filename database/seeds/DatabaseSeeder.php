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
        //$this->seedSponsors();

        DB::table('roles')->insert([[
            'id' => 1, 'rolename' => 'admin'],['id' => 2, 'rolename' => 'vrijwilliger'],['id' => 3, 'rolename' => 'klant']]);
        DB::table('vacatures')->insert([
            ['id' => 1, 'datum' => 07/04/2017, 'description' => 'Dit is een vacature voor beheerder van de werkplaats.', 'title' => 'Werkplaatsbeheerder'],
            ['id' => 2, 'datum' => 21/03/2017, 'description' => 'Dit is een vacature voor beheerder van het atelier.', 'title' => 'Atelierbeheerder']]);

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
