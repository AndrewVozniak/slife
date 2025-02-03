@extends('layouts.app')
@section('title', 'Історія покупок')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/order_history.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cabinet.css') }}">
@endsection
@section('content')
    @include('components.header')

    <div class="container breadcrumbs">
        <a href="{{ route('home', ['locale' => App::currentLocale()])}}" class="breadcrumb">Головна</a>
        <img src="{{asset('storage/images/icons/breadcrumbs_arrow_right.svg')}}" alt="filter" class="param_image">
        <a href="{{ url()->current() }}" class="breadcrumb active">Користувач</a>
    </div>

    <div class="content_wrapper personal_date_ext_wrapper">
        <div class="container">
            <div class="personal_data_wrapper cabinet-mb">

                @include('components.cabinet.menu', ['activeTab' => 'order_history'])

                <div class="personal_data_change_box">
                    <span class="order_history_title">
                        {{__('bonuses_and_order_history.order_history.order_history')}}
                    </span>

                    @include('components.cabinet.order_history_component')
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
