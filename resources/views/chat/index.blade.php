@extends('layout.chat')
@section('content')
    @include('include.chat.header')
    <div class="container">
        <div class="content">
            <div class="content__title">Welcome to the beta version NoLogs. NoLogs is anonymous chat.</div>
            <div class="content__registration">
                <div class="registration__title">Registration</div>
                <form action="{{ route('chat.store') }}" class="form-register" method="post">
                    @csrf
                    <input type="text" class="register__input" placeholder="Nickname: " name="nickname">
                    <input type="text" class="register__input" placeholder="Login: " name="login">
                    <input type="text" class="register__input" placeholder="Password: " name="password">
                    <input type="submit" class="register__input_submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
@stop
