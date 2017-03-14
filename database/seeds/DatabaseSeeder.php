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

        $this->seedWorkSpaceSize();
        $this->seedWorkspaceType();
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

    private function seedWorkSpaceSize() {
        DB::table('workspace_size')->insert([
            ['size' => 'klein'],
            ['size' => 'middel'],
            ['size' => 'groot']
        ]);
    }

    private function seedWorkspaceType() {
        DB::table('workspace_type')->insert([
            ['name' => 'zeefdruk'],
            ['name' => 'lithografie'],
            ['name' => 'hoogdruk/diepdruk'],
            ['name' => 'extra'],
        ]);
    }

}
