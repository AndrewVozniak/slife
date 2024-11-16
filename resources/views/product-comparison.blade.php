@extends('layouts.app')
@section('title', 'Кошик')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/product_comparison.css') }}">
@endsection
@section('content')
    @include('components.header')


    <div class="content_wrapper">

    </div>

    @include('components.footer')
@endsection
