@extends('layouts.app')

@section('content')
<header>
    <span class="avatar"><img src="{{ asset('assets/images/users/1.jpg') }}" alt="" /></span>
    <h1>{{ $user->name }}</h1>
    <p><{{ nl2br($user->comments) }}</p>
</header>
@endsection
