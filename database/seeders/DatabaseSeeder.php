<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@laravelia.com',
                'is_admin'=>1,
               'password'=> bcrypt('secret'),
            ],
            [
               'name'=>'User',
               'email'=>'user@laravelia.com',
                'is_admin'=>0,
               'password'=> bcrypt('secret'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
