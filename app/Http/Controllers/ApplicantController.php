<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApplicantController extends Controller
{
    public function index()
    {
               
        $candidatos = Applicant::all();
       

        return view('pages.candidatos.index',['candidatos' => $candidatos]);
    }

    public function create()
    {
        
        return view('pages.candidatos.create');
    }

    public function store(Request $request)
    {

        // Criando um usuario
        $user = new User;
        $user->firstName = $request->nome;
        $user->lastName = $request->sobrenome;
        $user->email = $request->email;
        $user->password = bcrypt('password');
        $user->email_verified_at = now();
        $user->remember_token = Str::random(10);    
        $user->role = 'applicant';
        $user->status = 'ativo';
        $user->save();

        $user_id = $user->id; 



        // Criando um Candidato
        $candidato = new Applicant;
        
        $candidato->data_nascimento = $request->data_nascimento;
        $candidato->estado_civil = $request->estado_civil;
        $candidato->tem_filhos = $request->tem_filhos;
        $candidato->genero = $request->genero;
        $candidato->rg = $request->rg;
        $candidato->cpf = $request->cpf;
        $candidato->reservista = $request->reservista;
        $candidato->logradouro = $request->logradouro;
        $candidato->numero = $request->numero;
        $candidato->complemento = $request->complemento;
        $candidato->bairro = $request->bairro;
        $candidato->cidade = $request->cidade;
        $candidato->estado = $request->estado;
        $candidato->pais = $request->pais;    
        $candidato->telefone_residencial = $request->telefone_residencial;
        $candidato->telefone_celular = $request->telefone_celular;
        $candidato->vagas_interesse = $request->vagas_interesse;
        $candidato->experiencia_profissional = $request->experiencia_profissional;
        $candidato->escolaridade = $request->escolaridade;
        $candidato->participou_selecao = $request->participou_selecao;
        $candidato->jovem_aprendiz = $request->jovem_aprendiz;
        $candidato->informatica = $request->informatica;
        $candidato->ingles = $request->ingles;
        $candidato->tamanho_uniforme = $request->tamanho_uniforme;
        $candidato->user_id = $user_id;
        
        // Upload Curriculo

        // verifica se tem arquivo e se é falido
        if($request->hasFile('curriculo') && $request->file('curriculo')->isValid()){
            
            // pega arquivo
            $requestDocument = $request->curriculo;

            // pega extensao
            $extension = $requestDocument->extension();

            // cria um nome unico para guardar no banco
            $documentName = md5($requestDocument->getClientOriginalName() . strtotime("now") . "." . $extension);

            // move o arquivo para a pasta curriculos
            $requestDocument->move(public_path('documents/curriculos'), $documentName);

            // atribuiu o nome para guardar no banco a referencia
            $candidato->curriculo = $documentName;

        }

        $candidato->save();
  
 
 
        return redirect()->route('candidatos.index');
    }

    public function show()
    {
        return;
    }

    public function edit($id)
    {
        
        $candidato = Applicant::find($id);
        
        return view('pages.candidatos.edit');
    }
    public function update(Request $request)
    {
       
        return;
    }

    public function destroy()
    {
        return;    
    }
}
