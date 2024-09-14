@extends('layouts.app')

@section('content')
    <div class="landing">
        <!-- Slider   -->
        <section class="bg-secondary common-slider p-0">
            <div class="container">
                <div class="row align-items-center pb-100">
                    <div class="col-lg-5 slider-left-wrapper">
                        <div class="slider-left-wrapper-content">
                            <p class="slider-title">Happy Case Managers.</p>
                            <p class="slider-subtitle">Empowered Families.</p>
                            <p class="slider-description text-light">Aaminah's House is a preferred DFCS provider for licensed,
                                professional, and paraprofessional family support
                                services.</p>
                        </div>

                    </div>
                    <div class="col-lg-7">
                        <div class="slider-image-wrapper">
                            <img src="{{asset('assets/frontend/images/svg/landing-page-slider-img.png')}}" alt="Aaminah's House Slider Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Comprehensive content   -->
        <section class="card-content">
            <div class="container">
                <div>
                    <p class="title">Comprehensive Family Support Services</p>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card common-box-shadow border-0">
                            <div class="card-body">
                                <img src="{{asset('assets/frontend/images/svg/transportation-icon.svg')}}">
                                <h5 class="sub-title">Transportation</h5>
                                <p>Ensures transportation to family visits, school, doctor appointments etc. are always
                                    available.</p>
                                <a href="{{route('services')}}" class="btn btn-blue text-white card-btn">Learn More</a>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card common-box-shadow border-0">
                            <div class="card-body">
                                <img src="{{asset('assets/frontend/images/svg/therapy-icon.svg')}}">
                                <h5 class="sub-title">Therapy</h5>
                                <p>Home based, family-centered therapeutic services that addresses problematic behavior,
                                    improves
                                    communication , and enhances parenting skills.</p>
                                <a href="{{route('services')}}" class="btn btn-blue text-white card-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card common-box-shadow border-0">
                            <div class="card-body">
                                <img src="{{asset('assets/frontend/images/svg/supervised-visits-icon.svg')}}">
                                <h5 class="sub-title">Supervised Visits</h5>
                                <p>Coordinated and scheduled visits allow parents to practice appropriate parenting behavior
                                    and
                                    obtain constructive feedback.</p>
                                <a href="{{route('services')}}" class="btn btn-blue text-white card-btn">Learn More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card common-box-shadow border-0">
                            <div class="card-body">
                                <img src="{{asset('assets/frontend/images/svg/assessments-icon.svg')}}">
                                <h5 class="sub-title">Assessments</h5>
                                <p>Assessments for CCFA, domestic violence , parental fitness, home evaluations, etc are
                                    used to
                                    objectively assess safety.</p>
                                <a href="{{route('services')}}" class="btn btn-blue text-white card-btn">Learn More</a>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card common-box-shadow border-0">
                            <div class="card-body">
                                <img src="{{asset('assets/frontend/images/svg/behavioral-aide-icon.svg')}}">
                                <h5 class="sub-title">Behavioral Aide</h5>
                                <p>Provides education and modeling of positive parenting behavior.</p>
                                <a href="{{route('services')}}" class="btn btn-blue text-white card-btn">Learn More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card common-box-shadow border-0">
                            <div class="card-body">
                                <img src="{{asset('assets/frontend/images/svg/hoteling-icon.svg')}}">
                                <h5 class="sub-title">Hoteling</h5>
                                <p>Immediately secures hotel, transportation, and supervision.</p>
                                <a href="{{route('services')}}" class="btn btn-blue text-white card-btn">Learn More</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
