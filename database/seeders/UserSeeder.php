<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Usert;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $userArray = array(
            [
                'name' => 'Superadmin',
                'email' => 'superadmin@gmail.com',
                'phone' => '081315656535',
                'password' => Hash::make("admin@123"),
                'role'  => 'superadmin'
            ],
            [
                'name' => 'Fahmi Ardiyanto',
                'email' => 'fahmiardiyannto@yahoo.com',
                'phone' => '081315656535',
                'password' => Hash::make("customer@123"),
                'role'  => 'customer'
            ]
        );

        foreach($userArray as $user) { User::create($user); } 
    }
}
