<div class="product_slider"
     x-data="productSliderComponent()"
     x-init="init()"
     @touchstart="startTouch($event)"
     @touchmove="moveTouch($event)"
     @touchend="endTouch($event)"
     @touchcancel="endTouch($event)">
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

    <!-- Отображение видео, если это индекс видео -->
    <template x-if="currentIndex === videoIndex">
        <video playsinline loop x-ref="video" preload="auto" x-init="loadVideo($refs.video)" class="product_slider_video">
            <source src="{{ asset('/storage/videos/goods/11MB__No_logos__16x9_Running_Final_30secs_.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </template>

    <!-- Изображения, только если не видео -->
    <template x-if="currentIndex !== videoIndex">
        <img :src="images[currentIndex]" class="product_slider_image" style="position: absolute; height: 100%; width: 100%; object-fit: cover"/>
    </template>
</div>

<script>
    function productSliderComponent() {
        return {
            images: [
                "{{ asset('storage/images/product/1.png') }}",
                "video", // эта строка для видео
                "{{ asset('storage/images/product/3.png') }}",
                "{{ asset('storage/images/product/4.png') }}",
                "{{ asset('storage/images/product/5.png') }}",
                "{{ asset('storage/images/product/6.png') }}",
            ],
            videoIndex: 1,
            currentIndex: 0,
            touchStartX: 0,
            touchEndX: 0,

            // Функция предзагрузки видео
            loadVideo(videoElement) {
                if (videoElement) {
                    videoElement.muted = true;
                    videoElement.play();
                }
            },

            goToSmallSlide(index) {
                this.currentIndex = index;
            },

            nextSlide() {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
            },

            prevSlide() {
                this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
            },

            startTouch(event) {
                this.touchStartX = event.touches[0].clientX;
            },

            moveTouch(event) {
                this.touchEndX = event.touches[0].clientX;
            },

            endTouch(event) {
                if (this.touchStartX - this.touchEndX > 50) {
                    // Свайп влево
                    this.nextSlide();
                } else if (this.touchEndX - this.touchStartX > 50) {
                    // Свайп вправо
                    this.prevSlide();
                }
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
