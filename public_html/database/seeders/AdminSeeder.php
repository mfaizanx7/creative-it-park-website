<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('password');
        $adminRecords = [
        [
            'name' =>'Admin',
            'email' => 'admin@example.com',
            'password' =>$password,
        ],
    ];
    Admin::insert($adminRecords);
    }
}
