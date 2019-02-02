<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function homepage()
    {
    	return view('guest.homepage');
    }
    public function informasimutasi()
    {
    	return view('pengajuan_mutasis.informasi_mutasi');
    }

        public function visimisi()
    {
    	return view('guest.visimisi');
    }
        public function strukturorganisai()
    {
    	return view('guest.strukturorganisai');
    }
        public function informasi_pensiunan()
    {
    	return view('guest.informasi_pensiunan');
    }
        public function hubkami()
    {
    	return view('guest.hubungikami');
    }

        public function kelola_data_pensiunan()
    {
    	return view('guest.kelola_data_pensiunan');
    }

}
