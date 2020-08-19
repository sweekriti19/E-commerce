@extends('layouts.app')

@section('content')

    <h3>Review Details</h3>
    {!! Form::open(['action' => 'ProductController@store','method' => 'POST']) !!}
        <table class="table table-bordered w-auto ">
            <tr>
                <td>Title:</td>
                <td><strong>{{$svalue->title}}</strong></td>
            </tr>
            <tr>
                <td>Brand:</td>
                <td><strong>{{$svalue->brand}}</strong></td>
            </tr>
            <tr>
                <td>Category</td>
                <td><strong>{{$svalue->category}}</strong></td>
            </tr>
            <tr>
                <td>Status:</td>
                <td><strong>{{$svalue->status}}</strong></td>
            </tr>
            <tr>
                <td>Featured:</td>
                <td><strong>{{$svalue->featured}}</strong></td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><strong>{{$svalue->price}}</strong></td>
            </tr>
            <tr>
                <td>Selling price:</td>
                <td><strong>{{$svalue->sp}}</strong></td>
            </tr>
            <tr>
                <td>Image:</td>
                <td><strong><img src= "{{ URL::asset("/storage/img/{$svalue->img}") }}" style=" height: 100px; width:100px"></strong></td>
            </tr>
            <tr>
                <td>URL:</td>
                <td><strong>{{$svalue->url}}</strong></td>
            </tr>
            <tr>
                <td>Keyword:</td>
                <td><strong>{{$svalue->keyword}}</strong></td>
            </tr>
            <tr>
                <td>SEO DESCRIPTION:</td>
                <td><strong>{{$svalue->seodes}}</strong></td>
            </tr>
        </table>
    <div class="form-group">
        <a href="{{ url('/') }}">{{Form::button('Step 1',['class'=>'btn btn-warning'])}}</a>
        <a href="{{ url('/step2') }}">{{Form::button('Step 2',['class'=>'btn btn-warning'])}}</a>
        <a href="{{ url('/step4') }}">{{Form::button('Step 3',['class'=>'btn btn-warning'])}}</a>
    </div>
        <button type="submit" class="btn btn-primary">Add Product</button>
       {!! Form::close() !!}

@endsection
