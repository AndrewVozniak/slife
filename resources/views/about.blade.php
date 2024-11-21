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

        <section>
            <div class="container">
                <div class="advantages_wrapper">
                    <div class="advantages_wrapper">
                        <div class="advantages_img_box">
                            <img src="{{ asset('storage/images/icons/solar_widget-add-bold-duotone.svg') }}" alt="widget" class="advantages_img">
                        </div>

                        <div class="advantages_title">
                            <p>{{__('about.advantages_section.choice_of_models')}}&#58;</p>
                        </div>

                        <div class="advantages_text">
                            <p>{{__('about.advantages_section.choice')}}&#46;</p>
                        </div>
                    </div>

                    <div class="advantages_wrapper">
                        <div class="advantages_img_box">
                            <img src="{{ asset('storage/images/icons/solar_ticket-sale-bold-duotone.svg') }}" alt="widget" class="advantages_img">
                        </div>

                        <div class="advantages_title">
                            <p>{{__('about.advantages_section.promotional_offers')}}</p>
                        </div>

                        <div class="advantages_text">
                            <p>{{__('about.advantages_section.discounts')}}&#33;</p>
                        </div>
                    </div>

                    <div class="advantages_wrapper">
                        <div class="advantages_img_box">
                            <img src="{{ asset('storage/images/icons/solar_atom-bold-duotone.svg') }}" alt="widget" class="advantages_img">
                        </div>

                        <div class="advantages_title">
                            <p>{{__('about.advantages_section.practicality')}}&#58;</p>
                        </div>

                        <div class="advantages_text">
                            <p>{{__('about.advantages_section.practicality_text')}}&#46;</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            @include('components.about.history_and_goal')
        </section>
    </div>

    @include('components.footer')
@endsection
