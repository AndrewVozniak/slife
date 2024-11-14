@extends('layouts.app')
@section('title', 'Історія покупок')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/order_history.css') }}">
@endsection
@section('content')
    @include('components.header')

    <div class="content_wrapper">

    </div>

    @include('components.footer')
@endsection
