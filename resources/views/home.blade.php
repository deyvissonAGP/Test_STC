<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h3>Detalhamento da Escola</h3>
    <div class="jumbotron">
        <a href="{{asset('index')}}">home /</a><br><br>
        <div class="row">
            <div class="col-md-4">
                <div class="card border-light mb-3" style="max-width: 18rem;">
                    <div class="card-header" align="center"><b>Vagas na Escola</b></div>
                    <div class="card-body">
                        <h5 class="card-title" align="center">000000</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-light mb-3" style="max-width: 18rem;">
                    <div class="card-header" align="center"><b>Tipo Escola</b></div>
                    <div class="card-body">
                        <h5 class="card-title" align="center">Anexo</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-light mb-3" style="max-width: 18rem;">
                    <div class="card-header" align="center"><b>Status financeiro</b></div>
                    <div class="card-body">
                        <div class="card text-white bg-success" style="width: 15rem; height: 2.2rem;"><b align="center">Adimplente</b></div>
                    </div>
                </div>
            </div>
        </div>
        @foreach($dado as $dados)
        <div class="row">
            <div class="col md-12">
                <h3>{{$dados->nome}}</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <p>Codigo Inep: {{$dados->inep}}</p>
            </div>
            <div class="col-md-4">
                <p>CNPJ: {{$dados->cnpj}}</p>
            </div>
            <div class="col-md-4">
                <b>Status da Escola</b>
                <div class="card text-white bg-success" style="width: 8rem; height: 2rem;"><b align="center">{{$dados->situacao}}</b></div>
            </div>
        </div>
        @endforeach
        <br><div class="card" style="max-width: 53rem;">
            <br><div class="row">
                <div class="col-md-4">
                    Endereço
                    <p>#######</p>
                </div>
                <div class="col-md-4">
                    Bairro
                    <p>#######</p>
                </div>
                <div class="col-md-4">
                    CEP
                    <p>#######</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    Localidade
                    <p>#######</p>
                </div>
                <div class="col-md-4">
                    Telefone
                    <p>#######</p>
                </div>
                <div class="col-md-4">
                    Regional
                    <p>#######</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    Dados do imovel
                    <p>#######</p>
                </div>
                <div class="col-md-4">
                    Tipo de Escola
                    <p>#######</p>
                </div>
                <div class="col-md-4">
                    Tipo de ensino
                    <p>#######</p>
                </div>
            </div>
        </div><br>

        <b>Dados do Gestor</b><br>

        <div class="card" style="max-width: 53rem;">
            <div class="row">
                <div class="col-md-6">
                    Nome
                    <p>###############</p>
                </div>
                <div class="col-md-6">
                    Tipo
                    <p>######</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    Email
                    <p>#######</p>
                </div>
                <div class="col md-4">
                    Telefone
                    <p>#######</p>
                </div>
                <div class="col-md-4">
                    Tipo de seleção
                    <p>#####</p>
                </div>
            </div>
        </div><br>

        <b>Dados da sala fora</b><br>

        <table class="table" style="max-width: 53rem;">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">Logradouro</th>
                    <th scope="col">status</th>
                    <th scope="col">Gestor Auxiliar</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>##</td>
                <td>##</td>
                <td>##</td>
                <td>##</td>
                <td>##</td>
            </tr>
        </table>
        <br>

        <b>Financeiro</b><br>

        <ul class="nav" style="max-width: 53rem;">
            <li class="nav-item">
                <a class="nav-link" href="#">Contratos e repasses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Prestação de Contas</a>
            </li>
        </ul>

        <b>Contratos</b><br>

        <div class="card" style="max-width: 53rem;">
            <div class="row">
                <div class="col-md-2">
                    Vigilancia
                    <p>###</p>
                </div>
                <div class="col-md-2">
                    Serviços Gerais
                    <p>###</p>
                </div>
                <div class="col-md-2">
                    Aluguel
                    <p>###</p>
                </div>
                <div class="col-md-2">
                    Energia
                    <p>###</p>
                </div>
                <div class="col-md-2">
                    Merendeira
                    <p>###</p>
                </div>
            </div>
        </div>
        <br>

        <b>Repasses</b><br>

        <div class="card" style="max-width: 53rem;">
            <div class="row">
                <div class="col-md-2">
                    Caixa Escolar
                    <p>###</p>
                </div>
                <div class="col-md-2">
                    PNAE
                    <p>###</p>
                </div>
                <div class="col-md-2">
                    PDDE
                    <p>###</p>
                </div>
                <div class="col-md-2">
                    Outros
                    <p>###</p>
                </div>
            </div>
        </div>
    </div>
</div>


<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous">
</script>

<script>
    $.get('http://127.0.0.1:8000/api/escolas', function(resposta) {
        $('body').html(dados);
    }, 'json');
</script>

</body>
</html>
