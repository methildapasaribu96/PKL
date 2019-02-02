@extends('layouts.app')

@section('title')
  <title>LOGIN SPDP</title>
@endsection

@section('content')
<div class="container section-login">
    <div class="row">

        <div class="col-md-6">
          <div class="left-sidebox">
            <h2 class="title-login">Sistem Pengelolaan Data Pensiunan</h2>
            <h4 class="undip">PT Taspen Jawa Tengah</h4>
            <p class="content-left-sidebox">
              Dalam webiste juga menyediakan informasi mengenai pensiunan. Segala hal kami sediakan bagi pensiunan agar tetap selalu mendapatkan informasi terupdate mengenai pensiunan
            </p>
          </div>
        </div>

        <div class="col-md-6">
          <div class="right-sidebox">

            <div class="panel panel-default">
                <div class="panel-title">Login Pensiunan</div>
                <div class="panel-body">
                
                {!! Form::open(['url'=>'login', 'class'=>'form-horizontal'])!!}
                    
                    <div class="row form-group{{ $errors->has('pensiunan_id')? 'has-error' : '' }}" style="margin-right:20px ">
                        <div class="col-md-12">
                            {!! Form::label('pensiunan_id', 'NIP', ['class'=>'col-md-3 control-label']) !!}
                            <div class="col-md-8">
                            {!! Form::number('pensiunan_id',null,['class'=>'form-control'])!!}
                            {!! $errors->first('pensiunan_id','<p class="help-block">:message</p>')!!}
                            </div>        
                            
                        </div>
                    </div>

                    <div class="row form-group{{ $errors->has('password')? 'has-error' : '' }}" style="margin-right:20px ">
                        <div class="col-md-12">
                            {!! Form::label('password', 'Password', ['class'=>'col-md-3 control-label']) !!}
                            <div class="col-md-8">
                                {!! Form::password('password',['class'=>'form-control']) !!}
                                {!! $errors->first('password','<p class="help-block" >:message</p>') !!}
                            </div>        
                        </div>
                    </div>


                        <div class="row form-group">
                            <div class="col-md-6 col-md-offset-4">
{{--                                 <div class="checkbox" style="margin-left:-40px">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div> --}}
                            </div>
                        </div> 

                        <div class="form-group">
                            <div class="col-md-8 col-md-push-3">
                                <button type="submit" class="btn-dark-blue">
                                    Masuk
                                </button>

                                {{-- <a class="forgot" href="{{  url('/password/reset')  }}"> --}}
                            {{--         Forgot Your Password? --}}
                                {{-- </a> --}}
                            </div>
                        </div>
                </div>

            {!! Form::close() !!}
                </div>
            </div>

          </div>
        </div>
    </div>
</div>
@endsection
