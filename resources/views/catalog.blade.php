@extends('layouts.app')
@section('title', 'Каталог')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/catalog.css') }}">
@endsection
@section('content')
    <div class="content_wrapper">
        @include('components.catalog.items')


        @include('components.top_category')

        @include('components.gray_description')
    </div>
@endsection
