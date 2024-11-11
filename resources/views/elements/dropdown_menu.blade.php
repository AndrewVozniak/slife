<div class="param_dropdown">
    <div class="param_box param_select">
        <span class="param_text selected">{{ __('catalog.sort_by.recommended') }}</span>

        <hr class="vertical_line">
        <img src="{{asset('storage/images/icons/sort_by_dropdown_arrow.svg')}}" alt="arrow_down" class="param_dropdown_arrow">
    </div>

    <ul class="param_dropdown_menu">
        <li class="active_dropdown_li">{{ __('catalog.sort_by.recommended') }}</li>
        <li>{{ __('catalog.sort_by.by_rating') }}</li>
        <li>{{ __('catalog.sort_by.by_reviews_count') }}</li>
        <li>{{ __('catalog.sort_by.by_price_asc') }}</li>
        <li>{{ __('catalog.sort_by.by_price_desc') }}</li>
        <li>{{ __('catalog.sort_by.by_name_asc') }}</li>
        <li>{{ __('catalog.sort_by.by_name_desc') }}</li>
    </ul>
</div>

<script>
    const dropdowns = document.querySelectorAll('.param_dropdown');

    dropdowns.forEach(dropdown => {
        const param_select = dropdown.querySelector('.param_select');
        const paramDropdownArrow = param_select.querySelector('.param_dropdown_arrow');
        const paramDropdownMenu = dropdown.querySelector('.param_dropdown_menu');
        const selected = dropdown.querySelector('.selected');
        const options = dropdown.querySelectorAll('.param_dropdown_menu li');

        param_select.addEventListener('click', () => {
            param_select.classList.toggle('param_select_clicked');
            paramDropdownArrow.classList.toggle('param_dropdown_arrow_clicked');
            paramDropdownMenu.classList.toggle('param_dropdown_menu_open');
        });

        options.forEach(option => {
            option.addEventListener('click', () => {
                selected.innerHTML = option.innerHTML;
                param_select.classList.remove('param_select_clicked');
                paramDropdownArrow.classList.remove('param_dropdown_arrow_clicked');
                paramDropdownMenu.classList.remove('param_dropdown_menu_open');
                options.forEach(option => {
                    option.classList.remove('active_dropdown_li');
                });
                option.classList.add('active_dropdown_li');
            });
        });

    });
</script>
