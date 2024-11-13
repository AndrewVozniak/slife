
<section class="describe_product_wrapper">
    <div class="add_to_cart">
        <div class="product_name">
            <span>{{__('product.product_describe.jacket')}}</span>
        </div>

        <div class="product_info_box">
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

        <div class="product_info_box">
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

        <div class="product_info_box">
            <div class="product_title_options_size">
                <div class="product_title_options_box">
                    <span>{{__('product.product_describe.size')}}</span>
                </div>

                <a href="#" class="product_title_size_chart">
                    {{__('product.product_describe.size_chart')}}
                </a>
            </div>

            @include('elements.dropdown_menu_size')
        </div>

        <div class="gray_line"></div>

        <div class="product_info_box">
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
                        <a href="#" class="pay_with_bonus_link">{{__('product.product_describe.login')}}</a>
                        <span class="pay_with_bonus_text">{{__('product.product_describe.pay_with_bonus')}}</span>
                    </div>

                    <div class="pay_with_bonus_box">
                        <span class="bonus_red_text">0 {{__('product.product_describe.currency')}}</span>
                        <span class="pay_with_bonus_text_small">{{__('product.product_describe.on_account')}}</span>
                    </div>
                </div>
            </div>

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
            <span>
                <b>{{__('product.product_describe.hurry_up')}}&#33;</b>
                {{__('product.product_describe.one_unit_left')}}&#46;
                {{__('product.product_describe.hurry_up_text')}}&#46;
            </span>
        </div>
    </div>

    <div class="describe_product">

    </div>

    <div class="reviews">

    </div>

    <div class="leave_review">

    </div>

    <div class="product_name">


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
</script>
