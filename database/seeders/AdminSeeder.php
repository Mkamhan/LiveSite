<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'=>'Admin',
            'username'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>Hash::make('12345'),
            'picture'=>''


        ]);
    }
}
