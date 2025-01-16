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

    <template x-if="currentIndex === videoIndex">
        <video playsinline loop x-ref="video" preload="auto" x-init="$refs.video.muted = true; $refs.video.play();" class="product_slider_video">
            <source src="{{ asset('/storage/videos/goods/11MB__No_logos__16x9_Running_Final_30secs_.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </template>
</div>


<script>
    function productSliderComponent() {
        return {
            images: [
                "{{ asset('storage/images/product/1.png') }}",
                "video",
                "{{ asset('storage/images/product/3.png') }}",
                "{{ asset('storage/images/product/4.png') }}",
                "{{ asset('storage/images/product/5.png') }}",
                "{{ asset('storage/images/product/6.png') }}"
            ],
            videoIndex: 1,
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
                // this.startAutoSlide();
            }
        }
    }
</script>
