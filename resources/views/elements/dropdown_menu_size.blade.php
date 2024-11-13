<div class="param_dropdown">
    <div class="dropdown_size_select param_select">
        <span class="param_text selected">S</span>

        <img src="{{asset('storage/images/icons/sort_by_dropdown_arrow.svg')}}" alt="arrow_down" class="param_dropdown_arrow">
    </div>

    <ul class="param_dropdown_menu">
        <li>XS</li>
        <li>S</li>
        <li>M</li>
        <li>L</li>
        <li>XL</li>
        <li>XXL</li>
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
