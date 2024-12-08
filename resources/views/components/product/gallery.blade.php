<div class="scrollbar_gallery">
    <div class="scrollbar_container">
        <button class="scroll-trigger up">
            <img src="{{ asset('/storage/images/icons/arrow_down_scrollbar.svg') }}" alt="" class="rotate disabled">
        </button>
        <div class="scrollbar_track_container">
            <div class="scrollbar">
                <div class="scroll-thumb"></div>
            </div>
        </div>
        <button class="scroll-trigger down">
            <img src="{{ asset('/storage/images/icons/arrow_down_scrollbar.svg') }}" alt="">
        </button>
    </div>

    <section class="gallery">
        <img src="{{ asset('/storage/images/product/1.png') }}" alt="" class="img half">
        <img src="{{ asset('/storage/images/product/2.png') }}" alt="" class="img half">
        <img src="{{ asset('/storage/images/product/3.png') }}" alt="" class="img">
        <img src="{{ asset('/storage/images/product/4.png') }}" alt="" class="img half">
        <img src="{{ asset('/storage/images/product/5.png') }}" alt="" class="img half">
        <img src="{{ asset('/storage/images/product/6.png') }}" alt="" class="img">
    </section>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        if (window.innerWidth < 750) {
            return;
        }

        const gallery = document.querySelector('.gallery');
        const scrollbar = document.querySelector(".scrollbar");
        const thumb = document.querySelector(".scroll-thumb");
        const upButton = document.querySelector(".scroll-trigger.up");
        const downButton = document.querySelector(".scroll-trigger.down");
        const describe_product_wrapper = document.querySelector('.describe_product_wrapper');

        const updateThumbPosition = () => {
            const scrollRatio = gallery.scrollTop / (gallery.scrollHeight - gallery.clientHeight);
            thumb.style.top = `${scrollRatio * (scrollbar.clientHeight - thumb.clientHeight)}px`;
            updateButtons();
        };

        const updateThumbSize = () => {
            const ratio = gallery.clientHeight / gallery.scrollHeight;
            thumb.style.height = `${Math.max(ratio * scrollbar.clientHeight, 30)}px`; // Мінімальна висота 30px
        };

        const updateButtons = () => {
            const upIcon = upButton.querySelector('img');
            const downIcon = downButton.querySelector('img');

            if (gallery.scrollTop === 0) {
                upIcon.classList.add('disabled');
            } else {
                upIcon.classList.remove('disabled');
            }

            if (gallery.scrollTop + gallery.clientHeight >= gallery.scrollHeight) {
                downIcon.classList.add('disabled');
            } else {
                downIcon.classList.remove('disabled');
            }
        };

        gallery.addEventListener("scroll", updateThumbPosition);
        gallery.addEventListener("resize", updateThumbSize); // Оновлюємо висоту thumb при зміні розміру контейнера

        thumb.addEventListener("mousedown", (e) => {
            const startY = e.clientY;
            const startTop = parseFloat(window.getComputedStyle(thumb).top);

            const onMouseMove = (moveEvent) => {
                const deltaY = moveEvent.clientY - startY;
                const newTop = Math.min(
                    Math.max(startTop + deltaY, 0),
                    scrollbar.clientHeight - thumb.clientHeight
                );

                thumb.style.top = `${newTop}px`;
                const scrollRatio = newTop / (scrollbar.clientHeight - thumb.clientHeight);
                gallery.scrollTop = scrollRatio * (gallery.scrollHeight - gallery.clientHeight);
            };

            const onMouseUp = () => {
                document.removeEventListener("mousemove", onMouseMove);
                document.removeEventListener("mouseup", onMouseUp);
            };

            document.addEventListener("mousemove", onMouseMove);
            document.addEventListener("mouseup", onMouseUp);
        });

        upButton.addEventListener("click", () => {
            gallery.scrollBy({ top: -50, behavior: "smooth" });
        });

        downButton.addEventListener("click", () => {
            gallery.scrollBy({ top: 50, behavior: "smooth" });
        });

        // Оновлюємо розміри та позицію при завантаженні
        updateThumbSize();
        updateThumbPosition();

        enableScrollTransfer(gallery);
        enableScrollTransfer(describe_product_wrapper);
    });


    function enableScrollTransfer(element) {
        element.addEventListener('wheel', function (event) {
            const atTop = element.scrollTop === 0 && event.deltaY < 0;
            const atBottom =
                element.scrollHeight - element.scrollTop === element.clientHeight && event.deltaY > 0;

            if (atTop || atBottom) {
                event.preventDefault();
                smoothScrollBy(event.deltaY);
            }
        });
    }

    function smoothScrollBy(deltaY) {
        const step = deltaY / 10;
        let currentScroll = 0;

        function scrollStep() {
            if (Math.abs(currentScroll) < Math.abs(deltaY)) {
                window.scrollBy(0, step);
                currentScroll += step;
                requestAnimationFrame(scrollStep);
            }
        }

        scrollStep();
    }
</script>
