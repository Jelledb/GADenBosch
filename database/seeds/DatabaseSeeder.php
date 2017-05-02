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

        $this->seedWorkplaces();


    }

    private function seedRoles() {
        DB::table('roles')->insert([['id' => 1, 'rolename' => 'admin'],['id' => 2, 'rolename' => 'vrijwilliger'],['id' => 3, 'rolename' => 'klant']]);
    }

    private function seedVacatures() {
        DB::table('vacatures')->insert([
            ['id' => 1, 'datum' => 07/04/2017, 'description' => 'Dit is een vacature voor beheerder van de werkplaats.', 'title' => 'Werkplaatsbeheerder'],
            ['id' => 2, 'datum' => 21/03/2017, 'description' => 'Dit is een vacature voor beheerder van het atelier.', 'title' => 'Atelierbeheerder']]);
    }

    // Seed script voor werkplaatsen. S.V.P. niet verwijderen!!
    private function seedWorkplaces() {
        DB::table('workspaces')->insert([
            ['name' => 'Zeefdruk', 'size' => 'klein'],
            ['name' => 'Zeefdruk', 'size' => 'middel'],
            ['name' => 'Zeefdruk', 'size' => 'middel'],
            ['name' => 'Zeefdruk', 'size' => 'middel'],
            ['name' => 'Zeefdruk', 'size' => 'groot'],

            ['name' => 'Lithografie', 'size' => null],

            ['name' => 'Hoog/diepdruk', 'size' => 'middel'],
            ['name' => 'Hoog/diepdruk', 'size' => 'groot'],

            ['name' => 'Overig', 'size' => null],
        ]);
    }

}
