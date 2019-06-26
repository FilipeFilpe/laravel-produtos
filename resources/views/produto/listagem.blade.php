@extends('layout.principal')

@section('conteudo')
    <div class="container">
        <h1>Listagem de produtos</h1>
        
        @if(empty($produtos))
            <div class="alert alert-danger" role="alert">Você não tem nenhum produto cadastrado.</div>
        @else
            @if(old('nome'))
                <div class="alert alert-success">
                    <strong>Sucesso!</strong> O produto {{ old('nome') }} foi adicionado.
                </div>
            @endif
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th >Nome</th>
                        <th >Valor</th>
                        <th >Descrição</th>
                        <th >Quantidade</th>
                        <th >Tamanho</th>
                        <th >Categoria</th>
                        <th >Detalhes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produtos as $p)
                        <tr class="{{ $p->quantidade <=1 ? 'alert alert-danger' : '' }}" role="alert">
                            <td>{{ $p->nome }}</td>
                            <td>{{ $p->valor }}</td>
                            <td>{{ $p->descricao }}</td>
                            <td>{{ $p->quantidade }}</td>
                            <td>{{ $p->tamanho }}</td>
                            <td>{{ $p->categoria->name }}</td>
                            <td style="display:flex; justify-content:space-around;">
                                <a href="/produtos/mostra/{{ $p->id }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="/produtos/edita/{{ $p->id }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="/produtos/remove/{{ $p->id }}">
                                    <i class="fas fa-trash-alt alert-danger"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@stop