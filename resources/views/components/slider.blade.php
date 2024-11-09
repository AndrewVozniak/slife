<div class="slider"
     x-data="sliderComponent()"
     :style="`background-image: url('${images[currentIndex]}')`">
    <div class="slider_content">
        <div class="slider_text_wrapper">
            <span class="slider_title">{{__('title.sport_collection')}} -40%</span>
            <span class="slider_text">{{__('title.sale')}}</span>

            <button class="slider_btn">{{__('title.slider_btn')}}
                <svg width="16"
                     height="16"
                     viewBox="0 0 16 16"
                     fill="none"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.7071 8.70711C16.0976 8.31658 16.0976 7.68342 15.7071 7.29289L9.34315
                    0.928932C8.95262 0.538408 8.31946 0.538408 7.92893 0.928932C7.53841 1.31946 7.53841 1.95262
                    7.92893 2.34315L13.5858 8L7.92893 13.6569C7.53841 14.0474 7.53841 14.6805 7.92893 15.0711C8.31946
                    15.4616 8.95262 15.4616 9.34315 15.0711L15.7071 8.70711ZM0 9H15V7H0V9Z" fill="#DB0614"/>
                </svg>
            </button>
        </div>


        <!-- Ліва стрілка -->
        <button class="slider_arrow slider_arrow_left" @click="prevSlide">
            <svg width="17"
                 height="16"
                 viewBox="0 0 17 16"
                 fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <path d="M0.792892 8.70711C0.402369 8.31658 0.402369 7.68342 0.792892 7.29289L7.15685
                0.928932C7.54738 0.538408 8.18054 0.538408 8.57107 0.928932C8.96159 1.31946 8.96159 1.95262 8.57107
                2.34315L2.91421 8L8.57107 13.6569C8.96159 14.0474 8.96159 14.6805 8.57107 15.0711C8.18054 15.4616 7.54738
                15.4616 7.15685 15.0711L0.792892 8.70711ZM16.5 9H1.5V7H16.5V9Z" fill="white"/>
            </svg>
        </button>


        <!-- Права стрілка -->
        <button class="slider_arrow slider_arrow_right" @click="nextSlide">
            <svg width="17"
                 height="16"
                 viewBox="0 0 17 16"
                 fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.2071 8.70711C16.5976 8.31658 16.5976 7.68342 16.2071 7.29289L9.84315 0.928932C9.45262
                0.538408 8.81946 0.538408 8.42893 0.928932C8.03841 1.31946 8.03841 1.95262 8.42893 2.34315L14.0858
                8L8.42893 13.6569C8.03841 14.0474 8.03841 14.6805 8.42893 15.0711C8.81946 15.4616 9.45262 15.4616
                9.84315 15.0711L16.2071 8.70711ZM0.5 9H15.5V7H0.5V9Z" fill="white"/>
            </svg>
        </button>
    </div>
</div>


<script>
    function sliderComponent() {
        return {
            images: [
                "{{ asset('storage/images/models/strong-man-exercising-gym.png') }}",
                "{{ asset('storage/images/models/sports_top.png') }}",
                "{{ asset('storage/images/models/gym_suit.png') }}"
            ],
            currentIndex: 0,
            nextSlide() {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
            },
            prevSlide() {
                this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
            },
            startAutoSlide() {
                setInterval(() => {
                    this.nextSlide();
                }, 10000);
            },
            init() {
                this.startAutoSlide();
            }
        }
    }
</script>
