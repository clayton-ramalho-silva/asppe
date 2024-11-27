@extends('dashboard')

@section('content')
<div class="layout-px-spacing">
    <div class="page-header">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Candidatos</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Novo Candidato</a></li>
            </ol>
        </nav>
    </div>                
        
    <div class="account-settings-container layout-top-spacing">

        <form action="{{ route('canditados.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="account-content">
                <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                    <div class="row">
    
                        <!-- Informações Pessoais -->
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <div id="general-info" class="section general-info">
                                <div class="info">
                                    <h6 class="">Informações Pessoais</h6>
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">                                            
                                                <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                    <div class="form">
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <div class="form-group">
                                                                    <label for="nome">Nome</label>
                                                                    <input type="text" class="form-control mb-4" id="nome" name="nome" placeholder="Jimmy" value="" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-5">
                                                                <div class="form-group">
                                                                    <label for="sobrenome">Sobrenome</label>
                                                                    <input type="text" class="form-control mb-4" id="sobrenome" name="sobrenome" placeholder="Silva" value="" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <label class="dob-input">Data de Nascimento</label>
                                                                <div class="d-sm-flex d-block">
                                                                    <div class="form-group mr-1">
                                                                       <input type="date" name="data_nascimento" class="form-control mb-4" required>
                                                                    </div>                                                                
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="estado_civil">Estado Civil</label>
                                                                    <select class="form-control" name="estado_civil" id="estado_civil" required>
                                                                        <option value="solteiro">Solteiro</option>
                                                                        <option value="casado">Casado</option>
                                                                        <option value="divorciado">Divorciado</option>
                                                                        <option value="viuvo">Viúvo</option>
                                                                        <option value="separado">Separado</option>                                                                   
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="tem_filhos">Possui Fiilhos?</label>
                                                                    <select class="form-control" name="tem_filhos" id="tem_filhos" required>
                                                                        <option value="1">Sim</option>
                                                                        <option value="0">Não</option>                                                                                                                                       
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="genero">Sexo</label>
                                                                    <select class="form-control" name="genero" id="genero" required>
                                                                        <option value="" selected disabled>Escolher</option>
                                                                        <option value="homem">Homem</option>
                                                                        <option value="mulher">Mulher</option>
                                                                        <option value="prefere-nao-dizer">Prefiro não dizer</option>                                                                                                                                       
                                                                    </select>
                                                                </div>
                                                            </div>
                                                           
    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Documentos -->
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <div id="about" class="section about">
                                <div class="info">
                                    <h5 class="">Documentos</h5>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="rg">RG</label>
                                                <input type="text" class="form-control mb-4" id="rg" name="rg" placeholder="000000-00" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="cpf">CPF</label>
                                                <input type="text" class="form-control mb-4" id="cpf" name="cpf" placeholder="000.000.000.00" value="" required>
                                            </div>
                                        </div>                                    
                                    </div>
                                    <div class="row">
                                        <label class="col-form-label col-xl-12 col-sm-12 pt-0">Tem Reservista?</br>A certidão de reservista é um documento fundamental para os homens brasileiros. Esse documento comprova que o cidadão do sexo masculino tenha cumprido com o alistamento obrigatório ao completar os 18 anos de idade, estando pronto para exercer seus direitos e obrigações como cidadão brasileiro.</label>
                                          
    
                                        <div class="col-1">
                                            <div class="form-check mb-2">
                                                <div class="custom-control custom-radio classic-radio-info">
                                                    <input type="radio" id="reservista-sim" name="reservista" onclick="toggleJustificativa(false)" class="custom-control-input" value="Sim">
                                                    <label class="custom-control-label" for="reservista-sim">Sim</label>
                                                </div>
                                            </div>                                        
                                        </div>    
    
                                        <div class="col-1">
                                            <div class="form-check mb-2">
                                                <div class="custom-control custom-radio classic-radio-info">
                                                    <input type="radio" id="reservista-nao" name="reservista" onclick="toggleJustificativa(false)" class="custom-control-input" value="Não">
                                                    <label class="custom-control-label" for="reservista-nao">Não</label>
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="col-4">
                                            <div class="form-check mb-2 ">
                                                <div class="custom-control custom-radio classic-radio-default d-flex">
                                                    <input type="radio" id="reservista-outro" name="reservista" onclick="toggleJustificativa(true)" class="custom-control-input" value="Outro">
                                                    <label class="custom-control-label" for="reservista-outro">Outro</label>
                                                    <input type="text" name="reservista_description" id="reservistaDescription" class="form-control mb-4" disabled >                                                
                                                </div>                                            
                                            </div>
    
                                        </div>                                    
                                    </div>
                                    
                                </div>
                            </form>
                        </div>                    
    
                        <!-- Informações Localização -->
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <div id="contact" class="section contact">
                                <div class="info">
                                    <h5 class="">Informações Localização</h5>
                                    <div class="row">
                                        <div class="col-md-11 mx-auto">
                                            <div class="row">                                            
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="logradouro">Logradouro:</label>
                                                        <input type="text" class="form-control mb-4" id="logradouro" name="logradouro"  placeholder="Rua, Av.:">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="numero">Número</label>
                                                        <input type="text" class="form-control mb-4" id="numero" name="numero" placeholder="N°">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="complemento">Complemento</label>
                                                        <input type="text" class="form-control mb-4" id="complemento" name="complemento" placeholder="Casa 1, Apt. 2" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="bairro">Bairro</label>
                                                        <input type="text" class="form-control mb-4" id="bairro" name="bairro" placeholder="Jd. ">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="cidade">Cidade</label>
                                                        <input type="text" class="form-control mb-4" id="cidade" name="cidade" placeholder="São Paulo">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="estado">Estado</label>
                                                        <input type="text" class="form-control mb-4" id="estado" name="estado" placeholder="São Paulo">
                                                    </div>
                                                </div>                                    
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="pais">País</label>
                                                        <input type="text" class="form-control mb-4" id="pais" name="pais" placeholder="Brasil">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Informações Contato -->
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <div id="contact" class="section contact">
                                <div class="info">
                                    <h5 class="">Informações Contato</h5>
                                    <div class="row">
                                        <div class="col-md-11 mx-auto">
                                            <div class="row">                                            
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">E-mail:</label>
                                                        <input type="text" class="form-control mb-4" id="email" name="email"  placeholder="example@email.com">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="telefone_residencial">Telefone Residencial</label>
                                                        <input type="text" class="form-control mb-4" id="telefone_residencial" name="telefone_residencial" placeholder="(11) 0000-0000">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="telefone_celular">Telefone Celular</label>
                                                        <input type="text" class="form-control mb-4" id="telefone_celular" name="telefone_celular" placeholder="(11) 9999-0000" >
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Informações Contato -->
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <div id="contact" class="section contact">
                                <div class="info">
                                    <div class="row">
                                        <div class="col-md-6 mx-auto">
                                            <h5 class="">Em quais vagas você está interessado?
                                            </h5>
                                            <div class="row"> 
                                                <div class="col-12">
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-primary">
                                                            <input type="checkbox" class="new-control-input" name="vagas_interesse[]" value="Copa & Cozinha">
                                                            <span class="new-control-indicator"></span>Copa & Cozinha
                                                        </label>
                                                    </div>
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-primary">
                                                            <input type="checkbox" class="new-control-input" name="vagas_interesse[]" value="Administrativo">
                                                            <span class="new-control-indicator"></span>Administrativo
                                                        </label>
                                                    </div>
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-primary" >
                                                            <input type="checkbox" class="new-control-input" name="vagas_interesse[]" value="Camareiro(a) de Hotel">
                                                            <span class="new-control-indicator"></span>Camareiro(a) de Hotel
        
                                                        </label>
                                                    </div>
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-primary">
                                                            <input type="checkbox" class="new-control-input" name="vagas_interesse[]" value="Recepcionista">
                                                            <span class="new-control-indicator"></span>Recepcionista
                                                        </label>
                                                    </div>
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-primary">
                                                            <input type="checkbox" class="new-control-input" name="vagas_interesse[]" value="Atendente de Lojas e Mercados (Comércio & Varejo)">
                                                            <span class="new-control-indicator"></span>Atendente de Lojas e Mercados (Comércio & Varejo)
        
                                                        </label>
                                                    </div>
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-primary">
                                                            <input type="checkbox" class="new-control-input" name="vagas_interesse[]" value="Construção e Reparos">
                                                            <span class="new-control-indicator"></span>Construção e Reparos
        
                                                        </label>
                                                    </div>
                                                </div>                                           
                                                
                                            </div>
                                        </div>
    
                                        <div class="col-md-6 mx-auto">
                                            <h5 class="">Já possui alguma experiência profissional?</h5>
                                            <div class="row"> 
                                                <div class="col-12">
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-primary">
                                                            <input type="checkbox" class="new-control-input" name="experiencia_profissional[]" value="Nenhuma por enquanto">
                                                            <span class="new-control-indicator"></span>Nenhuma por enquanto
                                                        </label>
                                                    </div>
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-primary">
                                                            <input type="checkbox" class="new-control-input" name="experiencia_profissional[]" value="Copa & Cozinha">
                                                            <span class="new-control-indicator"></span>Copa & Cozinha
                                                        </label>
                                                    </div>
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-primary">
                                                            <input type="checkbox" class="new-control-input" name="experiencia_profissional[]" value="Administrativo">
                                                            <span class="new-control-indicator"></span>Administrativo
        
                                                        </label>
                                                    </div>
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-primary">
                                                            <input type="checkbox" class="new-control-input" name="experiencia_profissional[]" value="Camareiro(a) de Hotel">
                                                            <span class="new-control-indicator"></span>Camareiro(a) de Hotel
                                                        </label>
                                                    </div>
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-primary">
                                                            <input type="checkbox" class="new-control-input" name="experiencia_profissional[]" value="Recepcionista">
                                                            <span class="new-control-indicator"></span>Recepcionista
        
                                                        </label>
                                                    </div>
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-primary">
                                                            <input type="checkbox" class="new-control-input" name="experiencia_profissional[]" value="Atendente de Lojas e Mercados (Comércio & Varejo)">
                                                            <span class="new-control-indicator"></span>Atendente de Lojas e Mercados (Comércio & Varejo)
        
                                                        </label>
                                                    </div>
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-primary">
                                                            <input type="checkbox" class="new-control-input" name="experiencia_profissional[]" value="TI (Tecnologia da Informação)">
                                                            <span class="new-control-indicator"></span>TI (Tecnologia da Informação)
        
                                                        </label>
                                                    </div>
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox checkbox-primary">
                                                            <input type="checkbox" class="new-control-input" name="experiencia_profissional[]" value="Construção e Reparos">
                                                            <span class="new-control-indicator"></span>Construção e Reparos
        
                                                        </label>
                                                    </div>                                                
                                                </div>                                           
                                                
                                            </div>
                                        </div>
    
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Formação/Escolaridade -->
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <div id="about" class="section about">
                                <div class="info">
                                    <h5 class="">Formação/Escolaridade</h5>
                                    <p>(Especifique no campo "OUTRO" caso tenha Ensino Superior, Técnico ou outro)</p>                               
                                    <div class="row">                                                                   
    
                                        <div class="col-12">
                                            <div class="form-check mb-2">
                                                <div class="custom-control custom-radio classic-radio-info">
                                                    <input type="radio" id="escolaridade-medio-incompleto" name="escolaridade" onclick="toggleEscolaridade(false)" class="custom-control-input" value="Sim">
                                                    <label class="custom-control-label" for="escolaridade-medio-incompleto">Ensino Médio Incompleto</label>
                                                </div>
                                            </div>                                        
                                            <div class="form-check mb-2">
                                                <div class="custom-control custom-radio classic-radio-info">
                                                    <input type="radio" id="escolaridade-medio-completo" name="escolaridade" onclick="toggleEscolaridade(false)" class="custom-control-input" value="Não">
                                                    <label class="custom-control-label" for="escolaridade-medio-completo">Ensino Médio Completo</label>
                                                </div>
                                            </div>
                                            <div class="form-check mb-2 ">
                                                <div class="custom-control custom-radio classic-radio-default d-flex">
                                                    <input type="radio" id="escolaridade-outro" name="escolaridade" onclick="toggleEscolaridade(true)" class="custom-control-input" value="Outro">
                                                    <label class="custom-control-label" for="escolaridade-outro">Outro</label>
                                                    <input type="text" name="escolaridade" id="escolaridadeDescription" class="form-control mb-4" disabled >                                                
                                                </div>                                            
                                            </div>
                                        </div>                                                                         
                                    </div>
                                    
                                </div>
                            </div>
                        </div>  
    
                        <!-- Já participou de alguma seleção nossa? / Já foi Jovem Aprendiz? -->
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <div id="contact" class="section contact">
                                <div class="info">
                                    <div class="row">
                                        <div class="col-md-6 mx-auto">
                                            <h5 class="">Já participou de alguma seleção nossa?</h5>                                                                    
                                            <div class="row">                                                                   
    
                                                <div class="col-12">
                                                    <div class="form-check mb-2">
                                                        <div class="custom-control custom-radio classic-radio-info">
                                                            <input type="radio" id="participou_selecao_chamado" name="participou_selecao" onclick="toggleParticipouSelecao(false)" class="custom-control-input" value="Sim">
                                                            <label class="custom-control-label" for="participou_selecao_chamado">Sim, já fui chamado(a) para 1ª fase de um Processo Seletivo.</label>
                                                        </div>
                                                    </div>                                        
                                                    <div class="form-check mb-2">
                                                        <div class="custom-control custom-radio classic-radio-info">
                                                            <input type="radio" id="participou_selecao_encaminhado" name="participou_selecao" onclick="toggleParticipouSelecao(false)" class="custom-control-input" value="Não">
                                                            <label class="custom-control-label" for="participou_selecao_encaminhado">Sim, já fui encaminhado(a) para teste na Empresa parceira.</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <div class="custom-control custom-radio classic-radio-info">
                                                            <input type="radio" id="participou_selecao_curriculo" name="participou_selecao" onclick="toggleParticipouSelecao(false)" class="custom-control-input" value="Não">
                                                            <label class="custom-control-label" for="participou_selecao_curriculo">Enviei currículo mas não fui chamado(a).</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <div class="custom-control custom-radio classic-radio-info">
                                                            <input type="radio" id="participou_selecao_nao" name="participou_selecao" onclick="toggleParticipouSelecao(false)" class="custom-control-input" value="Não">
                                                            <label class="custom-control-label" for="participou_selecao_nao">Não participei ainda.</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check mb-2 ">
                                                        <div class="custom-control custom-radio classic-radio-default d-flex">
                                                            <input type="radio" id="participou_selecao_outro" name="participou_selecao" onclick="toggleParticipouSelecao(true)" class="custom-control-input" value="Outro">
                                                            <label class="custom-control-label" for="participou_selecao_outro">Outro</label>
                                                            <input type="text" name="escolaridade" id="participou_selecao_outro_description" class="form-control mb-4" disabled >                                                
                                                        </div>                                            
                                                    </div>
                                                </div>                                                                         
                                            </div>
                                        </div>
    
                                        <div class="col-md-6 mx-auto">
                                            <h5 class="">Já foi Jovem Aprendiz?</h5>                                                                     
                                            <div class="row">                                                                   
    
                                                <div class="col-12">
                                                    <div class="form-check mb-2">
                                                        <div class="custom-control custom-radio classic-radio-info">
                                                            <input type="radio" id="jovem_aprendiz_asppe" name="jovem_aprendiz" onclick="toggleEscolaridade(false)" class="custom-control-input" value="Sim">
                                                            <label class="custom-control-label" for="jovem_aprendiz_asppe">Sim, da ASPPE</label>
                                                        </div>
                                                    </div>                                        
                                                    <div class="form-check mb-2">
                                                        <div class="custom-control custom-radio classic-radio-info">
                                                            <input type="radio" id="jovem_aprendiz_outra_qualificadora" name="jovem_aprendiz" onclick="toggleEscolaridade(false)" class="custom-control-input" value="Não">
                                                            <label class="custom-control-label" for="jovem_aprendiz_outra_qualificadora">Sim, de Outra Qualificadora</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <div class="custom-control custom-radio classic-radio-info">
                                                            <input type="radio" id="jovem_aprendiz_nao" name="jovem_aprendiz" onclick="toggleEscolaridade(false)" class="custom-control-input" value="Não">
                                                            <label class="custom-control-label" for="jovem_aprendiz_nao">Não</label>
                                                        </div>
                                                    </div>                                                
                                                </div>                                                                         
                                            </div>
                                        </div>
    
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Informatica / Ingles -->
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <div id="general-info" class="section general-info">
                                <div class="info">
                                    <h6 class="">Cursos</h6>
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">                                            
                                                <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                    <div class="form">                                                    
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="informatica">Possui conhecimento de Informática?</label>
                                                                    <select class="form-control" name="informatica" id="informatica" required>
                                                                        <option value="Básico">Básico</option>
                                                                        <option value="Intermediário">Intermediário</option>
                                                                        <option value="Avançado">Avançado</option>
                                                                        <option value="Nenhum">Nenhum</option>                                                                    
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="ingles">Possui conhecimento de Inglês?</label>
                                                                    <select class="form-control" name="ingles" id="ingles" required>
                                                                        <option value="Básico">Básico</option>
                                                                        <option value="Intermediário">Intermediário</option>
                                                                        <option value="Avançado">Avançado</option>
                                                                        <option value="Nenhum">Nenhum</option>                                                                                                                                         
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Informatica / Ingles -->
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <div id="general-info" class="section general-info">
                                <div class="info">
                                    <h6 class="">Cursos</h6>
                                    <div class="row">
                                        <div class="col-lg-12 mx-auto">
                                            <div class="row">                                            
                                                <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                    <div class="form">                                                    
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="informatica">Tamanho para Confecção dos Uniformes</label>
                                                                    <figure>
                                                                        <img class="rounded img-fluid" src="{{ asset('assets/img/0Tabela-de-Tamanhos-das-Camisetas.jpg')}}" alt="">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="tamanho_uniforme">Possui conhecimento de Inglês?</label>
                                                                    <select class="form-control" name="tamanho_uniforme" id="tamanho_uniforme" required>
                                                                        <option value selected disabled>Escolher</option>
                                                                        <option value="FEMININO: Baby Look P">FEMININO: Baby Look P</option>
                                                                        <option value="FEMININO: Baby Look M">FEMININO: Baby Look M</option>
                                                                        <option value="FEMININO: Baby Look G">FEMININO: Baby Look G</option>
                                                                        <option value="FEMININO: Baby Look GG">FEMININO: Baby Look GG</option>
                                                                        <option value="MASCULINO: P">MASCULINO: P</option>
                                                                        <option value="MASCULINO: M">MASCULINO: M</option>
                                                                        <option value="MASCULINO: G">MASCULINO: G</option>
                                                                        <option value="MASCULINO: GG">MASCULINO: GG</option>                                                                    
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <!-- Informatica / Ingles -->
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <div id="general-info" class="section general-info">
                                <div class="info">
                                    <h6 class="">Envie seu currículo</h6>                                
                                    <div class="row"> 
                                        <div class="col-12">
                                            <div class="form-group mb-4 mt-3">
                                                <label for="curriculo">Faça upload de 1 arquivo aceito: PDF, document ou image. O tamanho máximo é de 10 MB.</label>
                                                <input type="file" class="form-control-file" id="curriculo" name="curriculo">
                                            </div>                                    
                                        </div>                                   
                                    </div>
                                </div>
                            </div>
                        </div>            
    
                    </div>
                </div>
            </div>
            <div class="account-settings-footer">
                
                <div class="as-footer-container">
    
                    <button id="multiple-reset" class="btn btn-warning">Reset All</button>
                    <div class="blockui-growl-message">
                        <i class="flaticon-double-check"></i>&nbsp; Settings Saved Successfully
                    </div>
                    <button id="multiple-messages" class="btn btn-primary">Save Changes</button>
    
                </div>
    
            </div>
        </form>

    </div>

</div>
@endsection


@push('custom-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify/dropify.min.css') }}">
<link href="{{ asset('assets/css/users/account-setting.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}">

<style>
    #reservistaDescription,
    #escolaridadeDescription{
        margin-left: 10px;
    }

    #escolaridadeDescription{
        width: 400px;
    }

    .account-settings-footer{
        width: 100%;
    }
</style>
@endpush

@push('custom-scripts')
<script src="{{ asset('plugins/dropify/dropify.min.js') }}"></script>
<script src="{{ asset('plugins/blockui/jquery.blockUI.min.js') }}"></script>
<!-- <script src="plugins/tagInput/tags-input.js"></script> -->
<script src="{{ asset('assets/js/users/account-settings.js') }}"></script>

<script src="{{ asset('plugins/highlight/highlight.pack.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/scrollspyNav.js') }}"></script>


<script>
    /** 
     * Função para mostrar ou esconder o campo de justificativa.
     * @param {boolean} mostrar - Define se o campo de justificativa deve ser exibido.
     */
    function toggleJustificativa(mostrar){
        const reservistaDescription = document.getElementById('reservistaDescription');

        if (mostrar){
            reservistaDescription.disabled = false;
        } else {
            reservistaDescription.disabled = true;
            
        }
    }

    function toggleEscolaridade(mostrar){
        const escolaridadeDescription = document.getElementById('escolaridadeDescription');

        if (mostrar){
            escolaridadeDescription.disabled = false;
        } else {
            escolaridadeDescription.disabled = true;
            
        }
    }

    function toggleParticipouSelecao(mostrar){
        const participou_selecao_outro = document.getElementById('participou_selecao_outro_description');

        if (mostrar){
            participou_selecao_outro.disabled = false;
        } else {
            participou_selecao_outro.disabled = true;
            
        }
    }
</script>
@endpush





