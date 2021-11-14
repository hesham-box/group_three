<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;

class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'     =>'wolf',
            'email'    =>'ahmedragabyasin2020@gmail.com',
            'password' =>bcrypt('258258258'),
            // 'admin'    =>'1',
        ]);
        User::create([
            'name'     =>'ahmed',
            'email'    =>'ahmed@gmail.com',
            'password' =>bcrypt('258258258'),
            // 'admin'    =>'0',
        ]);
    }
}
