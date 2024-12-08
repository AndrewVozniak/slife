@extends('layouts.app')
@section('title', 'Історія покупок')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/favorite.css') }}">
@endsection
@section('content')
    @include('components.header')

    <div class="content_wrapper">
        <div class="container breadcrumbs">
            <a href="{{ route('home', ['locale' => App::currentLocale()])}}" class="breadcrumb">Головна</a>
            <img src="{{asset('storage/images/icons/breadcrumbs_arrow_right.svg')}}" alt="filter" class="param_image">
            <a href="{{ route('favorite', ['locale' => App::currentLocale()]) }}" class="breadcrumb active">Улюблені товари</a>
        </div>

        @include('components.new_products', ['products' => $products, 'title' => __("favorite.favorite"), 'isFavorite' => true])
    </div>

    @include('components.footer')
@endsection
