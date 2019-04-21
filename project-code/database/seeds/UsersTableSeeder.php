<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'     => 'admin',
            'email'    => 'admin@jobnexusportal.com',
            'password' => bcrypt('secret'),
            'role'     => 'admin',
        ]);

        factory(\App\User::class, 20)->create();
    }
}
