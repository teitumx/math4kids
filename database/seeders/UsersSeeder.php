<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'user_id' => 1,
            'first_name' => 'Петя',
            'last_name' => 'Петров',
            'login' => 'petya',
            'password' => '$2y$10$BWt/2g30P3AyAzQ7Xm2l7OI596wvE1mtfTkZC9q/TbhoE42sFY3m2', //123456
            'birthday' => '2012-01-01 00:00:00',
            'avatar' => '',
            'remember_token' => ''
        ]);

        User::create([
            'user_id' => 2,
            'first_name' => 'Вася',
            'last_name' => 'Пупкин',
            'login' => 'vasya',
            'password' => '$2y$10$BWt/2g30P3AyAzQ7Xm2l7OI596wvE1mtfTkZC9q/TbhoE42sFY3m2',
            'birthday' => '2013-01-01 00:00:00',
            'avatar' => '',
            'remember_token' => ''

        ]);

        User::create([
            'user_id' => 3,
            'first_name' => 'Коля',
            'last_name' => 'Николаев',
            'login' => 'kolya',
            'password' => '$2y$10$BWt/2g30P3AyAzQ7Xm2l7OI596wvE1mtfTkZC9q/TbhoE42sFY3m2',
            'birthday' => '2014-01-01 00:00:00',
            'avatar' => '',
            'remember_token' => ''

        ]);
    }
}
