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

        <div class="account-content">
            <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                        <form id="general-info" class="section general-info">
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
                        </form>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                        <form id="about" class="section about">
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
                                    
                                    <div class="col-xl-10 col-lg-9 col-sm-10 d-flex">
                                        <div class="form-check mb-2">
                                            <div class="custom-control custom-radio classic-radio-info">
                                                <input type="radio" id="reservista-sim" name="reservista" onclick="toggleJustificativa(false)" class="custom-control-input" value="Sim">
                                                <label class="custom-control-label" for="reservista-sim">Sim</label>
                                            </div>
                                        </div>
                                        <div class="form-check mb-2">
                                            <div class="custom-control custom-radio classic-radio-info">
                                                <input type="radio" id="reservista-nao" name="reservista" onclick="toggleJustificativa(false)" class="custom-control-input" value="Não">
                                                <label class="custom-control-label" for="reservista-nao">Não</label>
                                            </div>
                                        </div>
                                        <div class="form-check mb-2">
                                            <div class="custom-control custom-radio classic-radio-default">
                                                <input type="radio" id="reservista-outro" name="reservista" onclick="toggleJustificativa(true)" class="custom-control-input" value="Outro">
                                                <label class="custom-control-label" for="reservista-outro">Outro</label>                                                
                                            </div>
                                            <div class="custom-control custom-radio classic-radio-default" id="justificativa-container" style="display:none; margin-top: 10px;">
                                                <label class="custom-control-label" for="justificativa">Por favor, descreva o documento:</label>                                                
                                                <textarea id="justificativa"  class="form-control mb-4" name="justificativa"></textarea>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                        <form id="work-platforms" class="section work-platforms">
                            <div class="info">
                                <h5 class="">Work Platforms</h5>
                                <div class="row">
                                    <div class="col-md-12 text-right mb-5">
                                        <button id="add-work-platforms" class="btn btn-primary">Add</button>
                                    </div>
                                    <div class="col-md-11 mx-auto">

                                        <div class="platform-div">
                                            <div class="form-group">
                                                <label for="platform-title">Platforms Title</label>
                                                <input type="text" class="form-control mb-4" id="platform-title" placeholder="Platforms Title" value="Web Design" >
                                            </div>
                                            <div class="form-group">
                                                <label for="platform-description">Description</label>
                                                <textarea class="form-control mb-4" id="platform-description" placeholder="Platforms Description" rows="10">Duis aute irure dolor in reprehenderit in voluptate velit esse eu fugiat nulla pariatur.</textarea>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                        <form id="contact" class="section contact">
                            <div class="info">
                                <h5 class="">Contact</h5>
                                <div class="row">
                                    <div class="col-md-11 mx-auto">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="country">Country</label>
                                                    <select class="form-control" id="country">
                                                        <option>All Countries</option>
                                                        <option selected>United States</option>
                                                        <option>India</option>
                                                        <option>Japan</option>
                                                        <option>China</option>
                                                        <option>Brazil</option>
                                                        <option>Norway</option>
                                                        <option>Canada</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <input type="text" class="form-control mb-4" id="address" placeholder="Address" value="New York" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="location">Location</label>
                                                    <input type="text" class="form-control mb-4" id="location" placeholder="Location">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone">Phone</label>
                                                    <input type="text" class="form-control mb-4" id="phone" placeholder="Write your phone number here" value="+1 (530) 555-12121">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="text" class="form-control mb-4" id="email" placeholder="Write your email here" value="Jimmy@gmail.com">
                                                </div>
                                            </div>                                    
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="website1">Website</label>
                                                    <input type="text" class="form-control mb-4" id="website1" placeholder="Write your website here">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                        <form id="social" class="section social">
                            <div class="info">
                                <h5 class="">Social</h5>
                                <div class="row">

                                    <div class="col-md-11 mx-auto">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group social-linkedin mb-3">
                                                    <div class="input-group-prepend mr-3">
                                                        <span class="input-group-text" id="linkedin"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="linkedin Username" aria-label="Username" aria-describedby="linkedin" value="jimmy_turner">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="input-group social-tweet mb-3">
                                                    <div class="input-group-prepend mr-3">
                                                        <span class="input-group-text" id="tweet"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Twitter Username" aria-label="Username" aria-describedby="tweet" value="@jTurner">
                                                </div>
                                            </div>                                                        
                                        </div>
                                    </div>

                                    <div class="col-md-11 mx-auto">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group social-fb mb-3">
                                                    <div class="input-group-prepend mr-3">
                                                        <span class="input-group-text" id="fb"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Facebook Username" aria-label="Username" aria-describedby="fb" value="Jimmy Turner">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="input-group social-github mb-3">
                                                    <div class="input-group-prepend mr-3">
                                                        <span class="input-group-text" id="github"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Github Username" aria-label="Username" aria-describedby="github" value="@TurnerJimmy">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                        <div id="skill" class="section skill">
                            <div class="info">
                                <h5 class="">Skills</h5>
                                <div class="row progress-bar-section">

                                    <div class="col-md-12 mx-auto">
                                        <div class="form-group">

                                            <div class="row">
                                                <div class="col-md-11 mx-auto">
                                                    <div class="input-form">
                                                        <input type="text" class="form-control" id="skills" placeholder="Add Your Skills Here" value="">
                                                        <button id="add-skills" class="btn btn-primary">Add</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-11 mx-auto">
                                        <div class="custom-progress top-right progress-up" style="width: 100%">
                                            <p class="skill-name">PHP</p>
                                            <input type="range" min="0" max="100" class="custom-range progress-range-counter" value="25">
                                            <div class="range-count"><span class="range-count-number" data-rangecountnumber="25">25</span> <span class="range-count-unit">%</span></div>
                                        </div>
                                    </div>
                                    <div class="col-md-11 mx-auto">
                                        <div class="custom-progress top-right progress-up" style="width: 100%">
                                            <p class="skill-name">Wordpress</p>
                                            <input type="range" min="0" max="100" class="custom-range progress-range-counter" value="50">
                                            <div class="range-count"><span class="range-count-number" data-rangecountnumber="50">50</span> <span class="range-count-unit">%</span></div>
                                        </div>
                                    </div>
                                    <div class="col-md-11 mx-auto">
                                        <div class="custom-progress top-right progress-up" style="width: 100%">
                                            <p class="skill-name">Javascript</p>
                                            <input type="range" min="0" max="100" class="custom-range progress-range-counter" value="70">
                                            <div class="range-count"><span class="range-count-number" data-rangecountnumber="70">70</span> <span class="range-count-unit">%</span></div>
                                        </div>
                                    </div>
                                    <div class="col-md-11 mx-auto">
                                        <div class="custom-progress top-right progress-up" style="width: 100%">
                                            <p class="skill-name">jQuery</p>
                                            <input type="range" min="0" max="100" class="custom-range progress-range-counter" value="60">
                                            <div class="range-count"><span class="range-count-number" data-rangecountnumber="60">60</span> <span class="range-count-unit">%</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                        <form id="edu-experience" class="section edu-experience">
                            <div class="info">
                                <h5 class="">Education</h5>
                                <div class="row">
                                    <div class="col-md-12 text-right mb-5">
                                        <button id="add-education" class="btn btn-primary">Add</button>
                                    </div>
                                    <div class="col-md-11 mx-auto">

                                        <div class="edu-section">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="degree1">Enter Your Collage Name</label>
                                                        <input type="text" class="form-control mb-4" id="degree1" placeholder="Add your education here" value="Royal Collage of Art Designer Illustrator">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Starting From</label>

                                                                <div class="row">

                                                                    <div class="col-md-6">
                                                                        <select class="form-control mb-4" id="s-from1">
                                                                            <option>Month</option>
                                                                            <option>Jan</option>
                                                                            <option>Feb</option>
                                                                            <option>Mar</option>
                                                                            <option>Apr</option>
                                                                            <option selected="selected">May</option>
                                                                            <option>Jun</option>
                                                                            <option>Jul</option>
                                                                            <option>Aug</option>
                                                                            <option>Sep</option>
                                                                            <option>Oct</option>
                                                                            <option>Nov</option>
                                                                            <option>Dec</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <select class="form-control mb-4" id="s-from2">
                                                                            <option>Year</option>
                                                                            <option>2020</option>
                                                                            <option>2019</option>
                                                                            <option>2018</option>
                                                                            <option>2017</option>
                                                                            <option>2016</option>
                                                                            <option>2015</option>
                                                                            <option>2014</option>
                                                                            <option>2013</option>
                                                                            <option>2012</option>
                                                                            <option>2011</option>
                                                                            <option>2010</option>
                                                                            <option selected="selected">2009</option>
                                                                            <option>2008</option>
                                                                            <option>2007</option>
                                                                            <option>2006</option>
                                                                            <option>2005</option>
                                                                            <option>2004</option>
                                                                            <option>2003</option>
                                                                            <option>2002</option>
                                                                            <option>2001</option>
                                                                            <option>2000</option>
                                                                            <option>1999</option>
                                                                            <option>1998</option>
                                                                            <option>1997</option>
                                                                            <option>1996</option>
                                                                            <option>1995</option>
                                                                            <option>1994</option>
                                                                            <option>1993</option>
                                                                            <option>1992</option>
                                                                            <option>1991</option>
                                                                            <option>1990</option>
                                                                        </select>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Ending In</label>

                                                                <div class="row">

                                                                    <div class="col-md-6 mb-4">
                                                                        <select class="form-control" id="end-in1">
                                                                            <option>Month</option>
                                                                            <option>Jan</option>
                                                                            <option>Feb</option>
                                                                            <option>Mar</option>
                                                                            <option>Apr</option>
                                                                            <option>May</option>
                                                                            <option>Jun</option>
                                                                            <option>Jul</option>
                                                                            <option>Aug</option>
                                                                            <option>Sep</option>
                                                                            <option>Oct</option>
                                                                            <option>Nov</option>
                                                                            <option>Dec</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <select class="form-control input-sm" id="end-in2">
                                                                            <option>Year</option>
                                                                            <option>2020</option>
                                                                            <option>2019</option>
                                                                            <option>2018</option>
                                                                            <option>2017</option>
                                                                            <option>2016</option>
                                                                            <option>2015</option>
                                                                            <option>2014</option>
                                                                            <option>2013</option>
                                                                            <option>2012</option>
                                                                            <option>2011</option>
                                                                            <option>2010</option>
                                                                            <option>2009</option>
                                                                            <option>2008</option>
                                                                            <option>2007</option>
                                                                            <option>2006</option>
                                                                            <option>2005</option>
                                                                            <option>2004</option>
                                                                            <option>2003</option>
                                                                            <option>2002</option>
                                                                            <option>2001</option>
                                                                            <option>2000</option>
                                                                            <option>1999</option>
                                                                            <option>1998</option>
                                                                            <option>1997</option>
                                                                            <option>1996</option>
                                                                            <option>1995</option>
                                                                            <option>1994</option>
                                                                            <option>1993</option>
                                                                            <option>1992</option>
                                                                            <option>1991</option>
                                                                            <option>1990</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <textarea class="form-control" placeholder="Description" rows="10"></textarea>
                                                </div>

                                            </div>
                                            
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                        <form id="work-experience" class="section work-experience">
                            <div class="info">
                                <h5 class="">Work Experience</h5>
                                <div class="row">
                                    <div class="col-md-12 text-right mb-5">
                                        <button id="add-work-exp" class="btn btn-primary">Add</button>
                                    </div>
                                    <div class="col-md-11 mx-auto">

                                        <div class="work-section">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="degree2">Company Name</label>
                                                        <input type="text" class="form-control mb-4" id="degree2" placeholder="Add your work here" value="Netfilx Inc.">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="degree3">Job Tilte</label>
                                                                <input type="text" class="form-control mb-4" id="degree3" placeholder="Add your work here" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="degree4">Location</label>
                                                                <input type="text" class="form-control mb-4" id="degree4" placeholder="Add your work here" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Starting From</label>

                                                                <div class="row">

                                                                    <div class="col-md-6">
                                                                        <select class="form-control mb-4" id="wes-from1">
                                                                            <option>Month</option>
                                                                            <option>Jan</option>
                                                                            <option>Feb</option>
                                                                            <option>Mar</option>
                                                                            <option>Apr</option>
                                                                            <option>May</option>
                                                                            <option>Jun</option>
                                                                            <option>Jul</option>
                                                                            <option>Aug</option>
                                                                            <option>Sep</option>
                                                                            <option>Oct</option>
                                                                            <option>Nov</option>
                                                                            <option>Dec</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <select class="form-control mb-4" id="wes-from2">
                                                                            <option>Year</option>
                                                                            <option>2020</option>
                                                                            <option>2019</option>
                                                                            <option>2018</option>
                                                                            <option>2017</option>
                                                                            <option>2016</option>
                                                                            <option>2015</option>
                                                                            <option>2014</option>
                                                                            <option>2013</option>
                                                                            <option>2012</option>
                                                                            <option>2011</option>
                                                                            <option>2010</option>
                                                                            <option>2009</option>
                                                                            <option>2008</option>
                                                                            <option>2007</option>
                                                                            <option>2006</option>
                                                                            <option>2005</option>
                                                                            <option>2004</option>
                                                                            <option>2003</option>
                                                                            <option>2002</option>
                                                                            <option>2001</option>
                                                                            <option>2000</option>
                                                                            <option>1999</option>
                                                                            <option>1998</option>
                                                                            <option>1997</option>
                                                                            <option>1996</option>
                                                                            <option>1995</option>
                                                                            <option>1994</option>
                                                                            <option>1993</option>
                                                                            <option>1992</option>
                                                                            <option>1991</option>
                                                                            <option>1990</option>
                                                                        </select>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Ending In</label>

                                                                <div class="row">

                                                                    <div class="col-md-6 mb-4">
                                                                        <select class="form-control" id="eiend-in1">
                                                                            <option>Month</option>
                                                                            <option>Jan</option>
                                                                            <option>Feb</option>
                                                                            <option>Mar</option>
                                                                            <option>Apr</option>
                                                                            <option>May</option>
                                                                            <option>Jun</option>
                                                                            <option>Jul</option>
                                                                            <option>Aug</option>
                                                                            <option>Sep</option>
                                                                            <option>Oct</option>
                                                                            <option>Nov</option>
                                                                            <option>Dec</option>
                                                                        </select>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <select class="form-control input-sm" id="eiend-in2">
                                                                            <option>Year</option>
                                                                            <option>2020</option>
                                                                            <option>2019</option>
                                                                            <option>2018</option>
                                                                            <option>2017</option>
                                                                            <option>2016</option>
                                                                            <option>2015</option>
                                                                            <option>2014</option>
                                                                            <option>2013</option>
                                                                            <option>2012</option>
                                                                            <option>2011</option>
                                                                            <option>2010</option>
                                                                            <option>2009</option>
                                                                            <option>2008</option>
                                                                            <option>2007</option>
                                                                            <option>2006</option>
                                                                            <option>2005</option>
                                                                            <option>2004</option>
                                                                            <option>2003</option>
                                                                            <option>2002</option>
                                                                            <option>2001</option>
                                                                            <option>2000</option>
                                                                            <option>1999</option>
                                                                            <option>1998</option>
                                                                            <option>1997</option>
                                                                            <option>1996</option>
                                                                            <option>1995</option>
                                                                            <option>1994</option>
                                                                            <option>1993</option>
                                                                            <option>1992</option>
                                                                            <option>1991</option>
                                                                            <option>1990</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <textarea class="form-control" placeholder="Description" rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </form>
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
    </div>

</div>
@endsection


@push('custom-styles')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/dropify/dropify.min.css') }}">
<link href="{{ asset('assets/css/users/account-setting.css') }}" rel="stylesheet" type="text/css" />
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
        const justificativaContainer = document.getElementById('justificativa-container');
        const justificativaField = document.getElementById('justificativa');

        if (mostrar){
            justificativaContainer.style.display = 'block';
            justificativaField.setAttribute('required', 'required');
        } else {
            justificativaContainer.style.display = 'none';
            justificativaField.removeAttribute('required');
            justificativaField.value = ''; // Limpa o campo caso fique escondido
        }
    }
</script>
@endpush

