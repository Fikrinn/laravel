<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class biodataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $biodata = [
            ['id'=>1, 'nama'=>'Fikri', 'gender'=>'Laki-laki', 'address' =>'Sukamenak', 'religion' =>'Islam', 'age' =>17, 'hobby' =>'Main'],
            ['id'=>2, 'nama'=>'Ikhsan', 'gender'=>'Laki-laki', 'address' =>'Rancamanyar', 'religion' =>'Islam', 'age' =>17, 'hobby' =>'Main'],
            ['id'=>3, 'nama'=>'Firman', 'gender'=>'Laki-laki', 'address' =>'Cilisung', 'religion' =>'Islam', 'age' =>17, 'hobby' =>'Main'],
            ['id'=>4, 'nama'=>'Genta', 'gender'=>'Laki-laki', 'address' =>'Pasawahan', 'religion' =>'Islam', 'age' =>17, 'hobby' =>'Main'],
            ['id'=>5, 'nama'=>'Altaf', 'gender'=>'Laki-laki', 'address' =>'Bandunf', 'religion' =>'Islam', 'age' =>17, 'hobby' =>'Main'],
            ];
            DB::table('biodata')->insert($biodata);
    }
}
