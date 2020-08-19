@extends('layouts.app')
@section('content')
    {!! Form::open(['action' => 'ProductController@createstep4','method' => 'POST']) !!}
    <div class="form">
        <div class="form-group">
            {{ Form::label('keyword:', null, ['class' => 'control-label']) }}
            {{Form::text("keyword",
             isset($svalue->keyword) ? $svalue->keyword : '',
                [
                   "class" => "form-control",
                   "placeholder" => "",
                ])
   }}
        </div>
        <div class="form-group">
            {{ Form::label('seodes:', null, ['class' => 'control-label']) }}
            {{Form::text("seodes",
             isset($svalue->seodes) ? $svalue->seodes : '',
                [
                   "class" => "form-control",
                   "placeholder" => "",
                ])
   }}
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
                <a href="{{ url('/step2') }}">{{Form::button('Previous',['class'=>'btn btn-primary'])}}</a>

                </div>
            </div>
        </div>
        <div class="form-group">
            {{Form::submit('Add Product',['class'=>'btn btn-primary'])}}
        </div>
            </div>

    {!! Form::close() !!}

@endsection('content')
