<!-- Footer Top   -->
<section class="footer-top-wrapper">
    <div class="container footer-top">
        <div class="footer-top-content">
            <p class="white-title max-w-400 contact-us-today-title">Contact us today to customize a service
                plan.</p>
            <p class="text-white ">Send a SA directly to us in ARGO or SHINES.</p>
            <a class="btn btn-primary align-self-baseline" href="{{route('contact')}}">Let's Talk</a>
        </div>
        <div class="footer-top-image">
            <img src="{{asset('assets/frontend/images/svg/contact-us-lady-img.png')}}" alt="Aaminah's House Contact us Image">
        </div>
    </div>
</section>
<!-- Footer   -->
<section class="bg-secondary footer">
    <div class="container footer-content-wrapper">
        <div class="row">
            <div class="col-lg-6">
                <div>
                    <a href="index.html" class="logo">
                        <img src="{{asset('assets/frontend/images/svg/logo.svg')}}" class="my-2">
                    </a>
                    {{--  <p class="max-w-400" class="my-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                        do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. </p>  --}}
                </div>
                {{--  <div class="my-2">
                    <a href="#" target="_blank"><img src="{{asset('assets/frontend/images/svg/facebook.svg')}}" class="h-34"></a>
                    <a href="#" target="_blank"><img src="{{asset('assets/frontend/images/svg/twitter.svg')}}" class="h-34"></a>
                    <a href="#" target="_blank"><img src="{{asset('assets/frontend/images/svg/google.svg')}}" class="h-34"></a>
                    <a href="#" target="_blank"><img src="{{asset('assets/frontend/images/svg/linkedin.svg')}}" class="h-34"></a>
                </div>  --}}
            </div>

            <div class="col-lg-2">
                <h5 class="fw-bold">Quick Links</h5>
                <ul>
                    <li><a href="{{route('home')}}index.html">Home</a></li>
                    <li><a href="{{route('services')}}">Services</a></li>
                    <li><a href="{{route('ally.difference')}}">The Aaminah's House Difference</a></li>
                    <li><a href="{{route('career')}}">Career</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <h5 class="fw-bold">Help Center</h5>
                <ul>
                    <li><a href="#">Privacy policy</a></li>
                    <li><a href="#">Cookies</a></li>
                    <li><a href="#">Terms & condition</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <h5 class="fw-bold">Contact Us</h5>
                <ul>
                    <li><a href="tel:+16788940028">
                            <img src="{{asset('assets/frontend/images/svg/call-icon.svg')}}">
                            <span class="min-margin-left">(678) 894 0028</span></a>
                        </a>
                    </li>
                    <li><a href="mailto:info@allyconsult.org" class="d-flex">
                            <img src="{{asset('assets/frontend/images/svg/mail-icon.svg')}}">
                            <span class="min-margin-left">info@allyconsult.org</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="bg-secondary section-2 border-top">
    <div class="container">
        <p class="m-0">© {{date('Y')}} <span class="text-green">Aaminah's House</span> All rights reserved.</p>
    </div>
</section>
