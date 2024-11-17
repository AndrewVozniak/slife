@extends('layouts.app')
@section('title', 'Сторінка не знайдена')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/errors.css') }}">
@endsection
@section('content')
    @include('components.header')

    <div class="content_wrapper">
        <div class="image_wrapper">
            <div class="global"></div>
            <div class="left"></div>
            <img src="{{ asset('/storage/images/backgrounds/404.png') }}" alt="" class="background">
            <div class="right"></div>


            <div class="container content">
                <div class="main">
                    <h1 class="title_404">Йой! Щось <br> пішло не так</h1>
                    <p class="desc">Сторінку, яку ви шукали, не знайдено. <br> Перевірте правильність адреси сторінки</p>

                    <a href="{{ route('home', ['locale' => App::currentLocale()]) }}" class="btn">На головну</a>
                </div>

                <span class="error_code">404</span>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
