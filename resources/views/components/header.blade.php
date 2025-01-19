<header class="header" x-data="{ submenuOpened: false, currentTab: 0 }">
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

    <div class="gray_line"></div>

    <ul class="categories container" id="menu">
        <li class="category_item main" >

            {{--            *********************************   Men   ************************************--}}
            <a href="{{ route('catalog', ['locale' => App::currentLocale(), 'category' => 'men']) }}"
               class="main_item">
                <span class="category_link_main">{{ __('header.categories.men') }}</span>
            </a>

            {{--            *********************************   Women   ************************************-- --}}
            <a href="{{ route('catalog', ['locale' => App::currentLocale(), 'category' => 'women']) }}"
               class="main_item"
            >
                <span class="category_link_main">{{ __('header.categories.women') }}</span>
            </a>

            {{--            *********************************   Children   ************************************--}}
            <a href="{{ route('catalog', ['locale' => App::currentLocale(), 'category' => 'children']) }}"
               class="main_item">
                <span class="category_link_main">{{ __('header.categories.children') }}</span>
            </a>
        </li>
        <li class="category_item">
            <a href="{{ route('catalog', ['locale' => App::currentLocale(), 'category' => 'new']) }}" class="category_link">{{ __('header.categories.new') }}</a>
        </li>
        <li class="category_item">
            <div @click="submenuOpened = !submenuOpened; currentTab = 1">
                <a href="#" class="category_link">
                    {{ __('header.categories.clothes') }}
                </a>
                <img src="{{asset('storage/images/icons/arrow_down.svg')}}" alt="arrow_down" class="arrow_down" :class="{ 'rotate-180': submenuOpened && currentTab === 1 }">
            </div>
        </li>
        <li class="category_item">
            <div @click="submenuOpened = !submenuOpened; currentTab = 2">
                <a href="#" class="category_link">
                    {{ __('header.categories.shoes') }}
                </a>
                <img src="{{asset('storage/images/icons/arrow_down.svg')}}" alt="arrow_down" class="arrow_down" :class="{ 'rotate-180': submenuOpened && currentTab === 2 }">
            </div>
        </li>
        <li class="category_item">
            <div @click="submenuOpened = !submenuOpened; currentTab = 3">
                <a href="#" class="category_link">
                    {{ __('header.categories.accessories') }}
                </a>
                <img src="{{asset('storage/images/icons/arrow_down.svg')}}" alt="arrow_down" class="arrow_down" :class="{ 'rotate-180': submenuOpened && currentTab === 3 }">
            </div>
        </li>
        <li class="category_item">
            <a href="{{ route('catalog', ['category' => 'popular_items', 'locale' => App::currentLocale()]) }}" class="category_link">{{ __('header.categories.popular') }}</a>
        </li>
        <li class="category_item">
            <a href="{{ route('catalog', ['category' => 'sale', 'locale' => App::currentLocale()]) }}" class="category_link">{{ __('header.categories.sale') }}</a>
        </li>
    </ul >

    <div class="dropdown_subMenu" id="popup1" x-show="submenuOpened" @click.outside="submenuOpened = false" x-data="{ step2: 0, step3: 0 }">
        <div class="container">
            <div class="box_wrapper">
                <ul class="subMenu_box">
                    <li class="subMenu_item"><a href="#">{{ __('header.dropdown.novelty') }} </a></li>
                    <li class="subMenu_item" @click="step2 = step2 !== 1 ? 1 : 0">
                        <a href="#" class="subMenuPopup" data-window="window1">{{ __('header.dropdown.clothes.clothes') }}</a>
                        <img src="{{asset('storage/images/icons/arrow_right_blue.svg')}}" alt="arrow" class="img_arrow">
                    </li>
                    <li class="subMenu_item" @click="step2 = step2 !== 2 ? 2 : 0">
                        <a href="#"  class="subMenuPopup" data-window="window2">{{ __('header.dropdown.shoes.shoes') }}</a>
                        <img src="{{asset('storage/images/icons/arrow_right_blue.svg')}}" alt="arrow" class="img_arrow">
                    </li>
                    <li class="subMenu_item" @click="step2 = step2 !== 3 ? 3 : 0">
                        <a href="#" class="subMenuPopup" data-window="window3">{{ __('header.dropdown.accessories.accessories') }}</a>
                        <img src="{{asset('storage/images/icons/arrow_right_blue.svg')}}" alt="arrow" class="img_arrow">
                    </li>
                    <li class="subMenu_item"><a href="#">{{ __('header.dropdown.popular_products') }}</a></li>
                    <li class="subMenu_item"><a href="#">{{ __('header.dropdown.sales') }}</a></li>
                </ul>
            </div>
            <div class="box_wrapper" x-show="step2 !== 0">
                <ul class="subMenu_box" x-show="step2 === 1">
                    <li class="subMenu_item step2"><a href="#">{{ __('header.dropdown.clothes.jackets') }}</a></li>
                    <li class="subMenu_item step2"><a href="#">{{ __('header.dropdown.clothes.cardigans') }}</a></li>
                    <li class="subMenu_item step2"><a href="#">{{ __('header.dropdown.clothes.trousers') }}</a></li>
                    <li class="subMenu_item step2"><a href="#">{{ __('header.dropdown.clothes.sports_suits') }}</a></li>
                    <li class="subMenu_item step2"><a href="#">{{ __('header.dropdown.clothes.t-shirts') }}</a></li>
                    <li class="subMenu_item step2"><a href="#">{{ __('header.dropdown.clothes.shorts') }}</a></li>
                    <li class="subMenu_item step2"><a href="#">{{ __('header.dropdown.clothes.thermal_washers') }}</a></li>
                    <li class="subMenu_item step2"><a href="#">{{ __('header.dropdown.clothes.underwear') }}</a></li>
                    <li class="subMenu_item step2"><a href="#">{{ __('header.dropdown.clothes.socks') }}</a></li>
                </ul>
                <ul class="subMenu_box" x-show="step2 === 2">
                    <li class="subMenu_item step2"><a href="#">{{ __('header.dropdown.shoes.sneakers') }}</a></li>
                    <li class="subMenu_item step2"><a href="#">{{ __('header.dropdown.shoes.slippers') }}</a></li>
                    <li class="subMenu_item step2"><a href="#">{{ __('header.dropdown.shoes.sandals') }}</a></li>
                    <li class="subMenu_item step2"><a href="#">{{ __('header.dropdown.shoes.training_shoes') }}</a></li>
                </ul>
                <ul class="subMenu_box" x-show="step2 === 3">
                    <li class="subMenu_item step2" @click="step3 = step3 !== '3_1' ? '3_1' : 0">
                        <a href="#">{{ __('header.dropdown.accessories.headwears') }}</a>
                        <img src="{{asset('storage/images/icons/arrow_2.svg')}}" alt="arrow" class="img_arrow2">
                    </li>
                    <li class="subMenu_item step2" @click="step3 = step3 !== '3_2' ? '3_2' : 0">
                        <a href="#" class="subMenuPopup" data-window="window1">{{ __('header.dropdown.accessories.bags') }}</a>
                        <img src="{{asset('storage/images/icons/arrow_2.svg')}}" alt="arrow" class="img_arrow2">
                    </li>
                    <li class="subMenu_item step2">
                        <a href="#"  class="subMenuPopup" data-window="window2">{{ __('header.dropdown.accessories.backpacks') }}</a>
                    </li>
                    <li class="subMenu_item step2" >
                        <a href="#" class="subMenuPopup" data-window="window3">{{ __('header.dropdown.accessories.scarves') }}</a>
                    </li>
                    <li class="subMenu_item step2" @click="step3 = step3 !== '3_3' ? '3_3' : 0">
                        <a href="#">{{ __('header.dropdown.accessories.sports_accessories') }}</a>
                        <img src="{{asset('storage/images/icons/arrow_2.svg')}}" alt="arrow" class="img_arrow2">
                    </li>
                </ul>
            </div>
            <div class="box_wrapper" x-show="step3 !== 0">
                <ul class="subMenu_box" x-show="step3 === '3_1'">
                    <li class="subMenu_item step3"><a href="#"></a></li>
                    <li class="subMenu_item step3"><a href="#"></a></li>
                    <li class="subMenu_item step3"><a href="#"></a></li>
                </ul>
                <ul class="subMenu_box" x-show="step3 === '3_2'">
                    <li class="subMenu_item step3"><a href="#"></a></li>
                    <li class="subMenu_item step3"><a href="#"></a></li>
                    <li class="subMenu_item step3"><a href="#"></a></li>
                </ul>
                <ul class="subMenu_box" x-show="step3 === '3_3'">
                    <li class="subMenu_item step3"><a href="#">{{ __('header.dropdown.sports_accessories.socks') }}</a></li>
                    <li class="subMenu_item step3"><a href="#">{{ __('header.dropdown.sports_accessories.football_gaiters') }}</a></li>
                    <li class="subMenu_item step3"><a href="#">{{ __('header.dropdown.sports_accessories.football_shields') }}</a></li>
                    <li class="subMenu_item step3"><a href="#">{{ __('header.dropdown.sports_accessories.balls') }}</a></li>
                    <li class="subMenu_item step3"><a href="#">{{ __('header.dropdown.sports_accessories.goalkeeper_gloves') }}</a></li>
                    <li class="subMenu_item step3"><a href="#">{{ __('header.dropdown.sports_accessories.other_accessories') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<script>
    function toggleMenu() {
        const menu = document.getElementById('menu');
        menu.classList.toggle('hidden');
    }

    // document.addEventListener('DOMContentLoaded', () => {
    //     const buttons = document.querySelectorAll('.main_item');
    //     const subMenu = document.querySelectorAll('.dropdown_subMenu');
    //
    //     buttons.forEach((button) => {
    //         const switchover = document.querySelectorAll('.subMenuPopup');
    //         const subSubMenu = document.querySelectorAll('.dropdown_subSubMenu');
    //
    //         button.addEventListener('mouseenter', () => {
    //             const popupId = button.dataset.popup;
    //             const popup = document.getElementById(popupId);
    //
    //             subMenu.forEach((p) => (p.style.display = 'none'));
    //
    //             if (popup) {
    //                 popup.style.display = 'block';
    //
    //                 switchover.forEach((button) => {
    //                     button.addEventListener('mouseenter', () => {
    //                         const windowId = button.dataset.window;
    //                         const currentWindow = document.getElementById(windowId);
    //
    //                         subSubMenu.forEach((p) => (p.style.display = 'none'));
    //
    //                         if (currentWindow) {
    //                             currentWindow.style.display = 'block';
    //                         }
    //                     });
    //
    //                     button.addEventListener('mouseleave', () => {
    //                         const windowId = button.dataset.window;
    //                         const currentWindow = document.getElementById(windowId);
    //
    //                         if (popup || currentWindow) {
    //                             currentWindow.style.display = 'none';
    //                         }
    //                     });
    //                 });
    //             }
    //         });
    //
    //         button.addEventListener('mouseleave', () => {
    //             const popupId = button.dataset.popup;
    //             const popup = document.getElementById(popupId);
    //
    //             const windowId = button.dataset.window;
    //             const currentWindow = document.getElementById(windowId);
    //
    //             if (popup || currentWindow) {
    //                 setTimeout(() => {
    //                     popup.style.display = 'none';
    //                 }, 4000);
    //             }
    //         });
    //     });
    // });

</script>
