@extends('layouts.app')
@section('title', 'Історія покупок')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/order_history.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cabinet.css') }}">
@endsection
@section('content')
    @include('components.header')

    <div class="content_wrapper">
        <div class="container">
            <div class="personal_data_wrapper">

                @include('components.cabinet.menu', ['activeTab' => 'order_history'])

                <div class="personal_data_change_box">
                    <span class="text_800_32_black order_history_title">{{__('bonuses_and_order_history.order_history.order_history')}}</span>

                    @include('components.cabinet.order_history_component')
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
