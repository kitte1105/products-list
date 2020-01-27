
@extends('layouts.app')

@section('title', 'Add new product')

@section('sidebar')
@endsection

@section('content')
    <form action="products.add" method="post" id="add_new_product">
        @csrf
        <label for="product_code">Code:</label>
        <input type="text" name="product_data[code]" id="product_code">
        <label for="product_name">Name:</label>
        <input type="text" name="product_data[name]" id="product_name">
        <label for="product_price">Price:</label>
        <input type="text" name="product_data[price]" id="product_price">
        <button type="submit" form="add_new_product">Add</button>
    </form>
@endsection
