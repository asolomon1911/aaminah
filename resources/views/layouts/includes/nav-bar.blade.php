<section class="bg-secondary pt-0">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
            <div class="container">
                <div class="navbar-brand logo">
                    <a class="" aria-current="page" href="{{route('home')}}">
                        <img src="{{asset('assets/frontend/images/Aaminah_Logo.png')}}">
                    </a>
                </div>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 main-nav-item">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }} "
                               href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'services' ? 'active' : '' }}"
                               href="{{route('services')}}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'aaminah.difference' ? 'active' : '' }}"
                               href="{{route('aaminah.difference')}}">The Aaminah Difference</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'career' ? 'active' : '' }}"
                               href="{{route('career')}}">Career</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'about' ? 'active' : '' }}"
                               href="{{route('about')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteName() === 'contact' ? 'active' : '' }}"
                               href="{{route('contact')}}">Contact</a>
                        </li>
                    </ul>
                    <a class="btn btn-primary" href="{{route('contact')}}">Let’s Talk</a>
                </div>
            </div>
        </nav>
    </header>
</section>
