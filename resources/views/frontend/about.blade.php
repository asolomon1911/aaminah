@extends('layouts.app')

@section('content')
    <!-- Slider   -->
    <section class="bg-secondary common-slider p-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 slider-left-wrapper">
                    <p class="top-small-title margin-bottom-5">THE ART OF SAVING FAMILIES</p>
                    <p class="slider-title m-0"><span class="text-black">Breaking</span> Barriers.</p>
                    <p class="slider-title margin-bottom-5"><span class="text-black">Building </span> Futures.</p>
                    <p class="slider-description text-light">At Aaminah's House, we eliminate the barriers that traditionally make
                        it difficult and uncomfortable for
                        clients
                        to take advantage of support services.
                    </p>
                    <div class="slider-left-button-wrapper mt-5">
                        <a href="{{route('contact')}}" class="btn btn-primary">Contact us</a>
                        <img src="{{asset('assets/frontend/images/svg/round-arrow.svg')}}" class="round-arrow" alt="Aaminah's House Slider Image">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="slider-image-wrapper">
                        <img src="{{asset('assets/frontend/images/svg/about-slider-img.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content   -->
    <section class="common-content-wrapper common-margin-top">
        <div class="container">
            <div class="row w-100 d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="about-content-image-wrapper">
                        <img src="{{asset('assets/frontend/images/svg/about-dedicated-img.png')}}">
                    </div>
                </div>
                <div class="col-lg-6 common-content">
                    <p class="slider-common-title">Dedicated to Empowerment and <span
                            class="text-black">Positive Change</span></p>
                    <p>At Aaminah's House, our mission is to eliminate the barriers that traditionally make it difficult and
                        uncomfortable for clients to take advantage of support services. We believe in providing
                        home-based
                        services that are accessible, flexible, and tailored to the unique needs of each family.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="common-content-wrapper">
        <div class="container">
            <div class="row w-100 d-flex align-items-center common-reverse-content">
                <div class="col-lg-6 common-content">
                    <p class="slider-common-title">Personalized<br><span
                            class="text-black">Support for Every Family</span></p>
                    <p>We understand that every family is different, and we reject "cookie cutter" treatment modalities.
                        Our
                        services are highly individualized and client-specific, promoting accountability, enhancing
                        parenting skills, and ensuring family preservation and child safety. By offering engaging and
                        culturally sensitive services, we empower our clients to believe that positive change is
                        possible.</p>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-image-wrapper">
                        <img src="{{asset('assets/frontend/images/svg/about-personalized-img.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="common-content-wrapper">
        <div class="container">
            <div class="row w-100 d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="about-content-image-wrapper">
                        <img src="{{asset('assets/frontend/images/svg/about-our-team-img.png')}}">
                    </div>
                </div>
                <div class="col-lg-6 common-content">
                    <p class="slider-common-title"><span class="text-black">Join Our Team.</span></p>
                    <p>We are passionate about helping children and families thrive. If you share our commitment to
                        making a
                        positive impact and want to be part of a growing team of professionals, consider joining us.</p>
                    <button class="btn btn-primary">Apply Today</button>
                </div>
            </div>
        </div>
    </section>
@endsection
