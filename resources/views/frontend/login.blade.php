@extends('home')
@section('title', 'User Login')
@section('content')
    <form method="POST" action="{{ route('frontend.postLogin') }}" class="login-form">
        @csrf
        <div class="login-form_title">LOGIN</div>
        <x-input :input="$input"/>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection