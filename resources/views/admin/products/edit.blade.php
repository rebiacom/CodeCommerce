@extends('template.thema')

@section('content')

    <h1>Editar Produto {{ $product->name }}</h1>

    @if($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>['products.update', $product->id], 'method'=>'put']) !!}

    <div class="form-group">
        {!! Form::label('category', 'Categoria:') !!}
        {!! Form::select('category_id', $categories, $product->category_id, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name', 'Nome:') !!}
        {!! Form::text('name', $product->name, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('name', 'Nome:') !!}
        {!! Form::text('name', $product->name, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Descrição:') !!}
        {!! Form::textarea('description', $product->description, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('price', 'Preço:') !!}
        {!! Form::text('price', $product->price, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('featured', 'Destaque:') !!}
        {!! Form::checkbox('featured', 1, $product->featured) !!}
        {!! Form::label('recommended', 'Recomendar:') !!}
        {!! Form::checkbox('recommended', 1, $product->recommended) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar Produto', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@stop