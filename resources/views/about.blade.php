@extends('layouts.app')
@section('title', 'Про нас')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection
@section('content')
    @include('components.header')

    <div class="content_wrapper">
        <div class="container">
            <div class="breadcrumbs">
                <a href="{{ route('home', ['locale' => App::currentLocale()])}}" class="breadcrumb">Головна</a>
                <img src="{{ asset('storage/images/icons/breadcrumbs_arrow_right.svg') }}" alt="filter" class="param_image">
                <a href="{{ route('about', ['locale' => App::currentLocale()]) }}" class="breadcrumb active">Про нас</a>
            </div>
        </div>

        <div class="container">
            <section class="about__wrapper">
                <h1 class="about_title">Про нас</h1>
                <p class="about_description">
                    Ми раді запропонувати нашим постійним клієнтам, а також новій аудиторії наш новий сервіс! Понад 9 років на ринку, за які ми зрозуміли чого хочуть сучасні споживачі. Сьогодні наш бренд зібрав широкий вибір якісного, комфортного спортивного одягу на кожен день.

                    Інтернет-магазин дає можливість нашим клієнтам зручно обрати свій гардероб та виконувати замовлення всього в декілька кліків. Ми створили комфортний сервіс, бо інтереси нашої аудиторії завжди на першому місці.
                </p>
            </section>
        </div>
    </div>

    @include('components.footer')
@endsection
