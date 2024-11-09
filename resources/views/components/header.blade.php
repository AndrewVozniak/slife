<header class="header">
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

    <main class="header__main container">
        <img src="{{asset('storage/images/logo.svg')}}" alt="logo" class="logo">

        <form class="search_bar">
            <input type="text" class="search_bar__input" placeholder="{{ __('header.search_goods') }}">

            <div class="search_bar__elems">
                <div class="dropdown_menu">
                    <div class="trigger">
                        <p class="trigger__text">{{ __('header.choose_category') }}</p>
                        <img src="{{asset('storage/images/icons/arrow_down.svg')}}" alt="arrow_down" class="arrow_down">
                    </div>
                </div>

                <button type="submit" class="search_bar__button">
                    <img src="{{asset('storage/images/icons/search.svg')}}" alt="search">
                </button>
            </div>
        </form>

        <ul class="user_navigation">
            <li class="user_navigation__item">
                <a href="#" class="user_navigation__link">
                    <img src="{{asset('storage/images/icons/user.svg')}}" alt="user">
                </a>
            </li>
            <li class="user_navigation__item">
                <a href="#" class="user_navigation__link">
                    <p class="count">0</p>
                    <img src="{{asset('storage/images/icons/pajamas_comparison.svg')}}" alt="comparison">
                </a>
            </li>
            <li class="user_navigation__item">
                <a href="#" class="user_navigation__link">
                    <p class="count">0</p>
                    <img src="{{asset('storage/images/icons/favorite.png')}}" alt="favorite items">
                </a>
            </li>
            <li class="user_navigation__item">
                <a href="#" class="user_navigation__link">
                    <p class="count">0</p>
                    <img src="{{asset('storage/images/icons/shopping_cart.png')}}" alt="shopping cart">
                </a>
            </li>
        </ul>
    </main>

    <ul class="categories container">
        <li class="category_item main">
            <div class="main_item active">
                <a href="#" class="category_link">{{ __('header.categories.men') }}</a>
            </div>
            <div class="main_item">
                <a href="#" class="category_link">{{ __('header.categories.women') }}</a>
            </div>
            <div class="main_item">
                <a href="#" class="category_link">{{ __('header.categories.children') }}</a>
            </div>
        </li>
        <li class="category_item">
            <a href="#" class="category_link">{{ __('header.categories.new') }}</a>
        </li>
        <li class="category_item">
            <a href="#" class="category_link">{{ __('header.categories.clothes') }}</a>
            <img src="{{asset('storage/images/icons/arrow_down.svg')}}" alt="arrow_down" class="arrow_down">
        </li>
        <li class="category_item">
            <a href="#" class="category_link">{{ __('header.categories.shoes') }}</a>
            <img src="{{asset('storage/images/icons/arrow_down.svg')}}" alt="arrow_down" class="arrow_down">
        </li>
        <li class="category_item">
            <a href="#" class="category_link">{{ __('header.categories.accessories') }}</a>
            <img src="{{asset('storage/images/icons/arrow_down.svg')}}" alt="arrow_down" class="arrow_down">
        </li>
        <li class="category_item">
            <a href="{{ route('catalog', ['category' => 'popular_items', 'locale' => App::currentLocale()]) }}" class="category_link">{{ __('header.categories.popular') }}</a>
        </li>
        <li class="category_item">
            <a href="{{ route('catalog', ['category' => 'sale', 'locale' => App::currentLocale()]) }}" class="category_link">{{ __('header.categories.sale') }}</a>
        </li>
    </ul>
</header>
