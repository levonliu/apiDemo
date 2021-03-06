<?php

use Illuminate\Database\Seeder;
use App\Entity\Customer;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate existing records to start from scratch.
        Customer::truncate();

        factory(Customer::class,24)->create();
    }
}
