<div class="side_panel_wrapper" id="sidePanel">
    <div class="side_panel_box">
        <div class="filter_and_close_btn_box">
            <div class="param_box filter">
                <img src="{{asset('storage/images/icons/filter.svg')}}" alt="filter" class="param_image">
                <hr class="vertical_line">
                <span class="param_text">{{ __('catalog.filter_by.filter_text') }}</span>
            </div>

            <a href="javascript:void(0)" class="close_btn" onclick="closeNav()">×</a>
        </div>

        <form name="product_filter" id="product_filter" action="" method="GET" class="form_wrapper">
            <div class="side_panel_form_box">
                <div class="side_panel_form_title_wrapper" onclick="openSideProductFilterCategory()">
                    <a href="#"  class="side_panel_form_title">{{__('catalog.side_panel.categories')}}</a>
                    <img src="{{asset('storage/images/icons/sort_by_dropdown_arrow.svg')}}" alt="arrow_down" class="param_dropdown_arrow">
                </div>
                <br>
                <div class="side_panel_checkbox_box"  id="filterCategory" style="display: none;">
                    <label  class="checkbox-container">{{__('catalog.side_panel.t-shirts')}}
                        <input type="checkbox" name="category_of_product1" id="category_of_product1" value="t-shirts">
                        <span class="checkmark"></span>
                    </label>

                    <label  class="checkbox-container">{{__('catalog.side_panel.jackets')}}
                        <input type="checkbox" name="category_of_product2" id="category_of_product2" value="jackets">
                        <span class="checkmark"></span>
                    </label>

                    <label  class="checkbox-container">{{__('catalog.side_panel.sweaters')}}
                        <input type="checkbox" name="category_of_product3" id="category_of_product3" value="sweaters">
                        <span class="checkmark"></span>
                    </label>

                    <label  class="checkbox-container">{{__('catalog.side_panel.trousers')}}
                        <input type="checkbox" name="category_of_product4" id="category_of_product4" value="trousers">
                        <span class="checkmark"></span>
                    </label>
                    <br>
                </div>
            </div>

            <div class="side_panel_form_box">
                <div class="side_panel_form_title_wrapper" onclick="openSideProductFilterBrand()">
                    <a href="#"  class="side_panel_form_title">{{__('catalog.side_panel.brand')}}</a>
                    <img src="{{asset('storage/images/icons/sort_by_dropdown_arrow.svg')}}" alt="arrow_down" class="param_dropdown_arrow">
                </div>
                <br>
                <div class="side_panel_checkbox_box" id="filterBrand" style="display: none;">
                    <label  class="checkbox-container">The North Face
                        <input type="checkbox" name="brand1" id="brand1" value="the_North_Face">
                        <span class="checkmark"></span>
                    </label>

                    <label  class="checkbox-container">Puma
                        <input type="checkbox" name="brand2" id="brand2" value="puma">
                        <span class="checkmark"></span>
                    </label>

                    <label  class="checkbox-container">Adidas
                        <input type="checkbox" name="brand3" id="brand3" value=adidas">
                        <span class="checkmark"></span>
                    </label>

                    <label  class="checkbox-container">Nike
                        <input type="checkbox" name="brand4" id="brand4" value="nike">
                        <span class="checkmark"></span>
                    </label>
                    <br>
                </div>
            </div>

            <div class="side_panel_form_box">
                <div class="side_panel_form_title_wrapper">
                    <a href="#"  class="side_panel_form_title">{{__('catalog.side_panel.price')}}</a>

                    <div class="side_panel_range_wrapper">
                        <span class="side_panel_range min-tooltip">
                        {{__('catalog.side_panel.from')}} 129
                    </span>
                        <span class="side_panel_range max-tooltip">
                        {{__('catalog.side_panel.to')}} 1400
                    </span>
                    </div>
                </div>

                <div class="range_slider">
                    <span class="slider_track"></span>
                    <input type="range"
                           name="min_price"
                           id="min_price"
                           min="129"
                           max="3000"
                           value="129"
                           oninput="sliderMin()"
                           class="slider_price_min range_slider_input" >

                    <input type="range"
                           name="max_price"
                           id="max_price"
                           min="129"
                           max="3000"
                           value="1400"
                           oninput="sliderMax()"
                           class="slider_price_max range_slider_input" >
                </div>

                <div class="range_price_input_wrapper">
                    <input type="text"
                           name="min_price_input"
                           id="min_price_input"
                           class="range_price_input min_input"
                           onchange="setMinInput()"
                           value="129"
                           placeholder="{{__('catalog.side_panel.from')}} 129"
                    >

                    <input type="text"
                           name="max_price_input"
                           id="max_price_input"
                           class="range_price_input max_input"
                           value="3000"
                           onchange="setMaxInput()"
                           placeholder="{{__('catalog.side_panel.to')}} 3000"
                    >
                </div>
            </div>

            <div class="side_panel_form_box">
                <div class="side_panel_form_title_wrapper">
                    <a href="#" class="side_panel_form_title">{{__('catalog.side_panel.size')}}</a>
                </div>

                <div class="size_select_container">
                    <select name="size" id="size" class="size_select">
                        <option value="xs" class="select_options">XS</option>
                        <option value="s" class="select_options">S</option>
                        <option value="m" class="select_options">M</option>
                        <option value="l" class="select_options">L</option>
                        <option value="xl" class="select_options">XL</option>
                        <option value="xxl" class="select_options">XXL</option>
                    </select>

                    <div class="select_icon_container">
                        <img src="{{asset('storage/images/icons/sort_by_dropdown_arrow.svg')}}" alt="select_arrow" class="size_select_arrow">
                    </div>
                </div>
            </div>

            <button type="submit" class="apply_filter_btn">
                <span class="apply_filter_text">
                     {{__('catalog.side_panel.apply_filter')}}
                </span>
                <hr class="vertical_line">
                <img src="{{asset('storage/images/icons/iconamoon_check-bold.svg')}}" alt="icon" class="filter_icon">
            </button>

            <button class="apply_filter_btn white_filter_btn">
                <span class="apply_filter_text">
                     {{__('catalog.side_panel.reset_filter')}}
                </span>
                <hr class="vertical_line">
                <img src="{{asset('storage/images/icons/mage_filter.svg')}}" alt="icon" class="filter_icon">
            </button>
        </form>
    </div>
