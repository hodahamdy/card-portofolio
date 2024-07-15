<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name_en'=>'admin',
            'name_ar'=>'ادمن',
            'password'=>Hash::make('12345678'),
            'email'=>'admin@gmail.com',
            'role'=>'admin',
        ]);


    }
}
