@extends('layouts.app')

@section('content')
    <div class="services">
        <!-- Slider   -->
        <section class="bg-secondary common-slider p-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 slider-left-wrapper">
                        <p class="top-small-title margin-bottom-5">ROADMAP TO SUCCESS</p>
                        <p class="slider-title fs-1 margin-bottom-5"><span
                                class="text-black">Empowering Families.</span></p>
                        <p class="slider-title fs-1 margin-bottom-5">Transforming Lives.</p>
                        <p class="slider-description text-light ">Our services promote safety and self sufficiency.
                        </p>
                        <div class="slider-left-button-wrapper mt-4">
                            <a href="{{route('contact')}}" class="btn btn-primary">Contact us</a>
                            <img src="{{asset('assets/frontend/images/svg/round-arrow.svg')}}" class="round-arrow">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="slider-image-wrapper">
                            <img src="{{asset('assets/frontend/images/svg/services-slider-img.png')}}" alt="Aaminah's House Slider Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content   -->
        <section class="card-content">
            <div class="container ">
                <div class="text-center ">
                    <p class="title text-primary"><span class="text-black">Individualized</span> Support Services</p>
                    <p class="max-w-750 mx-auto">Aaminah's House’s unique approach to services facilitates teaching, modeling, and
                        problem solving of real life
                        situations in the family’s natural environment – their home. Simultaneously, our programs seek
                        to
                        prevent abuse, neglect, and ultimately the placement of children outside of the home. </p>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card common-box-shadow border-0">
                            <div class="card-body">
                                <img src="{{asset('assets/frontend/images/svg/wrap-around-icon.svg')}}">
                                <h5 class="sub-title">Wrap Around</h5>
                                <p>Comprehensive services designed to support children placed in foster care or with
                                    relative
                                    caregivers.</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card common-box-shadow border-0">
                            <div class="card-body">
                                <img src="{{asset('assets/frontend/images/svg/ccfa-icon.svg')}}">
                                <h5 class="sub-title">CCFA</h5>
                                <p>Assists in developing case plans, making placement decisions, expediting permanency,
                                    and service
                                    intervention planning.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card common-box-shadow border-0">
                            <div class="card-body">
                                <img src="{{asset('assets/frontend/images/svg/homestead-icon.svg')}}">
                                <h5 class="sub-title">Homestead</h5>
                                <p>Intensive, in-home therapeutic services designed to reduce safety risks, provide
                                    crisis
                                    intervention, and prevent out of home placement.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card common-box-shadow border-0">
                            <div class="card-body">
                                <img src="{{asset('assets/frontend/images/svg/parent-aide-icon.svg')}}">
                                <h5 class="sub-title">Parent Aide</h5>
                                <p>Family support and prevention program offering parenting education, training, and
                                    family support
                                    in the home.</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card common-box-shadow border-0">
                            <div class="card-body">
                                <img src="{{asset('assets/frontend/images/svg/parenting-class-icon.svg')}}">
                                <h5 class="sub-title">Parenting Class</h5>
                                <p>Interactive, engaging parenting training that teaches communication, appropriate
                                    discipline, and
                                    reduces the risk of negligence and abuse.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="card common-box-shadow border-0">
                            <div class="card-body">
                                <img src="{{asset('assets/frontend/images/svg/early-intervention-icon.svg')}}">
                                <h5 class="sub-title">Early Intervention</h5>
                                <p>Ensure children have a safe, stable, and supportive family setting through intensive
                                    home
                                    visitation, case management, and referral services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card common-box-shadow border-0">
                            <div class="card-body">
                                <img src="{{asset('assets/frontend/images/svg/pup-icon.svg')}}">
                                <h5 class="sub-title">PUP</h5>
                                <p>Services reduces risk factors contributing to child maltreatment and promotes the
                                    protection and
                                    safety of children.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
