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

        //DB::table('roles')->insert([['rolename' => 'admin'], ['rolename' => 'vrijwilliger'], ['rolename' => 'klant']]);


        $this->seedWorkspace();
    }

    private function seedSponsors()
    {
        $faker = Faker\Factory::create();

        foreach (range(1, 10) as $i) {
            DB::table('products')->insert([
                'name' => $faker->name,
                'description_short' => $faker->text,
                'image' => $faker->image(null, 100, 200, 'business')
            ]);
        }
    }

    private function seedWorkSpaceSize()
    {
        DB::table('workspace_size')->insert([
            ['size' => 'klein'],
            ['size' => 'middel'],
            ['size' => 'groot']
        ]);
    }

    private function seedWorkspaceType()
    {
        DB::table('workspace_type')->insert([
            ['name' => 'zeefdruk'],
            ['name' => 'lithografie'],
            ['name' => 'hoogdruk/diepdruk'],
            ['name' => 'extra'],
        ]);
    }

    private function seedWorkspace()
    {
        DB::table('workspaces')->insert([
            ['name' => 'Zeefdruk', 'size' => 'klein'],
            ['name' => 'Zeefdruk', 'size' => 'middel'],
            ['name' => 'Zeefdruk', 'size' => 'middel'],
            ['name' => 'Zeefdruk', 'size' => 'middel'],
            ['name' => 'Zeefdruk', 'size' => 'groot'],
            ['name' => 'Lithografie', 'size' => null],
            ['name' => 'Hoog/diepdruk', 'size' => 'middel'],
            ['name' => 'Hoog/diepdruk', 'size' => 'groot'],
        ]);
    }

    private function seedReservations() {

        $dateLater = date('Y-m-d H:i:s');


        for ($i = 1; $i < 10; $i++) {
            $random = random_int(1, 10);

            $dateLater = date('Y-m-d H:i:s', strtotime('+' . $random . ' day', strtotime($dateLater)));
            DB::table('reservation')->insert([
                ['date_in' => $dateLater,
                    'user_id' => 2]
            ]);

        }
    }

    private function seedUsers() {
        $faker = Faker\Factory::create();

        for ($i = 1; $i < 10; $i++) {
            DB::table('users')->insert([
                ['name' => $faker->name,
                    'email' => $faker->email,
                    'isfriend' => 0,
                    'password' => $faker->password(6, 12),
                    'role_id' => 3
                ]
            ]);
        }
    }
}
