<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regiseg Webshop</title>
</head>

<body>
    @yield('header')
    <h1>Welcome to SHOPPY-SHOP</h1>
    <hr>
    <!--TODO
    if user is admin show add product link
    -->
    <a href="{{ route('products.index') }}">View Products</a>
    <a href="{{ route('products.create') }}">Add New Product</a>
    <a href="{{ route('products.edit') }}">Edit Product</a>

    @yield('content')
</body>

</html>