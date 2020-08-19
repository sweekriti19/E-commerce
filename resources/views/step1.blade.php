@extends('layouts.app')
@section('content')
    {!! Form::open(['action' => 'ProductController@createstep1','method' => 'POST']) !!}
    <div class="form">
        <div class="form-group col-md-12">
            {{ Form::label('title:', null, ['class' => 'control-label']) }}
            {{Form::text("title",
             isset($svalue->title) ? $svalue->title : null,
                [
                   "class" => "form-control",
                   "placeholder" => "Title",
                ])
   }}
        </div>
        <div class="form-group col-md-12">
            {{ Form::label('brand:', null, ['class' => 'control-label']) }}
            {{Form::select('brand', ['Brandone' => 'Brandone', 'Brandtwo' => 'Brandtwo'], isset($svalue->brand) ? $svalue->brand : null,['placeholder' => 'Select a brand','class'=>'form-control'])}}

        </div>
        <div class="form-group col-md-12">
            {{ Form::label('category:', null, ['class' => 'control-label']) }}
            {{Form::select('category', ['Productone' => 'Productone', 'Producttwo' => 'Producttwo'], isset($svalue->category) ? $svalue->category : null, ['placeholder' => 'Select a category','class'=>'form-control'])}}

        </div>
        <div class="form-group">
            <div class="row">
                <div class="col">
            {{ Form::label('status:', null, ['class' => 'control-label']) }}
            {{Form::radio('status', 'show',  isset($svalue->status) ? true : false)}}
            <b>Show</b>
            {{ Form::radio('status', 'hide' , isset($svalue->status) ? true : false) }}
            <b>Hide</b>
                </div>
                <div class="col">
            {{ Form::label('featured?', null, ['class' => 'control-label']) }}
            {{Form::radio('featured', 'yes', isset($svalue->featured) ? true : false)}}
            <b>Show</b>
            {{ Form::radio('featured', 'no' , isset($svalue->featured) ? true : false) }}
            <b>Hide</b>
        </div>
        </div>
        <div class="form-group">
            {{ Form::label('package:', null, ['class' => 'control-label']) }}
            <div class="row">
                <div class="col-md-6">
                {{ Form::label('From:', null, ['class' => 'control-label']) }}
            {{Form::text("from",
               isset($svalue->pf1) ? $svalue->pf1 : '',
                [
                   "class" => "form-control",
                   "placeholder" => "YYY-MM-DD",
                ])
   }}
                </div>
                <div class="col-md-6">
                    {{ Form::label('To:', null, ['class' => 'control-label']) }}
            {{Form::text("to",
             isset($svalue->pt1) ? $svalue->pt1 : '',
               [
                  "class" => "form-control",
                  "placeholder" => "YYY-MM-DD",
               ])
  }}
                </div>
            </div>
        </div>
            <div class="form-group">
                <a href="{{ url('/step2') }}">{{Form::button('Next',['class'=>'btn btn-primary'])}}</a>
            </div>
        <div class="form-group col-md-12">
            {{Form::submit('Add Product',["class"=>"btn btn-primary"])}}
        </div>
    </div>
    </div>
    {!! Form::close() !!}

@endsection('content)
