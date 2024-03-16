<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacaoFuncionarios extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:255',
            'telefone' => 'required|string|max:255',
            'endereco' => 'required|string|max:255',
            'matricula' => 'required|string|max:255',
            'numero_pis' => 'required|string|max:255',
            'setor' => 'required|string|max:255',
            'horario_entrada' => 'required|string|max:255',
            'horario_saida' => 'required|string|max:255',
            'escala_id' => 'required|string|max:255',
            'data_admissao' => 'required|date',
            'data_desligamento' => 'nullable|date',
            'contratacao' => 'required|string|max:255',
            'ferias' => 'required|string|max:255',
            'salario' => 'required|string|max:255',
            'bonificacao' => 'required|string|max:255',
            'observacoes' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'cpf.unique' => 'O CPF já está em uso.',
            'data_desligamento.after_or_equal' => 'A data de desligamento deve ser igual ou posterior à data de admissão.'
        ];
    }
}
