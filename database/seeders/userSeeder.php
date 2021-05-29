<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
            'name'=>' bruce',
            'email'=>'bruce@gmail.com',
            'password'=>Hash::make('12345bruce')
        ],
            [
            'name'=>' peter',
            'email'=>'peter@gmail.com',
            'password'=>Hash::make('12345peter')
        ],
            [
            'name'=>' stark',
            'email'=>'stark@gmail.com',
            'password'=>Hash::make('12345stark')
        ],
            [
            'name'=>' tony',
            'email'=>'tony@gmail.com',
            'password'=>Hash::make('12345tony')
        ],
            [
            'name'=>' thor',
            'email'=>'thor@gmail.com',
            'password'=>Hash::make('12345thor')
        ],
        ]);
    }
}
