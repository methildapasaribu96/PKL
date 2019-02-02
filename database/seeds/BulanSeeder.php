<?php

use Illuminate\Database\Seeder;
use App\Bulan;
class BulanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data1 = Bulan::create(['name'=>'Januari']);
    	$data2 = Bulan::create(['name'=>'Februari']);
	    $data3 = Bulan::create(['name'=>'Maret']);
        $data4 = Bulan::create(['name'=>'April']);
     	$data5 = Bulan::create(['name'=>'Mei']);
        $data6 = Bulan::create(['name'=>'Juni']);
        $data7 = Bulan::create(['name'=>'Juli']);
        $data8 = Bulan::create(['name'=>'Agustus']);
        $data9 = Bulan::create(['name'=>'September']);
        $data10 = Bulan::create(['name'=>'Okteober']);
        $data11 = Bulan::create(['name'=>'November']);
        $data12 = Bulan::create(['name'=>'Desember']);
    }
}
