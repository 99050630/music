<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'jordan',
                'email' => 'j.b1282002@gmail.com',
                'password' => Hash::make('jb12')	
            ]
        ];
       
        foreach ($data as $key => $value) {
            User::create($value);
        }
    }
}
