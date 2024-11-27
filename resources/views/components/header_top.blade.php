    <nav class="header__navbar">
    <div class="container">
        <div class="shipping_text_wrapper">
            <span class="shipping_text">{{ __('header.free_shipping') }}
                <a href="#" class="underlined">{{ __('header.detailed_information') }}
                </a>
            </span>
        </div>

        <div class="interactive_menu">
            <div class="params">
                <ul class="params__list">
                    <li class="list__item">
                        <a href="{{ route('changeLocale', ['locale' => 'ua', 'lang' => 'ua']) }}" class="language_link @if(App::currentLocale() == 'ua') active @endif">UA</a>
                    </li>
                    <li class="list__item">
                        <a href="{{ route('changeLocale', ['locale' => 'en', 'lang' => 'en']) }}" class="language_link @if(App::currentLocale() == 'en') active @endif">ENG</a>
                    </li>
                    <li class="list__item">
                        <a href="{{ route('changeLocale', ['locale' => 'ru', 'lang' => 'ru']) }}" class="language_link @if(App::currentLocale() == 'ru') active @endif">RU</a>
                    </li>
                </ul>

                <div class="params__mobile_dropdown" x-data="{ open: false }">
                    <div @click="open = !open" class="params__mobile_dropdown_button">
                        <span class="params__mobile_dropdown_button_text">{{ App::currentLocale() }}</span>
                        <div class="img__wrapper">
                            <img src="{{asset('storage/images/icons/arrow_down_header.svg')}}" alt="arrow_down" class="arrow_down" :class="{ 'rotated': open }">
                        </div>
                    </div>
                    <div x-show="open" @click.away="open = false" class="params__mobile_dropdown_content">
                        <ul class="params__mobile_dropdown_list">
                            <li class="list__item
                                @if(App::currentLocale() == 'ua') active @endif">
                                <a href="{{ route('changeLocale', ['locale' => 'ua', 'lang' => 'ua']) }}" class="language_link">UA</a>
                            </li>
                            <li class="list__item
                                @if(App::currentLocale() == 'en') active @endif">
                                <a href="{{ route('changeLocale', ['locale' => 'en', 'lang' => 'en']) }}" class="language_link">ENG</a>
                            </li>
                            <li class="list__item
                                @if(App::currentLocale() == 'ru') active @endif">
                                <a href="{{ route('changeLocale', ['locale' => 'ru', 'lang' => 'ru']) }}" class="language_link">RU</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <hr class="vertical_line">

                <ul class="params__list">
                    <li class="list__item">
                        <a href="{{ route('changeCurrency', ['locale' => App::currentLocale(), 'currency' => 'UAH']) }}" class="currency_link @if(session('currency') == 'UAH') active @endif">₴</a>
                    </li>
                    <li class="list__item">
                        <a href="{{ route('changeCurrency', ['locale' => App::currentLocale(), 'currency' => 'USD']) }}" class="currency_link @if(session('currency') == 'USD') active @endif">$</a>
                    </li>
                    <li class="list__item">
                        <a href="{{ route('changeCurrency', ['locale' => App::currentLocale(), 'currency' => 'EUR']) }}" class="currency_link @if(session('currency') == 'EUR') active @endif">€</a>
                    </li>
                </ul>

                <div class="params__mobile_dropdown" x-data="{ open: false }">
                    <div @click="open = !open" class="params__mobile_dropdown_button">
                        <span class="params__mobile_dropdown_button_text">@if(session('currency') == 'UAH') ₴ @elseif(session('currency') == 'USD') $ @else € @endif</span>
                        <div class="img__wrapper">
                            <img src="{{asset('storage/images/icons/arrow_down_header.svg')}}" alt="arrow_down" class="arrow_down" :class="{ 'rotated': open }">
                        </div>
                    </div>
                    <div x-show="open" @click.away="open = false" class="params__mobile_dropdown_content">
                        <ul class="params__mobile_dropdown_list">
                            <li class="list__item
                                @if(session('currency') == 'UAH') active @endif">
                                <a href="{{ route('changeCurrency', ['locale' => App::currentLocale(), 'currency' => 'UAH']) }}" class="currency_link">₴</a>
                            </li>
                            <li class="list__item
                                @if(session('currency') == 'USD') active @endif">
                                <a href="{{ route('changeCurrency', ['locale' => App::currentLocale(), 'currency' => 'USD']) }}" class="currency_link">$</a>
                            </li>
                            <li class="list__item
                                @if(session('currency') == 'EUR') active @endif">
                                <a href="{{ route('changeCurrency', ['locale' => App::currentLocale(), 'currency' => 'EUR']) }}" class="currency_link">€</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="links">
                <ul class="social_media_list">
                    <li class="social_media_item"><a href="#" class="social_media_link"><img src="{{asset('storage/images/social_media/telegram.svg')}}" alt="telegram"></a></li>
                    <li class="social_media_item"><a href="#" class="social_media_link"><img src="{{asset('storage/images/social_media/viber.svg')}}" alt="viber"></a></li>
                    <li class="social_media_item"><a href="#" class="social_media_link"><img src="{{asset('storage/images/social_media/whatsapp.svg')}}" alt="whatsapp"></a></li>
                </ul>

                <hr class="vertical_line">

                <a href="tel:+380683673837" class="phone__link">+38(068)-367-38-37</a>
            </div>
        </div>
    </div>
</nav>
