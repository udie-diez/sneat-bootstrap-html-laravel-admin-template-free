<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    \App\Models\User::factory(20)->create();
    \App\Models\User::factory(28)->unverified()->create(); // unverified email

    \App\Models\User::factory()->create([
      'name' => 'Test User',
      'email' => 'test@example.com',
      'password' => Hash::make('password'),
      'remember_token' => Str::random(10),
    ]);

    \App\Models\User::factory()->create([
      'name' => 'Admin',
      'email' => 'admin@example.com',
      'email_verified_at' => now(),
      'password' => Hash::make('password'),
      'remember_token' => Str::random(10),
    ]);
  }
}
