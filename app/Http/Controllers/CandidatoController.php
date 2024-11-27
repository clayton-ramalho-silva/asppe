<?php

namespace App\Http\Controllers;

use App\Models\Candidato;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;

class CandidatoController extends Controller
{
    public function index(){


        $todoscand = Candidato::all();
        $todos = $todoscand->count();

        $candidatos = Candidato::where('status','1')->get();





        $ativos = $candidatos->count();
        $inativos = $todos - $ativos;

        $candidatosina = Candidato::where('status','0')->get();










        //$candidato = Candidato::find(1);

        return view('pages.candidatos.index',['candidatos' => $candidatos, 'todos' => $todos, 'ativos' => $ativos, 'inativos' => $inativos, 'candidatosina' => $candidatosina]);
    }
}
