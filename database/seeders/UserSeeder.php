<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'email' => 'me@lentrix-dev.com',
                'name' => 'Benjie B. Lenteria',
                'password' => bcrypt('sf')
            ],

            [
                'email' => 'temp1@email.com',
                'name' => 'Kathleen T. Lebita',
                'password' => bcrypt('sf')
            ],
            [
                'email' => 'temp2@email.com',
                'name' => 'Jay Marc T. Sotto',
                'password' => bcrypt('sf')
            ],
            [
                'email' => 'temp3@email.com',
                'name' => 'Fernando Camacho, Jr.',
                'password' => bcrypt('sf')
            ],

        ];

        foreach($users as $user) User::create($user);
    }
}
