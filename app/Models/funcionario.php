<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id_funcionario
 * @property integer $escala_id
 * @property string $nome
 * @property string $cpf
 * @property string $telefone
 * @property string $endereco
 * @property string $matricula
 * @property string $numero_pis
 * @property string $setor
 * @property string $horario_entrada
 * @property string $horario_saida
 * @property string $data_admissao
 * @property string $data_desligamento
 * @property string $contratacao
 * @property string $ferias
 * @property float $salario
 * @property float $bonificacao
 * @property string $observacoes
 * @property string $created_at
 * @property string $updated_at
 * @property string $data_ponto
 * @property string $ponto_entrada
 * @property string $ponto_saida
 * @property string $data_horas_extras
 * @property integer $horas_extras
 * @property Escala $escala
 */
class funcionario extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_funcionario';

    /**
     * @var array
     */
    protected $fillable = ['escala_id', 'nome', 'cpf', 'telefone', 'endereco', 'matricula', 'numero_pis', 'setor', 'horario_entrada', 'horario_saida', 'data_admissao', 'data_desligamento', 'contratacao', 'ferias', 'salario', 'bonificacao', 'observacoes', 'created_at', 'updated_at', 'data_ponto', 'ponto_entrada', 'ponto_saida', 'data_horas_extras', 'horas_extras'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function escala()
    {
        return $this->belongsTo('App\Models\Escala');
    }
}
