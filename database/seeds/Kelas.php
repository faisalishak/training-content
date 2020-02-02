<?php

use Illuminate\Database\Seeder;

class Kelas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            'nama' => 'X',
        ]);

        DB::table('kelas')->insert([
            'nama' => 'XI',
        ]);

        DB::table('kelas')->insert([
            'nama' => 'XII',
        ]);
    }
}
