@extends('layouts.app')
@section('title', 'Головна сторінка')
@section('content')
    <div class="content_wrapper">
        <x-slider />

        @include('components.new_products', ['products' => $products])

        @include('components.popular_products', ['products' => $products])

        @include('components.top_category')

        @include('components.gray_description')
    </div>
@endsection
