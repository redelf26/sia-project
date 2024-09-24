<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
<form method="POST" action="{{ url('/addProd') }}">
    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="name" placeholder="Product Name">
    <input type="number" step="0.01" name="price" placeholder="Product Price">
    <button type="submit">Add Product</button>
</form>

</body>
</html>