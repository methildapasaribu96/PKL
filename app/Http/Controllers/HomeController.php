<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laratrust\LaratrustFacade as Laratrust;
use Illuminate\Support\Facades\Auth;
use App\Mutasi;
use App\Bulan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
      return view('index');
    }

    public function index()
    {
        if (Laratrust::hasRole('admin')) return $this->adminDashboard();
        if (Laratrust::hasRole('member')) return $this->memberDashboard();
        return view('home');
    }

    protected function adminDashboard()
    {
        $bulans = [];
        $mutasis   = [];

        foreach (Bulan::all() as $bulan){
            array_push($bulans, $bulan->name);
            array_push($mutasis, $bulan->mutasi->count());
        }

        return view('dashboard.admin', compact('mutasis','bulans'));
    }

    protected function memberDashboard()
    {
        return view('home');
    }
}
