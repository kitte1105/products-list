
@extends('layouts.app')

@section('title', 'Add new product')

@section('sidebar')
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="@if(empty($product))products.add @else products.update @endif" method="post" id="add_new_product" class="form-group">
        @csrf
        <div>
            <input
                type="hidden"
                name="product_data[product_id]"
                value="@isset ($product->product_id){{$product->product_id}}@endisset"
            >
        </div>
        <div class="form-group">
            <label for="product_code">Code:</label>
            <input
                type="text"
                name="product_data[code]"
                id="product_code"
                class="form-control"
                value="@isset ($product->code){{$product->code}}@endisset"
            >
        </div>
        <div class="form-group">
            <label for="product_name">Name:</label>
            <input
                type="text"
                name="product_data[name]"
                id="product_name"
                class="form-control"
                value="@isset ($product->name){{$product->name}}@endisset"
            >
        </div>
        <div class="form-group">
            <label for="product_price">Price:</label>
            <input
                type="text"
                name="product_data[price]"
                id="product_price"
                class="form-control"
                value="@isset ($product->price){{$product->price}}@endisset"
            >
        </div>
        <button type="submit" class="btn btn-primary" form="add_new_product">@if(empty($product))Add @else Update @endif</button>
    </form>
@endsection
