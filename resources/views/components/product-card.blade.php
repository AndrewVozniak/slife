<div class="product_card">
    <div class="product_card_img_wrapper">
        <img src="{{ asset($image) }}" alt="photo" class="product_card_img">
    </div>
    <div class="card_describe_product">
        <div class="product_price_wrapper">
            @if($oldPrice && $newPrice)
                <span class="old_price">{{ $oldPrice }} &#8372;</span>
                <span class="new_price">₴ {{ $newPrice }}</span>
            @elseif($oldPrice)
                <span class="single_price">{{ $oldPrice }} &#8372;</span>
            @endif
        </div>
        <span>{{ $title }}</span>
    </div>

    @if($label === 'Top')
        <span class="product_label top-label">TOP</span>
    @elseif($label === 'Sale')
        <span class="product_label sale-label">Sale</span>
    @elseif($label === 'New')
        <span class="product_label new-label">New</span>
    @endif
</div>
