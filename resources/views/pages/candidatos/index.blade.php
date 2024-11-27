@extends('dashboard')


@section('content')


<div class="layout-px-spacing">
    <div class="page-header">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboad</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Analytics</a></li>
            </ol>
        </nav>
        <div class="dropdown filter custom-dropdown-icon">
            <a class="dropdown-toggle btn" href="#" role="button" id="filterDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text"><span>Show</span> : Daily Analytics</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="filterDropdown">
                <a class="dropdown-item" data-value="<span>Show</span> : Daily Analytics" href="javascript:void(0);">Daily Analytics</a>
                <a class="dropdown-item" data-value="<span>Show</span> : Weekly Analytics" href="javascript:void(0);">Weekly Analytics</a>
                <a class="dropdown-item" data-value="<span>Show</span> : Monthly Analytics" href="javascript:void(0);">Monthly Analytics</a>
                <a class="dropdown-item" data-value="Download All" href="javascript:void(0);">Download All</a>
                <a class="dropdown-item" data-value="Share Statistics" href="javascript:void(0);">Share Statistics</a>
            </div>
        </div>
    </div>



    <div class="row layout-top-spacing">



        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-card-four">
                <div class="widget-content">
                    <div class="w-header">
                        <div class="w-info">
                            <h6 class="value">Todos os candidatos</h6>
                        </div>

                    </div>

                    <div class="w-content">

                        <div class="w-info">
                            <p class="value">{{$todos}} <span>candidatos</span> </p>
                        </div>

                    </div>

                </div>
            </div>
        </div>


        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-card-four">
                <div class="widget-content">
                    <div class="w-header">
                        <div class="w-info">
                            <h6 class="value">Candidatos ativos</h6>
                        </div>

                    </div>

                    <div class="w-content">

                        <div class="w-info">
                            <p class="value">{{$ativos}} <span>ativos</span> </p>
                        </div>

                    </div>

                    <div class="w-progress-stats">
                        <div class="progress">
                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <div class="">
                            <div class="w-icon">
                                <p>100%</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-card-four">
                <div class="widget-content">
                    <div class="w-header">
                        <div class="w-info">
                            <h6 class="value">Candidatos inativos</h6>
                        </div>

                    </div>

                    <div class="w-content">

                        <div class="w-info">
                            <p class="value">{{$inativos}} <span>inativos</span> </p>
                        </div>

                    </div>

                    <div class="w-progress-stats">
                        <div class="progress">
                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <div class="">
                            <div class="w-icon">
                                <p>0%</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-activity-five">

                <div class="widget-heading">
                    <h5 class="">Candidatos Ativos</h5>
                </div>

                <div class="widget-content">

                    <div class="w-shadow-top"></div>

                    <div class="mt-container mx-auto ps ps--active-y">
                        <div class="timeline-line">


                            @foreach ($candidatos as $candidato)

                            <div class="item-timeline timeline-new">
                                <div class="t-dot" data-original-title="" title="">
                                    <div class="t-secondary">
                                        <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                    </div>
                                </div>
                                <div class="t-content">
                                    <div class="t-uppercontent">
                                        <h5>{{ $candidato->nome }} <a href="javscript:void(0);"><span>{{ $candidato->numero }}</span></a></h5>
                                    </div>
                                    <p>{{ $candidato->email }}</p>
                                    <p>{{ $candidato->create_at }}</p>

                                </div>
                                <div class="ativar">
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z" stroke="#1C274C" stroke-width="1.5"/>
                                        <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="green" stroke-width="1.5"/>
                                        </svg>
                                </div>
                            </div>



                            @endforeach


                        </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 332px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 227px;"></div></div></div>

                    <div class="w-shadow-bottom"></div>
                </div>
            </div>
        </div>




        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
            <div class="widget widget-activity-five">

                <div class="widget-heading">
                    <h5 class="">Candidatos Inativos</h5>
                </div>

                <div class="widget-content">

                    <div class="w-shadow-top"></div>

                    <div class="mt-container mx-auto ps ps--active-y">
                        <div class="timeline-line">

                            @php
                                if($inativos > 0){

                            @endphp


                            @foreach ($candidatosina as $candidato)

                            <div class="item-timeline timeline-new">
                                <div class="t-dot" data-original-title="" title="">
                                    <div class="t-secondary">
                                        <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                    </div>
                                </div>
                                <div class="t-content">
                                    <div class="t-uppercontent">
                                        <h5>{{ $candidato->nome }} <a href="javscript:void(0);"><span>{{ $candidato->numero }}</span></a></h5>
                                    </div>
                                    <p>{{ $candidato->email }}</p>
                                    <p>{{ $candidato->create_at }}</p>
                                </div>

                                <div class="ativar">
                                    <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.27489 15.2957C2.42496 14.1915 2 13.6394 2 12C2 10.3606 2.42496 9.80853 3.27489 8.70433C4.97196 6.49956 7.81811 4 12 4C16.1819 4 19.028 6.49956 20.7251 8.70433C21.575 9.80853 22 10.3606 22 12C22 13.6394 21.575 14.1915 20.7251 15.2957C19.028 17.5004 16.1819 20 12 20C7.81811 20 4.97196 17.5004 3.27489 15.2957Z" stroke="#1C274C" stroke-width="1.5"/>
                                        <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="red" stroke-width="1.5"/>
                                        </svg>
                                </div>


                            </div>
                            @endforeach


                            @php
                                }else{
                            @endphp



                                    <h5>Nenhum inativo</h5>


                            @php
                                }
                            @endphp


                        </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 332px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 227px;"></div></div></div>

                    <div class="w-shadow-bottom"></div>
                </div>
            </div>
        </div>




    </div>




</div>



@endsection



@push('custom-styles')
<link href="{{ asset('plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('custom-scripts')
<script src="{{ asset('plugins/apex/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/dashboard/dash_2.js') }}"></script>
@endpush
