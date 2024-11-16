@extends('layouts.app')
@section('title', 'Особисті дані')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/personal_data.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cabinet.css') }}">
@endsection
@section('content')
    @include('components.header')

    <div class="content_wrapper">
        <div class="container">
            <div class="personal_data_wrapper">

                @include('components.cabinet.menu', ['activeTab' => 'personal_data'])

                <div class="personal_data_change_box">
                    @include('components.form.change_personal_data')
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection

