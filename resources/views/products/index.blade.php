@extends('layouts.app')

@section('content')
    <h1>All products</h1>
    <table class="table table-responsive">
        <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection