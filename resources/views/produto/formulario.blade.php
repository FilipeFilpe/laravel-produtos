@extends('layout.principal')

@section('conteudo')
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li> {{$error}} </li>
        @endforeach
    </ul>
</div>

<form action="/produtos/adiciona" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="id" value="{{ isset($p->id) ? $p->id : ''  }}">

    <div class="form-group">
        <label for="inputNome">Nome</label>
        <input type="text" name="nome" value="{{ isset($p->nome) ? $p->nome : old('nome') }}" class="form-control" id="inputNome" aria-describedby="nomeHelp" placeholder="Nome">
    </div>

    <div class="form-group">
        <label for="inputValor">Valor</label>
        <input type="text" name="valor" value="{{ isset($p->valor) ? $p->valor : old('valor') }}" class="form-control" id="inputValor" placeholder="Valor">
    </div>

    <div class="form-group">
        <label for="inputQuantidade">Quantidade</label>
        <input type="text" name="quantidade" value="{{ isset($p->quantidade) ? $p->quantidade : old('quantidade') }}" class="form-control" id="inputQuantidade" placeholder="Quantidade">
    </div>
    
    <div class="form-group">
        <label for="inputTamanho">Tamanho</label>
        <input type="text" name="tamanho" value="{{ isset($p->tamanho) ? $p->tamanho : old('tamanho') }}" class="form-control" id="inputTamanho" placeholder="Tamanho">
    </div>

    <div class="form-group">
        <label for="inputCategoria">Categoria</label>
        <select type="text" name="categoria_id" class="form-control" id="inputCategoria">
            @foreach($categorias as $c)
                <option value="{{$c->id}}">{{$c->name}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="inputDescricao">Descrição</label>
        <input type="textarea" name="descricao" value="{{ isset($p->descricao) ? $p->descricao : old('descricao') }}" class="form-control" id="inputDescricao" placeholder="Descrição">
    </div>

    <button type="submit" class="btn btn-primary">{{ isset($p) ? "Alterar" : "Adicionar"  }}</button>
</form>

@stop