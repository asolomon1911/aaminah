@extends('layouts.app')

@section('content')
    <!-- Slider   -->
    <div class="contact">
        <section class="bg-secondary common-slider p-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 slider-left-wrapper">
                        <p class="top-small-title margin-bottom-5">HOW CAN WE HELP?</p>
                        <p class="slider-title margin-bottom-5"><span class="text-black">Contact an</span> Aaminah's House</p>
                        <p class="slider-description text-light">We're here to help and answer any questions you might
                            have.</p>
                        <div class="slider-left-button-wrapper slider-opposite-arrow-wrapper mt-5">
                            <img src="{{asset('assets/frontend/images/svg/rotate-arrow-opposite.svg')}}" class="round-arrow">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="slider-image-wrapper">
                            <img src="{{asset('assets/frontend/images/svg/contact-us-slider-img.png')}}" alt="Aaminah's House Slider Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content   -->
        <section>
            <div class="container contact-container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-left-wrapper">
                            <p class="title text-start margin-bottom-5 max-w-400">We would love to hear from you!</p>
                            <p class="small-font margin-bottom-5 text-light pb-4">All fields are required</p>
                            <p>
                                <a href="mailto:info@allyconsult.org" class="text-decoration-none center-item">
                                    <img src="{{asset('assets/frontend/images/svg/contact-mail.svg')}}" class="height-34"/>
                                    <span> info@allyconsult.org</span>
                                </a>
                            </p>
                            <p>
                                <a class="text-decoration-none center-item" href="tel:+16788940028" >
                                    <img src="{{asset('assets/frontend/images/svg/contact-call.svg')}}"/>
                                    <span> (678) 894-0028</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 apply-position-wrapper" id="form">
                        <form method="post" action="{{route('send-contact-us-email')}}">
                            @csrf
                            <div class="row">
                                <p class="fs-5 fw-bold">Get in touch</p>
                                @if(Session::has('type'))
                                    <div class="alert alert-{{ Session::get('type') }}">
                                        {{ Session::get('message') }}
                                        @php
                                            Session::forget('type');
                                            Session::forget('message')
                                        @endphp
                                    </div>
                                @endif
                                <div class="col-lg-6">
                                    <div class="form-group m-2">
                                        <label>Name *</label>
                                        <input type="text" name="name" class="form-control" required
                                               placeholder="Ex: John Deo" value="{{old('name')}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group m-2">
                                        <label>Agency/County*</label>
                                        <input type="text" name="agency_county" class="form-control" required value="{{old('agency_county')}}"
                                               placeholder="Ex: ManksDev">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group m-2">
                                        <label>Email *</label>
                                        <input type="email" name="email" class="form-control" required
                                               placeholder="Ex: hello@domain.com" value="{{old('email')}}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group m-2">
                                        <label>Phone *</label>
                                        <input type="tel" name="phone" class="form-control" required
                                               placeholder="Ex: (123) 456-7890" value="{{old('phone')}}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group m-2">
                                        <label>How can we help*</label>
                                        <textarea name="description" rows="4" class="form-control"
                                                  placeholder="Brief description" required>{{old('description')}}</textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 mt-4">
                                    <div>
                                        <input type="submit" class="btn btn-primary w-100">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
