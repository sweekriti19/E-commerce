@extends('layouts.app')
@section('content')
    {!! Form::open(['action' => 'ProductController@createstep2','method' => 'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form">
        <div class="form-group">
            {{ Form::label('price:', null, ['class' => 'control-label']) }}
            {{Form::text("price",
              isset($svalue->price) ? $svalue->price : '',
                [
                   "class" => "form-control",
                   "placeholder" => "Enter the price",
                ])
   }}
        </div>
        <div class="form-group">
            {{ Form::label('selling price:', null, ['class' => 'control-label']) }}
            {{Form::text("sp",
              isset($svalue->sp) ? $svalue->sp : '',
                [
                   "class" => "form-control",
                   "placeholder" => "Enter the selling price",
                ])
   }}
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
            {{ Form::label('From: ', null, ['class' => 'control-label']) }}
            {{Form::text("from",
              isset($svalue->pf2) ? $svalue->pf2 : '',
                [
                   "class" => "form-control",
                   "placeholder" => "YYY-MM-DD",
                ])
   }}
                </div>
                <div class="col-md-6">
                    {{ Form::label('To: ', null, ['class' => 'control-label']) }}

                    {{Form::text("to",
                      isset($svalue->pt2) ? $svalue->pt2 : '',
                       [
                          "class" => "form-control",
                          "placeholder" => "YYY-MM-DD",
                       ])
          }}
                </div>
            </div>
        </div>
        @if(isset($svalue->img))
            <img src= "{{ URL::asset("/storage/img/{$svalue->img}") }}" style="height: 100px ; width:100px"></strong>
        @endif
        <div class="form-group">
            {{ Form::label('Upload images of the product:', null, ['class' => 'control-label']) }}
            {{Form::file('img'),['class' => 'form-control']}}
        </div>
        <div class="form-group">
            {{ Form::label('Enter video URL (Youtube) ', null, ['class' => 'control-label']) }}
            {{Form::text("url",
               isset($svalue->url) ? $svalue->url : '',
                [
                   "class" => "form-control",
                   "placeholder" => "Paste the URL of the video",
                ])
   }}
        </div>

        <div class="form-group">
            <a href="{{ url('/') }}">{{Form::button('Previous',['class'=>'btn btn-primary'])}}</a>
            <a href="{{ url('/step4') }}">{{Form::button('Next',['class'=>'btn btn-primary'])}}</a>
        </div>
        <div class="form-group">
            {{Form::submit('Add Product',['class'=>'btn btn-primary'])}}
        </div>
    </div>
    {!! Form::close() !!}
    @if(isset($svalue->img))
        {!! Form::open(['action' => 'ProductController@remove','method' => 'POST']) !!}
        {{Form::submit('Remove Image',['class'=>'btn btn-danger'])}}
        {!! Form::close() !!}
    @endif
@endsection('content)
