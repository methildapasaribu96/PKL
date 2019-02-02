@extends('layouts.app')
	@section('content')
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="{{ url('/home') }}">Dashboard</a></li>
						<li><a href="{{ url('/admin/pensiunans') }}">Pensiunan</a></li>
						<li class="active">Detail {{ $pensiunan->title }}</li>
						</ul>
							<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title"> Detail{{ $pensiunan->title }}</h2>
							</div>
							<div class="panel-body">
							<div class="col-md-3">
								{!! Html::image(asset('img/'.$pensiunan->foto),null,['class'=>'img-responsive img-round']) !!}
							</div>
							<div class="col-md-9">
							<table class="table table-condensed table-striped">
								<tr>
									<td>Nip</td>
									<td>:</td>
									<td>{{ $pensiunan->nip }}</td>
								</tr>
								<tr>
									<td>Nama Pensiunan</td>
									<td>:</td>
									<td>{{ $pensiunan->nama_pensiunan }}</td>
								</tr>
								<tr>
									<td>Tempat Lahir</td>
									<td>:</td>
									<td>{{ $pensiunan->tmpt_lahir }}</td>
								</tr>
								<tr>
									<td>Tanggal Lahir</td>
									<td>:</td>
									<td>{{ $pensiunan->tgl_lahir }}</td>
								</tr>
								<tr>
									<td>Agama</td>
									<td>:</td>
									<td>{{ $pensiunan->agama }}</td>
								</tr>
								<tr>
									<td>Jenis Kelamin</td>
									<td>:</td>
									<td>{{ $pensiunan->jenis_kelamin }}</td>
								</tr>
								<tr>
									<td>Golongan Darah</td>
									<td>:</td>
									<td>{{ $pensiunan->golongan_darah }}</td>
								</tr>
								<tr>
									<td>Status Pernikahan</td>
									<td>:</td>
									<td>{{ $pensiunan->status_pernikahan }}</td>
								</tr>
								<tr>
									<td>Status Kepegawaian</td>
									<td>:</td>
									<td>{{ $pensiunan->status_kepegawaian }}</td>
								</tr>
								<tr>
									<td>Tanggal Kenaikan Pangkat</td>
									<td>:</td>
									<td>{{ $pensiunan->tgl_kenaikan_pangkat}}</td>
								</tr>
								<tr>
									<td>Tanggal Kenaikan Gaji</td>
									<td>:</td>
									<td>{{ $pensiunan->tgl_kenaikan_gaji}}</td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td>:</td>
									<td>{{ $pensiunan->alamat}}</td>
								</tr>
								<tr>
									<td>Nomor Telepon</td>
									<td>:</td>
									<td> {{ $pensiunan->no_telp}}</td>
								</tr>
								<tr>
									<td>Email</td>
									<td>:</td>
									<td>{{ $pensiunan->email}}</td>
								</tr>
								
								<th colspan="3"><a href="{{route('pensiunans.show', $pensiunan->id)}}"></a>
								</th>
							</table>
							</div>
											
				</div>
			</div>
		</div>
	</div>
</div>
@endsection