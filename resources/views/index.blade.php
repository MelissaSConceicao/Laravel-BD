<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Web</title>

    <!-- Styles -->
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

                        <div class="col">
                            <br>
                                <!-- TITULOS -->
                                <h4>Cadastrar - Agendamento de Potenciais Clientes</h4>
                                <p>Sistema utilizado para agendamento de serviços<p>
                            <br>

                            <!-- FORMULÁRIO -->
                            <form class="row g-3" method="POST" id="form" action="{{route('agendamentos.store')}}" nome="form">
                                @csrf
                                <div class="form-row">
                                    <label for="validationCustom01">Nome</label>
                                    <input type="text" name="nome" class="form-control" id="validationCustom01" placeholder="Nome Completo" required>
                                    <br>
                                                        
                                    <label for="validationCustom02">Telefone:</label>
                                    <input type="tel" name="telefone" class="form-control" id="validationCustom02" placeholder="(xx) xxxxx-xxxx"  required>
                                    <br>

                                    <label for="inputState" class="form-label">Origem</label>
                                    <select class="form-select" name="origem" id="inlineFormCustomSelect" required>
                                        <option selected value="Celular">Celular</option>
                                        <option value="Telefone Fixo">Telefone Fixo</option>
                                        <option value="Redes Sociais">Redes Sociais</option>
                                    </select>     
                                    <br>

                                    <label for="validationCustom03">Data do Contato</label>
                                    <input type="date" name="contato" class="form-control" id="validationCustom03" placeholder="dd/mm/aaaa" required>
                                    <br>
                                                        
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Observação</label>
                                        <textarea class="form-control" name="observacao" name="txtObservacao" id="txtObservacao" placeholder="Digite uma observação" rows="3" required></textarea>
                                    </div>
                                    <br>

                                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                                </div>
                                <!-- FIM FORMULÁRIO -->
                            </form>

                            <!-- FIM COLUNA -->
                        </div>
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