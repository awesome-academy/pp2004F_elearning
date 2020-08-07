<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['parentId' => 1],
            ['name' => 'Home'],
            ['href' => '/'],

            ['parentId' => 1],
            ['name' => 'Account'],
            ['href' => ''],

            ['parentId' => 2],
            ['name' => 'Login'],
            ['href' => '/login'],

            ['parentId' => 2],
            ['name' => 'Register'],
            ['href' => '/register'],

            ['parentId' => 1],
            ['name' => 'Contact'],
            ['href' => '/contact'],

            ['parentId' => 1],
            ['name' => 'About'],
            ['href' => '/about'],
        ]);
    }
}
