<?php

namespace App\Http\Controllers;

use App\Models\funcionario;
use Illuminate\Http\Request;
use App\Http\Requests\ValidacaoFuncionarios;

class FuncionariosController extends Controller
{
    public function listaFuncionarios(Request $request = null)
    {
        $funcionarios = funcionario::all();

        if ($this->existeId($request)) {
            $funcionarios = [funcionario::find($request["id_funcionario"])];
        }

        return view('funcionarios.listaFuncionarios', ['funcionarios' => $funcionarios]);
    }

    public function deletarFuncionario(Request $request)
    {
        if ($this->existeId($request)) {
            $funcionario = funcionario::find($request["id_funcionario"]);
            $funcionario->delete();

            return redirect()->route('listaFuncionarios');
        }
    }

    public function formularioFuncionarios()
    {
        return view('funcionarios.formularioFuncionarios');
    }

    public function criarFuncionarios(ValidacaoFuncionarios $request)
    {
        // Verifica se o CPF já existe
        if (funcionario::where('cpf', $request->cpf)->exists()) {
            return redirect()->back()->with('error', 'CPF já cadastrado!');
        }

        funcionario::create($request->all());

        return redirect()->route('listaFuncionarios');
    }

    public function formularioEditarFuncionarios(Request $request)
    {
        if ($this->existeId($request)) {
            $funcionarios = funcionario::find($request['id_funcionario']);
            return view('funcionarios.formularioEditarFuncionarios', ['funcionario' => $funcionarios]);
        }
    }

    public function editarFuncionario(ValidacaoFuncionarios $request)
    {
        if ($this->existeId($request)) {
            $funcionarios = funcionario::find($request['id_funcionario']);
            $funcionarios->nome = $request['nome'];
            $funcionarios->cpf = $request['cpf'];
            $funcionarios->telefone = $request['telefone'];
            $funcionarios->endereco = $request['endereco'];
            $funcionarios->matricula = $request['matricula'];
            $funcionarios->numero_pis = $request['numero_pis'];
            $funcionarios->setor = $request['setor'];
            $funcionarios->horario_entrada = $request['horario_entrada'];
            $funcionarios->horario_saida = $request['horario_saida'];
            $funcionarios->escala_id = $request['escala_id'];
            $funcionarios->data_admissao = $request['data_admissao'];
            $funcionarios->data_desligamento = $request['data_desligamento'];
            $funcionarios->contratacao = $request['contratacao'];
            $funcionarios->ferias = $request['ferias'];
            $funcionarios->salario = $request['salario'];
            $funcionarios->bonificacao = $request['bonificacao'];
            $funcionarios->observacoes = $request['observacoes'];
            $funcionarios->save();           

            return redirect()->route('listaFuncionarios');
        }
    }

    public function existeId($request)
    {
        return $request !== null && isset($request["id_funcionario"]) && $request["id_funcionario"];
    }
}
