<section class="new_products_wrapper">
    <div class="container breadcrumbs">
        <a href="{{ route('home', ['locale' => App::currentLocale()])}}" class="breadcrumb">Головна</a>
        <img src="{{asset('storage/images/icons/breadcrumbs_arrow_right.svg')}}" alt="filter" class="param_image">
        <a href="{{ route('catalog', ['category' => 'women', 'locale' => App::currentLocale()]) }}" class="breadcrumb">Жіночий одяг</a>
        <img src="{{asset('storage/images/icons/breadcrumbs_arrow_right.svg')}}" alt="filter" class="param_image">
        <a href="{{ route('catalog', ['category' => 'women', 'subcategory' => 'jackets', 'locale' => App::currentLocale()]) }}" class="breadcrumb active">Куртки</a>
    </div>


    <div class="container">
        <div class="heading">
            <div class="popular_products_box">
                <div class="product_title_box">
                    <span class="title__big">{{ __('title.new') }}</span>
                </div>
            </div>

            @if(count($products) !== 0)
                <div class="filter_and_sort_by_box">
                    @include('elements.sidepanel')

                    <div class="sort_by_box">
                        <span class="sort_by_text">{{ __('catalog.sort_by.sort_text') }}</span>

                        @include('elements.dropdown_menu')
                    </div>
                </div>
            @endif
        </div>

        <div class="products_item_container">
            @if(count($products) === 0)
                <div class="no_products">
                    <span class="no_products_text">{{ __('catalog.no_products') }}</span>
                </div>
            @endif

            @foreach($products as $product)
                <x-product-card
                    :id="$product['id']"
                    :image="$product['image']"
                    :oldPrice="$product['oldPrice'] ?? null"
                    :newPrice="$product['newPrice'] ?? null"
                    :title="$product['title']"
                    :label="$product['label'] ?? null"
                    :isFavorite="false"
                />
            @endforeach
        </div>

        @if(count($products) !== 0)
        <div class="pagination_box">
            <div class="pagination_controller disabled">
                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="pagination_arrow">
                    <path d="M0.792892 8.70808C0.402369 8.31756 0.402369 7.68439 0.792892 7.29387L7.15685 0.929909C7.54738 0.539384 8.18054 0.539384 8.57107 0.929909C8.96159 1.32043 8.96159 1.9536 8.57107 2.34412L2.91421 8.00098L8.57107 13.6578C8.96159 14.0484 8.96159 14.6815 8.57107 15.072C8.18054 15.4626 7.54738 15.4626 7.15685 15.072L0.792892 8.70808ZM16.5 9.00098H1.5V7.00098H16.5V9.00098Z" fill="none" class="pagination_arrow_svg"/>
                </svg>
            </div>

            <div class="pagination_page">
                <span class="pagination_page_number active">1</span>
                <span class="pagination_page_number">2</span>
                <span class="pagination_page_number">3</span>
                <span class="pagination_page_number">4</span>
                <span class="pagination_three_dots">...</span>
                <span class="pagination_page_number">10</span>
            </div>

            <div class="pagination_controller">
                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="pagination_arrow">
                    <path d="M16.2071 8.70808C16.5976 8.31756 16.5976 7.68439 16.2071 7.29387L9.84315 0.929909C9.45262 0.539384 8.81946 0.539384 8.42893 0.929909C8.03841 1.32043 8.03841 1.9536 8.42893 2.34412L14.0858 8.00098L8.42893 13.6578C8.03841 14.0484 8.03841 14.6815 8.42893 15.072C8.81946 15.4626 9.45262 15.4626 9.84315 15.072L16.2071 8.70808ZM0.5 9.00098H15.5V7.00098H0.5V9.00098Z" fill="none" class="pagination_arrow_svg"/>
                </svg>
            </div>
        </div>
        @endif
    </div>
</section>

