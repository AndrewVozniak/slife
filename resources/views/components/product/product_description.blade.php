
<section class="describe_product_wrapper">
    <div class="add_to_cart">
        <div class="product_info_box price_mobile">
            <div class="product_title_options_box">
                <span>{{__('product.product_describe.price')}}</span>
            </div>

            <div class="price_and_cashback">
                <div class="price_value">
                    <span class="old_price">1 950 &#8372;</span>
                    <span class="new_price">1 750 &#8372;</span>
                </div>

                <div class="cashback">
                    <span class="cashback_text">{{__('product.product_describe.cashback2')}} &#8211; 5&#37;</span>
                </div>
            </div>
        </div>

        <div class="product_name">
            <span>{{__('product.product_describe.jacket')}}</span>
        </div>

        <div class="product_info_box availability_box">
            <div class="availability">
                <div class="availability_img_box">
                    <img src="{{asset('storage/images/icons/iconamoon_check-bold.svg')}}" alt="icon" class="iconamoon_img">
                </div>

                <span>{{__('product.product_describe.available')}}</span>
            </div>

            <div class="rating">
                <div class="star_rating_box">
                    <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="star_img">
                    <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="star_img">
                    <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="star_img">
                    <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="star_img">
                    <img src="{{ asset('storage/images/icons/star.svg') }}" alt="star" class="star_img">
                </div>

                <div class="reviews_rating_box">
                    <span class="reviews_rating_text">&#40;8 {{__('product.product_describe.reviews')}}&#41;</span>
                </div>
            </div>
        </div>

        <div class="gray_line"></div>

        <div class="product_info_box color_box">
            <div class="product_title_options_box">
                <span>{{__('product.color.color')}}</span>
            </div>

            <div x-data="colorPicker()" class="color_options">
                <template x-for="(color, index) in colors" :key="index">
                    <div
                        @click="setActiveColor(index)"
                        @mouseover="hoverColor = index"
                        @mouseleave="hoverColor = null"
                        class="color_options"
                    >
                        <div class="color_item">
                            <div
                                :class="['color_item', color.class, index === activeColor || index === hoverColor ? 'color_item_active' : '']"
                            ></div>

                            <div
                                :class="['color_name', index === activeColor || index === hoverColor ? 'color_name_active' : '']"
                                x-text="color.name"
                            ></div>
                        </div>
                    </div>
                </template>
            </div>
        </div>

        <div class="gray_line"></div>

        <div class="product_info_box size_box_wrapper">
            <div class="product_title_options_size size_box">
                <div class="product_title_options_box">
                    <span>{{__('product.product_describe.size')}}</span>
                </div>

                <a href="#" class="product_title_size_chart">
                    {{__('product.product_describe.size_chart')}}
                </a>
            </div>

            @include('elements.dropdown_menu_size')
        </div>

        <div class="gray_line line_hidden"></div>

        <div class="product_info_box price_box">
            <div class="product_title_options_box">
                <span>{{__('product.product_describe.price')}}</span>
            </div>

            <div class="price_box">
                <div class="price_value">
                    <span class="old_price">1 950 &#8372;</span>
                    <span class="new_price">1 750 &#8372;</span>
                </div>

                <div class="cashback">
                    <span class="cashback_text">{{__('product.product_describe.cashback')}}</span>
                    <div class="img_24_box">
                        <img src="{{asset('storage/images/icons/iconamoon_attention-circle-fill.svg')}}" alt="icon"
                             class="img_24">
                    </div>
                </div>
            </div>
        </div>

        <div class="bonus_info">
            <div class="user_bonus_info_box">
                <div class="img_32_box">
                    <img src="{{asset('storage/images/icons/user.svg')}}" alt="icon"
                         class="img_32">
                </div>

                <div class="user_bonus_info_text_box">
                    <div class="pay_with_bonus_box">
                        <a href="{{ route('login', ['locale' => App::currentLocale()]) }}" class="pay_with_bonus_link">
                            {{__('product.product_describe.login')}}
                        </a>
                        <span class="pay_with_bonus_text">{{__('product.product_describe.pay_with_bonus')}}</span>
                    </div>

                    <div class="pay_with_bonus_box">
                        <span class="bonus_red_text">0 {{__('product.product_describe.currency')}}</span>
                        <span class="pay_with_bonus_text_small">{{__('product.product_describe.on_account')}}</span>
                    </div>
                </div>
            </div>

            <div class="gray_line_bonus_box"></div>

            <div class="bonus_add_box">
                <span class="bonus_red">&#43; 18</span>
                <span>{{__('product.product_describe.bonus')}}</span>
            </div>
        </div>

        <div class="btn_wrapper">
            @include('elements.btn_product_quantity')

            <button class="add_to_cart_button">Додати в кошик</button>
        </div>

        <p>&#42; {{__('product.product_describe.quantity')}}</p>

        <div class="hurry_up_box">
            <p>
                <span class="text_700_16_black">{{__('product.product_describe.hurry_up')}}&#33;</span>
                {{__('product.product_describe.one_unit_left')}}&#46;
                {{__('product.product_describe.hurry_up_text')}}&#46;
            </p>
        </div>
    </div>

    <div class="details_wrapper">
        <div class="details_box">
            <div class="details_title_box">
                <span class="details_title">{{__('product.details.description')}}&#58;</span>

                <button class="details_img_box"  id="toggleButton">
                    <img src="{{asset('storage/images/icons/iconoir_plus.svg')}}" alt="icon"
                         class="details_img"  id="toggleIcon">
                </button>
            </div>

            <div class="details_text_box" id="textContent" style="display: none;">
                <p>
                    <span class="text_500_16_black">{{__('product.details.Material')}}&#58;</span>
                    95% бавовна, 5% еластан.
                </p>
                <p>{{__('product.details.text1')}}</p>
                <p>{{__('product.details.text2')}}</p>
            </div>
        </div>

        <div class="details_box">
            <div class="details_title_box">
                <span class="details_title">{{__('product.details.delivery')}}</span>

                <button class="details_img_box"  id="toggleButtonDelivery">
                    <img src="{{asset('storage/images/icons/iconoir_plus.svg')}}" alt="icon"
                         class="details_img"  id="toggleIconDelivery">
                </button>
            </div>

            <div class="details_text_box" id="textContentDelivery" style="display: none;">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                    eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>

        <div class="details_box">
            <div class="details_title_box">
                <span class="details_title">{{__('product.details.payment')}}</span>

                <button class="details_img_box"  id="toggleButtonPayment">
                    <img src="{{asset('storage/images/icons/iconoir_plus.svg')}}" alt="icon"
                         class="details_img"  id="toggleIconPayment">
                </button>
            </div>

            <div class="details_text_box" id="textContentPayment" style="display: none;">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                    eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>

        <div class="details_box">
            <div class="details_title_box">
                <span class="details_title">{{__('product.details.composition_and_care')}}</span>

                <button class="details_img_box"  id="toggleButtonComposition">
                    <img src="{{asset('storage/images/icons/iconoir_plus.svg')}}" alt="icon"
                         class="details_img"  id="toggleIconComposition">
                </button>
            </div>

            <div class="details_text_box" id="textContentComposition" style="display: none;">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                    eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>

        <div class="details_box">
            <div class="details_title_box">
                <span class="details_title">{{__('product.details.certificate')}}</span>

                <button class="details_img"  id="toggleButtonCertificate">
                    <img src="{{asset('storage/images/icons/iconoir_plus.svg')}}" alt="icon"
                         class="details_img_box"  id="toggleIconCertificate">
                </button>
            </div>

            <div class="details_text_box" id="textContentCertificate" style="display: none;">
                <p>
                    {{__('product.details.we_care')}}
                    <span class="text_500_16_black">{{__('product.details.only_original')}}</span>
                    {{__('product.details.leading_manufacturers')}}
                </p>

                <p>
                    <span class="text_500_16_black">{{__('product.details.product_quality')}}</span>
                    {{__('product.details.conclusion')}}
                </p>

                <p>
                    <span class="text_500_16_black">{{__('product.details.obtaining_certificate')}}</span>
                    {{__('product.details.request')}}
                    <span class="mail">slife&#46;ua&#64;ukr&#46;net&#46;</span>
                    <span>{{__('product.details.managers')}}</span>
                </p>
            </div>
        </div>

    </div>

    <div class="reviews_wrapper">
        <div class="reviews_title_box">
            <span class="text_600_24_black">{{__('product.reviews')}}</span>

            <div class="btn_arrow_wrapper">
                <button class="btn_arrow left_btn_arr">
                    <svg width="17" height="16"
                         viewBox="0 0 17 16"
                         fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.792892 8.70711C0.402369 8.31658 0.402369 7.68342 0.792892 7.29289L7.15685
                         0.928932C7.54738 0.538408 8.18054 0.538408 8.57107 0.928932C8.96159 1.31946 8.96159
                         1.95262 8.57107 2.34315L2.91421 8L8.57107 13.6569C8.96159 14.0474 8.96159 14.6805 8.57107
                         15.0711C8.18054 15.4616 7.54738 15.4616 7.15685 15.0711L0.792892 8.70711ZM16.5
                          9H1.5V7H16.5V9Z" fill="#1D2557"/>
                    </svg>
                </button>

                <button class="btn_arrow right_btn_arr">
                    <svg width="17" height="16"
                         viewBox="0 0 17 16" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.2071 8.70711C16.5976 8.31658 16.5976 7.68342 16.2071 7.29289L9.84315
                        0.928932C9.45262 0.538408 8.81946 0.538408 8.42893 0.928932C8.03841 1.31946 8.03841
                        1.95262 8.42893 2.34315L14.0858 8L8.42893 13.6569C8.03841 14.0474 8.03841 14.6805 8.42893
                        15.0711C8.81946 15.4616 9.45262 15.4616 9.84315 15.0711L16.2071 8.70711ZM0.5
                        9H15.5V7H0.5V9Z" fill="white"/>
                    </svg>
                </button>
            </div>

        </div>


        <div class="reviews_box">
            <div class="author_and_rating_box">
                <div class="about_author_box">
                    <div class="photo_author">
                        <span>A</span>
                    </div>

                    <div class="author_info_box">
                        <p class="text_500_16_black">Anna</p>
                        <span class="text_300_14_black">02/09/2024</span>
                    </div>
                </div>

                <div class="star_rating_box">
                    <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="star_img">
                    <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="star_img">
                    <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="star_img">
                    <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="star_img">
                    <img src="{{ asset('storage/images/icons/star.svg') }}" alt="star" class="star_img">
                </div>
            </div>

            <div class="main_text_box">
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                    ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum
                </p>
            </div>
        </div>
    </div>

    <div class="leave_review_wrapper">
        <div class="form_title_box">
            <div class="form_title">
                <span >{{__('product.leave_review.leave_review')}}</span>
            </div>

            <div class="warning">
                <div class="warning_img_box">
                    <img src="{{asset('storage/images/icons/iconamoon_attention-circle-red.svg')}}" alt="icon"
                         class="warning_img">
                </div>

                <div class="warning_text">
                    <p>{{__('product.leave_review.attention')}}
                    <span class="authorized">{{__('product.leave_review.authorized')}}</span>
                        {{__('product.leave_review.user_purchased_the_product')}}
                    </p>
                </div>
            </div>
        </div>

        @include('components.form.leave_review')
    </div>
