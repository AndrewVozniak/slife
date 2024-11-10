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
        </form>

        <a href="#">{{__('catalog.side_panel.price')}}</a>
        <a href="#">{{__('catalog.side_panel.size')}}</a>
    </div>
</div>


<button class="param_box" onclick="openNav()">
    <img src="{{asset('storage/images/icons/filter.svg')}}" alt="filter" class="param_image">
    <hr class="vertical_line">
    <span class="param_text">{{ __('catalog.filter_by.filter_text') }}</span>
</button>

<script>

    function openSideProductFilterCategory() {
        var x = document.getElementById("filterCategory");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function openSideProductFilterBrand() {
        var x = document.getElementById("filterBrand");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

function openNav() {
        document.getElementById("sidePanel").style.width = "33%";
    }

    function closeNav() {
        document.getElementById("sidePanel").style.width = "0";
    }

</script>
