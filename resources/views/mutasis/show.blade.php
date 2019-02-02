@extends('layouts.app')
	@section('content')
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="{{ url('/home') }}">Dashboard</a></li>
						<li><a href="{{ url('/admin/mutasis') }}">Mutasi</a></li>
						<li class="active">Detail {{ $mutasi->title }}</li>
						</ul>
							<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title"> Detail{{ $mutasi->title }}</h2>
							</div>
							<div class="panel-body">

							<div class="col-md-9">
							<table class="table table-condensed table-striped">
								<tr>
									<td>Nip</td>
									<td>:</td>
									<td>{{ $mutasi->user->pensiunan_id }}</td>
								</tr>
								<tr>
									<td>No Rekening Baru</td>
									<td>:</td>
									<td>{{ $mutasi->no_rek_baru }}</td>
								</tr>
								<tr>
									<td>Alamat Kantor Bayar Baru</td>
									<td>:</td>
									<td>{{ $mutasi->kantor_bayar_baru }}</td>
								</tr>
								<tr>
									<td>Alamat Baru</td>
									<td>:</td>
									<td>{{ $mutasi->alamat_baru }}</td>
								</tr>
								<tr>
									<td>Desa Baru</td>
									<td>:</td>
									<td>{{ $mutasi->desa_baru }}</td>
								</tr>
								<tr>
									<td>Kecamatan Baru</td>
									<td>:</td>
									<td>{{ $mutasi->kecamatan_baru }}</td>
								</tr>
								<tr>
									<td>Kabupaten Baru</td>
									<td>:</td>
									<td>{{ $mutasi->kabupaten_baru }}</td>
								</tr>
								<tr>
									<td>No Telp Baru</td>
									<td>:</td>
									<td>{{ $mutasi->no_telp_baru}}</td>
								</tr>
								<tr>
									<td>Status Mutasi</td>
									<td>:</td>
									<td>{{ $mutasi->status}}</td>
								</tr>
								<tr>
									<td>No Rekening Lama</td>
									<td>:</td>
									<td>{{ $mutasi->no_rek_lama}}</td>
								</tr>
								<tr>
									<td>Kantor Bayar Lama</td>
									<td>:</td>
									<td> {{ $mutasi->kantor_bayar_lama}}</td>
								</tr>
								<tr>
									<td>Alamat Lama</td>
									<td>:</td>
									<td>{{ $mutasi->alamat_lama }}</td>
								</tr>
								<tr>
									<td>Desa Lama</td>
									<td>:</td>
									<td>{{ $mutasi->desa_lama }}</td>
								</tr>
								<tr>
									<td>Kecamatan Lama</td>
									<td>:</td>
									<td>{{ $mutasi->kecamatan_lama }}</td>
								</tr>
								<tr>
									<td>No Telp lama</td>
									<td>:</td>
									<td>{{ $mutasi->no_telp_lama}}</td>
								</tr>
								<tr>
									<td>Bulan Mutasi</td>
									<td>:</td>
									<td>{{ $mutasi->bulan->name}}</td>
								</tr>
								 <tr>
            						<td>Buku Rekening</td>									
            						<td>:</td>
            						<td>{!! Html::image(asset('img/'.$mutasi->buku_rekening), null, ['class'=> 'img-kanvas']) !!}</td>
           						 </tr>
           						<tr>
           							<td>Sk</td>									
            						<td>:</td>
	             			<td>{!! Html::image(asset('img/'.$mutasi->sk), null, ['class'=> 'img-kanvas']) !!}</td>
	            				</tr>
	           				   <tr>
	           				   		<td>Ktp</td>									
            						<td>:</td>
	           				    	<td>{!! Html::image(asset('img/'.$mutasi->ktp), null, ['class'=> 'img-kanvas']) !!}</td>
	                            </tr>
	                             <tr>
	                             	<td>Kartu Keluarga</td>									
            						<td>:</td>
	                            	<td>{!! Html::image(asset('img/'.$mutasi->kartu_keluarga), null, ['class'=> 'img-kanvas']) !!}</td>
	                            </tr>
							</table>
							</div>
							</div>
											
				</div>
			</div>
		</div>
	</div>

@endsection