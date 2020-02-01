<?php

use Illuminate\Database\Seeder;

class InitialUserAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'user@gmail.com',
            'password' => Hash::make('12qwaszx'),
        ]);
    }
}
