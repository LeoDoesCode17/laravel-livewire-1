<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $myName = 'Leonardo Nifinluri';
        User::factory()->create([
            'name' => $myName,
            'email' => 'creator09@test.com',
            'password' => '111111',
            'username' => 'creator09'
        ]);
        User::factory(5)->create();
    }
}
