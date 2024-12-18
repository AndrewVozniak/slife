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
                        <span class="nav__text">Вхід</span>
                    </a>

                    <hr class="vertical_line">

                    <a href="{{ route('register', ['locale' => App::currentLocale() ])  }}" class="nav__link">
                        <span class="nav__text">Реєстрація</span>
                    </a>
                </div>

                <div class="nav_border_bottom">
                    <div class="active_tab left"></div>
                    <hr class="border_bottom">
                </div>
            </div>

            <form action="#" class="form" method="POST">
                <h1 class="form_title">Скинути пароль</h1>
                <p class="form_text">Введіть свою електронну адресу або номер телефону нижче, і ми надішлемо вам електронний лист з інструкціями щодо створення нового пароля</p>

                <input type="text" class="form_input" placeholder="Ваш Email або номер телефону">

                <button type="submit" class="form_button">Надіслати</button>
            </form>
        </div>
    </div>

    @include('components.footer_bottom')
@endsection
