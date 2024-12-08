@extends('layouts.app')
@section('title', 'Кошик')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/post.css') }}">
@endsection
@section('content')
    @include('components.header')

    <div class="content_wrapper">
        <div class="image__wrapper">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('home', ['locale' => App::currentLocale()])}}" class="breadcrumb">Головна</a>
                    <img src="{{asset('storage/images/icons/breadcrumbs_arrow_right_post.svg')}}" alt="filter" class="param_image">
                    <a href="{{ route('blog', ['locale' => App::currentLocale()]) }}" class="breadcrumb">{{ __('blog.news') }}</a>
                    <img src="{{asset('storage/images/icons/breadcrumbs_arrow_right_post.svg')}}" alt="filter" class="param_image last">
                    <a href="{{ route('post', ['locale' => App::currentLocale(), 'slug' => $slug]) }}" class="breadcrumb active">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                    </a>
                </div>
            </div>

            <div class="image__container">
                <div class="left"></div>
                <div class="central"></div>
                <img src="{{ asset('/storage/images/blog/post_background.png') }}" alt="" class="image">
                <div class="right"></div>
            </div>

            <div class="main__content__wrapper">
                <div class="main__content">
                    <h1 class="post__title">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</h1>
                </div>
            </div>

            <div class="bottom__section">
                <div class="container">
                    <div class="section__data">
                        <div class="item">
                            <img src="{{ asset('/storage/images/icons/calendar.svg') }}" alt="calendar">
                            <span>05 {{ __('blog.september') }}</span>
                        </div>

                        <div class="item">
                            <img src="{{ asset('/storage/images/icons/time.svg') }}" alt="eye">
                            <span>7 {{ __('blog.minutes') }}</span>
                        </div>

                        <div class="item">
                            <img src="{{ asset('/storage/images/icons/post_eye_icon.svg') }}" alt="eye">
                            <span>34</span>
                        </div>
                    </div>

                    <button class="share__section">
                        <h1 class="share__title">{{ __('blog.share') }}</h1>
                        <img src="{{ asset('/storage/images/icons/share_icon.svg') }}" alt="share">
                    </button>
                </div>
            </div>
        </div>

        <div class="article_content">
            <div class="article__section">
                <h1 class="title">Спортивний одяг для чоловіків, жінок та дітей</h1>
                <p class="text">Sit nullam ornare ac inceptos posuere interdum. Magnis arcu netus aptent habitant tincidunt dictum. Facilisis ante aenean, semper hendrerit mus sapien. Aliquet posuere volutpat montes arcu dictum ante eros eros. Molestie lorem vulputate, leo ac proin magnis. Velit viverra sodales commodo egestas pretium malesuada venenatis. Aptent consequat ut auctor vehicula, ullamcorper donec varius nisi dictum.

                    Etiam parturient per donec lobortis orci fusce convallis. Porta vivamus lectus pretium et sit habitant. Massa curae tincidunt diam maecenas dignissim hendrerit. Leo enim senectus proin, euismod aptent eros habitasse. Quisque scelerisque fames integer inceptos cubilia ac id posuere penatibus. Pulvinar rutrum consequat ligula lacinia volutpat pretium platea. Habitant torquent urna adipiscing non elementum. In a laoreet pretium, mus a conubia id porta condimentum! Quisque venenatis feugiat dapibus; curae parturient tortor.

                    Ac erat enim porta auctor ipsum. Eget libero litora turpis nibh sodales ex dui augue luctus. Parturient sem nec; lobortis nullam fermentum malesuada. Enim aliquam mi dictumst faucibus leo. Natoque congue dapibus natoque torquent taciti pretium volutpat pretium. Risus ultrices vel vitae praesent nisl magna gravida himenaeos viverra. Pharetra facilisis suscipit nibh nascetur sem ullamcorper.

                    Fringilla torquent porttitor nisi lacinia; finibus rhoncus ligula. Lectus velit cursus fames dui, venenatis aliquet? Per purus molestie feugiat vitae magnis massa. Ante ridiculus auctor molestie velit ante. Mus nascetur rutrum rhoncus netus faucibus a feugiat velit! Rhoncus bibendum porta ornare platea himenaeos sapien molestie. Penatibus interdum pharetra feugiat habitant, lacinia augue viverra. Faucibus fusce vel sociosqu vel adipiscing feugiat blandit maecenas. Donec potenti etiam vestibulum convallis blandit. Posuere curabitur vel nam amet odio tristique eget?
                </p>

                <img src="{{ asset('/storage/images/blog/7_full.png') }}" alt="" class="image">
            </div>

            <div class="article__section">
                <h1 class="title">Спортивний одяг для чоловіків, жінок та дітей</h1>
                <ul class="list">
                    <li class="list__item">Lorem ipsum odor amet, consectetuer adipiscing elit. Vivamus convallis dignissim curae praesent at. Justo mus vehicula porta arcu in vehicula. Ex accumsan curabitur metus convallis maecenas, class auctor bibendum ante. </li>
                    <li class="list__item">Nisi urna fringilla ultrices magnis hac arcu iaculis senectus. Tempus nascetur interdum egestas facilisis dis dictum quisque imperdiet.
                        Curabitur dui nisi vestibulum vel feugiat dignissim dignissim. </li>
                    <li class="list__item">Ultrices elit tristique leo amet mollis purus imperdiet nulla quisque. </li>
                    <li class="list__item">Pulvinar adipiscing lorem odio cubilia ullamcorper cras amet penatibus. Congue posuere senectus dictumst odio faucibus semper. </li>
                    <li class="list__item">Nisi urna fringilla ultrices magnis hac arcu iaculis senectus. Tempus nascetur interdum egestas facilisis dis dictum quisque imperdiet.
                        Curabitur dui nisi vestibulum vel feugiat dignissim dignissim. </li>
                    <li class="list__item">Ultrices elit tristique leo amet mollis purus imperdiet nulla quisque. </li>
                </ul>

                <img src="{{ asset('/storage/images/blog/6_full.png') }}" alt="" class="image">
            </div>

            <div class="article__section">
                <h1 class="title">Спортивний одяг для чоловіків, жінок та дітей</h1>
                <ol class="list">
                    <li class="list__item">Lorem ipsum odor amet, consectetuer adipiscing elit. Vivamus convallis dignissim curae praesent at. Justo mus vehicula porta arcu in vehicula. Ex accumsan curabitur metus convallis maecenas, class auctor bibendum ante. </li>
                    <li class="list__item">Nisi urna fringilla ultrices magnis hac arcu iaculis senectus. Tempus nascetur interdum egestas facilisis dis dictum quisque imperdiet.
                        Curabitur dui nisi vestibulum vel feugiat dignissim dignissim. </li>
                    <li class="list__item">Ultrices elit tristique leo amet mollis purus imperdiet nulla quisque. </li>
                    <li class="list__item">Pulvinar adipiscing lorem odio cubilia ullamcorper cras amet penatibus. Congue posuere senectus dictumst odio faucibus semper. </li>
                </ol>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
