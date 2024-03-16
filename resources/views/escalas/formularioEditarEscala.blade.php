<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
crossorigin="anonymous">

</head>
<body class="container">

        <div class="corpo col-12">
        <div class="header">
            <h5>Registro Escala</h5>
        </div>
        <div class="container col-11">
        <form action="{{route('criarFuncionario')}}" method="POST" class="container">
        @csrf
                <fieldset class="row g-3 needs-validation">
                    <input type="hidden" name="id_funcionario" value="{{$funcionarios['id_funcionario']}}">
                    <legend>Dados Funcionario</legend>

                    <div class="col-md-3 position-relative">
                        <label for="validationTooltip01" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="nome" value="{{$funcionarios['nome']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="cpf" value="{{$funcionarios['cpf']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="telefone" value="{{$funcionarios['telefone']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-2 position-relative">
                        <label for="validationTooltip01" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="endereco" value="{{$funcionarios['endereco']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">matricula</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="matricula" value="{{$funcionarios['matricula']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">Numero PIS</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="numero_pis" value="{{$funcionarios['numero_pis']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">Horario Entrada</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="horario_entrada" value="{{$funcionarios['horario_entrada']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">Escala</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="escala_id" value="{{$funcionarios['escala_id']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">Data Admissão</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="data_admissao" value="{{$funcionarios['data_admissao']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">Data Desligamento</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="data_desligamento" value="{{$funcionarios['data_desligamento']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">Contratação</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="contratacao" value="{{$funcionarios['contratacao']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>

                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">Ferias</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="ferias" value="{{$funcionarios['ferias']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">salario</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="salario" value="{{$funcionarios['salario']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">bonificacao</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="bonificacao" value="{{$funcionarios['bonificacao']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">observacoes</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="observacoes" value="{{$funcionarios['observacoes']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">data_ponto</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="data_ponto" value="{{$funcionarios['data_ponto"']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">ponto_entrada</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="ponto_entrada" value="{{$funcionarios['ponto_entrada']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">ponto_saida</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="ponto_saida" value="{{$funcionarios['ponto_saida']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">data_horas_extras</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="data_horas_extras" value="{{$funcionarios['data_horas_extras']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-4 position-relative">
                        <label for="validationTooltip01" class="form-label">horas_extras</label>
                        <input type="text" class="form-control" id="validationTooltip01" name="horas_extras" value="{{$funcionarios['horas_extras']}}" required>
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>

                </fieldset>

                <div class="col-12">
                    <button class="btn btn-primary" type="submit">REGISTRAR</button>
                </div>
            </form>
        </div>
    </div>


</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
crossorigin="anonymous"></script>

</html>
