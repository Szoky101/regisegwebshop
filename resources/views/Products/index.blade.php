@extends('layouts.app')

@section('content')

@endsection

<thead>
    <tr></tr>
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>Price</th>
    <th>Image URL</th>
    </tr>
</thead>
<tbody>
    @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->image_url }}</td>
            <a href="{{ route('products.show', $product->id) }}">View</a>
            <a href="{{ route('products.edit', $product->id) }}">Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
        </tr>
    @endforeach
</tbody>