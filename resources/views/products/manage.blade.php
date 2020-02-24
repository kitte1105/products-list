
@extends('layouts.app')

@section('title', 'Simplify list')

@section('sidebar')

@endsection

@section('content')
    @parent
    <h2>Available product.</h2>
    <ul>
    @forelse ($products as $product)
            <li><a href="products.view?product_id={{ $product->product_id }}">{{ $product->name }}</a> <a href="products.update?product_id={{ $product->product_id }}">Update</a></li>
    @empty
        <p>No product</p>
    @endforelse
    </ul>
    <div>
        <a href="products.add">Add new product</a>
    </div>
@endsection
