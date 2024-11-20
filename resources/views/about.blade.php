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
                <h1 class="about_title">{{__('about.about')}}</h1>
                <div class="about_description_wrapper">
                    <p class="about_description">
                        {{__('about.new_service')}}&#46;
                    </p>
                    <p class="about_description">
                        {{__('about.online_store')}}&#46;
                    </p>
                </div>
            </section>
        </div>

        <section >
            @include('components.about.photo_section')
        </section>
    </div>

    @include('components.footer')
@endsection
