<nav class="header__navbar">
    <div class="container">
        <span class="shipping_text">{{ __('header.free_shipping') }} <a href="#" class="underlined">{{ __('header.detailed_information') }}</a></span>

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
