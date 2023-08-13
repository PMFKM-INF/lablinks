<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //ADmin
            [
                'name'=>'Admin',
                'email'=>'admin@admin.com',
                'password'=>hash::make('111'),
                'role'=>'admin',

            ],
            //user
            [
                'name'=>'User',
                'email'=>'user@user.com',
                'password'=>hash::make('222'),
                'role'=>'user',

            ],
         ]);
    }
}
