@extends('layouts.app')
@section('title', 'Повернення та обмін товару')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/info.css') }}">
@endsection
@section('content')
    @include('components.header')

    <div class="container breadcrumbs">
        <a href="{{ route('home', ['locale' => App::currentLocale()])}}" class="breadcrumb">Головна</a>
        <img src="{{asset('storage/images/icons/breadcrumbs_arrow_right.svg')}}" alt="filter" class="param_image">
        <a href="{{ url()->current() }}" class="breadcrumb active">Повернення та обмін</a>
    </div>

    <div class="content_wrapper">
        <div class="container">
            <div class="info_wrapper">
                <div class="title__big">{{__('return_policy.return_and_exchange')}}</div>
                <div class="info_text">
                    <p style="margin-bottom: 32px">{{__('return_policy.product_did_not_fit')}}
                        <a href="#" class="red_small">&#34;{{__('return_policy.protection_of_consumer_rights')}}&#34;&#46;
                        </a>
                    </p>

                    <p class="title">{{__('return_policy.general_warranty')}}</p>
                    <p style="margin-bottom: 32px">{{__('return_policy.exchange_is_carried_out')}}&#46;</p>

                    <p class="title" style="margin-bottom: 16px">{{__('return_policy.return_of_goods')}}</p>
                    <p>{{__('return_policy.client_has_the_right')}}&#58;</p>
                    <ul>
                        <li>{{__('return_policy.product_was_not_used')}}&#59;</li>
                        <li>{{__('return_policy.original_packaging')}}&#59;</li>
                        <li>{{__('return_policy.products_kept')}}&#59;</li>
                        <li>{{__('return_policy.order_is_complete')}}&#46;</li>
                    </ul>

                    <p>{{__('return_policy.refuse_to_exchange')}}
                        <a href="#" class="red_small">&#34;{{__('return_policy.protection_of_consumer_rights')}}&#34;&#46;
                        </a>
                    </p>

                    <p>{{__('return_policy.customer_can_refuse')}}&#46;</p>
                    <p>{{__('return_policy.product_quality')}}&#46;</p>

                    <div class="line"></div>

                    <p class="title" style="margin-bottom: 16px">{{__('return_policy.exchange_with_recalculation_of_value')}}
                    </p>
                    <p>{{__('return_policy.no_similar_product')}}&#58;</p>
                    <ul>
                        <li>{{__('return_policy.choose_another_position')}}&#59;</li>
                        <li>{{__('return_policy.reserve_product')}}&#59;</li>
                        <li>{{__('return_policy.get_money')}}&#46;</li>
                    </ul>

                    <p>{{__('return_policy.cash_back')}}&#46;</p>
                    <p>{{__('return_policy.refund_is_required')}}
                        <span class="red_small">&#34;{{__('return_policy.return_conditions')}}&#34;&#46;</span></p>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
