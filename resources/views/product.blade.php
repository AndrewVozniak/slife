@extends('layouts.app')
@section('title', 'Кошик')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endsection
@section('content')
    @include('components.header')

    <div class="breadcrumbs container">
        <a href="{{ route('home', ['locale' => App::currentLocale()])}}" class="breadcrumb">Головна</a>
        <img src="{{asset('storage/images/icons/breadcrumbs_arrow_right.svg')}}" alt="filter" class="param_image">
        <a href="{{ route('home', ['locale' => App::currentLocale()])}}" class="breadcrumb">Жіночий одяг</a>
        <img src="{{asset('storage/images/icons/breadcrumbs_arrow_right.svg')}}" alt="filter" class="param_image">
        <a href="{{ route('home', ['locale' => App::currentLocale()])}}" class="breadcrumb">Куртки</a>
        <img src="{{asset('storage/images/icons/breadcrumbs_arrow_right.svg')}}" alt="filter" class="param_image">
        <a href="{{ route('blog', ['locale' => App::currentLocale()]) }}" class="breadcrumb active">Новини</a>
    </div>

    <div class="product_container">
        @include('components.product.gallery')
        @include('components.product.product_description')

    </div>

    <div class="content_wrapper">
        @include('components.new_products', ['products' => $products, 'title' => 'Також може Вас зацікавити', 'isFavorite' => false])
        @include('components.top_category')
        @include('components.gray_description')
    </div>

    @include('components.footer')
@endsection
