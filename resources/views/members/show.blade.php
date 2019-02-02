@extends('layouts.app')
	@section('content')
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="{{ url('/home') }}">Dashboard</a></li>
						<li><a href="{{ url('/admin/members') }}">Member</a></li>
						<li class="active">Detail {{ $member->title }}</li>
						</ul>
							<div class="panel panel-default">
							<div class="panel-heading">
								<h2 class="panel-title"> Detail{{ $member->title }}</h2>
							</div>
							<div class="panel-body">
							<div class="col-md-3">
								{!! Html::image(asset('img/'.$member->pensiunan->foto),null,['class'=>'img-responsive img-round']) !!}
							</div>
							<div class="col-md-9">
							<table class="table table-condensed table-striped">
								<tr>
									<td>Nip</td>
									<td>:</td>
									<td>{{ $member->pensiunan_id }}</td>
								</tr>
								<tr>
									<td>Nama member</td>
									<td>:</td>
									<td>{{ $member->pensiunan->nama_pensiunan}}</td>
								</tr>
								
							<tr>
								<td>Email</td>
								<td>:</td>
								<td>{{ $member->pensiunan->email}}</td>
								</tr>
								
							</table>
							</div>
											
				</div>
			</div>
		</div>
	</div>
</div>
@endsection