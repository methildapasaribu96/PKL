@extends('layouts.app')

@section('title')
    <title>pensiunan</title>
@endsection

@section('content')

    <div class="container ledgar">
      <div class="row text-center">
        <h1 class="title-alumni-tracers">Pensiunan</h1>
        <form class="alumni-control" action="/search" method="get">
          <input class="form-search-alumni" type="text" name="q" value="">
          <button class="btn-alumni" type="submit" name="button"><i class="fa fa-search fa-margin"></i>Cari pensiunan</button>
        </form>
        <p class="detail-tracer">Fitur yang dapat digunakan untuk mencari para mahasiswa yang telah terdaftar sebagai pensiunan Universitas Diponegoro. Pencarian pensiunan ini bertujuan untuk mempermudah mahasiswa mencari data pensiunan Universitas Diponegoro</p>
      </div>
    </div>

    <div class="container">


        <div class="row">
          <div class="panel panel-default">
          <div class="panel-heading">
          <h4 class="text-center">Hasil Pencarian pensiunan</h4>
          </div>
          <div class="panel-content panelos">

            @foreach ($pensiunan as $pensiunan)
              <div >
            @include('pencarian.form-hasil-pencarian', ['pensiunan' => $pensiunan])
              </div>
            @endforeach

     <div class="col-md-12 text-center">
               @if (isset($pensiunan))
           @endif

    </div>
  
            </div>
              </div>
        </div>
            </div>
                
    
@endsection


