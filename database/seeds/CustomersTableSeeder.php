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
        Customer::truncate();
        factory(Customer::class,24)->create();
    }
}
