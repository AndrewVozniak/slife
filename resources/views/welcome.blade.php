@extends('layouts.app')
@section('title', 'Головна сторінка')
@section('content')
    <div class="content_wrapper">
        @include('components.popular_products')

        @include('components.top_category')

        @include('components.gray_description')
    </div>
@endsection
