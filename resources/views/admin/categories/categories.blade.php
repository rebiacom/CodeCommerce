@extends('template.thema')

@section('content')

    <h1>Categorias</h1>
    <hr>
    {!! Form::open(['url'=>'#', 'class'=>'form-inline']) !!}
    <div class="form-group">
        {!! Form::label('busca', 'Procurar:') !!}
        {!! Form::text('busca', '', ['class'=>'form-control']) !!}
    </div>
    {!! Form::submit('Buscar', ['class'=>'btn btn-primary']) !!}
    <a href="{{route('categories.create')}}"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Inserir Nova Categoria</button></a>
    {!! Form::close() !!}
    <hr>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th colspan="2"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <a href="{{route('categories.edit',['id'=>$category->id])}}"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</button></a>
                </td>
                <td>
                    <a href="{{route('categories.destroy',['id'=>$category->id])}}"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Apagar</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $categories->render() !!};
@stop