</section>

<script>
    function colorPicker() {
        return {
            colors: [
                { name: '{{__('product.color.khaki')}}', class: 'color1' },
                { name: '{{__('product.color.black')}}', class: 'color2' },
                { name: '{{__('product.color.white')}}', class: 'color3' }
            ],
            activeColor: 1, // Середній колір  активний за замовчуванням
            hoverColor: null,
            setActiveColor(index) {
                this.activeColor = index;
            }
        }
    }


    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.getElementById('toggleButton');
        const toggleIcon = document.getElementById('toggleIcon');
        const textContent = document.getElementById('textContent');

        toggleButton.addEventListener('click', function() {
            // Перевірка, чи відображається текст
            const isTextVisible = textContent.style.display === 'block';

            // змінюємо стиль іконки і видимість тексту
            textContent.style.display = isTextVisible ? 'none' : 'block';
            toggleIcon.src = isTextVisible ? '{{ asset("storage/images/icons/iconoir_plus.svg") }}' : '{{ asset("storage/images/icons/iconoir_minus.svg") }}';
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.getElementById('toggleButtonDelivery');
        const toggleIcon = document.getElementById('toggleIconDelivery');
        const textContent = document.getElementById('textContentDelivery');

        toggleButton.addEventListener('click', function() {
            // Перевірка, чи відображається текст
            const isTextVisible = textContent.style.display === 'block';

            // змінюємо стиль іконки і видимість тексту
            textContent.style.display = isTextVisible ? 'none' : 'block';
            toggleIcon.src = isTextVisible ? '{{ asset("storage/images/icons/iconoir_plus.svg") }}' : '{{ asset("storage/images/icons/iconoir_minus.svg") }}';
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.getElementById('toggleButtonPayment');
        const toggleIcon = document.getElementById('toggleIconPayment');
        const textContent = document.getElementById('textContentPayment');

        toggleButton.addEventListener('click', function() {
            // Перевірка, чи відображається текст
            const isTextVisible = textContent.style.display === 'block';

            // змінюємо стиль іконки і видимість тексту
            textContent.style.display = isTextVisible ? 'none' : 'block';
            toggleIcon.src = isTextVisible ? '{{ asset("storage/images/icons/iconoir_plus.svg") }}' : '{{ asset("storage/images/icons/iconoir_minus.svg") }}';
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.getElementById('toggleButtonComposition');
        const toggleIcon = document.getElementById('toggleIconComposition');
        const textContent = document.getElementById('textContentComposition');

        toggleButton.addEventListener('click', function() {
            // Перевірка, чи відображається текст
            const isTextVisible = textContent.style.display === 'block';

            // змінюємо стиль іконки і видимість тексту
            textContent.style.display = isTextVisible ? 'none' : 'block';
            toggleIcon.src = isTextVisible ? '{{ asset("storage/images/icons/iconoir_plus.svg") }}' : '{{ asset("storage/images/icons/iconoir_minus.svg") }}';
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.getElementById('toggleButtonCertificate');
        const toggleIcon = document.getElementById('toggleIconCertificate');
        const textContent = document.getElementById('textContentCertificate');

        toggleButton.addEventListener('click', function() {
            // Перевірка, чи відображається текст
            const isTextVisible = textContent.style.display === 'block';

            // змінюємо стиль іконки і видимість тексту
            textContent.style.display = isTextVisible ? 'none' : 'block';
            toggleIcon.src = isTextVisible ? '{{ asset("storage/images/icons/iconoir_plus.svg") }}' : '{{ asset("storage/images/icons/iconoir_minus.svg") }}';
        });
    });
</script>


