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
        // truncate existing records to start from scratch.
        User::truncate();

        factory(User::class,5)->create();
    }
}
