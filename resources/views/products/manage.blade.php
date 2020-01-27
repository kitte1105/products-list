
@extends('layouts.app')

@section('title', 'Simplify list')

@section('sidebar')

@endsection

@section('content')
    @parent
    <h2>Available product.</h2>
    @forelse ($products as $product)
        <a href="products.view">{{ $product->name }}</a>
    @empty
        <p>No product</p>
    @endforelse
    <a href="products.add">Add new product</a>
@endsection
