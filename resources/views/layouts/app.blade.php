<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('assets/frontend/images/Aaminah_Logo.png')}}">
    <link href="{{asset('assets/frontend/css/bootstrap-v5.0.2.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=General+Sans:wght@400;600;700&display=swap">
    <link href="{{asset('assets/frontend/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/frontend/css/media.css')}}" rel="stylesheet">
    <title>Aaminah's House - Aaminah's House is a preferred DFCS provider for licensed, professional</title>
    @include('layouts.includes.common-meta')
</head>
<body>

<div class="main-wrapper">
    @include('layouts.includes.nav-bar')
    @yield('content')
    @include('layouts.includes.footer')
</div>


<script src="{{asset('assets/frontend/js/jquery-3.7.1.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/bootstrap-5.0.2.bundle.min.js')}}">
</script>
<script src="{{asset('assets/frontend/js/custom.js')}}"></script>
</body>
</html>
