@extends('layouts.app')
@section('title', 'Реєстрація')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection
@section('content')
    @include('components.header_top')
    <div class="content_wrapper container-2">
        <div class="nav">
            <a href="{{ route('home', ['locale' => App::currentLocale() ])  }}" class="nav__link">
                <img src="{{ asset('/storage/images/logo.svg') }}" alt="logo" class="nav_img">
            </a>

            <a href="{{ url()->previous() }}" class="close_btn__wrapper">
                <span class="close_btn">x</span>
            </a>
        </div>

        <div class="content">
            <div class="nav">
                <div class="nav__links">
                    <a href="{{ route('login', ['locale' => App::currentLocale() ])  }}" class="nav__link active">
                        <span class="nav__text">{{__('auth.forgot_password.title')}}</span>
                    </a>

                    <hr class="vertical_line">

                    <a href="{{ route('register', ['locale' => App::currentLocale() ])  }}" class="nav__link">
                        <span class="nav__text">{{__('auth.forgot_password.registration')}}</span>
                    </a>
                </div>

                <div class="nav_border_bottom">
                    <div class="active_tab left"></div>
                    <hr class="border_bottom">
                </div>
            </div>

            <form action="#" class="form" method="POST">
                <h1 class="form_title">{{__('auth.forgot_password.reset_password')}}</h1>
                <p class="form_text">{{__('auth.forgot_password.email')}}</p>

                <input type="text" class="form_input" placeholder="{{__('auth.forgot_password.your_email')}}">

                <button type="submit" class="form_button">{{__('auth.forgot_password.send')}}</button>
            </form>
        </div>
    </div>

    @include('components.footer_bottom')
@endsection
