<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Ahmed Hashem',
            'email'     => 'hashem@gmail.com',
            'password'  => Hash::make('11111111'),
        ]);

        User::create([
            'name'      => 'test 1',
            'email'     => 'test1@gmail.com',
            'password'  => Hash::make('11111111'),
        ]);

        User::create([
            'name'      => 'Test 2',
            'email'     => 'test2@gmail.com',
            'password'  => Hash::make('11111111'),
        ]);
    }
}
