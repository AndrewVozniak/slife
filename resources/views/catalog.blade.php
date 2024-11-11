@extends('layouts.app')
@section('title', 'Каталог')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/catalog.css') }}">
@endsection
@section('content')
    @include('components.header')

    <div class="content_wrapper">
        @include('components.catalog.items')

        @include('components.top_category')

        @include('components.gray_description')
    </div>

    @include('components.footer')
@endsection
