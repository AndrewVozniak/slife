@extends('layouts.app')
@section('title', 'Кошик')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/shopping-cart.css') }}">
@endsection
@section('content')
    @include('components.header')

    {{--    CONTENT HERE--}}

    @include('components.footer')
@endsection
