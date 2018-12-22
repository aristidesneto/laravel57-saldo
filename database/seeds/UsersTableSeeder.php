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
        User::create([
            'name'      => 'Aristides Neto',
            'email'     => 'aristidesbneto@gmail.com',
            'password'  => bcrypt('keila108'),
        ]);

        User::create([
            'name'      => 'Keila Costa',
            'email'     => 'keila@gmail.com',
            'password'  => bcrypt('keila108'),
        ]);
    }
}
