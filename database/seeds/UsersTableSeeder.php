<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name'=>'Bianca',
            'last_name'=>'Draghici',
            'is_active'=>'1',
            'role_id'=>'1',
            'email'=>'biancaadraghici@gmail.com',
            'password'=>bcrypt('Supercool1'),

        ]);
    }
}
