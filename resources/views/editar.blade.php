
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Web</title>

  
    <!-- styles --> 
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
                                <h4>Editar cadastro</h4>
                            <br>

                            <!-- FORMULÁRIO -->
                            <form class="row g-3" method="POST" id="form" action="/atualizar/{{ $agendamento->id }}" nome="form">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <label for="validationCustom01">Nome</label>
                                    <input type="text" value="{{$agendamento->nome}}" class="form-control" id="Nome" placeholder="Nome Completo" required>
                                    <br>
                                                        
                                    <label for="validationCustom02">Telefone:</label>
                                    <input type="tel" value="{{$agendamento->telefone}}" class="form-control" id="Telefone" placeholder="(xx) xxxxx-xxxx"  required>
                                    <br>

                                    <label for="inputState" class="form-label">Origem</label>
                                    <select class="form-select" id="Origem" required>
                                        <option selected {{ $agendamento->origem === 'Celular' ? "selected" : ''}} >Celular</option>
                                        <option {{ $agendamento->origem === 'Telefone Fixo' ? "selected" : ''}} >Telefone Fixo</option>
                                        <option {{ $agendamento->origem === 'Redes Sociais' ? "selected" : ''}} >Redes Sociais</option>
                                    </select>     
                                    <br>

                                    <label for="validationCustom03">Data do Contato</label>
                                    <input type="date" value="{{$agendamento->data_contato}}" class="form-control" id="DataContato" placeholder="dd/mm/aaaa" required>
                                    <br>
                                                        
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Observação</label>
                                        <textarea class="form-control" value="{{$agendamento->observacao}}" id="observacao" placeholder="Digite uma observação" rows="3" required></textarea>
                                    </div>
                                    <br>

                                    <button class="btn btn-primary" type="submit" >Editar</button>
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