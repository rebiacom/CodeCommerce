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

    {!! Form::open(['url'=>'products/store']) !!}
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
            {!! Form::submit('Adicionar Produto', ['class'=>'btn btn-primary form-control']) !!}
        </div>

    {!! Form::close() !!}

@stop