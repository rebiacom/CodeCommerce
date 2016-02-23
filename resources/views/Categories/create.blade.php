@extends('template.thema')

@section('content')

    <h1>Criar Categorias</h1>

    @if($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['url'=>'categories/store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nome:') !!}
            {!! Form::text('name', '', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Descrição:') !!}
            {!! Form::textarea('description', '', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Adicionar Categoria', ['class'=>'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}

@stop