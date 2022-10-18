@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Categoria</h1>
@stop
@section('content')
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        <h4>
            <i class="icon fas fa-ban"></i>ocorreu o seguinte error_clear_last 
            @foreach($errors->all() as $erro)
            <li>
                <h5>
                    {{$erro}}
                </h5>
            </li>
            @endforeach

        </h4>
    </ul>
</div>
@endif
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Cadastro de Categorias </h3>
</div>


<form method="POST" action="{{route('salvar')}}">
@csrf
<div class="card-body">
<div class="form-group">
<label for="exampleInputEmail1">Categoria</label>
<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Categoria do livro Ex:romance, suspense, ficção..." name="descr_categ">
</div>


<div class="card-footer">
<button type="submit" class="btn btn-success">Cadastrar</button>
<button type="reset" class="btn btn-danger">Cancelar</button>
</div>
</form>
</div>

@endsection