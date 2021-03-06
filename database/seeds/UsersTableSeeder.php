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
        User::firstOrCreate([
            'name' => 'admin'
        ], [
            'name' => 'admin',
            'email' => 'admin@phonebook.com',
            'password' => 123456789,
            'is_admin' => true
        ]);
    }
}
