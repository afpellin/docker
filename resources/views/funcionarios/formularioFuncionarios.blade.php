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
                <p>*** <i class="bi bi-person-circle"></i></p>
            </div>
        </div>
        <div class="container col-11">
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <form action="{{ route('criarFuncionarios') }}" method="POST" class="container">
                @csrf
                <fieldset class="row g-3 needs-validation">
                    <legend>Dados do Funcionário</legend>
                    <!-- Inserir os campos com os valores atuais do funcionário -->
                    <div class="form-group">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF:</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" required>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone:</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" required>
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço:</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" required>
                    </div>
                    <div class="form-group">
                        <label for="matricula">Matrícula:</label>
                        <input type="text" class="form-control" id="matricula" name="matricula" required>
                    </div>
                    <div class="form-group">
                        <label for="numero_pis">Número PIS:</label>
                        <input type="text" class="form-control" id="numero_pis" name="numero_pis" required>
                    </div>
                    <div class="form-group">
                        <label for="setor">Setor:</label>
                        <input type="text" class="form-control" id="setor" name="setor" required>
                    </div>
                    <div class="form-group">
                        <label for="horario_entrada">Horário de Entrada:</label>
                        <input type="text" class="form-control" id="horario_entrada" name="horario_entrada" required>
                    </div>
                    <div class="form-group">
                        <label for="horario_saida">Horário de Saída:</label>
                        <input type="text" class="form-control" id="horario_saida" name="horario_saida" required>
                    </div>
                    <div class="form-group">
                        <label for="escala_id">ID da Escala:</label>
                        <input type="text" class="form-control" id="escala_id" name="escala_id" required>
                    </div>
                    <div class="form-group">
                        <label for="data_admissao">Data de Admissão:</label>
                        <input type="date" class="form-control" id="data_admissao" name="data_admissao" required>
                    </div>
                    <div class="form-group">
                        <label for="data_desligamento">Data de Desligamento:</label>
                        <input type="date" class="form-control" id="data_desligamento" name="data_desligamento">
                    </div>
                    <div class="form-group">
                        <label for="contratacao">Contratação:</label>
                        <input type="text" class="form-control" id="contratacao" name="contratacao" required>
                    </div>
                    <div class="form-group">
                        <label for="ferias">Férias:</label>
                        <input type="text" class="form-control" id="ferias" name="ferias" required>
                    </div>
                    <div class="form-group">
                        <label for="salario">Salário:</label>
                        <input type="text" class="form-control" id="salario" name="salario" required>
                    </div>
                    <div class="form-group">
                        <label for="bonificacao">Bonificação:</label>
                        <input type="text" class="form-control" id="bonificacao" name="bonificacao" required>
                    </div>
                    <div class="form-group">
                        <label for="observacoes">Observações:</label>
                        <textarea class="form-control" id="observacoes" name="observacoes" rows="3"></textarea>
                    </div>
                    <!-- Adicione os outros campos aqui com os valores atuais -->
                </fieldset>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Atualizar</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function(){
            // Máscara para CPF
            $('#cpf').mask('000.000.000-00', {reverse: true});

            // Máscara para telefone
            $('#telefone').mask('(00) 0000-0000');

            // Máscara para PIS
            $('#numero_pis').mask('000.00000.00-0');
        });
    </script>
</body>
</html>
