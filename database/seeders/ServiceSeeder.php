<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->delete();
        $serv = new Service();
        $serv->serve_name = ['en'=>'warehousing','ar'=>'نقل برى'];
        $serv->image = 'default.jpg';
        $serv->desc = 'يوجد لدينا خدمات متعدده';
        $serv->status = 1;
        $serv->save();
        $serv = new Service();
        $serv->serve_name = ['en'=>'Air Freight','ar'=>'نقل جوى'];
        $serv->image = 'default.jpg';
        $serv->desc = 'we have multi services';
        $serv->status = 1;
        $serv->save();
        $serv = new Service();
        $serv->serve_name = ['en'=>'Ocean Freight','ar'=>'نقل بحرى'];
        $serv->image = 'default.jpg';
        $serv->desc = 'we make best offers for you';
        $serv->status = 1;
        $serv->save();
        $serv = new Service();
        $serv->serve_name = ['en'=>'warehousing','ar'=>'نقل برى'];
        $serv->image = 'default.jpg';
        $serv->desc = 'يوجد لدينا خدمات متعدده';
        $serv->status = 1;
        $serv->save();
        $serv = new Service();
        $serv->serve_name = ['en'=>'Air Freight','ar'=>'نقل جوى'];
        $serv->image = 'default.jpg';
        $serv->desc = 'we have multi services';
        $serv->status = 1;
        $serv->save();
        $serv = new Service();
        $serv->serve_name = ['en'=>'Ocean Freight','ar'=>'نقل بحرى'];
        $serv->image = 'default.jpg';
        $serv->desc = 'we make best offers for you';
        $serv->status = 1;
        $serv->save();
        // $services = [
        //     ['en'=> 'xxxxxxxxxxx', 'ar'=> 'نقل برى','default.jpg','desc1',1],
        //     ['en'=> 'ccccccccccccc', 'ar'=> 'نقل جوى','default.jpg','desc1',1],
        //     ['en'=> 'vvvvvvvvvv', 'ar'=> 'نقل بحرى','default.jpg','desc1',1],
        // ];

        // foreach ($services as $service) {
        //     Service::create(['serve_name' => $service]);
        // }

        // DB::table('services')->insert([
        //     'serve_name' =>['en'=> 'xxxxxxxxxxx', 'ar'=> 'نقل برى'],
        //     'image' => 'default.jpg',
        //     'desc' => 'يوجد لدينا خدمات متعدده',
        //     'status' => 1,
        // ]);
    }
}
