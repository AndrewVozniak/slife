@extends('layouts.app')
@section('title', 'Новини')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endsection
@section('content')
    @include('components.header')

    <div class="content_wrapper container">
        <div class="breadcrumbs">
            <a href="{{ route('home', ['locale' => App::currentLocale()])}}" class="breadcrumb">Головна</a>
            <img src="{{asset('storage/images/icons/breadcrumbs_arrow_right.svg')}}" alt="filter" class="param_image">
            <a href="{{ route('blog', ['locale' => App::currentLocale()]) }}" class="breadcrumb active">{{ __('blog.news') }}</a>
        </div>

        <section class="content">
            <h1 class="content_title">{{ __('blog.news') }}</h1>
            <div class="cards_wrapper">
                <div class="card">
                    <div class="card_image">
                        <img src="{{asset('storage/images/blog/1.png')}}" alt="blog_image" class="card_image">
                    </div>

                    <div class="card_content">
                        <span class="card_date">22.07.2024</span>
                        <h2 class="card_title">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
                        <p class="card_text">Sit nullam ornare ac inceptos posuere interdum. Magnis arcu netus aptent habitant tincidunt dictum. Facilisis ante aenean, semper hendrerit mus sapien. Aliquet posuere volutpat montes arcu dictum ante eros eros. Molestie lorem vulputate, leo ac proin magnis. Velit viverra sodales commodo egestas pretium malesuada venenatis. Aptent consequat ut auctor vehicula, ullamcorper donec varius nisi dictum
                            Finibus diam penatibus scelerisque nisl interdum diam aptent posuere. Accumsan adipiscing porttitor mauris tortor nullam per fusce congue feugiat.....Facilisis ante aenean, semper hendrerit mus sapien. Aliquet posuere volutpat montes arcu dictum ante eros eros. Molestie lorem vulputate, leo ac proin magnis. Velit viverra sodales commodo egestas pretium malesuada venenatis. Aptent consequat ut auctor vehicula, ullamcorper donec varius nisi dictum
                            Finibus diam penatibus scelerisque nisl interdum diam aptent posuere. Accumsan adipiscing porttitor mauris tortor nullam per</p>
                        <hr class="vertical-line">
                        <div class="card_link_wrapper">
                            <a href="{{ route('post', ['locale' => App::currentLocale(), 'slug' => 'test']) }}" class="card_link">{{ __('blog.read_more') }}</a>
                            <img src="{{ asset('storage/images/icons/arrow-right-red.svg') }}" alt="" class="arrow">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card_image">
                        <img src="{{asset('storage/images/blog/2.png')}}" alt="blog_image" class="card_image">
                    </div>
                    <div class="card_content">
                        <span class="card_date">22.07.2024</span>
                        <h2 class="card_title">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
                        <p class="card_text">Sit nullam ornare ac inceptos posuere interdum. Magnis arcu netus aptent habitant tincidunt dictum. Facilisis ante aenean, semper hendrerit mus sapien. Aliquet posuere volutpat montes arcu dictum ante eros eros. Molestie lorem vulputate, leo ac proin magnis. Velit viverra sodales commodo egestas pretium malesuada venenatis. Aptent consequat ut auctor vehicula, ullamcorper donec varius nisi dictum
                            Finibus diam penatibus scelerisque nisl interdum diam aptent posuere. Accumsan adipiscing porttitor mauris tortor nullam per fusce congue feugiat.....Facilisis ante aenean, semper hendrerit mus sapien. Aliquet posuere volutpat montes arcu dictum ante eros eros. Molestie lorem vulputate, leo ac proin magnis. Velit viverra sodales commodo egestas pretium malesuada venenatis. Aptent consequat ut auctor vehicula, ullamcorper donec varius nisi dictum
                            Finibus diam penatibus scelerisque nisl interdum diam aptent posuere. Accumsan adipiscing porttitor mauris tortor nullam per</p>
                        <hr class="vertical-line">
                        <div class="card_link_wrapper">
                            <a href="{{ route('post', ['locale' => App::currentLocale(), 'slug' => 'test']) }}" class="card_link">{{ __('blog.read_more') }}</a>
                            <img src="{{ asset('storage/images/icons/arrow-right-red.svg') }}" alt="" class="arrow">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card_image">
                        <img src="{{asset('storage/images/blog/3.png')}}" alt="blog_image" class="card_image">
                    </div>
                    <div class="card_content">
                        <span class="card_date">22.07.2024</span>
                        <h2 class="card_title">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
                        <p class="card_text">Sit nullam ornare ac inceptos posuere interdum. Magnis arcu netus aptent habitant tincidunt dictum. Facilisis ante aenean, semper hendrerit mus sapien. Aliquet posuere volutpat montes arcu dictum ante eros eros. Molestie lorem vulputate, leo ac proin magnis. Velit viverra sodales commodo egestas pretium malesuada venenatis. Aptent consequat ut auctor vehicula, ullamcorper donec varius nisi dictum
                            Finibus diam penatibus scelerisque nisl interdum diam aptent posuere. Accumsan adipiscing porttitor mauris tortor nullam per fusce congue feugiat.....Facilisis ante aenean, semper hendrerit mus sapien. Aliquet posuere volutpat montes arcu dictum ante eros eros. Molestie lorem vulputate, leo ac proin magnis. Velit viverra sodales commodo egestas pretium malesuada venenatis. Aptent consequat ut auctor vehicula, ullamcorper donec varius nisi dictum
                            Finibus diam penatibus scelerisque nisl interdum diam aptent posuere. Accumsan adipiscing porttitor mauris tortor nullam per</p>
                        <hr class="vertical-line">
                        <div class="card_link_wrapper">
                            <a href="{{ route('post', ['locale' => App::currentLocale(), 'slug' => 'test']) }}" class="card_link">{{ __('blog.read_more') }}</a>
                            <img src="{{ asset('storage/images/icons/arrow-right-red.svg') }}" alt="" class="arrow">
                        </div>
                    </div>
                </div>

                <div class="card half">
                    <div class="card_image">
                        <img src="{{asset('storage/images/blog/4.png')}}" alt="blog_image" class="card_image">
                    </div>
                    <div class="card_content">
                        <span class="card_date">22.07.2024</span>
                        <h2 class="card_title">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
                        <p class="card_text">Sit nullam ornare ac inceptos posuere interdum. Magnis arcu netus aptent habitant tincidunt dictum. Facilisis ante aenean, semper hendrerit mus sapien. Aliquet posuere volutpat montes arcu dictum ante eros eros. Molestie lorem vulputate, leo ac proin magnis. Velit viverra sodales commodo egestas pretium malesuada venenatis. Aptent consequat ut auctor vehicula, ullamcorper donec varius nisi dictum
                            Finibus diam penatibus scelerisque nisl interdum diam aptent posuere. Accumsan adipiscing porttitor mauris tortor nullam per fusce congue feugiat.....Facilisis ante aenean, semper hendrerit mus sapien. Aliquet posuere volutpat montes arcu dictum ante eros eros. Molestie lorem vulputate, leo ac proin magnis. Velit viverra sodales commodo egestas pretium malesuada venenatis. Aptent consequat ut auctor vehicula, ullamcorper donec varius nisi dictum
                            Finibus diam penatibus scelerisque nisl interdum diam aptent posuere. Accumsan adipiscing porttitor mauris tortor nullam per</p>
                        <hr class="vertical-line">
                        <div class="card_link_wrapper">
                            <a href="{{ route('post', ['locale' => App::currentLocale(), 'slug' => 'test']) }}" class="card_link">{{ __('blog.read_more') }}</a>
                            <img src="{{ asset('storage/images/icons/arrow-right-red.svg') }}" alt="" class="arrow">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card_image">
                        <img src="{{asset('storage/images/blog/5.png')}}" alt="blog_image" class="card_image">
                    </div>
                    <div class="card_content">
                        <span class="card_date">22.07.2024</span>
                        <h2 class="card_title">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
                        <p class="card_text">Sit nullam ornare ac inceptos posuere interdum. Magnis arcu netus aptent habitant tincidunt dictum. Facilisis ante aenean, semper hendrerit mus sapien. Aliquet posuere volutpat montes arcu dictum ante eros eros. Molestie lorem vulputate, leo ac proin magnis. Velit viverra sodales commodo egestas pretium malesuada venenatis. Aptent consequat ut auctor vehicula, ullamcorper donec varius nisi dictum
                            Finibus diam penatibus scelerisque nisl interdum diam aptent posuere. Accumsan adipiscing porttitor mauris tortor nullam per fusce congue feugiat.....Facilisis ante aenean, semper hendrerit mus sapien. Aliquet posuere volutpat montes arcu dictum ante eros eros. Molestie lorem vulputate, leo ac proin magnis. Velit viverra sodales commodo egestas pretium malesuada venenatis. Aptent consequat ut auctor vehicula, ullamcorper donec varius nisi dictum
                            Finibus diam penatibus scelerisque nisl interdum diam aptent posuere. Accumsan adipiscing porttitor mauris tortor nullam per</p>
                        <hr class="vertical-line">
                        <div class="card_link_wrapper">
                            <a href="{{ route('post', ['locale' => App::currentLocale(), 'slug' => 'test']) }}" class="card_link">{{ __('blog.read_more') }}</a>
                            <img src="{{ asset('storage/images/icons/arrow-right-red.svg') }}" alt="" class="arrow">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card_image">
                        <img src="{{asset('storage/images/blog/6.png')}}" alt="blog_image" class="card_image">
                    </div>
                    <div class="card_content">
                        <span class="card_date">22.07.2024</span>
                        <h2 class="card_title">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
                        <p class="card_text">Sit nullam ornare ac inceptos posuere interdum. Magnis arcu netus aptent habitant tincidunt dictum. Facilisis ante aenean, semper hendrerit mus sapien. Aliquet posuere volutpat montes arcu dictum ante eros eros. Molestie lorem vulputate, leo ac proin magnis. Velit viverra sodales commodo egestas pretium malesuada venenatis. Aptent consequat ut auctor vehicula, ullamcorper donec varius nisi dictum
                            Finibus diam penatibus scelerisque nisl interdum diam aptent posuere. Accumsan adipiscing porttitor mauris tortor nullam per fusce congue feugiat.....Facilisis ante aenean, semper hendrerit mus sapien. Aliquet posuere volutpat montes arcu dictum ante eros eros. Molestie lorem vulputate, leo ac proin magnis. Velit viverra sodales commodo egestas pretium malesuada venenatis. Aptent consequat ut auctor vehicula, ullamcorper donec varius nisi dictum
                            Finibus diam penatibus scelerisque nisl interdum diam aptent posuere. Accumsan adipiscing porttitor mauris tortor nullam per</p>
                        <hr class="vertical-line">
                        <div class="card_link_wrapper">
                            <a href="{{ route('post', ['locale' => App::currentLocale(), 'slug' => 'test']) }}" class="card_link">{{ __('blog.read_more') }}</a>
                            <img src="{{ asset('storage/images/icons/arrow-right-red.svg') }}" alt="" class="arrow">
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card_image">
                        <img src="{{asset('storage/images/blog/7.png')}}" alt="blog_image" class="card_image">
                    </div>
                    <div class="card_content">
                        <span class="card_date">22.07.2024</span>
                        <h2 class="card_title">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
                        <p class="card_text">Sit nullam ornare ac inceptos posuere interdum. Magnis arcu netus aptent habitant tincidunt dictum. Facilisis ante aenean, semper hendrerit mus sapien. Aliquet posuere volutpat montes arcu dictum ante eros eros. Molestie lorem vulputate, leo ac proin magnis. Velit viverra sodales commodo egestas pretium malesuada venenatis. Aptent consequat ut auctor vehicula, ullamcorper donec varius nisi dictum
                            Finibus diam penatibus scelerisque nisl interdum diam aptent posuere. Accumsan adipiscing porttitor mauris tortor nullam per fusce congue feugiat.....Facilisis ante aenean, semper hendrerit mus sapien. Aliquet posuere volutpat montes arcu dictum ante eros eros. Molestie lorem vulputate, leo ac proin magnis. Velit viverra sodales commodo egestas pretium malesuada venenatis. Aptent consequat ut auctor vehicula, ullamcorper donec varius nisi dictum
                            Finibus diam penatibus scelerisque nisl interdum diam aptent posuere. Accumsan adipiscing porttitor mauris tortor nullam per</p>
                        <hr class="vertical-line">
                        <div class="card_link_wrapper">
                            <a href="{{ route('post', ['locale' => App::currentLocale(), 'slug' => 'test']) }}" class="card_link">{{ __('blog.read_more') }}</a>
                            <img src="{{ asset('storage/images/icons/arrow-right-red.svg') }}" alt="" class="arrow">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card_image">
                        <img src="{{asset('storage/images/blog/8.png')}}" alt="blog_image" class="card_image">
                    </div>
                    <div class="card_content">
                        <span class="card_date">22.07.2024</span>
                        <h2 class="card_title">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
                        <p class="card_text">Sit nullam ornare ac inceptos posuere interdum. Magnis arcu netus aptent habitant tincidunt dictum. Facilisis ante aenean, semper hendrerit mus sapien. Aliquet posuere volutpat montes arcu dictum ante eros eros. Molestie lorem vulputate, leo ac proin magnis. Velit viverra sodales commodo egestas pretium malesuada venenatis. Aptent consequat ut auctor vehicula, ullamcorper donec varius nisi dictum
                            Finibus diam penatibus scelerisque nisl interdum diam aptent posuere. Accumsan adipiscing porttitor mauris tortor nullam per fusce congue feugiat.....Facilisis ante aenean, semper hendrerit mus sapien. Aliquet posuere volutpat montes arcu dictum ante eros eros. Molestie lorem vulputate, leo ac proin magnis. Velit viverra sodales commodo egestas pretium malesuada venenatis. Aptent consequat ut auctor vehicula, ullamcorper donec varius nisi dictum
                            Finibus diam penatibus scelerisque nisl interdum diam aptent posuere. Accumsan adipiscing porttitor mauris tortor nullam per</p>
                        <hr class="vertical-line">
                        <div class="card_link_wrapper">
                            <a href="{{ route('post', ['locale' => App::currentLocale(), 'slug' => 'test']) }}" class="card_link">{{ __('blog.read_more') }}</a>
                            <img src="{{ asset('storage/images/icons/arrow-right-red.svg') }}" alt="" class="arrow">
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card_image">
                        <img src="{{asset('storage/images/blog/9.png')}}" alt="blog_image" class="card_image">
                    </div>
                    <div class="card_content">
                        <span class="card_date">22.07.2024</span>
                        <h2 class="card_title">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
                        <p class="card_text">Sit nullam ornare ac inceptos posuere interdum. Magnis arcu netus aptent habitant tincidunt dictum. Facilisis ante aenean, semper hendrerit mus sapien. Aliquet posuere volutpat montes arcu dictum ante eros eros. Molestie lorem vulputate, leo ac proin magnis. Velit viverra sodales commodo egestas pretium malesuada venenatis. Aptent consequat ut auctor vehicula, ullamcorper donec varius nisi dictum
                            Finibus diam penatibus scelerisque nisl interdum diam aptent posuere. Accumsan adipiscing porttitor mauris tortor nullam per fusce congue feugiat.....Facilisis ante aenean, semper hendrerit mus sapien. Aliquet posuere volutpat montes arcu dictum ante eros eros. Molestie lorem vulputate, leo ac proin magnis. Velit viverra sodales commodo egestas pretium malesuada venenatis. Aptent consequat ut auctor vehicula, ullamcorper donec varius nisi dictum
                            Finibus diam penatibus scelerisque nisl interdum diam aptent posuere. Accumsan adipiscing porttitor mauris tortor nullam per</p>
                        <hr class="vertical-line">
                        <div class="card_link_wrapper">
                            <a href="{{ route('post', ['locale' => App::currentLocale(), 'slug' => 'test']) }}" class="card_link">{{ __('blog.read_more') }}</a>
                            <img src="{{ asset('storage/images/icons/arrow-right-red.svg') }}" alt="" class="arrow">
                        </div>
                    </div>
                </div>


                <div class="card half">
                    <div class="card_image">
                        <img src="{{asset('storage/images/blog/10.png')}}" alt="blog_image" class="card_image">
                    </div>
                    <div class="card_content">
                        <span class="card_date">22.07.2024</span>
                        <h2 class="card_title">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h2>
                        <p class="card_text">Sit nullam ornare ac inceptos posuere interdum. Magnis arcu netus aptent habitant tincidunt dictum. Facilisis ante aenean, semper hendrerit mus sapien. Aliquet posuere volutpat montes arcu dictum ante eros eros. Molestie lorem vulputate, leo ac proin magnis. Velit viverra sodales commodo egestas pretium malesuada venenatis. Aptent consequat ut auctor vehicula, ullamcorper donec varius nisi dictum
                            Finibus diam penatibus scelerisque nisl interdum diam aptent posuere. Accumsan adipiscing porttitor mauris tortor nullam per fusce congue feugiat.....Facilisis ante aenean, semper hendrerit mus sapien. Aliquet posuere volutpat montes arcu dictum ante eros eros. Molestie lorem vulputate, leo ac proin magnis. Velit viverra sodales commodo egestas pretium malesuada venenatis. Aptent consequat ut auctor vehicula, ullamcorper donec varius nisi dictum
                            Finibus diam penatibus scelerisque nisl interdum diam aptent posuere. Accumsan adipiscing porttitor mauris tortor nullam per</p>
                        <hr class="vertical-line">
                        <div class="card_link_wrapper">
                            <a href="{{ route('post', ['locale' => App::currentLocale(), 'slug' => 'test']) }}" class="card_link">{{ __('blog.read_more') }}</a>
                            <img src="{{ asset('storage/images/icons/arrow-right-red.svg') }}" alt="" class="arrow">
                        </div>
                    </div>
                </div>
            </div>

            <div class="pagination__wrapper">
                <hr class="horizontal-line">

                <div class="pagination_box">
                    <div class="pagination_controller disabled">
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="pagination_arrow">
                            <path d="M0.792892 8.70808C0.402369 8.31756 0.402369 7.68439 0.792892 7.29387L7.15685 0.929909C7.54738 0.539384 8.18054 0.539384 8.57107 0.929909C8.96159 1.32043 8.96159 1.9536 8.57107 2.34412L2.91421 8.00098L8.57107 13.6578C8.96159 14.0484 8.96159 14.6815 8.57107 15.072C8.18054 15.4626 7.54738 15.4626 7.15685 15.072L0.792892 8.70808ZM16.5 9.00098H1.5V7.00098H16.5V9.00098Z" fill="none" class="pagination_arrow_svg"/>
                        </svg>
                    </div>

                    <div class="pagination_page">
                        <span class="pagination_page_number active">1</span>
                        <span class="pagination_page_number">2</span>
                        <span class="pagination_page_number">3</span>
                        <span class="pagination_page_number">4</span>
                        <span class="pagination_three_dots">...</span>
                        <span class="pagination_page_number">10</span>
                    </div>

                    <div class="pagination_controller">
                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="pagination_arrow">
                            <path d="M16.2071 8.70808C16.5976 8.31756 16.5976 7.68439 16.2071 7.29387L9.84315 0.929909C9.45262 0.539384 8.81946 0.539384 8.42893 0.929909C8.03841 1.32043 8.03841 1.9536 8.42893 2.34412L14.0858 8.00098L8.42893 13.6578C8.03841 14.0484 8.03841 14.6815 8.42893 15.072C8.81946 15.4626 9.45262 15.4626 9.84315 15.072L16.2071 8.70808ZM0.5 9.00098H15.5V7.00098H0.5V9.00098Z" fill="none" class="pagination_arrow_svg"/>
                        </svg>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('components.footer')
@endsection
