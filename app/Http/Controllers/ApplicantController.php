<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index()
    {
        //$joao = Applicant::find(1);
        //dd($joao->user->status);
        $candidatos = Applicant::all();
       

        return view('pages.candidatos.index',['candidatos' => $candidatos]);
    }

    public function create()
    {
        
        return view('pages.candidatos.create');
    }

    public function store()
    {
        return;
    }

    public function show()
    {
        return;
    }

    public function update()
    {
        return;
    }

    public function destroy()
    {
        return;    
    }
}
