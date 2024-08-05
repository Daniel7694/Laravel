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
        $user = new User();

        $user->name = 'John Doe';
        $user->email = 'john.doe@example.com';
        $user->password = bcrypt('12345678');

        $user->save();

        $user = new User();
        $user->name = 'Jane Smith';
        $user->email = 'jane.smith@example.com';
        $user->password = bcrypt('12345678');

        $user->save();

    }
}