</div>


<button class="param_box" onclick="openNav()">
    <img src="{{asset('storage/images/icons/filter.svg')}}" alt="filter" class="param_image">
    <hr class="vertical_line">
    <span class="param_text">{{ __('catalog.filter_by.filter_text') }}</span>
</button>

<script>

    function openSideProductFilterCategory() {
        const x = document.getElementById("filterCategory");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function openSideProductFilterBrand() {
        const x = document.getElementById("filterBrand");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function openNav() {
        let width = window.innerWidth;
        if (width < 576) {
            document.getElementById("sidePanel").style.width = "100%";
        }
        else if (width < 768) {
            document.getElementById("sidePanel").style.width = "40%";
        } else if (width < 1024) {
            document.getElementById("sidePanel").style.width = "50%";
        } else if (width < 1440) {
            document.getElementById("sidePanel").style.width = "40%";
        } else if (width < 1920) {
            document.getElementById("sidePanel").style.width = "33%";
        }
    }

    function closeNav() {
        document.getElementById("sidePanel").style.width = "0";
    }

    window.onload = function () {
        sliderMin();
        sliderMax();
    }

    const minVal = document.querySelector('.slider_price_min');
    const maxVal = document.querySelector('.slider_price_max');
    const priceInputMin = document.querySelector('.min_input');
    const priceInputMax = document.querySelector('.max_input');
    const minTooltip = document.querySelector('.min-tooltip');
    const maxTooltip = document.querySelector('.max-tooltip');
    const minGap = 0;
    const range = document.querySelector('.slider_track');
    const sliderMinValue = parseInt(minVal.min);
    const sliderMaxValue = parseInt(maxVal.max);

    function sliderMin() {
        let gap = parseInt(maxVal.value) - parseInt(minVal.value);
        if (gap <= minGap) {
            minVal.value = parseInt(maxVal.value) - minGap;
        }
        minTooltip.innerHTML = "{{__('catalog.side_panel.from')}}" + " " + minVal.value;
        priceInputMin.value = minVal.value;
        setArea()
    }

    function sliderMax() {
        let gap = parseInt(maxVal.value) - parseInt(minVal.value);
        if (gap <= minGap) {
            maxVal.value = parseInt(minVal.value) + minGap;
        }
        maxTooltip.innerHTML = "{{__('catalog.side_panel.to')}}" + " " + maxVal.value;
        priceInputMax.value = maxVal.value;
        setArea()
    }

    function setArea() {
        range.style.left = (minVal.value / sliderMaxValue) * 100 + "%";
        range.style.right = 100 - (maxVal.value / sliderMaxValue) * 100 + "%";
    }

    function setMinInput() {
        let minPrice = parseInt(priceInputMin.value);
        if (minPrice < sliderMinValue) {
           priceInputMin.value = sliderMinValue;
        }
        minVal.value = priceInputMin.value;
        sliderMin();
    }

    function setMaxInput() {
        let maxPrice = parseInt(priceInputMax.value);
        if (maxPrice > sliderMaxValue) {
            priceInputMax.value = sliderMaxValue;
        }
        maxVal.value = priceInputMax.value;
        sliderMax();
    }
</script>
