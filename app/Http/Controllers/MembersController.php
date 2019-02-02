<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;
use App\User;
use App\Mutasi;
use App\Pensiunan;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Facades\Datatables;
use App\Http\Requests\StoreMemberRequest;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UpdateMemberRequest;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        if ($request->ajax()) {
            $members = Role::where('name', 'member')->first()->users;
          return Datatables::of($members)
                ->addColumn('action', function($member){
                    return view('datatable._action1', [
                        'model'           => $member,
                        'form_url'        => route('members.destroy', $member->id),
                        'show_url'        => route('members.show', $member->id),
                        'confirm_message' => 'Yakin mau menghapus ' . $member->pensiunan_id . '?',
                     
                    ]);
                })->make(true);
        }

            $html = $htmlBuilder 
            ->addColumn(['data' => 'pensiunan_id', 'name'=>'pensiunan_id', 'title'=>'Nip'])
            ->addColumn(['data' => 'action', 'name'=>'action', 'title'=>'', 'orderable'=>false, 'searchable'=>false]);
          

        return view('members.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pensiunan = Pensiunan::leftJoin('users','users.pensiunan_id', '=', 'pensiunans.nip')->where('pensiunan_id', '=', null)->get();
        return view('members.create')->with(compact('pensiunan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMemberRequest $request)
    {
        $password = (123456);
        $data = $request->all();
        $d = $request->all();
        $data['password'] = bcrypt($password);
        //bypass verifikasi
        $data['is_verified'] = 1;

        $member = User::create($data);
        $data1 = $member->all();
        $data1['user_id']= $member->id;
        $mutasi = Mutasi::create($data1->all());

        //set role
        $memberRole = Role::where('name', 'member')->first();
        $member->attachRole($memberRole);

        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan member dengan nip $member->pensiunan_id  " .
            " dan password <strong>" . $password . "</strong>."
            ]);
        return redirect()->route('members.index');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = user::find($id);
        return view('members.show')->with(compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = User::find($id);
        return view('members.edit')->with(compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMemberRequest $request, $id)
    {
        $member = User::find($id);
        $member->update($request->only('pensiunan_id'));
        Session::flash('flash_notification', [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $member->pensiunan_id "
            ]);
        return redirect()->route('members.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = User::find($id);
         if (!$member->delete()) return redirect()->back();

            Session::flash("flash_notification", [
                "level"=>"success",
                "message"=>"Member berhasil dihapus $member->pensiunan_id "
            ]);
        

        return redirect()->route('members.index');
    }


}
