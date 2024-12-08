@extends('layouts.app')
@section('title', 'Реєстрація')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection
@section('content')
    @include('components.header_top')
    <div class="content_wrapper container-2">
        <div class="nav">
            <a href="{{ route('home', ['locale' => App::currentLocale() ])  }}" class="nav__link">
                <img src="{{ asset('/storage/images/logo.svg') }}" alt="logo" class="nav_img">
            </a>

            <a href="{{ url()->previous() }}" class="close_btn__wrapper">
                <span class="close_btn">x</span>
            </a>
        </div>


        <div class="content">
            <div class="nav">
                <div class="nav__links">
                    <a href="{{ route('login', ['locale' => App::currentLocale() ])  }}" class="nav__link">
                        <span class="nav__text">{{__('auth.sign_up.title')}}</span>
                    </a>

                    <hr class="vertical_line">

                    <a href="{{ route('register', ['locale' => App::currentLocale() ])  }}" class="nav__link active">
                        <span class="nav__text">{{__('auth.sign_up.registration')}}</span>
                    </a>
                </div>

                <div class="nav_border_bottom">
                    <div class="active_tab right"></div>
                    <hr class="border_bottom">
                </div>
            </div>

            <div class="sign_in_social registration">
                <span class="sign_in_social__text">{{__('auth.sign_up.register_using')}}&#58;</span>
                <div class="sign_in_social__icons">
                    <a href="#" class="sign_in_social__icon">
                        <img src="{{ asset('/storage/images/google.svg') }}" alt="google">
                        <span>Google</span>
                    </a>
                    <a href="#" class="sign_in_social__icon">
                        <img src="{{ asset('/storage/images/apple.svg') }}" alt="apple">
                        <span>Apple</span>
                    </a>
                    <a href="#" class="sign_in_social__icon">
                        <img src="{{ asset('/storage/images/facebook.svg') }}" alt="facebook">
                        <span>Facebook</span>
                    </a>
                </div>
            </div>

            <form action="#" class="form" method="POST">
                <h1 class="form_title">{{__('auth.sign_up.registration')}}</h1>
                <input type="text" class="form_input" placeholder="{{__('auth.sign_up.email')}}">
                <input type="text" class="form_input" placeholder="{{__('auth.sign_up.name')}}">

                <div x-data="{ showPassword: false }" class="password_field">
                    <input :type="showPassword ? 'text' : 'password'" class="form_input" placeholder="{{__('auth.sign_up.password')}}">
                    <img src="{{ asset('/storage/images/icons/eye.svg') }}" alt="show password" class="eye_icon" @click="showPassword = !showPassword">
                </div>

                <div x-data="{ showPassword: false }" class="password_field">
                    <input :type="showPassword ? 'text' : 'password'" class="form_input" placeholder="{{__('auth.sign_up.confirm_password')}}">
                    <img src="{{ asset('/storage/images/icons/eye.svg') }}" alt="show password" class="eye_icon" @click="showPassword = !showPassword">
                </div>

                <div x-data="{ showDays: false, showMonths: false, showYears: false }" class="date_of_birth_wrapper">
                    <span class="date_of_birth_text">{{__('auth.sign_up.date_of_birth')}}</span>
                    <div class="date_of_birth" x-data="{
    showDays: false,
    showMonths: false,
    showYears: false,
    dayInput: '',
    monthInput: '',
    yearInput: ''
}">

                        <div class="date_of_birth_field" x-on:click.away="showDays = false">
                            <input
                                type="text"
                                class="date_of_birth_input"
                                placeholder="{{__('auth.sign_up.day')}}"
                                x-model="dayInput"
                                @focus="showDays = true"
                                @input="showDays = true"
                            >
                            <img
                                :class="showDays ? 'rotate' : ''"
                                src="{{ asset('/storage/images/icons/arrow_down_date.svg') }}"
                                alt="arrow"
                                class="date_of_birth_arrow"
                                @click="showDays = !showDays"
                            >
                            <div
                                x-show="showDays"
                                class="dropdown"
                            >
                                <ul class="dropdown_list">
                                    @for ($day = 1; $day <= 31; $day++)
                                        <template x-if="'{{ $day }}'.startsWith(dayInput)">
                                            <li @click="dayInput = '{{ $day }}'; showDays = false">{{ $day }}</li>
                                        </template>
                                    @endfor
                                </ul>
                            </div>
                        </div>


                        <div class="date_of_birth_field" x-on:click.away="showMonths = false">
                            <input
                                type="text"
                                class="date_of_birth_input"
                                placeholder="{{__('auth.sign_up.month')}}"
                                x-model="monthInput"
                                @focus="showMonths = true"
                                @input="showMonths = true"
                            >
                            <img
                                :class="showMonths ? 'rotate' : ''"
                                src="{{ asset('/storage/images/icons/arrow_down_date.svg') }}"
                                alt="arrow"
                                class="date_of_birth_arrow"
                                @click="showMonths = !showMonths"
                            >
                            <div
                                x-show="showMonths"
                                class="dropdown"
                            >
                                <ul class="dropdown_list">
                                    @foreach (['Січень', 'Лютий', 'Березень', 'Квітень', 'Травень', 'Червень', 'Липень', 'Серпень', 'Вересень', 'Жовтень', 'Листопад', 'Грудень'] as $month)
                                        <template x-if="'{{ $month }}'.toLowerCase().startsWith(monthInput.toLowerCase())">
                                            <li @click="monthInput = '{{ $month }}'; showMonths = false">{{ $month }}</li>
                                        </template>
                                    @endforeach
                                </ul>
                            </div>
                        </div>


                        <div class="date_of_birth_field" x-on:click.away="showYears = false">
                            <input
                                type="text"
                                class="date_of_birth_input"
                                placeholder="{{__('auth.sign_up.year')}}"
                                x-model="yearInput"
                                @focus="showYears = true"
                                @input="showYears = true"
                            >
                            <img
                                :class="showYears ? 'rotate' : ''"
                                src="{{ asset('/storage/images/icons/arrow_down_date.svg') }}"
                                alt="arrow"
                                class="date_of_birth_arrow"
                                @click="showYears = !showYears"
                            >
                            <div
                                x-show="showYears"
                                class="dropdown"
                            >
                                <ul class="dropdown_list">
                                    @for ($year = now()->year; $year >= 1900; $year--)
                                        <template x-if="'{{ $year }}'.startsWith(yearInput)">
                                            <li @click="yearInput = '{{ $year }}'; showYears = false">{{ $year }}</li>
                                        </template>
                                    @endfor
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <button type="submit" class="form_button">{{__('auth.sign_up.join')}} SLIFE</button>
            </form>
        </div>
    </div>

    @include('components.footer_bottom')
@endsection
