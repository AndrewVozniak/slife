<header class="header">
    @include('components.header_top')

    <main class="header__main container">
        <a href="{{ route('home', ['locale' => App::currentLocale()]) }}">
            <img src="{{asset('storage/images/logo.svg')}}" alt="logo" class="logo">
        </a>

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
                <a href="{{ route('login', ['locale' => App::currentLocale()])  }}" class="user_navigation__link">
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
                <a href="{{ route('shoppingCart', ['locale' => App::currentLocale()]) }}" class="user_navigation__link">
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
