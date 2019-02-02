<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Pensiunan;
use Session;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StorePensiunanRequest;
use App\Http\Requests\UpdatePensiunanRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;    

class PensiunansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $pensiunans = Pensiunan::select(['id','nama_pensiunan','nip']);
            return Datatables::of($pensiunans)
                ->addColumn('action', function($pensiunan){
                    return view('datatable._action', [
                        'model'           => $pensiunan,
                        'form_url'        => route('pensiunans.destroy', $pensiunan->id),
                        'edit_url'        => route('pensiunans.edit', $pensiunan->id),
                        'show_url'        => route('pensiunans.show', $pensiunan->id),
                        'confirm_message' => 'Yakin mau menghapus ' . $pensiunan->nama_pensiunan . '?'
                    ]);
                })->make(true);
        }

        $html = $htmlBuilder
            ->addColumn(['data' => 'nip', 'name'=>'nip', 'title'=>'NIP'])
            ->addColumn(['data' => 'nama_pensiunan', 'name'=>'nama_pensiunan', 'title'=>'Nama'])
            ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>false]);

        return view('pensiunans.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pensiunans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePensiunanRequest $request)
    {
        $pensiunan = Pensiunan::create($request->except('foto'));
        // isi field foto jika ada foto yang diupload
        if ($request->hasFile('foto')) {
        // Mengambil file yang diupload
        $uploaded_foto = $request->file('foto');
        // mengambil extension file
        $extension = $uploaded_foto->getClientOriginalExtension();
        // membuat nama file random berikut extension
        $filename = md5(time()) . '.' . $extension;
        // menyimpan foto ke folder public/img
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
        $uploaded_foto->move($destinationPath, $filename);
        // mengisi field foto di pensiunan dengan filename yang baru dibuat
        $pensiunan->foto = $filename;
        $pensiunan->save();
        }
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan $pensiunan->nama_pensiunan"
        ]);
        return redirect()->route('pensiunans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pensiunan = Pensiunan::find($id);
        return view('pensiunans.show')->with(compact('pensiunan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pensiunan = Pensiunan::find($id);
        return view('pensiunans.edit')->with(compact('pensiunan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $pensiunan = Pensiunan::find($id);
        $foto = $pensiunan->foto;
        if (!$pensiunan->delete()) return redirect()->back();

        //handle hapus buku via ajax
        if ($request->ajax()) return response()->json(['id'=>$id]);

        //hapus foto lama, jika ada
        if ($foto){
            $old_foto = $pensiunan->foto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . $pensiunan->foto;

            try {
                File::delete($filepath);
            } catch(FileNotFoundException $e){
                //File sudah dihapus/tidak ada
            }
        }



        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Buku berhasil dihapus"
            ]);

        return redirect()->route('pensiunans.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePensiunanRequest $request, $id)
    {
        $pensiunan = Pensiunan::find($id);
        if(!$pensiunan->update($request->all())) return redirect()->back();
        if ($request->hasFile('foto')) {
        // menambil foto yang diupload berikut ekstensinya
        $filename = null;
        $uploaded_foto = $request->file('foto');
        $extension = $uploaded_foto->getClientOriginalExtension();
        // membuat nama file random dengan extension
        $filename = md5(time()) . '.' . $extension;
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
        // memindahkan file ke folder public/img
        $uploaded_foto->move($destinationPath, $filename);
        // hapus foto lama, jika ada
        if ($pensiunan->foto) {
        $old_foto = $pensiunan->foto;
        $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
        . DIRECTORY_SEPARATOR . $pensiunan->foto;
        try {
        File::delete($filepath);
        } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
        }
        }
        // ganti field foto dengan foto yang baru
        $pensiunan->foto = $filename;
        $pensiunan->save();
        }

        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan $pensiunan->nama_pensiunan"
        ]);
        return redirect()->route('pensiunans.index');
        }
}
