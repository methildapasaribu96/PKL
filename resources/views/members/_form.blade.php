<div class="form-group{{ $errors->has('pensiunan_id') ? ' has-error' : '' }}">
  {!! Form::label('pensiunan_id', 'NIP', ['class'=>'col-md-2 control-label']) !!}
  <div class="col-md-4">
        {!! Form::select('pensiunan_id', $pensiunan->pluck('nip','nip'), null, [
  'class'=>'js-selectize',
  'placeholder' => 'Masukkan NIP Pensiunan']) !!}
        {!! $errors->first('pensiunan_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 col-md-offset-2">
        {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
    </div>
</div>