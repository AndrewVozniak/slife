@extends('layouts.app')
@section('title', 'Оплата та доставка замовлень клієнтам')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/info.css') }}">
@endsection
@section('content')
    @include('components.header')

    <div class="container breadcrumbs">
        <a href="{{ route('home', ['locale' => App::currentLocale()])}}" class="breadcrumb">Головна</a>
        <img src="{{asset('storage/images/icons/breadcrumbs_arrow_right.svg')}}" alt="filter" class="param_image">
        <a href="{{ url()->current() }}" class="breadcrumb active">Оплата та доставка</a>
    </div>

    <div class="content_wrapper">
        <div class="container">
            <div class="info_wrapper">
                <div class="title__big">{{__('delivery.delivery')}}</div>
                <div class="info_text">
                    <p style="margin-bottom: 24px">{{__('delivery.important_to_the_client')}}</p>
                    <p class="text_500_16_black">{{__('delivery.customers_can')}}&#58;</p>
                    <ul>
                        <li>{{__('delivery.order_purchase')}}&#59;</li>
                        <li>{{__('delivery.complete_self-pickup')}}&#46;</li>
                        <li>{{__('delivery.online')}}&#46;</li>
                    </ul>

                    <p class="title">{{__('delivery.delivery_options')}}</p>
                    <p class="text_500_16_black">{{__('delivery.new_post')}}&#58;</p>
                    <p>{{__('delivery.shipping_by_carrier')}}&#58;</p>
                    <ul style="margin-bottom: 12px">
                        <li>{{__('delivery.warehouse_warehouse')}}&#59;</li>
                        <li>{{__('delivery.warehouse_door')}}&#59;</li>
                        <li>{{__('delivery.warehouse_post_office')}}&#46;</li>
                    </ul>
                    <p style="margin-bottom: 24px">{{__('delivery.delivery_new_post')}}&#46;</p>

                    <p class="text_500_16_black">{{__('delivery.ukr_post')}}&#58;</p>
                    <p>{{__('delivery.delivery_registration')}}&#46;</p>
                    <p>{{__('delivery.sending_mode')}}&#58;</p>
                    <ul style="margin-bottom: 12px">
                        <li>{{__('delivery.branch_branch')}}&#46;</li>
                    </ul>
                    <p style="margin-bottom: 24px">{{__('delivery.delivery_terms')}}&#46;</p>
                    <p style="margin-bottom: 24px; color: var(--red)">
                        <span class="text_700_16_red">{{__('delivery.importantly')}}&#58;</span>
                        {{__('delivery.delivery_by_the_operator')}}&#33;
                    </p>

                    <p class="text_500_16_black">{{__('delivery.international_delivery')}}&#58;</p>
                    <p>{{__('delivery.for_customers_abroad')}}&#46;</p>
                    <p style="margin-bottom: 24px; color: var(--red)">
                        <span class="text_700_16_red">{{__('delivery.importantly')}}&#58;</span>
                        {{__('delivery.free delivery')}}&#46;
                    </p>

                    <p class="text_500_16_black">{{__('delivery.self_pickup_conditions')}}&#58;</p>
                    <p style="margin-bottom: 0">{{__('delivery.client_can')}}&#46;</p>
                    <p style="margin-bottom: 32px">{{__('delivery.address')}}<&#46;</p>


                    <p class="title" style="margin-bottom: 16px">{{__('delivery.delivery_cost')}}</p>
                    <p>{{__('delivery.price_of_services')}}&#46;</p>
                    <p>{{__('delivery.making_purchases')}}&#46;</p>
                    <p>{{__('delivery.delivery_of_oversize_parcels')}}&#46;</p>

                    <div class="line"></div>

                    <p class="title" style="margin-bottom: 16px">{{__('delivery.payment_for_the_purchase')}}</p>
                    <p>{{__('delivery.payment_options')}}&#58;</p>
                    <ul style="margin-bottom: 12px">
                        <li>{{__('delivery.bank_transfer')}}&#59;</li>
                        <li>{{__('delivery.online_banking')}}&#59;</li>
                        <li>{{__('delivery.systems')}}&#59;</li>
                        <li>{{__('delivery.account')}}&#46;</li>
                    </ul>

                    <p>{{__('delivery.customer_can')}}&#46;</p>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
