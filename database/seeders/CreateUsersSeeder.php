<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@reeland.co.ke',
                'is_admin'=>'1',
               'password'=> bcrypt('password'),
            ],
            [
               'name'=>'User',
               'email'=>'admin.user@reeland.co.ke',
                'is_admin'=>'0',
               'password'=> bcrypt('secret'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
