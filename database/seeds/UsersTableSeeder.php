<?php

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name'      => 'Human Donation',
            'username'      => 'humandonation',
            'email'     => 'humandonation@gmail.com',
            'perfis_id'     => 2,
            'password'  => bcrypt('human2020@'),
            'verificado'     => 1
        ]);
    }
}
