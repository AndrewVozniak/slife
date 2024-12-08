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
                        <span class="nav__text">{{__('auth.sign_in.title')}}</span>
                    </a>

                    <hr class="vertical_line">

                    <a href="{{ route('register', ['locale' => App::currentLocale() ])  }}" class="nav__link">
                        <span class="nav__text">{{__('auth.sign_in.registration')}}</span>
                    </a>
                </div>

                <div class="nav_border_bottom">
                    <div class="active_tab left"></div>
                    <hr class="border_bottom">
                </div>
            </div>

            <form action="#" class="form" method="POST">
                <input type="text" class="form_input" placeholder="{{__('auth.sign_in.email')}}">

                <div x-data="{ showPassword: false }" class="password_field">
                    <input :type="showPassword ? 'text' : 'password'" class="form_input" placeholder="{{__('auth.sign_in.password')}}">
                    <img src="{{ asset('/storage/images/icons/eye.svg') }}" alt="show password" class="eye_icon" @click="showPassword = !showPassword">
                </div>

                <button type="submit" class="form_button">{{__('auth.sign_in.log_in')}}</button>
                <a href="{{ route('forgotPassword', ['locale' => App::currentLocale()])  }}" class="form_link">
                    {{__('auth.sign_in.forgot_password')}}&#63;
                </a>
            </form>

            <div class="sign_in_social">
                <span class="sign_in_social__text">{{__('auth.sign_in.log_in_using')}}&#58;</span>
                <div class="sign_in_social__icons">
                    <a href="#" class="sign_in_social__icon">
                        <img src="{{ asset('/storage/images/google.svg') }}" alt="google">
                        <span>Google</span>
                    </a>
                    <a href="#" class="sign_in_social__icon">
                        <img src="{{ asset('/storage/images/apple.svg') }}" alt="apple">
                        <span>Apple</span>
                    </a>
                    <a href="#" class="sign_in_social__icon">
                        <img src="{{ asset('/storage/images/facebook.svg') }}" alt="facebook">
                        <span>Facebook</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer_bottom')
@endsection
