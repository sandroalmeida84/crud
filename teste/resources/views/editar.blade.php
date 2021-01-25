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
    <script src="{!!url('/js/jquery.mask.js')!!}"></script>

    <link href="{{ url('/css/app.css') }}" rel="stylesheet">
  
    <script type="text/javascript">
        $(document).ready(function(){
            $('.cep').mask('99999-999');
            $('.cpf').mask('999.999.999-99');
            $('.telefone').mask('(99) 99999-9999');

            $('#estado option[value={{ $dados->estado }}]').attr('selected','selected');
        });
    </script>

    </head>

  <body class="bg-light">

    <div class="container items-center col-6">
    <div class="py-5 text-center">
        <h2>Teste do Sandro</h2>
      </div>
      @if(session('error'))
    <div class="alert alert-danger">
        <p>{{session('error')}}</p>
    </div>
      @endif
            <div class="card">
                <div class="card-header">Editando o registro</div>

                    <div class="card-body">
                        <form method="post" role="form" action="../editar/{{ $dados->id }}">

                            {{ csrf_field() }}
                            <input type="hidden" name="id" class="form-control-plaintext" id="id" value="{{ $dados->id }}" >
                            <div class="form-group">
                                <label for="nome" class="visually-hidden">Nome:</label>
                                <input type="text" name="nome" class="form-control" id="nome" required value="{{ $dados->nome }}">
                            </div>
                            <div class="form-group">
                                <label for="email" class="visually-hidden">E-mail:</label>
                                <input type="email" name="email"  class="form-control" id="email" required value="{{ $dados->email }}">
                            </div>
                            <div class="form-group">
                                <label for="estado" class="visually-hidden">Estado:</label>
                                <select name="estado" required id="estado" class="form-control" > 
                                    <option value="">Selecione</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espirito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cidade" class="visually-hidden">Cidade:</label>
                                <input type="text" required name="cidade" class="form-control" id="cidade"  value="{{ $dados->cidade }}">
                            </div>
                            <div class="form-group">
                                <label for="bairro" class="visually-hidden">Bairro:</label>
                                <input type="text" required name="bairro" class="form-control" id="bairro"  value="{{ $dados->bairro }}">
                            </div>
                            <div class="form-group">
                                <label for="cep" class="visually-hidden">Cep:</label>
                                <input type="text" pattern="^\d{5}\-\d{3}$" required name="cep" class="form-control cep" id="cep"  value="{{ $dados->cep }}">
                            </div>
                            <div class="form-group">
                                <label for="cpf" class="visually-hidden">CPF:</label>
                                <input type="text" pattern="^\d{3}\.\d{3}.\d{3}\-\d{2}$" required name="cpf" class="form-control cpf" id="cpf"  value="{{ $dados->cpf }}">
                            </div>
                            <div class="form-group">
                                <label for="telefone" class="visually-hidden">Telefone:</label>
                                <input type="text" pattern="^\(\d{2}\) \d{5}-\d{4}$" required name="telefone" class="form-control telefone" id="telefone"  value="{{ $dados->telefone }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary mb-3">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
      
  </body>
</html>
