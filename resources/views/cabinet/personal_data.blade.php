@extends('layouts.app')
@section('title', 'Особисті дані')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/personal_data.css') }}">
@endsection
@section('content')
    @include('components.header')

    <div class="content_wrapper">

    </div>

    @include('components.footer')
@endsection
