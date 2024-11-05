<footer class="footer">
    <div class="mailing_list_wrapper">
        <div class="container">
            <div class="mailing_list_box">
                <img src="{{asset('storage/images/logo_white.png')}}" alt="logo" class="logo">

                <div class="mailing_list">
                    <div class="mailing_list__title">
                        <span> {{ __('footer.subscribe') }}</span>

                        <form action="#" method="post" class="mailing_list__form">
                            <div class="footer__input_mailing_list_box">
                                <input type="email"
                                       name="email"
                                       id="email"
                                       class="footer__mailing_list__input"
                                       placeholder="{{ __('footer.email') }}"
                                       required>

                                <button type="submit" class="footer__mailing_list__btn"></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
