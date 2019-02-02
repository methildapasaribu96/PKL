<div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
  {!! Form::label('nip', 'NIP', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
        {!! Form::number('nip', null, ['class'=>'form-control']) !!}
        {!! $errors->first('nip', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('nama_pensiunan') ? ' has-error' : '' }}">
  {!! Form::label('nama_pensiunan', 'Nama Pensiunan', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
        {!! Form::text('nama_pensiunan', null, ['class'=>'form-control']) !!}
        {!! $errors->first('nama_pensiunan', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('tmpt_lahir') ? ' has-error' : '' }}">
  {!! Form::label('tmpt_lahir', 'Tempat Lahir', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
        {!! Form::text('tmpt_lahir', null, ['class'=>'form-control']) !!}
        {!! $errors->first('tmpt_lahir', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('tgl_lahir') ? ' has-error' : '' }}">
  {!! Form::label('tgl_lahir', 'Tanggal Lahir', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
        {!! Form::date('tgl_lahir', null, ['class'=>'form-control']) !!}
        {!! $errors->first('tgl_lahir', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group{{ $errors->has('agama') ? ' has-error' : '' }}">
  {!! Form::label('agama', 'Agama', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
        {!! Form::select('agama',[
        'Islam' => 'Islam',
        'Protestan' => 'Protestan',
        'Katolik' => 'Katolik',
        'Hindu' => 'Hindu',
        'Budha' => 'Budha',
        'Kong Hu Chu' => 'Kong Hu Chu'
        ] ,null,['class'=>'js-selectize']) !!}
        {!! $errors->first('agama', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
  {!! Form::label('jenis_kelamin', 'Jenis Kelamin', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
        {!! Form::select('jenis_kelamin', [
        'Laki-Laki' => 'Laki-Laki',
        'Perempuan' => 'Perempuan'
        ] 
        ,null,['class'=>'js-selectize']) !!}
        {!! $errors->first('jenis_kelamin', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('golongan_darah') ? ' has-error' : '' }}">
  {!! Form::label('golongan_darah', 'Golongan Darah', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
        {!! Form::select('golongan_darah', [
        'A' => 'A',
        'B' => 'B',
        'AB' => 'AB',
        'O' => 'O'
        ] 
        ,null,['class'=>'js-selectize']) !!}
        {!! $errors->first('golongan_darah', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('status_pernikahan') ? ' has-error' : '' }}">
  {!! Form::label('status_pernikahan', 'Status Pernikahan', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
        {!! Form::select('status_pernikahan',[
        'Nikah' => 'Nikah',
        'Belum Nikah' => 'Belum Nikah',
        'Cerai' => 'Cerai'
        ] ,null,
        ['class'=>'js-selectize']) !!}
        {!! $errors->first('status_pernikahan', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('status_kepegawaian') ? ' has-error' : '' }}">
  {!! Form::label('status_kepegawaian', 'Status Kepegawaian', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
        {!! Form::select('status_kepegawaian', ['PNS' => 'PNS','PTT' => 'PTT'] , null,['class'=>'js-selectize']) !!}
        {!! $errors->first('status_kepegawaian', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('tgl_kenaikan_pangkat') ? ' has-error' : '' }}">
  {!! Form::label('tgl_kenaikan_pangkat', 'Tanggal Kenaikan Pangkat', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
        {!! Form::date('tgl_kenaikan_pangkat', null, ['class'=>'form-control']) !!}
        {!! $errors->first('tgl_kenaikan_pangkat', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('tgl_kenaikan_gaji') ? ' has-error' : '' }}">
  {!! Form::label('tgl_kenaikan_gaji', 'Tanggal Kenaikan Gaji', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
        {!! Form::date('tgl_kenaikan_gaji', null, ['class'=>'form-control']) !!}
        {!! $errors->first('tgl_kenaikan_gaji', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
  {!! Form::label('alamat', 'Alamat', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
        {!! Form::textarea('alamat', null, ['class'=>'form-control']) !!}
        {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('no_telp') ? ' has-error' : '' }}">
  {!! Form::label('no_telp', 'No Telp', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
        {!! Form::number('no_telp', null, ['class'=>'form-control']) !!}
        {!! $errors->first('no_telp', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
  {!! Form::label('email', 'Email', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
        {!! Form::email('email', null, ['class'=>'form-control']) !!}
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('foto') ? ' has-error' : '' }}">
  {!! Form::label('foto', 'foto', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
        {!! Form::File('foto') !!}
        @if (isset($pensiunan)&& $pensiunan->foto)
        <p>
            {!! Html::image(asset('img/'.$pensiunan->foto), null, ['class'=> 'img-rounded img-responsive']) !!}
        </p>
        @endif
        {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 col-md-offset-2">
        {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
    </div>
</div>