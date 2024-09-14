@component('mail::layout')
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <img src="{{asset('assets/frontend/images/svg/logo.svg')}}" style="height: 100px;width: 100px;">

        @endcomponent
    @endslot
    <div style="padding: 20px">
        <p style="font-weight: bold">Hi, ally admin one of your user want to contact with us. Here is the user details:</p>
        <p>Name: {{ $name }}</p>
        <p>Email: {{ $email }}</p>
        <p>Phone: {{ $phone }}</p>
        <p>Agency: {{ $agency_county }}</p>
        <p>Message: {{$message ? $message: ''}}</p>
    </div>


    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        @endcomponent
    @endslot
@endcomponent
