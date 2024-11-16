@extends('layouts.app')
@section('title', 'Мої бонуси')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/cabinet.css') }}">
@endsection
@section('content')
    @include('components.header')

    <div class="container">
        <div class="content_wrapper">
            @include('components.cabinet.menu', ['activeTab' => 'my_bonuses'])

            <div class="content">
                <h1 class="heading">Мої бонуси</h1>

                <div class="bonuses__wrapper">
                    <span class="bonuses__title">На вашому рахунку:</span>
                    <span class="bonuses__value"><span class="red">256</span> бонусів</span>
                </div>

                <div class="description">
                    <p class="desc__title">Як нараховуються бонуси?</p>
                    <p class="desc__text">Бонусні кошти нараховуються кожному учасникові програми лояльності за покупки товарів у мережі магазинів та на сайті Slife. Отже, купуючи товари у Slife, ви отримуєте кешбек — тобто, частина витрачених коштів повертається у вигляді бонусів, які згодом ви можете використати для оплати нових покупок.</p>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection


