<section class="new_products_wrapper">
    <div class="container">
        <div class="popular_products_box">
            <div class="product_title_box">
                <span class="title__big">{{ __('title.new') }}</span>

                <div class="popular_products_btn_box">
                    <button class="left_btn">
                        <svg width="17"
                             height="16"
                             viewBox="0 0 17 16"
                             fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.792892 8.70711C0.402369 8.31658 0.402369 7.68342 0.792892 7.29289L7.15685
                             0.928932C7.54738 0.538408 8.18054 0.538408 8.57107 0.928932C8.96159 1.31946 8.96159
                             1.95262 8.57107 2.34315L2.91421 8L8.57107 13.6569C8.96159 14.0474 8.96159 14.6805 8.57107
                             15.0711C8.18054 15.4616 7.54738 15.4616 7.15685 15.0711L0.792892 8.70711ZM16.5 9H1.5V7H16.5V9Z"
                                  fill="#1D2557"/>
                        </svg>
                    </button>

                    <button class="right_btn">
                        <svg width="17"
                             height="16"
                             viewBox="0 0 17 16"
                             fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.2071 8.70711C16.5976 8.31658 16.5976 7.68342 16.2071 7.29289L9.84315
                             0.928932C9.45262 0.538408 8.81946 0.538408 8.42893 0.928932C8.03841 1.31946 8.03841
                             1.95262 8.42893 2.34315L14.0858 8L8.42893 13.6569C8.03841 14.0474 8.03841 14.6805 8.42893
                             15.0711C8.81946 15.4616 9.45262 15.4616 9.84315 15.0711L16.2071 8.70711ZM0.5 9H15.5V7H0.5V9Z"
                                  fill="white"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="products_item_container">
            @foreach($products as $product)
                <x-product-card
                    :image="$product['image']"
                    :oldPrice="$product['oldPrice'] ?? null"
                    :newPrice="$product['newPrice'] ?? null"
                    :title="$product['title']"
                    :label="$product['label'] ?? null"
                />
            @endforeach
        </div>
    </div>
</section>

