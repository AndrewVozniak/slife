<button class="btn_product_quantity">
    <div class="img_24_box" id="decrease">
        <img src="{{asset('storage/images/icons/iconoir_minus.svg')}}" alt="icon"
             class="img_24">
    </div>
    <div class="hr"></div>

    <span class="quantity" id="quantity">1</span>

    <div class="hr"></div>

    <div class="img_24_box" id="increase">
        <img src="{{asset('storage/images/icons/iconoir_plus.svg')}}" alt="icon"
             class="img_24">
    </div>
</button>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const decreaseBtn = document.getElementById('decrease');
        const increaseBtn = document.getElementById('increase');
        const quantityDisplay = document.getElementById('quantity');
        const minQuantity = 1;

        // Зменшення кількості
        decreaseBtn.addEventListener('click', function () {
            let currentQuantity = parseInt(quantityDisplay.textContent);
            if (currentQuantity > minQuantity) {
                quantityDisplay.textContent = currentQuantity - 1;
            }
        });

        // Збільшення кількості
        increaseBtn.addEventListener('click', function () {
            let currentQuantity = parseInt(quantityDisplay.textContent);
            quantityDisplay.textContent = currentQuantity + 1;
        });
    });
</script>
