<section class="gray_description__block_wrapper">
    <div class="container">
        <div class="gray_description__block_box">
            <div class="gray_description__text_box">
                <span class="title">{{ __('title.gray.title') }}</span>
                <p>Platea adipiscing lectus non sapien mollis aliquam.
                            Rutrum vulputate justo ac platea laoreet pharetra; platea elementum.
                            Leo praesent blandit pharetra magnis ornare quis commodo.
                            Accumsan augue mauris commodo cursus in sit.
                            Eros aptent etiam nascetur congue facilisi conubia rutrum.
                            Erat etiam vivamus elit nam tempor dui sodales. Potenti ante fames vel pretium lectus commodo aenean.
                            Egestas habitasse ligula litora cursus amet viverra quam est luctus.
                            Natoque metus lectus; nec imperdiet ullamcorper ultricies venenatis blandit viverra.
                            Dapibus blandit lacinia rutrum dictum velit praesent.
                            Habitant nulla velit, per sed magna velit. Euismod eu pellentesque id dictum morbi feugiat.
                </p>

                <p id="extraContent" style="display: none;">
                    Platea adipiscing lectus non sapien mollis aliquam.
                    Rutrum vulputate justo ac platea laoreet pharetra; platea elementum.
                    Leo praesent blandit pharetra magnis ornare quis commodo.
                    Accumsan augue mauris commodo cursus in sit.
                    Eros aptent etiam nascetur congue facilisi conubia rutrum.
                    Erat etiam vivamus elit nam tempor dui sodales. Potenti ante fames vel pretium lectus commodo aenean.
                    Egestas habitasse ligula litora cursus amet viverra quam est luctus.
                    Natoque metus lectus; nec imperdiet ullamcorper ultricies venenatis blandit viverra.
                    Dapibus blandit lacinia rutrum dictum velit praesent.
                    Habitant nulla velit, per sed magna velit. Euismod eu pellentesque id dictum morbi feugiat.
                </p>
            </div>

            <button class="gray_description__btn" id="readMoreBtn" onclick="toggleText()">
                <span id="buttonText">{{ __('title.gray.btn') }}</span>

                <div id="toggleRotateIcon" class="btn_icon_arrow">
                    <svg
                         width="16"
                         height="17"
                         viewBox="0 0 16 17"
                         fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.29289 16.2071C7.68342 16.5976 8.31658 16.5976 8.70711 16.2071L15.0711
                            9.84315C15.4616 9.45262 15.4616 8.81946 15.0711 8.42893C14.6805 8.03841 14.0474
                            8.03841 13.6569 8.42893L8 14.0858L2.34315 8.42893C1.95262 8.03841 1.31946 8.03841
                            0.928932 8.42893C0.538407 8.81946 0.538407 9.45262 0.928932 9.84315L7.29289
                            16.2071ZM7 0.5L7 15.5L9 15.5L9 0.5L7 0.5Z" fill="#DB0614"/>
                    </svg>
                </div>
            </button>
        </div>
    </div>
</section>

<script>
    const btnMoreText = "{{ __('title.gray.btn') }}";
    const btnLessText = "{{ __('title.gray.btn_less') }}";

    function toggleText() {
        const extraContent = document.getElementById("extraContent");
        const buttonText = document.getElementById("buttonText");
        const toggleRotateIcon = document.getElementById("toggleRotateIcon");

        if (extraContent.style.display === "none") {
            extraContent.style.display = "block";
            buttonText.textContent = btnLessText;
            toggleRotateIcon.classList.add("rotated");
        } else {
            extraContent.style.display = "none";
            buttonText.textContent = btnMoreText;
            toggleRotateIcon.classList.remove("rotated");
        }
    }
</script>
