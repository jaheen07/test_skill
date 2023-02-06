<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\test_user;

class test_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        test_user::insert([
            'name' => 'user_test',
            'email' => 'admin@admin.com',
            'password' => 'password',
        ]);
    }
}
