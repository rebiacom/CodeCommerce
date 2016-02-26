@extends('template.thema')

@section('content')

    <h1>Criar Produto</h1>

    @if($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['url'=>'admin/products/store', 'method'=>'post']) !!}

        <div class="form-group">
            {!! Form::label('category', 'Categoria:') !!}
            {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('name', 'Nome:') !!}
            {!! Form::text('name', '', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Descrição:') !!}
            {!! Form::textarea('description', '', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('price', 'Preço:') !!}
            {!! Form::text('price', '', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('featured', 'Destaque:') !!}
            {!! Form::checkbox('featured', '1') !!}
            {!! Form::label('recommended', 'Recomendar:') !!}
            {!! Form::checkbox('recommended', '1') !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Adicionar Produto', ['class'=>'btn btn-primary']) !!}
            <a href="{{ route('products')}}" class="btn btn-info">Voltar</a>
        </div>

    {!! Form::close() !!}

@stop