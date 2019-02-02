<div class="form-group{{ $errors->has('komentar') ? ' has-error' : '' }}">
{!! Form::label('komentar', 'komentar', ['class'=>'col-md-2 control-label']) !!}
<div class="col-md-4">
{!! Form::textarea('komentar', null, ['class'=>'form-control']) !!}
{!! $errors->first('komentar', '<p class="help-block">:message</p>') !!}
</div>
</div>

<div class="form-group">
    <div class="col-md-2 col-md-offset-2">
        {!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
    </div>
</div>