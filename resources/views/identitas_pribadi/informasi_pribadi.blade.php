@extends('layouts.app')

@section('title')
    <title>Data Pribadi</title>
@endsection

@section('content')
<div style="background-color:rgb(237, 237, 237);" class="container-fluid">
    <div class="row">
      @include('identitas_pribadi.identitas_pribadi')
      {{-- Panel informasi pribadi --}}
      <div class="profil-panel">
        <div class="profil-panel-head">
          <h2 class="title-panel-head">Informasi Data Pribadi</h2>
        </div>
        <div class="profil-panel-body">
          <div class="identitas-pribadi-box">

            <table class="info-contents">
              <tr>
                <td>Jenis Kelamin</td><td class="con">{{ Auth::user()->pensiunan->jenis_kelamin }}</td>
              </tr>
              <tr>
                <td>Agama</td><td class="con">{{ Auth::user()->pensiunan->agama }}</td>
              </tr>
              <tr>
                <td>Status Perkawinan</td><td class="con">{{ Auth::user()->pensiunan->status_pernikahan }}</td>
              </tr>
              <tr>
                <td>Tempat dan tanggal lahir</td><td class="con">{{ Auth::user()->pensiunan->tmpt_lahir }}, {{ Auth::user()->pensiunan->tgl_lahir }}</td>
              </tr>
              <tr>
                <td>Email</td><td class="con">{{ Auth::user()->pensiunan->email }}</td>
              </tr>
              <tr>
                <td>Alamat</td><td class="con">{{ Auth::user()->pensiunan->alamat }}</td>
              </tr>
              <tr>
                <td>Telepon</td><td class="con">{{ Auth::user()->pensiunan->no_telp }}</td>
              </tr>
              <tr>
                <td>Pekerjaan</td><td class="con">{{ Auth::user()->pensiunan->golongan_darah }}</td>
              </tr>
            </table>
          </div>
        </div>

      </div>

    </div>
</div>
@endsection
