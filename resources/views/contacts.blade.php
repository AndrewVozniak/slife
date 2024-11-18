@extends('layouts.app')
@section('title', 'Контакти')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/contacts.css') }}">
@endsection
@section('content')
    @include('components.header')

    <div class="content_wrapper container">
        <div class="breadcrumbs">
            <a href="{{ route('home', ['locale' => App::currentLocale()])}}" class="breadcrumb">Головна</a>
            <img src="{{asset('storage/images/icons/breadcrumbs_arrow_right.svg')}}" alt="filter" class="param_image">
            <a href="{{ route('contacts', ['locale' => App::currentLocale()]) }}" class="breadcrumb active">Контакти</a>
        </div>

        <div class="content">
            <h1 class="content_title">Контакти</h1>

            <div class="image_wrapper">
                <img src="{{ asset('/storage/images/map.png') }}" alt="" class="image">

                <aside class="contacts_info">
                    <div class="contacts__heading">
                        <div class="row">
                            <img src="{{ asset('/storage/images/icons/mage_location.svg') }}" alt="">
                            <h1 class="title">Копичинці</h1>
                        </div>

                        <span class="contacts_description">Тернопільська обл. <br>
                            вул. Чортківська, 64 <br>
                            48-260
                        </span>
                    </div>

                    <h2 class="phone">+38(068)-367-38-37</h2>

                    <div class="social__media">
                        <a href="#" class="social__media__link">
                            <img src="{{ asset('/storage/images/icons/whatsapp.svg') }}" alt="whatsapp">
                        </a>
                        <a href="#" class="social__media__link">
                            <img src="{{ asset('/storage/images/icons/viber.svg') }}" alt="viber">
                        </a>
                        <a href="#" class="social__media__link">
                            <img src="{{ asset('/storage/images/icons/telegram.svg') }}" alt="telegram">
                        </a>
                    </div>

                    <div class="email">
                        <img src="{{ asset('/storage/images/icons/mail.svg') }}" alt="mail">
                        <span>slife.ua@ukr.net</span>
                    </div>

                    <div class="work_hours">
                        <img src="{{ asset('/storage/images/icons/clock.svg') }}" alt="clock">
                        <span>з 9:00 до 18:00 <br>Неділя: вихідний</span>
                    </div>

                    <div class="social__media">
                        <a href="#" class="social__media__link shadowed">
                            <img src="{{ asset('/storage/images/icons/tiktok.svg') }}" alt="tiktok">
                        </a>
                        <a href="#" class="social__media__link shadowed">
                            <img src="{{ asset('/storage/images/icons/instagram.svg') }}" alt="instagram">
                        </a>
                    </div>
                </aside>

                <div class="mark__wrapper">
                    <div class="mark__description">
                        <span class="mark__description__text">Тернопільська обл, м. Копичинці, вул. Чортківська, 64, 48-260.</span>
                        <hr class="horizontal-line">
                        <a href="#" class="mark__description__link">
                            <span>Подивитись на карті</span>
                            <img src="{{ asset('/storage/images/icons/arrow_right_map.svg') }}" alt="arrow_right">
                        </a>
                    </div>

                    <img src="{{ asset('/storage/images/icons/marker.svg') }}" alt="marker" class="marker">
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
