<footer class="footer">
    <div class="footer__mailing_list_wrapper">
        <div class="container">
            <div class="mailing_list_box_grid">
                <div class="item1">
                   <a href="#">
                       <img src="{{asset('storage/images/logo_white.png')}}" alt="logo" class="logo">
                   </a>
                </div>
                <div class="item2">
                    <span class="mailing_list__title"> {{ __('footer.subscribe') }}</span>
                </div>
                <div class="item3">
                    <form action="#" method="post" class="mailing_list__form">
                        <div class="footer__input_mailing_list_box">
                            <input type="email"
                                   name="email"
                                   id="email"
                                   class="footer__mailing_list__input"
                                   placeholder="{{ __('footer.email') }}"
                                   required>

                            <button type="submit" class="footer__mailing_list__btn">
                                <img src="{{asset('storage/images/icons/Arrow_right.svg')}}"
                                     alt="arrow"
                                     class="footer__arrow_right_btn">
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer__main_info_wrapper">
        <div class="container">
            <div class="footer__grid_container">
                <div class="item4">
                    <a href="#" class="footer__item_title"> {{ __('footer.main.about') }}</a>
                    <div class="footer_item_category_box">
                        <a href="#"> {{ __('footer.main.blog') }}</a>
                        <a href="#"> {{ __('footer.main.about_us') }}</a>
                        <a href="#"> {{ __('footer.main.contacts') }}</a>
                    </div>
                </div>
                <div class="item5">
                    <span class="footer__item_title"> {{ __('footer.main.info') }}</span>
                    <div class="footer_item_category_box">
                        <a href="#"> {{ __('footer.main.payment') }}</a>
                        <a href="#"> {{ __('footer.main.exchange') }}</a>
                        <a href="#"> {{ __('footer.main.register') }}</a>
                    </div>
                </div>
                <div class="item6">
                    <span class="footer__item_title"> {{ __('footer.main.categories') }}</span>
                    <div class="footer_item_category_box">
                        <a href="#"> {{ __('footer.main.men') }}</a>
                        <a href="#"> {{ __('footer.main.women') }}</a>
                        <a href="#"> {{ __('footer.main.kids') }}</a>
                    </div>
                </div>
                <div class="item7">
                    <span class="footer__item_title"> {{ __('footer.main.contacts') }}</span>
                    <div class="footer_item_category_box">
                        <span class="footer_phone">
                            &#43;38 &#40;068&#41;&#8722;367&#8722;38&#8722;37
                        </span>
                        <span class="footer_contacts">
                            slife&#46;ua&#64;ukr&#46;net
                        </span>
                        <span class="footer_contacts">
                            {{ __('footer.main.address') }}&#44; 64&#44; 48&#45;260&#46;
                        </span>
                        <div class="footer__work_time">
                            <span>
                                {{ __('footer.main.work_time') }}
                            </span>
                            <span><b>{{ __('footer.main.sunday') }}&#58;</b>
                                {{ __('footer.main.weekend') }}
                            </span>
                        </div>

                        <a  href="#" class="footer_messenger_box">
                            <img src="{{asset('storage/images/social_media/telegram_color.svg')}}" alt="icon"
                                 class="footer_messenger_icon">
                            <span> {{ __('footer.main.write') }} Telegram</span>
                        </a>

                        <a href="#" class="footer_messenger_box">
                            <img src="{{asset('storage/images/social_media/basil_viber-solid.svg')}}" alt="icon"
                                 class="footer_messenger_icon">
                            <span> {{ __('footer.main.write') }} Viber</span>
                        </a>

                        <a href="#" class="footer_messenger_box">
                            <img src="{{asset('storage/images/social_media/logos_whatsapp-icon.svg')}}" alt="icon"
                                 class="footer_messenger_icon">
                            <span> {{ __('footer.main.write') }} Whatsapp</span>
                        </a>
                    </div>
                </div>
                <div class="item8">
                    <span> {{ __('footer.main.join') }} &#33;</span>
                </div>
                <div class="item9">
                    <div class="footer_img_messenger_box">
                       <a href="#">
                           <img src="{{asset('storage/images/social_media/cart.svg')}}" alt="icon"
                                class="footer_messenger_cart">
                       </a>

                        <a href="#">
                            <img src="{{asset('storage/images/social_media/cart_insta.svg')}}" alt="icon"
                                 class="footer_messenger_cart">
                        </a>

                        <a href="#">
                            <img src="{{asset('storage/images/social_media/cart _telegram.svg')}}" alt="icon"
                                 class="footer_messenger_cart">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_copyright_wrapper">
        <div class="container">
            <div class="footer__copy_box">
                <span>&#169; 2024 Slife &#124; {{ __('footer.main.copy') }} </span>
                <a href="#">{{ __('footer.main.polite') }} </a>
            </div>
        </div>
    </div>
</footer>
