<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        //
        $Admin = [
            [
                'name'=>'Kevorn Callum',
                'email'=>'admin@oaps.edu',
                'password'=>bcrypt('Admin123'),
            ]
        ];

        foreach ($Admin as $key => $value) {
            # code...
            User::create($value);
        }
    }
}
