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
            'role'=>1,
            'email' => "non@non.com",
            'password' => bcrypt('123456'),
        ]);

         DB::table('users')->insert([
            'name' => "Jirawat",
            'lastname' => "Wannawang",
            'position' => "Senior Software developer",
            'role'=>2,
            'email' => "Jirawat@tecmovecorp.com",
            'password' => bcrypt('123456'),
        ]);

         DB::table('users')->insert([
            'name' => "Metha",
            'lastname' => "Yeanyoungyuen",
            'position' => "Senior Software developer",
            'role'=>2,
            'email' => "Metha@tecmovecorp.com",
            'password' => bcrypt('123456'),
        ]);

         DB::table('users')->insert([
            'name' => "Akarapong",
            'lastname' => "Pudjai",
            'position' => "Senior Software developer",
            'role'=>2,
            'email' => "Akarapong@tecmovecorp.com",
            'password' => bcrypt('123456'),
        ]);
         DB::table('users')->insert([
            'name' => "Admin",
            'lastname' => "Admin",
            'position' => "Admin",
            'email' => "Admin@tecmovecorp.com",
            'role'=>3,
            'password' => bcrypt('123456'),
        ]);
    }
}
