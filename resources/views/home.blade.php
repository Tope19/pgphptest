@extends('layouts.app')
<title>User Card - {{ $user->name }}</title>

@section('content')
<header>
    @if($user->avatar)
        <span class="avatar"><img height="100px" width="100px" src="{{ asset('assets/images/users/' . $user->avatar) }}" alt="" /></span>

        @else
            <span class="avatar"><img height="100px" width="100px" src="{{ asset('assets/images/users/1.jpg') }}" alt="" /></span>
    @endif

    <h1>{{ $user->name }}</h1>
    <p><{{ nl2br($user->comments) }}</p>
</header>
@endsection
