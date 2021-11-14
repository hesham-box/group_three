<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();

        Admin::create([
<<<<<<< HEAD
            'name' =>'wolf','email'=>'ahmedragabyasin2020@gmail.com','password' =>bcrypt('258258258'),
=======
            'name'     =>'wolf',
            'email'    =>'ahmedragabyasin2020@gmail.com',
            'password' =>bcrypt('258258258'),
            // 'status'=>'active',
>>>>>>> b62a21b16aaf5d8f65fdac3be44aa0bfab69fac0
            // 'admin'    =>'1',
        ]);

        DB::table('users')->delete();
        // User::create([
            DB::table('users')->insert([
            [
            'name'     =>'ahmed',
            'email'    =>'ahmed@gmail.com',
<<<<<<< HEAD
            'password' =>bcrypt('258258258')
            ],
            [
                'name'     =>'hesham',
                'email'    =>'hesham@gmail.com',
                'password' =>bcrypt('123456')
            ]
=======
            'password' =>bcrypt('258258258'),
            'status'=>'active',
            'phone'=>'01021493036',
            'address'=>'Egypt',
>>>>>>> b62a21b16aaf5d8f65fdac3be44aa0bfab69fac0
            // 'admin'    =>'0',
        ]);
    }
}
