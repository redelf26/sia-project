<!-- resources/views/add_prod.blade.php -->
@extends('add_prod')

@section('content')
<form method="POST" action="{{ url('/addProd') }}">
    @csrf
    <input type="text" name="name" placeholder="Product Name">
    <input type="number" step="0.01" name="price" placeholder="Product Price">
    <button type="submit">Add Product</button>
</form>
@endsection