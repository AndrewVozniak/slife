<header class="header">
    @include('components.header_top')

    <main class="header__main container">
        <a href="{{ route('home', ['locale' => App::currentLocale()]) }}">
            <img src="{{asset('storage/images/logo.png')}}" alt="logo" class="logo">
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
            <li class="hr_menu"></li>

            <li class="user_navigation__item">
                <a href="{{ route('login', ['locale' => App::currentLocale()])  }}" class="user_navigation__link">
                    <img src="{{asset('storage/images/icons/user.svg')}}" alt="user">
                </a>
            </li>

            <li class="hr_menu"></li>

            <li class="user_navigation__item">
                <a href="{{ route('compareProduct', ['locale' => App::currentLocale()])  }}" class="user_navigation__link">
                    <p class="count">0</p>
                    <img src="{{asset('storage/images/icons/pajamas_comparison.svg')}}" alt="comparison">
                </a>
            </li>

            <li class="hr_menu"></li>

            <li class="user_navigation__item">
                <a href="{{ route('favorite', ['locale' => App::currentLocale()]) }}" class="user_navigation__link">
                    <p class="count">0</p>
                    <img src="{{asset('storage/images/icons/solar_heart-outline.svg')}}" alt="favorite items" class="custom_image_1">
                </a>
            </li>

            <li class="hr_menu"></li>

            <li class="user_navigation__item">
                <a href="{{ route('shoppingCart', ['locale' => App::currentLocale()]) }}" class="user_navigation__link">
                    <p class="count">0</p>
                    <img src="{{asset('storage/images/icons/solar_cart-3-outline.svg')}}" alt="shopping cart" class="custom_image_2">
                </a>
            </li>

            <li  class="user_navigation__item">
                <button class="menu-toggle" onclick="toggleMenu()">
                    <img src="{{asset('storage/images/icons/hugeicons_menu-02.svg')}}" alt="open menu">
                </button>
            </li>
        </ul>
    </main>

    <ul class="categories container" id="menu">
        <li class="category_item main">
            <a href="{{ route('catalog', ['locale' => App::currentLocale(), 'category' => 'men']) }}" class="main_item">
                <span class="category_link_main">{{ __('header.categories.men') }}</span>
            </a>
            <a href="{{ route('catalog', ['locale' => App::currentLocale(), 'category' => 'women']) }}" class="main_item">
                <span class="category_link_main">{{ __('header.categories.women') }}</span>
            </a>
            <a href="{{ route('catalog', ['locale' => App::currentLocale(), 'category' => 'children']) }}" class="main_item">
                <span class="category_link_main">{{ __('header.categories.children') }}</span>
            </a>
        </li>
        <li class="category_item">
            <a href="{{ route('catalog', ['locale' => App::currentLocale(), 'category' => 'new']) }}" class="category_link">{{ __('header.categories.new') }}</a>
        </li>
        <li class="category_item" x-data="{ open: false }">
            <div @click="open = !open">
                <a href="#" class="category_link">
                    {{ __('header.categories.clothes') }}
                </a>
                <img src="{{asset('storage/images/icons/arrow_down.svg')}}" alt="arrow_down" class="arrow_down" :class="{ 'rotate-180': open }">
            </div>
            <ul x-show="open" class="dropdown_menu" @click.outside="open = false" style="display: none;">
                <li><a href="#">Item 1</a></li>
                <li><a href="#">Item 2</a></li>
                <li><a href="#">Item 3</a></li>
            </ul>
        </li>
        <li class="category_item" x-data="{ open: false }">
            <div @click="open = !open">
                <a href="#" class="category_link">
                    {{ __('header.categories.shoes') }}
                </a>
                <img src="{{asset('storage/images/icons/arrow_down.svg')}}" alt="arrow_down" class="arrow_down" :class="{ 'rotate-180': open }">
            </div>
            <ul x-show="open" class="dropdown_menu" @click.outside="open = false" style="display: none;">
                <li><a href="#">Item 1</a></li>
                <li><a href="#">Item 2</a></li>
                <li><a href="#">Item 3</a></li>
            </ul>
        </li>
        <li class="category_item" x-data="{ open: false }">
            <div @click="open = !open">
                <a href="#" class="category_link">
                    {{ __('header.categories.accessories') }}
                </a>
                <img src="{{asset('storage/images/icons/arrow_down.svg')}}" alt="arrow_down" class="arrow_down" :class="{ 'rotate-180': open }">
            </div>
            <ul x-show="open" class="dropdown_menu" @click.outside="open = false" style="display: none;">
                <li><a href="#">Item 1</a></li>
                <li><a href="#">Item 2</a></li>
                <li><a href="#">Item 3</a></li>
            </ul>
        </li>
        <li class="category_item">
            <a href="{{ route('catalog', ['category' => 'popular_items', 'locale' => App::currentLocale()]) }}" class="category_link">{{ __('header.categories.popular') }}</a>
        </li>
        <li class="category_item">
            <a href="{{ route('catalog', ['category' => 'sale', 'locale' => App::currentLocale()]) }}" class="category_link">{{ __('header.categories.sale') }}</a>
        </li>
    </ul >
</header>

<script>
    function toggleMenu() {
        const menu = document.getElementById('menu');
        menu.classList.toggle('hidden');
    }
</script>
