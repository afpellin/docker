<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $nome
 * @property string $descricao
 * @property string $inicio
 * @property string $fim
 * @property string $dias_semana
 * @property string $turno
 * @property integer $intervalo
 * @property string $created_at
 * @property string $updated_at
 * @property Funcionario[] $funcionarios
 */
class escala extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['nome', 'descricao', 'inicio', 'fim', 'dias_semana', 'turno', 'intervalo', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function funcionarios()
    {
        return $this->hasMany('App\Models\Funcionario');
    }
}
