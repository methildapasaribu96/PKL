@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<ul class="breadcrumb">
<li><a href="{{ url('/home') }}">Dashboard</a></li>
<li><a href="{{ url('/admin/mutasis') }}">Mutasi</a></li>
<li class="active">Ubah Mutasi</li>
</ul>
<div class="panel panel-default">
<div class="panel-heading">
<h2 class="panel-title">Ubah Mutasi</h2>
</div>
<div class="panel-body">
{!! Form::model($mutasi, ['url' => route('mutasis.update', $mutasi->id),
'method'=>'put', 'class'=>'form-horizontal']) !!}
@include('mutasis._form')
{!! Form::close() !!}
</div>
</div>
</div>
</div>
</div>
@endsection