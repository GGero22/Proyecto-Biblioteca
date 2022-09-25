<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $user = new User;
        $user->name = 'aministrador';
        $user->email = 'administrador@gmail.com';
        $user->password = 'Pepian';
        $user->role = 'admin';
        $user->save();
    }
}
