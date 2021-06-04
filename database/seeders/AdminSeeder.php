<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('admins')->insert([
            [
                'name' => 'Abdul Mozid',
                'email' => 'mozid.it@gmail.com',
                'password' => Hash::make('123456'),
                'is_active' => 1
            ],
            [
                'name' => 'Samira Bithi',
                'email' => 'samirabithi0648@gmail.com',
                'password' => Hash::make('123456'),
                'is_active' => 1
            ]
        ]);
    }

}
