@extends ('layouts.app')


@section('title')
    <title>Update Informasi Mutasi</title>
@endsection

@section('content')

  <div class="container-fluid">

    <div class="row">
      <h1 class="header-profil">Update Informasi Mutasi</h1>


      <div class="profil-panel">
        <div class="profil-panel-head">
          <h2 class="title-panel-head">Informasi Mutasi</h2>
        </div>
        <div class="profil-panel-body">

          <p class="cita">Formulir pengisian data mutasi, isi sesuai dengan data yang dibutuhkan.
            Data yang di masukkan akan menjadi arsip bagi PT Taspen.</p>

            <hr>
{!! Form::model($pengajuan_mutasi, ['url' => route('pengajuan_mutasis.update', $pengajuan_mutasi->user_id),
'method'=>'put','files'=>'true', 'class'=>'form-horizontal']) !!}
@include('pengajuan_mutasis._form')
{!! Form::close() !!}
</div>
</div>
</div>
</div>
@endsection