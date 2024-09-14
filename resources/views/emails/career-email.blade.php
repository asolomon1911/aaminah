@component('mail::layout')
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <img src="{{asset('assets/frontend/images/Aaminah_Logo.png')}}" style="height: 100px;width: 100px;">

        @endcomponent
    @endslot
    <div style="padding: 20px">
        <p>Below is a candidate that is interested in joining Aaminah's House: </p>
        <br>
        <p><strong>First Name:</strong> {{ $first_name }} </p>
        <p><strong>Last Name:</strong> {{ $last_name }} </p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Phone:</strong> {{ $phone }}</p>
        <p><strong>Position:</strong> {{ $position }}</p>
        @if($has_file)
            <p><strong>Resume:</strong> <a href="{{$file_path}}"> View & download Resume</a></p>
        @else
            <p><strong>Resume:</strong> No resume added</p>
        @endif
        <p><strong>Description:</strong> {{$description ? $description: ''}}</p>
    </div>


    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        @endcomponent
    @endslot
@endcomponent
