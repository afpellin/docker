<?php

namespace App\Http\Controllers;

use App\Models\escala;
use Illuminate\Http\Request;

class escalasController extends Controller
{
    public function listaEscalas(Request $request = null)
    {
        $escalas = escala::all();

        if ($this->existeId($request)) {
            $escalas = [escala::find($request["id"])];
        }

        return view('escalas.listaEscalas', ['escalas' => $escalas]);
    }

    public function deletarEscala(Request $request)
    {
        if ($this->existeId($request)) {
            $escala = escala::find($request["id"]);
            $escala->delete();

            return redirect(route('listaEscalas'));
        }
    }

    public function formularioEscala()
    {
        return view('escala.formularioEscala');
    }

    public function criarEscala(Request $request)
    {
        escala::create($request->all());

        return redirect(route('listaEscalas'));
    }

    public function formularioEditarEscala(Request $request)
    {
        if ($this->existeId($request)) {
            $escala = escala::find($request['id']);
            return view('escala.formularioEditarEscala', ['escalas' => $escala]);
        }
    }

    public function editarEscala(Request $request)
    {
        if ($this->existeId($request)) {
            $escala = escala::find($request['id']);
            $escala->nome = $request['nome'];
            $escala->descricao = $request['descricao'];
            $escala->inicio = $request['inicio'];
            $escala->fim = $request['fim'];
            $escala->dias_semana = $request['dias_semana'];
            $escala->turno = $request['turno'];
            $escala->intervalo = $request['intervalo'];
            $escala->save();

            return redirect(route('listaEscalas'));
        }
    }

    public function existeId($request)
    {
        return $request !== null && isset($request["id"]) && $request["id"];
    }
}
