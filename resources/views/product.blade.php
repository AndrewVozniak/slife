@extends('layouts.app')
@section('title', 'Кошик')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endsection
@section('content')
    @include('components.header')

    <div class="product_container">

        @include('components.product.gallery')
        @include('components.product.product_description')

    </div>

    @include('components.footer')
@endsection