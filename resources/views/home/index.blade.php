@extends('layouts.app')

@section('content')
    <h1>Shop till you drop</h1>
    {!! Form::open(['route' => 'users.storeProducts']) !!}
    <table class="table table-responsive">
        <thead>
        <tr>
            <th></th>
            <th>Name</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{!! Form::checkbox('products[]', $product->id) !!}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! Form::submit('Save') !!}
    {!! Form::close()!!}
@endsection