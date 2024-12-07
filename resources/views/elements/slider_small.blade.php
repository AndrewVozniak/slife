<div class="product_slider"
     x-data="productSliderComponent()"
     x-init="init()"
     :style="`background-image: url('${images[currentIndex]}')`;">

    <div class="product_slider_content">
        <div class="product__slider_dots">
            <template x-for="(image, index) in images" :key="index">
                <button class="btn__slider_dots"
                        :class="{'active': index === currentIndex}"
                        @click="goToSmallSlide(index)">
                </button>
            </template>
        </div>
    </div>
</div>


<script>
    function productSliderComponent() {
        return {
            images: [
                "{{ asset('storage/images/product/1.png') }}",
                "{{ asset('storage/images/product/2.png') }}",
                "{{ asset('storage/images/product/3.png') }}",
                "{{ asset('storage/images/product/4.png') }}",
                "{{ asset('storage/images/product/5.png') }}",
                "{{ asset('storage/images/product/6.png') }}"
            ],
            currentIndex: 0,

            goToSmallSlide(index) {
                this.currentIndex = index;
            },

            nextSlide() {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
            },

            startAutoSlide() {
                setInterval(() => {
                    this.nextSlide();
                }, 10000);
            },

            init() {
                this.currentIndex = 0;
                this.startAutoSlide();
            }
        }
    }
</script>
