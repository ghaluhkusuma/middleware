<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=[
            [
            'name'      => 'Administrator',
            'username'  => 'admin',
            'password'  => bcrypt('123456'),
            'level'     => 1,
            'email'      => 'admin@ghaluh.com',
            ],
            [
                'name'      => 'Kasir',
                'username'  => 'kasir',
                'password'  => bcrypt('123456'),
                'level'     => 2,
                'email'      => 'kasir@ghaluh.com',
                ],
                [
                    'name'     => 'Pimpinan',
                    'username' => 'pimpinan',
                    'password' => bcrypt('123456'),
                    'level'    => 3,
                    'email'     => 'pimpinan@ghaluh.com',
                    ],
    ];
    foreach ($user as $key =>$value){
        User::create($value);
    }
    }
}
