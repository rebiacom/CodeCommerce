@extends('template.thema')

@section('content')

    <h1>Lista de Produtos</h1>
    <hr>
        {!! Form::open(['url'=>'#', 'class'=>'form-inline']) !!}
        <div class="form-group">
            {!! Form::label('busca', 'Procurar:') !!}
            {!! Form::text('busca', '', ['class'=>'form-control']) !!}
        </div>
        {!! Form::submit('Buscar', ['class'=>'btn btn-primary form-control']) !!}
        <a href="{{route('products.create')}}"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Inserir Novo Produto</button></a>
        {!! Form::close() !!}
    <hr>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Categoria</th>
            <th colspan="3"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price}}</td>
                <td>{{ $product->category->name}}</td>
                <td>
                    <a href="{{route('products.edit',['id'=>$product->id])}}"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</button></a>
                </td>
                <td>
                    <a href="{{route('products.images',['id'=>$product->id])}}"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Imagens</button></a>
                </td>
                <td>
                    <a href="{{route('products.destroy',['id'=>$product->id])}}"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Apagar</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $products->render() !!};
@stop