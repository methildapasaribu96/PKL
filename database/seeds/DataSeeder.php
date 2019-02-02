<?php

use Illuminate\Database\Seeder;
use App\Pensiunan;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *       
     * @return void
     */
    public function run()
    {
         $data1 = Pensiunan::create(['nip'=>'24010314140073', 'nama_pensiunan'=>'Methilda Pasaribu',  'tgl_kenaikan_pangkat'=>'2013-06-08', 'tgl_kenaikan_gaji'=>'2017-06-08', 'jenis_kelamin'=>'Laki-Laki', 'agama'=>'Islam', 'tmpt_lahir'=>'Semarang', 'tgl_lahir'=>'1995-06-09', 'email'=>'mantap@gmail.com', 'alamat'=>'Tembalang, Semarang', 'no_telp'=>'081328', 'golongan_darah'=>'A', 'status_pernikahan'=>'Nikah', 'status_kepegawaian'=>'PNS']);
	      $data2 = Pensiunan::create(['nip'=>'24010314120020', 'nama_pensiunan'=>'Prio Sidik',  'tgl_kenaikan_pangkat'=>'2013-06-08', 'tgl_kenaikan_gaji'=>'2017-08-08', 'jenis_kelamin'=>'Laki-Laki', 'agama'=>'Islam', 'tmpt_lahir'=>'Palembang', 'tgl_lahir'=>'1995-09-09', 'email'=>'prio@gmail.com', 'alamat'=>'Tembalang, Semarang', 'no_telp'=>'54321', 'golongan_darah'=>'B', 'status_pernikahan'=>'Nikah', 'status_kepegawaian'=>'PTT']);
  	      $data3 = Pensiunan::create(['nip'=>'24010313120080', 'nama_pensiunan'=>'Rio M', 'tgl_kenaikan_pangkat'=>'2013-06-08', 'tgl_kenaikan_gaji'=>'2017-08-08', 'jenis_kelamin'=>'Laki-Laki', 'agama'=>'Islam', 'tmpt_lahir'=>'Palembang', 'tgl_lahir'=>'1995-09-09', 'email'=>'prio@gmail.com', 'alamat'=>'Tembalang, Semarang', 'no_telp'=>'54321', 'golongan_darah'=>'B', 'status_pernikahan'=>'Nikah', 'status_kepegawaian'=>'PNS']);
  	      $data4 = Pensiunan::create(['nip'=>'24010314120040', 'nama_pensiunan'=>'Haron S', 'tgl_kenaikan_pangkat'=>'2013-06-08', 'tgl_kenaikan_gaji'=>'2017-08-08', 'jenis_kelamin'=>'Laki-Laki', 'agama'=>'Islam', 'tmpt_lahir'=>'Palembang', 'tgl_lahir'=>'1995-09-09', 'email'=>'prio@gmail.com', 'alamat'=>'Tembalang, Semarang', 'no_telp'=>'54321', 'golongan_darah'=>'A', 'status_pernikahan'=>'Nikah', 'status_kepegawaian'=>'PNS']);
  	      $data5 = Pensiunan::create(['nip'=>'24010316120310', 'nama_pensiunan'=>'Yuda Gesta','tgl_kenaikan_pangkat'=>'2013-06-08', 'tgl_kenaikan_gaji'=>'2017-08-08', 'jenis_kelamin'=>'Laki-Laki', 'agama'=>'Islam', 'tmpt_lahir'=>'Palembang', 'tgl_lahir'=>'1995-09-09', 'email'=>'prio@gmail.com', 'alamat'=>'Tembalang, Semarang', 'no_telp'=>'54321', 'golongan_darah'=>'B', 'status_pernikahan'=>'Nikah', 'status_kepegawaian'=>'PNS']);
  	      $data6 = Pensiunan::create(['nip'=>'24010311120110', 'nama_pensiunan'=>'Bagus', 'tgl_kenaikan_pangkat'=>'2013-06-08', 'tgl_kenaikan_gaji'=>'2017-08-08', 'jenis_kelamin'=>'Laki-Laki', 'agama'=>'Islam', 'tmpt_lahir'=>'Palembang', 'tgl_lahir'=>'1995-09-09', 'email'=>'prio@gmail.com', 'alamat'=>'Tembalang, Semarang', 'no_telp'=>'54321', 'golongan_darah'=>'AB', 'status_pernikahan'=>'Nikah', 'status_kepegawaian'=>'PNS']);
  	      $data7 = Pensiunan::create(['nip'=>'24010315120023', 'nama_pensiunan'=>'Rian J', 'tgl_kenaikan_pangkat'=>'2013-06-08', 'tgl_kenaikan_gaji'=>'2017-08-08', 'jenis_kelamin'=>'Laki-Laki', 'agama'=>'Islam', 'tmpt_lahir'=>'Palembang', 'tgl_lahir'=>'1995-09-09', 'email'=>'prio@gmail.com', 'alamat'=>'Tembalang, Semarang', 'no_telp'=>'54321', 'golongan_darah'=>'O', 'status_pernikahan'=>'Nikah', 'status_kepegawaian'=>'PNS']);
    }
}
