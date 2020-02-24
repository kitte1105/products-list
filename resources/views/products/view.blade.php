
@extends('layouts.app')

@section('title', 'Add new product')

@section('sidebar')
@endsection

@section('content')
    <h2>{{ $product->name }}</h2>
    <div>
        Code: {{ $product->code }}
    </div>
    <div>
        Price: {{ $product->price }}$
    </div>
@endsection
