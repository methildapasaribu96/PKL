<div class="form-group{{ $errors->has('no_rek_baru') ? ' has-error' : '' }}">
{!! Form::label('no_rek_baru', 'No Rek Bank Baru', ['class'=>'col-md-3 control-label']) !!}
<div class="col-md-7">
{!! Form::number('no_rek_baru', null, ['class'=>'form-control']) !!}
{!! $errors->first('no_rek_baru', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group{{ $errors->has('kantor_bayar_baru') ? ' has-error' : '' }}">
{!! Form::label('kantor_bayar_baru', 'Kantor Bayar Baru', ['class'=>'col-md-3 control-label']) !!}
<div class="col-md-7">
{!! Form::text('kantor_bayar_baru', null, ['class'=>'form-control']) !!}
{!! $errors->first('kantor_bayar_baru', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group{{ $errors->has('alamat_baru') ? ' has-error' : '' }}">
{!! Form::label('alamat_baru', 'Alamat Baru', ['class'=>'col-md-3 control-label']) !!}
<div class="col-md-7">
{!! Form::text('alamat_baru', null, ['class'=>'form-control']) !!}
{!! $errors->first('alamat_baru', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group{{ $errors->has('desa_baru') ? ' has-error' : '' }}">
{!! Form::label('desa_baru', 'Kelurahan/Desa Baru', ['class'=>'col-md-3 control-label']) !!}
<div class="col-md-7">
{!! Form::text('desa_baru', null, ['class'=>'form-control']) !!}
{!! $errors->first('desa_baru', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group{{ $errors->has('kecamatan_baru') ? ' has-error' : '' }}">
{!! Form::label('kecamatan_baru', 'Kecamatan Baru', ['class'=>'col-md-3 control-label']) !!}
<div class="col-md-7">
{!! Form::text('kecamatan_baru', null, ['class'=>'form-control']) !!}
{!! $errors->first('kecamatan_baru', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group{{ $errors->has('kabupaten_baru') ? ' has-error' : '' }}">
{!! Form::label('kabupaten_baru', 'Kabupaten Baru', ['class'=>'col-md-3 control-label']) !!}
<div class="col-md-7">
{!! Form::text('kabupaten_baru', null, ['class'=>'form-control']) !!}
{!! $errors->first('kabupaten_baru', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group{{ $errors->has('no_telp_baru') ? ' has-error' : '' }}">
{!! Form::label('no_telp_baru', 'No Telp Baru', ['class'=>'col-md-3 control-label']) !!}
<div class="col-md-7">
{!! Form::number('no_telp_baru', null, ['class'=>'form-control']) !!}
{!! $errors->first('no_telp_baru', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group{{ $errors->has('bulan_id') ? ' has-error' : '' }}">
{!! Form::label('bulan_id', 'Bulan Mutasi', ['class'=>'col-md-3 control-label']) !!}
<div class="col-md-7">
   {!! Form::select('bulan_id', [''=>'']+App\Bulan::pluck('name','id')->all(), null, [
  'class'=>'js-selectize',
  'placeholder' => 'Pilih Bulan']) !!}
{!! $errors->first('bulan_id', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group{{ $errors->has('no_rek_lama') ? ' has-error' : '' }}">
{!! Form::label('no_rek_lama', 'No Rek Bank Lama', ['class'=>'col-md-3 control-label']) !!}
<div class="col-md-7">
{!! Form::number('no_rek_lama', null, ['class'=>'form-control']) !!}
{!! $errors->first('no_rek_lama', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group{{ $errors->has('kantor_bayar_lama') ? ' has-error' : '' }}">
{!! Form::label('kantor_bayar_lama', 'Kantor Bayar Lama', ['class'=>'col-md-3 control-label']) !!}
<div class="col-md-7">
{!! Form::text('kantor_bayar_lama', null, ['class'=>'form-control']) !!}
{!! $errors->first('kantor_bayar_lama', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group{{ $errors->has('alamat_lama') ? ' has-error' : '' }}">
{!! Form::label('alamat_lama', 'Alamat Lama', ['class'=>'col-md-3 control-label']) !!}
<div class="col-md-7">
{!! Form::text('alamat_lama', null, ['class'=>'form-control']) !!}
{!! $errors->first('alamat_lama', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group{{ $errors->has('desa_lama') ? ' has-error' : '' }}">
{!! Form::label('desa_lama', 'Kelurahan/Desa Lama', ['class'=>'col-md-3 control-label']) !!}
<div class="col-md-7">
{!! Form::text('desa_lama', null, ['class'=>'form-control']) !!}
{!! $errors->first('desa_lama', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group{{ $errors->has('kecamatan_lama') ? ' has-error' : '' }}">
{!! Form::label('kecamatan_lama', 'Kecamatan Lama', ['class'=>'col-md-3 control-label']) !!}
<div class="col-md-7">
{!! Form::text('kecamatan_lama', null, ['class'=>'form-control']) !!}
{!! $errors->first('kecamatan_lama', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group{{ $errors->has('kabupaten_lama') ? ' has-error' : '' }}">
{!! Form::label('kabupaten_lama', 'Kabupaten Lama', ['class'=>'col-md-3 control-label']) !!}
<div class="col-md-7">
{!! Form::text('kabupaten_lama', null, ['class'=>'form-control']) !!}
{!! $errors->first('kabupaten_lama', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group{{ $errors->has('no_telp_lama') ? ' has-error' : '' }}">
{!! Form::label('no_telp_lama', 'No Telp Lama', ['class'=>'col-md-3 control-label']) !!}
<div class="col-md-7">
{!! Form::number('no_telp_lama', null, ['class'=>'form-control']) !!}
{!! $errors->first('no_telp_lama', '<p class="help-block">:message</p>') !!}
</div>
</div>


<div class="form-group{{ $errors->has('kartu_keluarga') ? ' has-error' : '' }}">
  {!! Form::label('kartu_keluarga', 'kartu_keluarga', ['class'=>'col-md-3 control-label']) !!}
  <div class="col-md-4">
        {!! Form::File('kartu_keluarga') !!}
        @if (isset($pengajuan_mutasi)&& $pengajuan_mutasi->kartu_keluarga)
        <p>
            {!! Html::image(asset('img/'.$pengajuan_mutasi->kartu_keluarga), null, ['class'=> 'img-rounded img-responsive']) !!}
        </p>
        @endif
        {!! $errors->first('kartu_keluarga', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('ktp') ? ' has-error' : '' }}">
  {!! Form::label('ktp', 'ktp', ['class'=>'col-md-3 control-label']) !!}
  <div class="col-md-4">
        {!! Form::File('ktp') !!}
        @if (isset($pengajuan_mutasi)&& $pengajuan_mutasi->ktp)
        <p>
            {!! Html::image(asset('img/'.$pengajuan_mutasi->ktp), null, ['class'=> 'img-rounded img-responsive']) !!}
        </p>
        @endif
        {!! $errors->first('ktp', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('sk') ? ' has-error' : '' }}">
  {!! Form::label('sk', 'sk', ['class'=>'col-md-3 control-label']) !!}
  <div class="col-md-4">
        {!! Form::File('sk') !!}
        @if (isset($pengajuan_mutasi)&& $pengajuan_mutasi->sk)
        <p>
            {!! Html::image(asset('img/'.$pengajuan_mutasi->sk), null, ['class'=> 'img-rounded img-responsive']) !!}
        </p>
        @endif
        {!! $errors->first('sk', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group{{ $errors->has('buku_rekening') ? ' has-error' : '' }}">
  {!! Form::label('buku_rekening', 'buku_rekening', ['class'=>'col-md-3 control-label']) !!}
  <div class="col-md-4">
        {!! Form::File('buku_rekening') !!}
        @if (isset($pengajuan_mutasi)&& $pengajuan_mutasi->buku_rekening)
        <p>
            {!! Html::image(asset('img/'.$pengajuan_mutasi->buku_rekening), null, ['class'=> 'img-rounded img-responsive']) !!}
        </p>
        @endif
        {!! $errors->first('buku_rekening', '<p class="help-block">:message</p>') !!}
    </div>
    </div>

<div class="form-group">
    <div class="col-md-3 col-md-offset-3">
        {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
    </div>
</div>