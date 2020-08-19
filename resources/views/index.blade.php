@extends('layouts.app')
@section('content')

    <table class="table table-hover table-bordered">
    <thead class="thead-dark">
    <th>#</th>
    <th>Title</th>
    <th>Brand</th>
    <th>Category</th>
    <th>Status</th>
    <th>Featured</th>
    <th>Price</th>
    <th>Selling Price</th>
    <th>Image</th>
    <th>URL</th>
    <th>SEO Keyword</th>
    <th>SEO Description</th>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->title}}</td>
            <td>{{$product->brand}}</td>
            <td>{{$product->category}}</td>
            <td>{{$product->status}}</td>
            <td>{{$product->featured}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->sp}}</td>
            <td><img src= "{{ URL::asset("/storage/img/{$product->img}") }}" style=" height: 100px; width:100px"></td>
            <td>{{$product->url}}</td>
            <td>{{$product->keyword}}</td>
            <td>{{$product->seodes}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
    @endsection('content)
