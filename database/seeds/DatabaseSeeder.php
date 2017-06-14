<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Teerapong",
            'lastname' => "Boonmak",
            'position' => "Front-end developer",
            'email' => "teerapong",
            'password' => bcrypt('123456'),
        ]);

         DB::table('users')->insert([
            'name' => "Jirawat",
            'lastname' => "Jern",
            'position' => "Senior developer",
            'email' => "j@j.j",
            'password' => bcrypt('123456'),
        ]);
         DB::table('users')->insert([
            'name' => "Admin",
            'lastname' => "Admin",
            'position' => "Admin",
            'email' => "Admin@tecmovecorp.com",
            'password' => bcrypt('123456'),
        ]);
    }
}
