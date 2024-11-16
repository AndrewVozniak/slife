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
                <h1 class="heading">{{ __('bonuses_and_order_history.bonuses.bonuses') }}</h1>

                <div class="bonuses__wrapper">
                    <span class="bonuses__title">{{ __('bonuses_and_order_history.bonuses.on_your_account') }}&#58;</span>
                    <span class="bonuses__value"><span class="red">256</span> {{ __('bonuses_and_order_history.bonuses.bonuses_amount') }}</span>
                </div>

                <div class="description">
                    <p class="desc__title">{{ __('bonuses_and_order_history.bonuses.bonuses_calculated') }}&#63;</p>
                    <p class="desc__text">{{ __('bonuses_and_order_history.bonuses.bonuses_calculated_text') }}&#46;</p>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection


