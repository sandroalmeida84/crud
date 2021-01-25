
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Teste do Sandro</title>

    <script src="{!!url('/js/app.js')!!}"></script>
    <script src="{!!url('/js/jquery-3.5.1.min.js')!!}"></script>

    <link href="{{ url('/css/app.css') }}" rel="stylesheet">

    
      </head>

  <body class="bg-light">

    <div class="container">
     <div class="py-5 text-center">
        <h2>Teste do Sandro</h2>
        <p class="lead">Segue a lista do CRUD.</p>
      </div>
      @if(session('mensagem'))
    <div class="alert alert-success">
        <p>{{session('mensagem')}}</p>
    </div>
      @endif
      @if(session('error'))
    <div class="alert alert-danger">
        <p>{{session('error')}}</p>
    </div>
      @endif
      <div class="flex items-center">
          <a href="./criar"> <button type="button" class="btn btn-primary btn-sm">Cadastrar</button> </a>
      </div>

        <div class="ml-12">
            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Bairro</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Acao</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($dados as $info)
                    <tr>
                    <th scope="row">{{ $info->id }}</th>
                    <td>{{ $info->nome }}</td>
                    <td>{{ $info->email }}</td>
                    <td>{{ $info->estado }}</td>
                    <td>{{ $info->cidade }}</td>
                    <td>{{ $info->bairro }}</td>
                    <td>{{ $info->telefone }}</td>
                    <td>
                    <a href="./editar/<?php echo $info->id?>"> <button type="button" class="btn btn-primary btn-sm">Editar</button> </a>
                    <a href="./delete/<?php echo $info->id?>" onclick="return confirm('Deseja realmente excluir este registro?')"><button type="button" class="btn btn-danger btn-sm">Excluir</button></td></a>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="col-lg-12">
                {{ $dados->links() }}
            </div>
        </div>
    </div>
      
  </body>
</html>
