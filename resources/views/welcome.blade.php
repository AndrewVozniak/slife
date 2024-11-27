@extends('layouts.app')
@section('title', 'Головна сторінка')
@section('content')
    @include('components.header')

    <div class="content_wrapper">
        <x-slider />

        @include('components.new_products', ['products' => $products, 'isFavorite' => false])

        @include('components.popular_products', ['products' => $products])

        @include('components.top_category')

        @include('components.gray_description')
    </div>

    @include('components.footer')
@endsection
