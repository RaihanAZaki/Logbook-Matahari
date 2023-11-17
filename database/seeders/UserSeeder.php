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
        //DATA USER
        $userData = [
            [
                'id' => '0',
                'nik' => '2020071018',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password'=> bcrypt('123456'),
            ],
            [
                'id' => '1',
                'nik' => '2020071019',
                'email' => 'magang@gmail.com',
                'role' => 'siswa',
                'password'=> bcrypt('123456'),
            ],
            [
                'id' => '2',
                'nik' => '2020071020',
                'email' => 'mentor@gmail.com',
                'role' => 'mentor',
                'password'=> bcrypt('123456'),
            ],
        ];

        foreach($userData as $key => $val) {
            User::create($val);
        }
    }
}
