<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mutasi;
use Session;

class KomentarController extends Controller
{
   public function edit($id){
   	$mutasi=Mutasi::find($id);

   	return view('komentar.edit')->with(compact('mutasi'));
   }

public function update(Request $request, $id){

	$mutasi=Mutasi::find($id);
	$mutasi->update($request->only('komentar'));
	Session::flash("flash_notification", [
		"level"=>"success",
		"message"=>"berhasil menyimpan $mutasi->id"
		]);
	return redirect()->route('mutasis.index');
}
}

