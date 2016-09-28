@extends('layouts.app')

@section('content')
    <h1>Create new product</h1>
    {!! Form::open(['route'=>'products.store']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Product name') !!}
        {!! Form::text('name', '', ['class'=>'form-control', 'id'=>'content']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', 'Product description') !!}
        {!! Form::text('description', '', ['class'=>'form-control', 'id'=>'content']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save') !!}
    </div>
    {!! Form::close() !!}
@endsection