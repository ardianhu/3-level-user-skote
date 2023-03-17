<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Role::create([
            'role_name' => 'dosen',
        ]);
        Role::create([
            'role_name' => 'admin',
        ]);
        User::create([
            'name' => 'dosen',
            'email' => 'dosen@garuda.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'dob' => '02/02/02',
            'role_id' => '1',
            'remember_token' => Str::random(10)
        ]);
        User::create([
            'name' => 'admin',
            'email' => 'admin@garuda.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'dob' => '02/02/02',
            'role_id' => '2',
            'remember_token' => Str::random(10)
        ]);
    }
}
