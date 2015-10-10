<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the UserTable seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\Comment', 25)->create();
    }
}