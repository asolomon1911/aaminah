@extends('layouts.app')

@section('content')
    <!-- Slider   -->
    <section class="bg-secondary common-slider p-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 slider-left-wrapper">
                    <p class="top-small-title margin-bottom-5">We care</p>
                    <p class="slider-title m-0">Personalized Support. <span class="text-black">Real Results.</span></p>
                    <p class="slider-description text-light">We bring therapeutic programs, activities, and training to your front door.
                    </p>
                    <div class="slider-left-button-wrapper mt-5">
                        <a href="{{route('contact')}}" class="btn btn-primary">Contact us</a>
                        <img src="{{asset('assets/frontend/images/svg/round-arrow.svg')}}" class="round-arrow">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="slider-image-wrapper">
                        <img src="{{asset('assets/frontend/images/svg/the-ally-difference-slider-img.png')}}" alt="Aaminah's House Slider Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content   -->
    <section class="card-content">
        <div class="container">
            <div>
                <p class="title">A <span class="text-primary">Different</span> Experience</p>
                <p class="max-w-750 mx-auto">Aaminah's House staff are sensitive to the needs and are a reflection of the diverse population we serve. This
                    maximizes the therapeutic alliance and improves outcomes.</p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card common-box-shadow border-0">
                        <div class="card-body">
                            <img src="{{asset('assets/frontend/images/svg/immediate-and-flexible-availability-icon.svg')}}">
                            <h5 class="sub-title">Immediate and Flexible Availability</h5>
                            <p>Immediate and flexible availability is an integral part of our program philosophy. Clients have
                                24/7 access to services, including crisis intervention services.</p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card common-box-shadow border-0">
                        <div class="card-body">
                            <img src="{{asset('assets/frontend/images/svg/family-centered-approach-icon.svg')}}">
                            <h5 class="sub-title">Family Centered Approach</h5>
                            <p>This comprehensive approach uses dynamic, engaging methods to make therapy family driven vs
                                therapist driven.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card common-box-shadow border-0">
                        <div class="card-body">
                            <img src="{{asset('assets/frontend/images/svg/in-home-service-provision-icon.svg')}}">
                            <h5 class="sub-title">In-Home Service Provision</h5>
                            <p>Extends the Aaminah's House worker to the family and allows evaluation of the family or individual in their
                                natural environment.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card common-box-shadow border-0">
                        <div class="card-body">
                            <img src="{{asset('assets/frontend/images/svg/accountability-icon.svg')}}">
                            <h5 class="sub-title">Accountability</h5>
                            <p>Programs are geared towards empowering parents as they discover and build their own strengths,
                                skills, decision making, competency, and independence.</p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card common-box-shadow border-0">
                        <div class="card-body">
                            <img src="{{asset('assets/frontend/images/svg/community-based-and-culturally-sensitive-icon.svg')}}">
                            <h5 class="sub-title">Community Based and Culturally Sensitive</h5>
                            <p>Our multicultural team composition provides a framework for culturally appropriate practices.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card common-box-shadow border-0">
                        <div class="card-body">
                            <img src="{{asset('assets/frontend/images/svg/individualized-goal-specific-family-plans-icon.svg')}}">
                            <h5 class="sub-title">Individualized, Goal Specific Family Plans</h5>
                            <p>Interventions and services are highly individualized and tailored to the needs and preferences of
                                the family.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
