<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();
        $customer->id   = 1;
        $customer->name = "customer 1";
        $customer->age = 20;
        $customer->phone = 0353377201;
        $customer->dob  = "2018-09-26";
        $customer->email  = "customer1@codegym.vn";
        $customer->city_id  = 1;
        $customer->image = 'images/y52E6lenfgi8PWwcGixWivyPuV9c2yMyiu9Qn5Sc.png';
        $customer->save();

        $customer = new Customer();
        $customer->id   = 2;
        $customer->name = "customer 2";
        $customer->age = 20;
        $customer->phone = 0353377201;
        $customer->dob  = "2018-09-26";
        $customer->email  = "customer1@codegym.vn";
        $customer->city_id  = 2;
        $customer->image = 'images/y52E6lenfgi8PWwcGixWivyPuV9c2yMyiu9Qn5Sc.png';
        $customer->save();

        $customer = new Customer();
        $customer->id   = 3;
        $customer->name = "customer 3";
        $customer->age = 20;
        $customer->phone = 0353377201;
        $customer->dob  = "2018-09-26";
        $customer->email  = "customer1@codegym.vn";
        $customer->city_id  = 3;
        $customer->image = 'images/y52E6lenfgi8PWwcGixWivyPuV9c2yMyiu9Qn5Sc.png';
        $customer->save();

        $customer = new Customer();
        $customer->id   = 4;
        $customer->name = "customer 1";
        $customer->age = 20;
        $customer->phone = 0353377201;
        $customer->dob  = "2018-09-26";
        $customer->email  = "customer1@codegym.vn";
        $customer->city_id  = 4;
        $customer->image = 'images/y52E6lenfgi8PWwcGixWivyPuV9c2yMyiu9Qn5Sc.png';
        $customer->save();
    }
}
