<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::firstOrCreate([
            'name' => 'User2',
            'email' => 'User2@User2.com'
        ]);

        $user = User::firstOrCreate([
            'name' => 'User3',
            'email' => 'User3@User2.com'
        ]);

        $user = User::firstOrCreate([
            'name' => 'User4',
            'email' => 'User4@User2.com'
        ]);

        $user = User::firstOrCreate([
            'name' => 'User5',
            'email' => 'User5@User2.com'
        ]);

    }
}
