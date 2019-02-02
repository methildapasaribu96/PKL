<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Mutasi;
use App\Pensiunan;
use App\User;
use App\Http\Requests\StoreMutasiRequest;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UpdateMutasiRequest;
use PDF;

class MutasiController extends Controller
{
  
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $mutasis = Mutasi::with('user','pensiunan');
            if ($request->get('status') == 'Verifikasi') $mutasis->returned();
            if ($request->get('status') == 'Belum Diverifikasi') $mutasis->borrowed();
          return Datatables::of($mutasis)

                ->addColumn('action', function($mutasi){
                    return view('datatable.mutasi_action', [
                        'model'           => $mutasi,
                        'form_url'        => route('mutasis.destroy', $mutasi->id),
                        'show_url'        => route('mutasis.show', $mutasi->id),
                        'confirm_message' => 'Yakin mau menghapus ' . $mutasi->pensiunan_id . '?',
                     
                    ]);
                })

                ->addColumn('act', function($mutasi){
                if($mutasi->is_returned){
                    return '<a class="btn btn-xs btn-danger" href="'.route('admins.mutasi.returned', $mutasi->id).'">Batalkan</a>';
                }
                return '<a class="btn btn-xs btn-success" href="'.route('admins.mutasi.borrowed', $mutasi->id).'">Verifikasi</a>';
                })

                ->addColumn('komentar', function($mutasi){
                    return '<a class="btn btn-xs btn-danger" href="'.route('komentar.edit', $mutasi->id).'">Komentar</a>';
                })->make(true);


        }

            $html = $htmlBuilder 
            ->addColumn(['data' => 'user.pensiunan_id', 'name'=>'user.pensiunan_id', 'title'=>'Nip'])
            ->addColumn(['data' => 'status', 'name'=>'status', 'title'=>'Status'])
            ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>false])
            ->addColumn(['data' => 'act', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>false])
            ->addColumn(['data' => 'komentar', 'name'=>'action', 'title'=>'','orderable'=>false, 'searchable'=>false]);

        return view('mutasis.index')->with(compact('html'));
    }

    public function borrowed($id)
    {
        $mutasi = Mutasi::where('id',$id)->where('status', 'Belum Diverifikasi')->first();
        if ($mutasi) {
        $mutasi->status = 'Verifikasi';
        $mutasi->save();
        Session::flash("flash_notification", [
        "level" => "success",
        "message" => "Berhasil memverifikasi " . $mutasi->user->pensiunan_id
        ]);
        };
        return redirect()->route('mutasis.index');
    }

        public function returned($id)
    {
        $mutasi = Mutasi::where('id',$id)->where('status', 'Verifikasi')->first();
        if ($mutasi) {
        $mutasi->status = 'Belum Diverifikasi';
        $mutasi->save();
        Session::flash("flash_notification", [
        "level" => "success",
        "message" => "Berhasil membatalkan verifikasi " . $mutasi->pensiunan_id
        ]);
        };
        return redirect()->route('mutasis.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mutasis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMutasiRequest $request)
    {
        $mutasi = Mutasi::create($request->all());    

        Session::flash("flash_notification", [
            "level" => "success",
            "message"=>"Berhasil menyimpan $mutasi->pensiunan_id"
            ]);
        return redirect()->route('mutasis.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mutasi = Mutasi::find($id);
        return view('mutasis.show', compact('mutasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mutasi = Mutasi::find($id);
        return view('mutasis.edit')->with(compact('mutasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMutasiRequest $request, $id)
    {
        $mutasi = Mutasi::find($id);
       if(!$mutasi->update($request->all())) return redirect()->back();
        Session::flash('flash_notification', [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $mutasi->pensiunan_id"
            ]);
        return redirect()->route('mutasis.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mutasi = Mutasi::find($id);
         if (!$mutasi->delete()) return redirect()->back();

            Session::flash("flash_notification", [
                "level"=>"success",
                "message"=>"mutasi berhasil dihapus $mutasi->pensiunan_id"
            ]);
        

        return redirect()->route('mutasis.index');
    }


     public function getpdf($id)
    {   
        $ido = User::find($id);
        $ido = $ido->pensiunan_id;
        $mutasis = Mutasi::where('user_id',$id)->first();
        $pensiunan = Pensiunan::where('nip', $ido)->first();
        $pdf = \PDF::loadview('pdf.mutasis', compact('mutasis','pensiunan'))->setPaper('a4','portrait');
        return $pdf->stream();
    }

}