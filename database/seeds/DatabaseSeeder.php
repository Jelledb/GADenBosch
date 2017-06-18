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

        $this->seedRoles();
        $this->seedOverOns();
        $this->seedEducation();
        $this->seedWorkplaces();
        $this->seedRouteMetaTags();
        $this->seedContact();

    }

    private function seedRoles() {
        DB::table('roles')->insert([['id' => 1, 'rolename' => 'admin'],['id' => 2, 'rolename' => 'vrijwilliger'],['id' => 3, 'rolename' => 'klant']]);
    }

    private function seedOverOns(){
        DB::table('over_ons')->insert(['id' => 1, 'content_right' => '', 'content_left' => '']);
    }
    private function seedEducation(){
        DB::table('educaties')->insert(['id' => 1, 'title' => '', 'content_left' => '', 'content_right' => '']);
    }
    private function seedContact(){
        DB::table('contacts')->insert(['id' => 1, 'content_left' => '', 'content_right' => '']);
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

    /**
     * Seed the route_meta_tags table with default values.
     */
    private function seedRouteMetaTags() {
        DB::table('route_meta_tags')->insert([
            ['route' => '/', 'title' => 'GADenBosch', 'description' => 'Welkom bij het Grafisch Atelier Den Bosch!'],
            ['route' => 'login', 'title' => 'GADenBosch - Inloggen', 'description' => 'Welkom bij het Grafisch Atelier Den Bosch!'],
            ['route' => 'register', 'title' => 'GADenBosch - Registreren', 'description' => 'Welkom bij het Grafisch Atelier Den Bosch!'],
            ['route' => 'nieuws', 'title' => 'Nieuws', 'description' => 'Dit is een beschrijving'],
            ['route' => 'over', 'title' => 'Over Ons', 'description' => 'Dit is een beschrijving'],
            ['route' => 'werkplaats', 'title' => 'Werkplaats', 'description' => 'Dit is een beschrijving'],
            ['route' => 'contact', 'title' => 'Contact', 'description' => 'Dit is een beschrijving'],
            ['route' => 'vacatures', 'title' => 'Vacatures', 'description' => 'Dit is een beschrijving'],
            ['route' => 'sponsors', 'title' => 'Sponsoren', 'description' => 'Dit is een beschrijving'],
            ['route' => 'vriend-worden', 'title' => 'Vriend worden', 'description' => 'Dit is een beschrijving'],
            ['route' => 'winkel', 'title' => 'Dit is een titel', 'description' => 'Dit is een beschrijving'],
            ['route' => 'werkplaats-overzicht', 'title' => 'Dit is een titel', 'description' => 'Dit is een beschrijving'],
            ['route' => 'agenda', 'title' => 'Dit is een titel', 'description' => 'Dit is een beschrijving'],
        ]);
    }

}
