@extends('dashboard')

@section('content')
<div class="layout-px-spacing">
    <div class="page-header">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('empresas.index') }}">Empresas</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Nova Empresa</a></li>
            </ol>
        </nav>
    </div>                
        
    <div class="account-settings-container layout-top-spacing">

        <form action="{{ route('empresas.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="account-content">
                <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                    <div class="row">
    
                        <!-- Informações Pessoais -->
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <div id="general-info" class="section general-info">
                                <div class="info">
                                    <h6 class="">Cadastro da Empresa</h6>
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">                                            
                                                <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">                                                    
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="cnpj">CNPJ*</label>
                                                                <input type="text" class="form-control mb-4" id="cnpj" name="cnpj" placeholder="Somente Números" value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="razao_social">Razão Social*</label>
                                                                <input type="text" class="form-control mb-4" id="razao_social" name="razao_social" placeholder="Razão Social da Empresa" value="" required>
                                                            </div>
                                                        </div>                                                           
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="nome_fantasia">Nome Fantasia*</label>
                                                                <input type="text" class="form-control mb-4" id="nome_fantasia" name="nome_fantasia" placeholder="Nome da Empresa" value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="cep">CEP*</label>
                                                                <input type="text" class="form-control mb-4" id="cep" name="cep" placeholder="Somente números" value="" required>
                                                            </div>
                                                        </div>                                                           
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label for="endereco">Endereço*</label>
                                                                <input type="text" class="form-control mb-4" id="endereco" name="endereco" placeholder="R./Av." value="" required>
                                                            </div>
                                                        </div>                                                                                                                  
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="numero">Número*</label>
                                                                <input type="text" class="form-control mb-4" id="numero" name="numero" placeholder="" value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="complemento">complemento*</label>
                                                                <input type="text" class="form-control mb-4" id="complemento" name="complemento" placeholder="" value="" required>
                                                            </div>
                                                        </div>                                                           
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="pais">Pais*</label>
                                                                <input type="text" class="form-control mb-4" id="pais" name="pais" placeholder="" value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label for="cidade">Cidade*</label>
                                                                <input type="text" class="form-control mb-4" id="cidade" name="cidade" placeholder="" value="" required>
                                                            </div>
                                                        </div>  
                                                        <div class="col-sm-2">
                                                            <div class="form-group">
                                                                <label for="uf">UF*</label>
                                                                <select class="form-control mb-4" id="uf" name="uf">
                                                                    <option selected disabled>Escolher</option>
                                                                    <option value="AC">AC</option>
                                                                    <option value="AL">AL</option>
                                                                    <option value="AP">AP</option>
                                                                    <option value="AM">AM</option>
                                                                    <option value="BA">BA</option>
                                                                    <option value="CE">CE</option>
                                                                    <option value="DF">DF</option>
                                                                    <option value="ES">ES</option>
                                                                    <option value="ES">GO</option>
                                                                    <option value="MA">MA</option>
                                                                    <option value="MG">MG</option>
                                                                    <option value="MS">MS</option>
                                                                    <option value="MT">MT</option>
                                                                    <option value="PA">PA</option>
                                                                    <option value="PB">PB</option>
                                                                    <option value="PE">PE</option>
                                                                    <option value="PI">PI</option>
                                                                    <option value="PR">PR</option>
                                                                    <option value="RJ">RJ</option>
                                                                    <option value="RN">RN</option>
                                                                    <option value="RO">RO</option>
                                                                    <option value="RS">RS</option>
                                                                    <option value="RR">RR</option>
                                                                    <option value="SC">SC</option>
                                                                    <option value="SE">SE</option>
                                                                    <option value="SP">SP</option>
                                                                    <option value="TO">TO</option>
                                                                </select>                                                                
                                                            </div>
                                                        </div>     

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="nome_representante_legal">Nome do representante legal*</label>
                                                                <input type="text" class="form-control mb-4" id="nome_representante_legal" name="nome_representante_legal" placeholder="" value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="sobrenome_representante_legal">Sobrenome*</label>
                                                                <input type="text" class="form-control mb-4" id="sobrenome_representante_legal" name="sobrenome_representante_legal" placeholder="" value="" required>
                                                            </div>
                                                        </div>                                                           
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="cpf">CPF*</label>
                                                                <input type="text" class="form-control mb-4" id="cpf" name="cpf" placeholder="Somente números" value="" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="email">E-mail*</label>
                                                                <input type="email" class="form-control mb-4" id="email" name="email" placeholder="" value="" required>
                                                            </div>
                                                        </div>                                                           
                                                    </div>                                                                                                       
                                                </div>
                                                <div class="col-xl-2 col-lg-12 col-md-4 coluna-upload">
                                                    <div class="upload mt-4 pl-md-4">
                                                        <input name="logotipo" type="file" id="input-file-max-fs" class="dropify" data-default-file="{{ asset('assets/img/200x200.jpg') }}" data-max-file-size="2M" />
                                                        <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Logotipo</p>
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
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                    <div class="account-settings-footer">
                        
                        <div class="as-footer-container">
            
                            <a href="{{ route('candidatos.index') }}" id="multiple-reset" class="btn btn-warning">Voltar</a>
                            <div class="blockui-growl-message">
                                <i class="flaticon-double-check"></i>&nbsp; Settings Saved Successfully
                            </div>
                            <button id="multiple-messages" class="btn btn-primary">Salvar</button>
            
                        </div>
            
                    </div>

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

    .account-settings-footer{
        width: calc(100% - 78px);
    }

    .general-info .info .upload {
        
        border-right: none;
    }

    .general-info .info .coluna-upload {
        border-left: 1px solid #ebedf2;        
        
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


@endpush





