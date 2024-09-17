@component('mail::layout')
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <h2>Aaminah's House</h2>
        @endcomponent
    @endslot
    <div style="padding: 20px">
        <p style="font-weight: bold">Hi, we have another message from our website. The details are below: </p>
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
