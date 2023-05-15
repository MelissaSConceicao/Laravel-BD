<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>

    @vite([
        'resources/css/app.css', 
            'resources/js/app.js',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js'
        ])
</head>
<body>
<!-- GRID -->
<div class="container">
        <!-- LINHA -->
    <div class="row">
        <!-- COLUNA -->
    <div class="col">
        <!-- CABEÇALHO -->
                <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand text-white" href='/'>SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href='/'>Cadastrar</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active text-white" href='/consulta'>Consultar</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
               
                <!-- GRID -->
                <div class="container">
                    <div class="row">
                        <div class="col"></div>
                        <!-- COLUNA PRINCIPAL-->
                        <div class="col-6">
                            <br>
                                <h4>Consultar - Contatos Agendados</h4>
                                <!-- TABELA -->
                                    <table class="table text-center">
                                        <!--COLUNAS DA TABELA-->
                                        <thead>
                                        <tr class='bg-primary'>
                                            <th scope="col">Nome</th>
                                            <th scope="col">Telefone</th>
                                            <th scope="col">Origem</th>
                                            <th scope="col">Contato</th>
                                            <th scope="col">Observação</th>
                                            <th scope="col">Ação</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                            @foreach($agendamentos as $tableagenda)
                                                <tr>  

                                                    <td>{{ $tableagenda->nome }}</td>
                                                    <td>{{ $tableagenda->telefone }}</td>
                                                    <td>{{ $tableagenda->origem }}</td>
                                                    <td>{{ $tableagenda->data_contato }}</td>
                                                    <td>{{ $tableagenda->observacao }}</td>
                                                    <td>
                                                        <button class="btn btn-primary" type="submit" href='/editar'>Editar</button>
                                                        <button class="btn btn-primary" type="submit" >Excluir</button>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                <!-- FIM TABELA -->

                            <!-- FIM COLUNA PRINCIPAL -->
                        </div>
                        
                        <div class="col"></div>
                        <!-- FIM LINHA -->
                    </div>
                    <!-- FIM GRID -->
                </div>

                <!-- FIM COLUNA -->
            </div>
        <!-- FIM LINHA -->
        </div>
    <!-- FIM GRID -->
    </div>
</body>
</html>