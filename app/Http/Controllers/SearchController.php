<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pensiunan;
class SearchController extends Controller
{
 public function index(Request $request)
    {
        $q = $request->get('q');
        $pensiunan = Pensiunan::where('nip', 'LIKE', '%'.$q.'%')->orwhere('nama_pensiunan', 'LIKE', '%'.$q.'%');
        $pensiunan = $pensiunan->paginate(12);
      
        return view('pencarian.pencarian', compact('pensiunan','q'));
    }
}
