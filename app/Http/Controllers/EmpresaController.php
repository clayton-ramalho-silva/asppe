<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;



class EmpresaController extends Controller
{
    
    public function index() 
    {
        $empresas = Empresa::all();
        

        return view('pages.empresas.index', ['empresas' => $empresas]);    
    }

    public function create()
    {
       
        return view('pages.empresas.create');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
          
            'cnpj' => 'required|string|max:255',
            'razao_social' => 'required|string|max:255',
            'nome_fantasia' => 'required|string|max:255',
            'cep' => 'required|string|max:255',
            'endereco' => 'required|string|max:255',
            'numero' => 'required|string|max:255',
            'complemento' => 'required|string|max:255', 
            'pais' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'uf' => 'required|string|max:255',
            'nome_representante_legal' => 'required|string|max:255', 
            'sobrenome_representante_legal' => 'required|string|max:255',
            'cpf' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'logotipo' => 'required|file|mimes:jpg,jpeg,png|max:2048'
        ]);

        //dd($validated);

        // verifica se tem arquivo e se é falido
        if($request->hasFile('logotipo') && $request->file('logotipo')->isValid()){
            
            // pega arquivo
            $requestDocument = $request->logotipo;

            // pega extensao
            $extension = $requestDocument->extension();

            // cria um nome unico para guardar no banco
            $documentName = md5($requestDocument->getClientOriginalName() . strtotime("now") . "." . $extension);

            // move o arquivo para a pasta logotipos
            $requestDocument->move(public_path('documents/empresas'), $documentName);

            // atribuiu o nome para guardar no banco a referencia
           $validated['logotipo'] = $documentName;

        }

        $empresa = Empresa::create($validated);

        
        return redirect()->route('empresas.index');
    }
}
