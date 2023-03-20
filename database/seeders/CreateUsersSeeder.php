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
       $users =[
        [
        'name'=> 'moderador',
        'email'=> 'moderador@gmail.com',
        'type'=> '2',
        'password'=> ('moderador123'),


        ],
        [
            'name'=> 'professor',
            'email'=> 'professor@gmail.com',
            'type'=> '1',
            'password'=> ('professor123'),


            ],
    ];
    }
}
