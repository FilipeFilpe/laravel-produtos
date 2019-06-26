@extends('layout.principal')

@section('conteudo')
<!-- <div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li> {{$error}} </li>
        @endforeach
    </ul>
</div> -->

<form action="/login" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="id" value="{{ isset($p->id) ? $p->id : ''  }}">

    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input type="text" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Email">
    </div>

    <div class="form-group">
        <label for="inputSenha">Senha</label>
        <input type="password" name="password" class="form-control" id="inputSenha" placeholder="Senha">
    </div>

    <button type="submit" class="btn btn-primary">Entrar</button>
</form>

@stop