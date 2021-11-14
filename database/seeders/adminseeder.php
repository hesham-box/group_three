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
            'name'     =>'wolf',
            'email'    =>'ahmedragabyasin2020@gmail.com',
            'password' =>bcrypt('258258258'),
            // 'status'=>'active',
            // 'admin'    =>'1',
        ]);
        DB::table('users')->delete();
        User::create([
            'name'     =>'ahmed',
            'email'    =>'ahmed@gmail.com',
            'password' =>bcrypt('258258258'),
            'status'=>'active',
            'phone'=>'01021493036',
            'address'=>'Egypt',
            // 'admin'    =>'0',
        ]);
    }
}
