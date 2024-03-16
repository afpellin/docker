<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionário</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">
    <div class="corpo col-12">
        <div class="header">
            <h5>Registro de Funcionarios</h5>
            <div class="inicio">
                <p>Cerrar Sesion <i class="bi bi-person-circle"></i></p>
            </div>
        </div>
        <div class="container col-11">            
                <form method="POST" action="{{ route('editarFuncionario') }}">
                   

                @csrf
                <fieldset class="row g-3 needs-validation">
                    <legend>Dados do Funcionário</legend>
                    <input type="hidden" class="form-control" name="id_funcionario" value="{{ $funcionario->id_funcionario }}">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="{{ $funcionario->nome }}">
                    </div>

                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $funcionario->cpf }}">
                    </div>

                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $funcionario->telefone }}">
                    </div>

                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" value="{{ $funcionario->endereco }}">
                    </div>

                    <div class="form-group">
                        <label for="matricula">Matrícula</label>
                        <input type="text" class="form-control" id="matricula" name="matricula" value="{{ $funcionario->matricula }}">
                    </div>

                    <div class="form-group">
                        <label for="numero_pis">Número PIS</label>
                        <input type="text" class="form-control" id="numero_pis" name="numero_pis" value="{{ $funcionario->numero_pis }}">
                    </div>

                    <div class="form-group">
                        <label for="setor">Setor</label>
                        <input type="text" class="form-control" id="setor" name="setor" value="{{ $funcionario->setor }}">
                    </div>

                    <div class="form-group">
                        <label for="horario_entrada">Horário de Entrada</label>
                        <input type="text" class="form-control" id="horario_entrada" name="horario_entrada" value="{{ $funcionario->horario_entrada }}">
                    </div>

                    <div class="form-group">
                        <label for="horario_saida">Horário de Saída</label>
                        <input type="text" class="form-control" id="horario_saida" name="horario_saida" value="{{ $funcionario->horario_saida }}">
                    </div>

                    <div class="form-group">
                        <label for="escala_id">ID da Escala</label>
                        <input type="text" class="form-control" id="escala_id" name="escala_id" value="{{ $funcionario->escala_id }}">
                    </div>

                    <div class="form-group">
                        <label for="data_admissao">Data de Admissão</label>
                        <input type="text" class="form-control" id="data_admissao" name="data_admissao" value="{{ $funcionario->data_admissao }}">
                    </div>

                    <div class="form-group">
                        <label for="data_desligamento">Data de Desligamento</label>
                        <input type="text" class="form-control" id="data_desligamento" name="data_desligamento" value="{{ $funcionario->data_desligamento }}">
                    </div>

                    <div class="form-group">
                        <label for="contratacao">Contratação</label>
                        <input type="text" class="form-control" id="contratacao" name="contratacao" value="{{ $funcionario->contratacao }}">
                    </div>

                    <div class="form-group">
                        <label for="ferias">Férias</label>
                        <input type="text" class="form-control" id="ferias" name="ferias" value="{{ $funcionario->ferias }}">
                    </div>

                    <div class="form-group">
                        <label for="salario">Salário</label>
                        <input type="text" class="form-control" id="salario" name="salario" value="{{ $funcionario->salario }}">
                    </div>

                    <div class="form-group">
                        <label for="bonificacao">Bonificação</label>
                        <input type="text" class="form-control" id="bonificacao" name="bonificacao" value="{{ $funcionario->bonificacao }}">
                    </div>

                    <div class="form-group">
                        <label for="observacoes">Observações</label>
                        <textarea class="form-control" id="observacoes" name="observacoes">{{ $funcionario->observacoes }}</textarea>
                    </div>
                </fieldset>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Cadastrar Funcionario</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>