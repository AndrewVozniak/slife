
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
                <span class="old_price_value">1 500 грн</span>
            </div>
        </div>

        <button class="add_to_cart_button">Додати в кошик</button>
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
