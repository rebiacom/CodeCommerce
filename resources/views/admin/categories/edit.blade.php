@extends('template.thema')

@section('content')

    <h1>Edit Categorias: {{ $category->name }}</h1>

    @if($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>['categories.update', $category->id], 'method'=>'put']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nome:') !!}
            {!! Form::text('name', $category->name, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Descrição:') !!}
            {!! Form::textarea('description', $category->description, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar Categoria', ['class'=>'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}

@stop