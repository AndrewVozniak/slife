@extends('layouts.app')
@section('title', 'Кошик')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/shopping-cart.css') }}">
@endsection
@section('content')
    @include('components.header')

    <div class="container breadcrumbs">
        <a href="{{ route('home', ['locale' => App::currentLocale()])}}" class="breadcrumb">Головна</a>
        <img src="{{asset('storage/images/icons/breadcrumbs_arrow_right.svg')}}" alt="filter" class="param_image">
        <a href="{{ route('shoppingCart', ['locale' => App::currentLocale()]) }}" class="breadcrumb active">Кошик</a>
    </div>

    <div class="container content__wrapper">
        <form action="#" class="form">
            <div class="form_group">
                <h1 class="group__title">{{ __('shopping_cart.receiver') }}</h1>

                <div class="group__inputs" >
                    <input type="text" placeholder="{{ __('shopping_cart.name') }} *" class="group__input half" required>
                    <input type="text" placeholder="{{ __('shopping_cart.surname') }} *" class="group__input half" required>
                    <input type="tel" placeholder="+38(_ _)-_ _ _-_ _-_ _ *" pattern="\+38\(\d{2}\)-\d{3}-\d{2}-\d{2}" class="group__input half" required>
                    <input type="email" placeholder="Email *" class="group__input half" required>
                </div>
            </div>

            <div class="form_group" x-data="{
                    possibleCountries: ['Україна', 'Польща'],
                    deliveryCountry: 'Україна',
                    showCountries: false,
                    onBranch: '',
                    showOnBranch: false,
                    deliveryCity: 'Київ',
                    showCities: false,
                    deliveryBranch: '',
                    showBranches: false,
                }">
                <h1 class="group__title">{{ __('shopping_cart.delivery') }}</h1>

                <div class="group__inputs">
                    <label for="country" class="group__label">{{ __('shopping_cart.country_for_delivery') }}</label>

                    <div class="group__select" x-on:click.away="showCountries = false">
                        <div class="select_input__wrapper">
                            <img
                                x-show="deliveryCountry == 'Україна'"
                                src="{{ asset('/storage/images/flags/ukraine.svg') }}"
                                alt="arrow"
                                class="input__icon"
                            >
                            <img
                                x-show="deliveryCountry == 'Польща'"
                                src="{{ asset('/storage/images/flags/poland.svg') }}"
                                alt="arrow"
                                class="input__icon"
                            >
                            <input
                                type="text"
                                class="group__input with_icon bold_text"
                                placeholder="Країна"
                                name="country"
                                readonly
                                x-model="deliveryCountry"
                                @focus="showCountries = true"
                                @input="showCountries = true"
                            >
                            <img
                                :class="showCountries ? 'rotate' : ''"
                                src="{{ asset('/storage/images/icons/arrow_down_date.svg') }}"
                                alt="arrow"
                                class="input__arrow"
                                @click="showCountries = !showCountries"
                            >
                        </div>
                        <div x-show="showCountries" class="dropdown">
                            <ul class="dropdown_list">
                                <template x-for="country in possibleCountries" :key="country">
                                    <li
                                        class="dropdown_item"
                                        @click="deliveryCountry = country; showCountries = false"
                                        x-text="country"
                                    >
                                    </li>
                                </template>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="group__radios" x-show="deliveryCountry == 'Україна'">
                    <div class="group__radio">
                        <div class="radio__wrapper">
                            <input type="radio" id="nova_poshta" class="radio__input" name="delivery_method" checked>
                            <label for="nova_poshta" class="radio__label">
                                <img src="{{ asset('/storage/images/icons/nova_poshta.svg') }}" alt="nova poshta" class="radio__icon">
                                <span class="radio__text">{{ __('shopping_cart.nova_poshta') }}</span>
                            </label>
                        </div>
                    </div>

                    <div class="group__radio">
                        <div class="radio__wrapper">
                            <input type="radio" id="ukrposhta" class="radio__input" name="delivery_method">
                            <label for="ukrposhta" class="radio__label">
                                <img src="{{ asset('/storage/images/icons/ukrposhta.svg') }}" alt="nova poshta" class="radio__icon">
                                <span class="radio__text">{{ __('shopping_cart.ukrposhta') }}</span>
                            </label>
                        </div>
                        <span class="radio__description">{{ __('shopping_cart.with_full_prepayment') }}</span>
                    </div>

                    <div class="group__radio">
                        <div class="radio__wrapper">
                            <input type="radio" id="self_pickup" class="radio__input" name="delivery_method">
                            <label for="self_pickup" class="radio__label">
                                <span class="radio__text">{{ __('shopping_cart.self_delivery') }}</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="group__inputs row" x-show="deliveryCountry == 'Україна'">
                    <div class="group__select triple" x-on:click.away="showOnBranch = false">
                        <div class="select_input__wrapper">
                            <input
                                type="text"
                                class="group__input"
                                placeholder="{{ __('shopping_cart.on_office') }}"
                                name="country"
                                readonly
                                x-model="onBranch"
                                @focus="showOnBranch = true"
                                @input="showOnBranch = true"
                            >
                            <img
                                :class="showOnBranch ? 'rotate' : ''"
                                src="{{ asset('/storage/images/icons/arrow_down_date.svg') }}"
                                alt="arrow"
                                class="input__arrow"
                                @click="showOnBranch = !showOnBranch"
                            >
                        </div>
                        <div x-show="showOnBranch" class="dropdown">
                            <ul class="dropdown_list">
                                <li
                                    class="dropdown_item"
                                    @click="onBranch = '{{ __('shopping_cart.on_office') }}'; showOnBranch = false"
                                >
                                    {{ __('shopping_cart.on_office') }}
                                </li>
                                <li
                                    class="dropdown_item"
                                    @click="onBranch = '{{ __('shopping_cart.on_postmachine') }}'; showOnBranch = false"
                                >
                                    {{ __('shopping_cart.on_postmachine') }}
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="group__select triple" x-on:click.away="showCities = false">
                        <div class="select_input__wrapper">
                            <input
                                type="text"
                                class="group__input"
                                placeholder="Місто"
                                name="country"
                                readonly
                                x-model="deliveryCity"
                                @focus="showCities = true"
                                @input="showCities = true"
                            >
                            <img
                                :class="showCities ? 'rotate' : ''"
                                src="{{ asset('/storage/images/icons/arrow_down_date.svg') }}"
                                alt="arrow"
                                class="input__arrow"
                                @click="showCities = !showCities"
                            >
                        </div>
                        <div x-show="showCities" class="dropdown">
                            <ul class="dropdown_list">
                                <li
                                    class="dropdown_item"
                                    @click="deliveryCity = 'Київ'; showCities = false"
                                >
                                    Київ
                                </li>
                                <li
                                    class="dropdown_item"
                                    @click="deliveryCity = 'Львів'; showCities = false"
                                >
                                    Львів
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="group__select triple" x-on:click.away="showBranches = false">
                        <div class="select_input__wrapper">
                            <input
                                type="text"
                                class="group__input"
                                placeholder="{{ __('shopping_cart.choose_office') }}"
                                name="country"
                                readonly
                                x-model="deliveryBranch"
                                @focus="showBranches = true"
                                @input="showBranches = true"
                            >
                            <img
                                :class="showBranches ? 'rotate' : ''"
                                src="{{ asset('/storage/images/icons/arrow_down_date.svg') }}"
                                alt="arrow"
                                class="input__arrow"
                                @click="showCities = !showCities"
                            >
                        </div>
                        <div x-show="showBranches" class="dropdown triple_row">
                            <ul class="dropdown_list">
                                <li
                                    class="dropdown_item"
                                    @click="deliveryBranch = 'Відділення №1'; showBranches = false"
                                >
                                    Відділення №1
                                </li>
                                <li
                                    class="dropdown_item"
                                    @click="deliveryBranch = 'Відділення №2'; showBranches = false"
                                >
                                    Відділення №2
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="group__inputs" x-show="deliveryCountry != 'Україна'">
                    <div class="input__wrapper half">
                        <label for="city" class="input__label">{{ __('shopping_cart.city') }} *</label>
                        <input type="text" placeholder="{{ __('shopping_cart.for_example_city') }}" class="group__input" required id="city">
                    </div>

                    <div class="input__wrapper half">
                        <label for="address" class="input__label">{{ __('shopping_cart.address') }} *</label>
                        <input type="text" placeholder="{{ __('shopping_cart.for_example_address') }}" class="group__input" required id="address">
                    </div>

                    <div class="input__wrapper half">
                        <label for="postcode" class="input__label">{{ __('shopping_cart.post_index') }} *</label>
                        <input type="text" placeholder="{{ __('shopping_cart.for_example_post_index') }}" class="group__input" required id="postcode">
                    </div>

                    <div class="input__wrapper half">
                        <label for="phone" class="input__label">{{ __('shopping_cart.phone') }} *</label>
                        <input type="tel" placeholder="+48(_ _)-_ _ _-_ _-_ _" pattern="\+38\(\d{2}\)-\d{3}-\d{2}-\d{2}" class="group__input" required id="phone">
                    </div>
                </div>

                <div class="delivery_info" x-show="deliveryCountry != 'Україна'">
                    <div class="info__item">
                        <span class="info__text">{{ __('shopping_cart.estimated_delivery_price') }}</span>
                        <span class="info__value">{{ __('shopping_cart.from') }} 350 {{ __('shopping_cart.to') }} 1000₴</span>
                    </div>

                    <div class="info__item">
                        <span class="info__text">{{ __('shopping_cart.estimated_delivery_time') }}</span>
                        <span class="info__value">{{ __('shopping_cart.from') }} 7 {{ __('shopping_cart.to') }} 14 {{ __('shopping_cart.days') }}</span>
                    </div>
                </div>
            </div>

            <div class="form_group">
                <div class="group__heading">
                    <h1 class="group__title">{{ __('shopping_cart.bonus') }}</h1>
                    <span class="group__info_text"><a href="{{ route('login', ['locale' => App::currentLocale()]) }}" class="underline">{{__('product.product_describe.login')}}</a> {{ __('shopping_cart.to_pay_bonus') }}</span>
                </div>

                <div class="group__inputs row">
                    <label for="city" class="input__label">{{ __('shopping_cart.on_your_account') }} <span class="red">346</span> {{ __('shopping_cart.bonuses') }}</label>
                    <input type="text" placeholder="{{ __('shopping_cart.enter_bonus') }}" class="group__input half">
                </div>
            </div>

            <hr class="horizontal-line">

            <div class="form_group">
                <div class="checkbox_group">
                    <input type="checkbox" class="checkbox__input" id="dont_call">
                    <label for="dont_call" class="checkbox__label">{{ __('shopping_cart.dont_call_me_to_confirm_order') }}</label>
                </div>
            </div>

            <aside class="cart mobile_only">
                <div class="cart_header">
                    <h2 class="cart__title">Ваш кошик</h2>
                </div>

                <div class="cart_content">
                    <div class="cart__items">
                        <div class="cart__item">
                            <div class="item__image">
                                <img src="{{ asset('/storage/images/products/product_1.jpg') }}" alt="product" class="item__img">
                            </div>

                            <div class="item__info">
                                <div class="basic_info">
                                    <span class="item__title">Вітровка New Balance Jacket NB Athletics</span>
                                    <div class="price">
                                        <span class="item__new_price">1550 ₴</span>
                                    </div>
                                </div>

                                <div class="details">
                                    <div class="items_count">
                                        <div class="counter">
                                            <img src="{{ asset('/storage/images/icons/minus.svg') }}" alt="minus" class="counter_item">
                                            <hr class="vertical_line">
                                            <span class="counter_item max">2</span>
                                            <hr class="vertical_line">
                                            <img src="{{ asset('/storage/images/icons/plus.svg') }}" alt="plus" class="counter_item disabled">
                                        </div>
                                        <img src="{{ asset('/storage/images/icons/attention.svg') }}" alt="attention" class="attention">
                                    </div>

                                    <img src="{{ asset('/storage/images/icons/trash.svg') }}" alt="trash" class="trash">
                                </div>
                            </div>
                        </div>

                        <div class="cart__item">
                            <div class="item__image">
                                <img src="{{ asset('/storage/images/products/product_2.jpg') }}" alt="product" class="item__img">
                            </div>

                            <div class="item__info">
                                <div class="basic_info">
                                    <span class="item__title">Вітровка New Balance Jacket NB Athletics</span>
                                    <div class="price">
                                        <span class="item__old_price">1750 ₴</span>
                                        <span class="item__new_price">1550 ₴</span>
                                    </div>
                                </div>

                                <div class="details">
                                    <div class="items_count">
                                        <div class="counter">
                                            <img src="{{ asset('/storage/images/icons/minus.svg') }}" alt="attention" class="counter_item">
                                            <hr class="vertical_line">
                                            <span class="counter_item">2</span>
                                            <hr class="vertical_line">
                                            <img src="{{ asset('/storage/images/icons/plus.svg') }}" alt="attention" class="counter_item">
                                        </div>
                                    </div>

                                    <img src="{{ asset('/storage/images/icons/trash.svg') }}" alt="trash" class="trash">
                                </div>
                            </div>
                        </div>

                        <div class="cart__item">
                            <div class="item__image">
                                <img src="{{ asset('/storage/images/products/product_3.jpg') }}" alt="product" class="item__img">
                            </div>

                            <div class="item__info">
                                <div class="basic_info">
                                    <span class="item__title">Вітровка New Balance Jacket NB Athletics</span>
                                    <div class="price">
                                        <span class="item__old_price">1750 ₴</span>
                                        <span class="item__new_price">1550 ₴</span>
                                    </div>
                                </div>

                                <div class="details">
                                    <div class="items_count">
                                        <div class="counter">
                                            <img src="{{ asset('/storage/images/icons/minus.svg') }}" alt="attention" class="counter_item">
                                            <hr class="vertical_line">
                                            <span class="counter_item">2</span>
                                            <hr class="vertical_line">
                                            <img src="{{ asset('/storage/images/icons/plus.svg') }}" alt="attention" class="counter_item">
                                        </div>
                                    </div>

                                    <img src="{{ asset('/storage/images/icons/trash.svg') }}" alt="trash" class="trash">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cart_summary">
                        <div class="summary__item">
                            <span class="summary__text">Вартість</span>
                            <span class="summary__value">4200 ₴</span>
                        </div>

                        <div class="summary__item">
                            <span class="summary__text">Доставка</span>
                            <span class="summary__value thin">Нова пошта <span class="bold">(приблизно 70₴) </span></span>
                        </div>

                        <div class="summary__item">
                            <span class="summary__text bold">Загальна вартість</span>
                            <span class="summary__value bold">4270 ₴</span>
                        </div>
                    </div>
                </div>
            </aside>

            <div class="form_group payment_methods__wrapper">
                <h1 class="group__title">Інформація оплати</h1>

                <div class="group__radios payment_methods">
                    <div class="group__radio">
                        <div class="radio__wrapper">
                            <input type="radio" id="pay_when_receive" class="radio__input" name="delivery_method" checked>
                            <label for="pay_when_receive" class="radio__label">
                                <span class="radio__text">Оплата при отриманні</span>
                                <img src="{{ asset('/storage/images/icons/attention.svg') }}" alt="payment" class="radio__icon">
                            </label>
                        </div>
                        <span class="radio__description">За мінімальної передоплати 150грн</span>

                        <div class="radio__help_text">
                            <span class="text">Дані для передоплати Вам надішле менеджер в приватні повідомлення у Telegram або Viber</span>
                        </div>
                    </div>

                    <div class="group__radio">
                        <div class="radio__wrapper">
                            <input type="radio" id="privat" class="radio__input" name="delivery_method">
                            <label for="privat" class="radio__label">
                                <img src="{{ asset('/storage/images/icons/privat.svg') }}" alt="privat" class="radio__icon">
                                <span class="radio__text">Приват24</span>
                            </label>
                        </div>
                    </div>

                    <div class="group__radio">
                        <div class="radio__wrapper">
                            <input type="radio" id="mono" class="radio__input" name="delivery_method">
                            <label for="mono" class="radio__label">
                                <img src="{{ asset('/storage/images/icons/mono.svg') }}" alt="mono" class="radio__icon">
                                <span class="radio__text">Monobank</span>
                            </label>
                        </div>
                    </div>

                    <div class="group__radio">
                        <div class="radio__wrapper">
                            <input type="radio" id="visa" class="radio__input" name="delivery_method">
                            <label for="visa" class="radio__label">
                                <img src="{{ asset('/storage/images/icons/visa.svg') }}" alt="visa" class="radio__icon">
                                <img src="{{ asset('/storage/images/icons/mastercard.svg') }}" alt="visa" class="radio__icon">
                                <span class="radio__text">Visa/Mastercard</span>
                            </label>
                        </div>
                    </div>

                    <div class="group__radio">
                        <div class="radio__wrapper">
                            <input type="radio" id="liqpay" class="radio__input" name="delivery_method">
                            <label for="liqpay" class="radio__label">
                                <img src="{{ asset('/storage/images/icons/liqpay.svg') }}" alt="liqpay" class="radio__icon">
                                <span class="radio__text">LiqPay</span>
                            </label>
                        </div>
                    </div>

                    <div class="group__radio">
                        <div class="radio__wrapper">
                            <input type="radio" id="paypal" class="radio__input" name="delivery_method">
                            <label for="paypal" class="radio__label">
                                <img src="{{ asset('/storage/images/icons/paypal.svg') }}" alt="paypal" class="radio__icon">
                                <span class="radio__text">PayPal</span>
                            </label>
                        </div>
                    </div>

                    <div class="group__radio">
                        <div class="radio__wrapper">
                            <input type="radio" id="apple_pay" class="radio__input" name="delivery_method">
                            <label for="apple_pay" class="radio__label">
                                <img src="{{ asset('/storage/images/icons/apple_pay.svg') }}" alt="apple pay" class="radio__icon">
                            </label>
                        </div>
                    </div>

                    <div class="group__radio">
                        <div class="radio__wrapper">
                            <input type="radio" id="google_pay" class="radio__input" name="delivery_method">
                            <label for="google_pay" class="radio__label">
                                <img src="{{ asset('/storage/images/icons/google_pay.svg') }}" alt="google pay" class="radio__icon">
                            </label>
                        </div>
                    </div>
                </div>

                <button class="btn-primary" type="submit">Підтвердити замовлення</button>
            </div>
        </form>

        <aside class="cart">
            <div class="cart_header">
                <h2 class="cart__title">Ваш кошик</h2>
            </div>

            <div class="cart_content">
                <div class="cart__items">
                    <div class="cart__item">
                        <div class="item__image">
                            <img src="{{ asset('/storage/images/products/product_1.jpg') }}" alt="product" class="item__img">
                        </div>

                        <div class="item__info">
                            <div class="basic_info">
                                <span class="item__title">Вітровка New Balance Jacket NB Athletics</span>
                                <div class="price">
                                    <span class="item__new_price">1550 ₴</span>
                                </div>
                            </div>

                            <div class="details">
                                <div class="items_count">
                                    <div class="counter">
                                        <img src="{{ asset('/storage/images/icons/minus.svg') }}" alt="minus" class="counter_item">
                                        <hr class="vertical_line">
                                        <span class="counter_item max">2</span>
                                        <hr class="vertical_line">
                                        <img src="{{ asset('/storage/images/icons/plus.svg') }}" alt="plus" class="counter_item disabled">
                                    </div>
                                    <img src="{{ asset('/storage/images/icons/attention.svg') }}" alt="attention" class="attention">
                                </div>

                                <img src="{{ asset('/storage/images/icons/trash.svg') }}" alt="trash" class="trash">
                            </div>
                        </div>
                    </div>

                    <div class="cart__item">
                        <div class="item__image">
                            <img src="{{ asset('/storage/images/products/product_2.jpg') }}" alt="product" class="item__img">
                        </div>

                        <div class="item__info">
                            <div class="basic_info">
                                <span class="item__title">Вітровка New Balance Jacket NB Athletics</span>
                                <div class="price">
                                    <span class="item__old_price">1750 ₴</span>
                                    <span class="item__new_price">1550 ₴</span>
                                </div>
                            </div>

                            <div class="details">
                                <div class="items_count">
                                    <div class="counter">
                                        <img src="{{ asset('/storage/images/icons/minus.svg') }}" alt="attention" class="counter_item">
                                        <hr class="vertical_line">
                                        <span class="counter_item">2</span>
                                        <hr class="vertical_line">
                                        <img src="{{ asset('/storage/images/icons/plus.svg') }}" alt="attention" class="counter_item">
                                    </div>
                                </div>

                                <img src="{{ asset('/storage/images/icons/trash.svg') }}" alt="trash" class="trash">
                            </div>
                        </div>
                    </div>

                    <div class="cart__item">
                        <div class="item__image">
                            <img src="{{ asset('/storage/images/products/product_3.jpg') }}" alt="product" class="item__img">
                        </div>

                        <div class="item__info">
                            <div class="basic_info">
                                <span class="item__title">Вітровка New Balance Jacket NB Athletics</span>
                                <div class="price">
                                    <span class="item__old_price">1750 ₴</span>
                                    <span class="item__new_price">1550 ₴</span>
                                </div>
                            </div>

                            <div class="details">
                                <div class="items_count">
                                    <div class="counter">
                                        <img src="{{ asset('/storage/images/icons/minus.svg') }}" alt="attention" class="counter_item">
                                        <hr class="vertical_line">
                                        <span class="counter_item">2</span>
                                        <hr class="vertical_line">
                                        <img src="{{ asset('/storage/images/icons/plus.svg') }}" alt="attention" class="counter_item">
                                    </div>
                                </div>

                                <img src="{{ asset('/storage/images/icons/trash.svg') }}" alt="trash" class="trash">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart_summary">
                    <div class="summary__item">
                        <span class="summary__text">Вартість</span>
                        <span class="summary__value">4200 ₴</span>
                    </div>

                    <div class="summary__item">
                        <span class="summary__text">Доставка</span>
                        <span class="summary__value thin">Нова пошта <span class="bold">(приблизно 70₴) </span></span>
                    </div>

                    <div class="summary__item">
                        <span class="summary__text bold">Загальна вартість</span>
                        <span class="summary__value bold">4270 ₴</span>
                    </div>
                </div>
            </div>
        </aside>
    </div>

    @include('components.footer')
@endsection
