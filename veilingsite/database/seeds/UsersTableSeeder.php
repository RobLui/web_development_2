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
        DB::table('users')->insert(array(
            array(
                'name' => 'Robbert',
                'email' => 'robbertluit@hotmail.com',
                'password' => bcrypt('000000'),
            ),
            array(
                'name' => 'Sam',
                'email' => 'sam.serrien@kdg.be',
                'password' => bcrypt('000000'),
            ),
        ));
    }
}
