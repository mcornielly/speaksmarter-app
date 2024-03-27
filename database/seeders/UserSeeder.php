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
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@speaksmarter.com',
            'password' => Hash::make('12345678'),
        ]);
        $admin->assignRole('admin');

        $edit = User::create([
            'name' => 'edit',
            'email' => 'edit@speaksmarter.com',
            'password' => Hash::make('12345678'),
        ]);
        $edit->assignRole('edit');
    }
}
