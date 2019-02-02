<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mutasi;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StorePengajuan_mutasiRequest;
use App\Http\Requests\UpdatePengajuan_mutasiRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class Pengajuan_mutasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $a = Auth::user()->mutasi()->borrowed()->get();
        return view('pengajuan_mutasis.index')->with(compact('a'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('pengajuan_mutasis.informasi_mutasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePengajuan_mutasiRequest $request)
    {
        $pengajuan_mutasi = Mutasi::create($request->all());    

        Session::flash("flash_notification", [
            "level" => "success",
            "message"=>"Berhasil menyimpan data"
            ]);
        return redirect()->route('pengajuan_mutasis.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengajuan_mutasi = Mutasi::where('user_id',$id)->first();

        return view('pengajuan_mutasis.edit')->with(compact('pengajuan_mutasi'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePengajuan_mutasiRequest $request, $id)
    {
        $pengajuan_mutasi = Mutasi::where('user_id',$id)->first();
       if(!$pengajuan_mutasi->update($request->all())) return redirect()->back();
              
        if ($request->hasFile('kartu_keluarga')) {
        // menambil foto yang diupload berikut ekstensinya
        // $filename = null;
        $uploaded_kartu_keluarga = $request->file('kartu_keluarga');
                $filename = $uploaded_kartu_keluarga->getClientOriginalName();
        // $extension = $uploaded_kartu_keluarga->getClientOriginalExtension();
        // membuat nama file random dengan extension
        // $filename = md5(time()) . '.' . $extension;
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
        // memindahkan file ke folder public/img
        $uploaded_kartu_keluarga->move($destinationPath, $filename);
        // hapus kartu_keluarga lama, jika ada
        if ($pengajuan_mutasi->kartu_keluarga) {
        $old_kartu_keluarga = $pengajuan_mutasi->kartu_keluarga;
        $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
        . DIRECTORY_SEPARATOR . $pengajuan_mutasi->kartu_keluarga;
        try {
        File::delete($filepath);
        } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
        }
        }
        // ganti field kartu_keluarga dengan kartu_keluarga yang baru
        $pengajuan_mutasi->kartu_keluarga = $filename;
        $pengajuan_mutasi->save();
        }

        if ($request->hasFile('ktp')) {
        // menambil ktp yang diupload berikut ekstensinya
        // $filename = null;
        $uploaded_ktp = $request->file('ktp');
        $filename = $uploaded_ktp->getClientOriginalName();
        // $extension = $uploaded_ktp->getClientOriginalExtension();
        // membuat nama file random dengan extension
        // $filename = md5(time()) . '.' . $extension;
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
        // memindahkan file ke folder public/img
        $uploaded_ktp->move($destinationPath, $filename);
        // hapus ktp lama, jika ada
        if ($pengajuan_mutasi->ktp) {
        $old_ktp = $pengajuan_mutasi->ktp;
        $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
        . DIRECTORY_SEPARATOR . $pengajuan_mutasi->ktp;
        try {
        File::delete($filepath);
        } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
        }
        }
        // ganti field ktp dengan ktp yang baru
        $pengajuan_mutasi->ktp = $filename;
        $pengajuan_mutasi->save();
        }

        if ($request->hasFile('sk')) {
        // menambil sk yang diupload berikut ekstensinya
        // $filename = null;
        $uploaded_sk = $request->file('sk');
                $filename = $uploaded_sk->getClientOriginalName();
        // $extension = $uploaded_sk->getClientOriginalExtension();
        // membuat nama file random dengan extension
        // $filename = md5(time()) . '.' . $extension;
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
        // memindahkan file ke folder public/img
        $uploaded_sk->move($destinationPath, $filename);
        // hapus sk lama, jika ada
        if ($pengajuan_mutasi->sk) {
        $old_sk = $pengajuan_mutasi->sk;
        $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
        . DIRECTORY_SEPARATOR . $pengajuan_mutasi->sk;
        try {
        File::delete($filepath);
        } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
        }
        }
        // ganti field sk dengan sk yang baru
        $pengajuan_mutasi->sk = $filename;
        $pengajuan_mutasi->save();
        }

        
        if ($request->hasFile('buku_rekening')) {
        // menambil buku_rekening yang diupload berikut ekstensinya
        // $filename = null;
        $uploaded_buku_rekening = $request->file('buku_rekening');
                $filename = $uploaded_buku_rekening->getClientOriginalName();
        // $extension = $uploaded_buku_rekening->getClientOriginalExtension();
        // membuat nama file random dengan extension
        // $filename = md5(time()) . '.' . $extension;
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
        // memindahkan file ke folder public/img
        $uploaded_buku_rekening->move($destinationPath, $filename);
        // hapus buku_rekening lama, jika ada
        if ($pengajuan_mutasi->buku_rekening) {
        $old_buku_rekening = $pengajuan_mutasi->buku_rekening;
        $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
        . DIRECTORY_SEPARATOR . $pengajuan_mutasi->buku_rekening;
        try {
        File::delete($filepath);
        } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
        }
        }
        // ganti field buku_rekening dengan buku_rekening yang baru
        $pengajuan_mutasi->buku_rekening = $filename;
        $pengajuan_mutasi->save();
        }

        Session::flash('flash_notification', [
            "level"=>"success",
            "message"=>"Berhasil menyimpan data"
            ]);
        return redirect()->route('pengajuan_mutasis.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
