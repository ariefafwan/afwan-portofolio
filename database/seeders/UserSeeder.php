<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::Create([
            'name' => 'Afwan',
            // 'role_id' => '1',
            'email' => 'afwanweb@administrator.com',
            'password' => Hash::make('Belajar16'),
        ]);
    }
}
