<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

</head>
<body>
<div id="app">
    <div class="container">
        <h3>Detalhamento da Escola</h3>
        <div class="jumbotron">
            <a href="{{asset('/')}}" class="btn btn-info">Home</a><br><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-light mb-3" style="max-width: 18rem;">
                        <div class="card-header" align="center"><b>Vagas na Escola</b></div>
                        <div class="card-body">
                            <h5 class="card-title" align="center" >@{{ escola.total_escolarizacao }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-light mb-3" style="max-width: 18rem;">
                        <div class="card-header" align="center"><b>Tipo Escola</b></div>
                        <div class="card-body">
                            <h5 class="card-title" align="center">@{{ escola.anexo }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-light mb-3" style="max-width: 18rem;">
                        <div class="card-header" align="center"><b>Status financeiro</b></div>
                        <div class="card-body">
                            <div class="card text-white bg-success" style="display: flex; align-items: center;  justify-content: center; width: 15rem; height: 2rem;"><b align="center">ADMINPLENTE</b></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 15px">
                <div class="col md-12">
                    <h3>@{{ escola.nome }}</h3>
                </div>
                <div class="col-md-4">
                    <b>Status da Escola</b>
                    <div class="card text-white bg-success" style="display: flex; align-items: center;  justify-content: center; width: 8rem; height: 2rem;"><b align="center">@{{ escola.situacao }}</b></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <p>Codigo INEP: @{{ escola.inep }}</p>
                </div>

            </div>
            <br><div class="card"   >
                <br><div class="row">
                    <div class="col-md-4">
                        <strong>Endereço</strong>
                        <p>@{{ escola.logradouro }}</p>
                    </div>
                    <div class="col-md-4">
                        <strong>Bairro</strong>
                        <p>@{{ escola.bairro }}</p>
                    </div>
                    <div class="col-md-4">
                        <strong>CEP</strong>
                        <p>@{{ escola.cep }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <strong> Localidade </strong>
                        <p>@{{ escola.cidade }}</p>
                    </div>
                    <div class="col-md-4">
                       <strong> Telefone </strong>
                        <p>S/N</p>
                    </div>
                    <div class="col-md-4">
                        <strong> Regional </strong>
                        <p>@{{ escola.regional }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                       <strong> Dados do imovel </strong>
                        <p>@{{ escola.ocupacao }}</p>
                    </div>
                    <div class="col-md-4">
                        <strong> Tipo de Escola </strong>
                        <p>S/N</p>
                    </div>
                    <div class="col-md-4">
                        <strong> Tipo de ensino </strong>
                        <p>@{{ escola.modalidade }}</p>
                    </div>
                </div>
            </div><br>

            <b>DADOS DO GESTOR</b><br>

            <div class="card" >
                <div class="row">
                    <div class="col-md-4">
                       <strong> Nome </strong>
                        <p>@{{ escola.nomeg }}</p>
                    </div>
                    <div class="col-md-4">
                        <strong> Tipo </strong>
                        <p>@{{ escola.cargo }}</p>
                    </div>
                    <div class="col-md-4">
                        <strong> Email </strong>
                        <p>@{{ escola.email }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col md-4">
                        <strong> Telefone </strong>
                        <p>@{{ escola.celular }}</p>
                    </div>
                    <div class="col-md-8">
                        <strong> Tipo de seleção </strong>
                        <p>@{{ escola.tipo_eleito }}</p>
                    </div>
                </div>
            </div><br>

            <b>DADOS DA DIREÇÃO</b><br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Matricula</th>
                        <th scope="col">Situação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>@{{ escola.nomeg }}</td>
                        <td>@{{ escola.cargo }}</td>
                        <td>@{{ escola.matricula }}</td>
                        <td>@{{ escola.situacao_cargo }}</td>
                    </tr>
                </tbody>
            </table>
            <br>

            <b>FINANCEIRO</b><br>

            <ul class="nav nav-tabs" >
                <li class="nav-item">
                    <a class="nav-link active" href="">Contratos e repasses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Prestação de Contas</a>
                </li>
            </ul><br>

            <b>Contratos</b><br>
            <div class="card" >
                <div class="row">
                    <div class="col-md-2">
                       <strong> Vigilancia </strong>
                        <p></p>
                    </div>
                    <div class="col-md-2">
                        <strong> Serviços Gerais </strong>
                        <p></p>
                    </div>
                    <div class="col-md-2">
                        <strong> Aluguel </strong>
                        <p></p>
                    </div>
                    <div class="col-md-2">
                        <strong> Energia </strong>
                        <p></p>
                    </div>
                    <div class="col-md-2">
                        <strong> Merendeira </strong>
                        <p></p>
                    </div>
                </div>
            </div><br>

            <b>Repasses</b><br>
            <div class="card" >
                <div class="row">
                    <div class="col-md-2">
                        <strong> Caixa Escolar </strong>
                        <p></p>
                    </div>
                    <div class="col-md-2">
                        <strong> PNAE </strong>
                        <p></p>
                    </div>
                    <div class="col-md-2">
                        <strong> PDDE </strong>
                        <p></p>
                    </div>
                    <div class="col-md-2">
                       <strong> Outros </strong>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    new Vue({
        el: '#app',
        data(){
            return {
                escola: null
            }
        },
        mounted(){
            axios
                .get('{{ request()->getSchemeAndHttpHost() }}/api/escolas/{{ request()->escola }}')
                    .then(response => {this.escola = response.data})
                        .catch(error => console.log(error))
        }
    })

</script>

</body>
</html>
