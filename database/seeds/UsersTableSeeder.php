<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!$this->userExists()) {
            User::create([
                'name' => 'Admin',
                'email' => 'adam.goyke@kbdom.pl',
                'password' => bcrypt('admin'),
            ]);
        }
    }
    protected function userExists(): bool
    {
        $users = User::all();

        return (sizeof($users) > 0);
    }
}
