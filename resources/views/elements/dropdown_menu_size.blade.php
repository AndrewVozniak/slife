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

<style>
    .param_dropdown {
        display: flex;
        justify-content: flex-end;
        align-items: center;

        position: relative;

        width: 100%;
        max-width: 304px;
        height: 60px;
        padding: 20px;

        background: var(--slider-gray);
        border-radius: 8px;

        cursor: pointer;

        .dropdown_size_select {
            display: flex;
            justify-content: space-between;
            align-items: center;

            width: 100%;
            height: 100%;

            font-size: 16px;
            font-weight: 400;
            background: var(--slider-gray);
            color: var(--black);
        }

        .param_select {
            background: var(--slider-gray);
            color: var(--black);
        }

        .param_select_clicked {
            background: var(--slider-gray);
            border: 2px solid var(--slider-gray);
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .param_dropdown_arrow_clicked {
            transform: rotate(180deg);
        }

        .param_dropdown_menu {
            display: none;
            position: absolute;
            top: 55px;
            right: 0;
            z-index: 1000;

            width: 100%;
            list-style: none;

            background: var(--white);

            border: 1px solid var(--slider-gray);
            border-bottom-right-radius: 12px;
            border-bottom-left-radius: 12px;

            transition: 0.3s;
            opacity: 0;
        }

        .param_dropdown_menu_open {
            display: block;
            opacity: 1;
        }

        .param_dropdown_menu li {
            padding: 12px 24px;
            cursor: pointer;
        }

        .param_dropdown_menu li:hover {
            background: var(--slider-gray);
            font-weight: 600;
        }

        .active_dropdown_li {
            background: var(--slider-gray);
            font-weight: 600;
        }
    }
</style>

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
