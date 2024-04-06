<?php

namespace Database\Seeders;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create super-admin
        $user = User::factory()->create([
            'email' => 'super-admin@hofnaehe.de',
            'password' => Hash::make('super-admin'),
        ]);
        $user->assignRole('Super Admin');

        // create admin
        $user = User::factory()->create([
            'email' => 'admin@hofnaehe.de',
            'password' => Hash::make('admin'),
        ]);
        $user->assignRole('Admin');

        // create owner
        $user = User::factory()->create([
            'email' => 'owner@hofnaehe.de',
            'password' => Hash::make('owner'),
        ]);
        $user->assignRole('Owner');
    }
}
