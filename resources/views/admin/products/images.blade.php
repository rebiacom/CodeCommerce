@extends('template.thema')

@section('content')

    <h1>Imagens de {{ $product->name }}</h1>
    <hr>
        {!! Form::open(['url'=>'', 'class'=>'form-inline']) !!}
        <div class="form-group">
            {!! Form::label('busca', 'Procurar:') !!}
            {!! Form::text('busca', '', ['class'=>'form-control']) !!}
        </div>
        {!! Form::submit('Buscar', ['class'=>'btn btn-primary form-control']) !!}
        <a href="{{route('products.images.create',['id'=>$product->id])}}"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Inserir Nova Imagem</button></a>
        {!! Form::close() !!}
    <hr>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Imagem</th>
            <th>Extensão</th>
            <th>Opções</th>
        </tr>
        </thead>
        <tbody>
        @foreach($product->images as $image)
            <tr>
                <td>{{ $image->id }}</td>
                <td>
                    <img src="{{ url('upload/'.$image->id.'.'.$image->extension) }}" width="80" alt="">
                </td>
                <td>{{ $image->extension }}</td>
                <td><a href="{{ route('products.images.destroy', ['id'=>$image->id]) }}" class="btn btn-danger">Apagar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{ route('products') }}" class="btn btn-info">Voltar</a>

@stop