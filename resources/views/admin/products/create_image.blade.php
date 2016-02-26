@extends('template.thema')

@section('content')

    <h1>Enviar Imagem</h1>

    @if($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route'=>['products.images.store', $product->id], 'method'=>'post', 'enctype'=>"multipart/form-data"]) !!}

        <div class="form-group">
            {!! Form::label('image', 'Imagem:') !!}
            {!! Form::file('image', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Eviar Imagem', ['class'=>'btn btn-primary']) !!}
            <a href="{{route('products.images',['id'=>$product->id])}}" class="btn btn-info">Voltar</a>
        </div>

    {!! Form::close() !!}

@stop