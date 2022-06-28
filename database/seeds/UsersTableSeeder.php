<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1
    	User::create([
    		'name' => 'Luis Azalde',
	        'email' => 'luis.azalde18@gmail.com',
	        'password' => bcrypt('123'),
	        'role' => 'admin'
    	]);

        // 2
        User::create([
            'name' => 'Ronald Tapia',
            'email' => 'ronald@gmail.com',
            'password' => bcrypt('123'),
            'role' => 'patient'
        ]);

        // 3
        User::create([
            'name' => 'Elmer Castro',
            'email' => 'elmer_doctor@gmail.com',
            'password' => bcrypt('123'),
            'role' => 'doctor'
        ]);

        factory(User::class, 50)->states('patient')->create();
    }
}
