<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <div class="container">
        <h3>Lista de Escolas</h3>
        <div class="jumbotron">
            <table class="table table-dark">
                <tr>
                    <th>Codigo</th>
                    <th>Nome</th>
                    <th>inep</th>
                    <th>anexo</th>
                    <th>descrição</th>
                    <th>Outros</th>
                </tr>
                <tbody>
                    <tr v-for="dado in dados" class="dados">
                        <td>@{{ dado.codigo }}</td>
                        <td>@{{ dado.nome }}</td>
                        <td>@{{ dado.inep }}</td>
                        <td>@{{ dado.anexo }}</td>
                        <td>@{{ dado.descricao }}</td>
                        <td><a :href="'/escolas/' + dado.codigo" class="btn btn-info">Detalhes</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    new Vue({
        el: '#app',
        data(){
            return {
                dados: null
            }
        },
        mounted(){
            axios
                .get('{{ request()->getSchemeAndHttpHost() }}/api/escolas')
                    .then(response => (this.dados = response.data))
                        .catch(error => console.log(error))
        }
    })
</script>
</body>
</html>
