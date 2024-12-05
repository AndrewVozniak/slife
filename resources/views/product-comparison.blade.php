@extends('layouts.app')
@section('title', 'Порівняння товарів')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/product_comparison.css') }}">
@endsection
@section('content')
    @include('components.header')

    <div class="container breadcrumbs">
        <a href="{{ route('home', ['locale' => App::currentLocale()])}}" class="breadcrumb">Головна</a>
        <img src="{{asset('storage/images/icons/breadcrumbs_arrow_right.svg')}}" alt="filter" class="param_image">
        <a href="{{ route('compareProduct', ['locale' => App::currentLocale()]) }}" class="breadcrumb active">Порівняння товарів</a>
    </div>

    <div class="product_comparison__content_wrapper">
        <div class="container">
            <div class="product_comparison_wrapper">
                <div class="title__big">{{__('product_comparison.product_comparison')}}</div>

                <div class="comparison-grid">
                    <!-- Header Row -->
                    <div class="header th1" id="products">{{__('product_comparison.products_in_the_list')}}</div>
                    <div class="header" id="product1">{{__('product_comparison.windbreaker')}} New Balance Jacket NB Athletics</div>
                    <div class="header" id="product2">{{__('product_comparison.t-shirt')}}  Nike W NSW ESSNTL RIB CRP TANK</div>
                    <div class="header" id="product3">{{__('product_comparison.shorts')}} New Balance Short NB Small Logo</div>


                    <!-- Image Row -->
                    <div class="text_400_16_black th2">{{__('product_comparison.photo')}}</div>
                    <div>
                        <img src="{{ asset('/storage/images/products/product_3.svg') }}"
                              alt="favorite" class="product_photo">
                    </div>
                    <div><img src="{{ asset('/storage/images/products/product_1.svg') }}"
                              alt="favorite" class="product_photo">
                    </div>
                    <div>
                        <img src="{{ asset('/storage/images/products/product_4.svg') }}"
                             alt="favorite" class="product_photo">
                    </div>

                    <!-- Price Row -->
                    <div class="text_400_16_black th2">{{__('product_comparison.price')}}</div>
                    <div>
                        <span class="old_price"></span>
                        <span  class="text_700_16_black"> 1250 &#8372;</span>
                    </div>

                    <div>
                        <span class="old_price">1750 &#8372; </span>
                        <span  class="text_700_16_black"> 1550 &#8372;</span>
                    </div>

                    <div>
                        <span class="old_price">1950 &#8372; </span>
                        <span  class="text_700_16_black"> 1750 &#8372;</span>
                    </div>

                    <!-- Article Row -->
                    <div class="text_400_16_black th2">{{__('product_comparison.article')}}</div>
                    <div>00192</div>
                    <div>004736</div>
                    <div>883620</div>


                    <!-- Description Row -->
                    <div class="text_400_16_black th2">{{__('product_comparison.description')}}</div>
                    <div>{{__('product_comparison.description_text')}}</div>
                    <div>{{__('product_comparison.description_text')}}</div>
                    <div>{{__('product_comparison.description_text')}}</div>


                    <!-- Producer Row -->
                    <div class="text_400_16_black th2">{{__('product_comparison.producer')}}</div>
                    <div>New Balance</div>
                    <div>Nike</div>
                    <div>New Balance</div>


                    <!-- Rating Row -->
                    <div class="text_400_16_black th2">{{__('product_comparison.rating')}}</div>
                    <div class="rating">
                        <div class="star_rating_box">
                            <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                            <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                            <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                            <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                            <img src="{{ asset('storage/images/icons/star.svg') }}" alt="star" class="star_img">
                        </div>
                        <span class="reviews">&#40;8 {{__('product_comparison.reviews')}}&#41;</span>
                    </div>
                    <div class="rating">
                        <div class="star_rating_box">
                            <img src="{{ asset('storage/images/icons/star.svg') }}" alt="star" class="stars">
                            <img src="{{ asset('storage/images/icons/star.svg') }}" alt="star" class="stars">
                            <img src="{{ asset('storage/images/icons/star.svg') }}" alt="star" class="stars">
                            <img src="{{ asset('storage/images/icons/star.svg') }}" alt="star" class="stars">
                            <img src="{{ asset('storage/images/icons/star.svg') }}" alt="star" class="stars">
                        </div>
                        <span class="reviews none_reviews">&#40;0 {{__('product_comparison.reviews')}}&#41;</span>
                    </div>
                    <div class="rating">
                        <div class="star_rating_box">
                            <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                            <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                            <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                            <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                            <img src="{{ asset('storage/images/icons/star.svg') }}" alt="star" class="stars">
                        </div>
                        <span class="reviews">&#40;44 {{__('product_comparison.reviews_2')}}&#41;</span>
                    </div>

                    <!--  Material Row -->
                    <div class="text_400_16_black th2">{{__('product_comparison.material')}}</div>
                    <div>100&#37; {{__('product_comparison.nylon')}}</div>
                    <div>100&#37; {{__('product_comparison.polyester')}}</div>
                    <div>100&#37; {{__('product_comparison.nylon')}}</div>


                    <!-- Actions Row -->
                    <div></div>
                    <div class="product_comparison_btn_box">
                        <button class="btn-add">{{__('product_comparison.add_to_cart')}}</button>
                        <button class="btn-delete">
                            <img src="{{ asset('storage/images/icons/fluent_delete-28-filled.svg') }}" alt="star" class="trash_btn">
                        </button>
                    </div>

                    <div class="product_comparison_btn_box">
                        <button class="btn-add">{{__('product_comparison.add_to_cart')}}</button>
                        <button class="btn-delete">
                            <img src="{{ asset('storage/images/icons/fluent_delete-28-filled.svg') }}" alt="star" class="trash_btn">
                        </button>
                    </div>

                    <div class="product_comparison_btn_box">
                        <button class="btn-add">{{__('product_comparison.add_to_cart')}}</button>
                        <button class="btn-delete">
                            <img src="{{ asset('storage/images/icons/fluent_delete-28-filled.svg') }}" alt="star" class="trash_btn">
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <div class="custom_container">
            <div class="table">
                <div class="section-header">
                    <h1 class="text">{{__('product_comparison.products_in_the_list')}}</h1>
                </div>

                <div class="row">
                    <div class="cell">
                        <p class="text">New Balance Jacket NB Athletics</p>
                        <img src="{{ asset('/storage/images/products/product_3.svg') }}"
                             alt="favorite" class="product_photo">
                    </div>

                    <div class="cell">
                        <p class="text">Nike W NSW ESSNTL RIB CRP TANK</p>
                        <img src="{{ asset('/storage/images/products/product_1.svg') }}"
                             alt="favorite" class="product_photo">
                    </div>

                    <div class="cell">
                        <p class="text">New Balance Short NB Small Logo</p>
                        <img src="{{ asset('/storage/images/products/product_4.svg') }}"
                             alt="favorite" class="product_photo">
                    </div>

                    <div class="cell">
                        <p class="text">New Balance Jacket NB Athletics</p>
                        <img src="{{ asset('/storage/images/products/product_3.svg') }}"
                             alt="favorite" class="product_photo">
                    </div>

                    <div class="cell">
                        <p class="text">Nike W NSW ESSNTL RIB CRP TANK</p>
                        <img src="{{ asset('/storage/images/products/product_1.svg') }}"
                             alt="favorite" class="product_photo">
                    </div>

                    <div class="cell">
                        <p class="text">New Balance Short NB Small Logo</p>
                        <img src="{{ asset('/storage/images/products/product_4.svg') }}"
                             alt="favorite" class="product_photo">
                    </div>

                    <div class="cell">
                        <p class="text">New Balance Jacket NB Athletics</p>
                        <img src="{{ asset('/storage/images/products/product_3.svg') }}"
                             alt="favorite" class="product_photo">
                    </div>
                </div>


                <div class="section-header">
                    <h1 class="text">{{__('product_comparison.price')}}</h1>
                </div>

                <div class="row">
                    <div class="cell rowed">
                        <p class="text">1250 &#8372;</p>
                    </div>

                    <div class="cell rowed">
                        <p class="old_price">1750 &#8372;</p>
                        <p class="text">1550 &#8372;</p>
                    </div>

                    <div class="cell rowed">
                        <p class="old_price">1950 &#8372;</p>
                        <p class="text">1750 &#8372;</p>
                    </div>

                    <div class="cell rowed">
                        <p class="old_price">1550 &#8372;</p>
                        <p class="text">1250 &#8372;</p>
                    </div>

                    <div class="cell rowed">
                        <p class="old_price">1750 &#8372;</p>
                        <p class="text">1550 &#8372;</p>
                    </div>

                    <div class="cell rowed">
                        <p class="old_price">1950 &#8372;</p>
                        <p class="text">1750 &#8372;</p>
                    </div>

                    <div class="cell rowed">
                        <p class="text">1250 &#8372;</p>
                    </div>
                </div>


                <div class="section-header">
                    <h1 class="text">{{__('product_comparison.article')}}</h1>
                </div>

                <div class="row">
                    <div class="cell">
                        <p class="text">00192</p>
                    </div>

                    <div class="cell">
                        <p class="text">004736</p>
                    </div>

                    <div class="cell few_cells" style="width: calc(124px * 4)">
                        <p class="text">883620</p>
                    </div>


                    <div class="cell">
                        <p class="text">00192</p>
                    </div>
                </div>

                <div class="section-header">
                    <h1 class="text">{{__('product_comparison.description')}}</h1>
                </div>

                <div class="row">
                    <div class="cell">
                        <p class="desc">{{__('product_comparison.description_text')}}</p>
                    </div>

                    <div class="cell">
                        <p class="desc">{{__('product_comparison.description_text')}}</p>
                    </div>

                    <div class="cell">
                        <p class="desc">{{__('product_comparison.description_text')}}</p>
                    </div>

                    <div class="cell">
                        <p class="desc">{{__('product_comparison.description_text')}}</p>
                    </div>

                    <div class="cell">
                        <p class="desc">{{__('product_comparison.description_text')}}</p>
                    </div>

                    <div class="cell">
                        <p class="desc">{{__('product_comparison.description_text')}}</p>
                    </div>

                    <div class="cell">
                        <p class="desc">{{__('product_comparison.description_text')}}</p>
                    </div>
                </div>

                <div class="section-header">
                    <h1 class="text">{{__('product_comparison.producer')}}</h1>
                </div>

                <div class="row">
                    <div class="cell">
                        <p class="text">New Balance</p>
                    </div>

                    <div class="cell">
                        <p class="text">Nike</p>
                    </div>

                    <div class="cell">
                        <p class="text">New Balance</p>
                    </div>

                    <div class="cell">
                        <p class="text">New Balance</p>
                    </div>

                    <div class="cell">
                        <p class="text">Nike</p>
                    </div>

                    <div class="cell">
                        <p class="text">New Balance</p>
                    </div>

                    <div class="cell">
                        <p class="text">New Balance</p>
                    </div>
                </div>

                <div class="section-header">
                    <h1 class="text">{{__('product_comparison.rating')}}</h1>
                </div>

                <div class="row">
                    <div class="cell">
                        <div class="rating">
                            <div class="star_rating_box">
                                <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star.svg') }}" alt="star" class="star_img">
                            </div>
                            <span class="reviews">&#40;8 {{__('product_comparison.reviews')}}&#41;</span>
                        </div>
                    </div>

                    <div class="cell">
                        <div class="rating">
                            <div class="star_rating_box">
                                <img src="{{ asset('storage/images/icons/star.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star.svg') }}" alt="star" class="stars">
                            </div>
                            <span class="reviews none_reviews">&#40;0 {{__('product_comparison.reviews')}}&#41;</span>
                        </div>
                    </div>

                    <div class="cell">
                        <div class="rating">
                            <div class="star_rating_box">
                                <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star.svg') }}" alt="star" class="stars">
                            </div>
                            <span class="reviews">&#40;44 {{__('product_comparison.reviews_2')}}&#41;</span>
                        </div>
                    </div>

                    <div class="cell">
                        <div class="rating">
                            <div class="star_rating_box">
                                <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star.svg') }}" alt="star" class="star_img">
                            </div>
                            <span class="reviews">&#40;8 {{__('product_comparison.reviews')}}&#41;</span>
                        </div>
                    </div>

                    <div class="cell">
                        <div class="rating">
                            <div class="star_rating_box">
                                <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star.svg') }}" alt="star" class="star_img">
                            </div>
                            <span class="reviews">&#40;8 {{__('product_comparison.reviews')}}&#41;</span>
                        </div>
                    </div>

                    <div class="cell">
                        <div class="rating">
                            <div class="star_rating_box">
                                <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star.svg') }}" alt="star" class="star_img">
                            </div>
                            <span class="reviews">&#40;8 {{__('product_comparison.reviews')}}&#41;</span>
                        </div>
                    </div>

                    <div class="cell">
                        <div class="rating">
                            <div class="star_rating_box">
                                <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star-fill.svg') }}" alt="star" class="stars">
                                <img src="{{ asset('storage/images/icons/star.svg') }}" alt="star" class="star_img">
                            </div>
                            <span class="reviews">&#40;8 {{__('product_comparison.reviews')}}&#41;</span>
                        </div>
                    </div>
                </div>

                <div class="section-header">
                    <h1 class="text">{{__('product_comparison.material')}}</h1>
                </div>

                <div class="col">
                    <div class="row">
                        <div class="cell">
                            <p class="text">100&#37; {{__('product_comparison.nylon')}}</p>
                        </div>

                        <div class="cell">
                            <p class="text">100&#37; {{__('product_comparison.polyester')}}</p>
                        </div>

                        <div class="cell">
                            <p class="text">100&#37; {{__('product_comparison.nylon')}}</p>
                        </div>

                        <div class="cell">
                            <p class="text">100&#37; {{__('product_comparison.nylon')}}</p>
                        </div>

                        <div class="cell">
                            <p class="text">100&#37; {{__('product_comparison.polyester')}}</p>
                        </div>

                        <div class="cell">
                            <p class="text">100&#37; {{__('product_comparison.nylon')}}</p>
                        </div>

                        <div class="cell">
                            <p class="text">100&#37; {{__('product_comparison.nylon')}}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell">
                            <a href="#" class="basket_btn_wrapper">
                                <img src="{{ asset('storage/images/icons/basket_white.svg') }}" alt="star" class="basket_btn">
                            </a>
                            <a href="#" class="trash_btn_wrapper">
                                <img src="{{ asset('storage/images/icons/fluent_delete-28-filled.svg') }}" alt="star" class="trash_btn">
                            </a>
                        </div>

                        <div class="cell">
                            <a href="#" class="basket_btn_wrapper">
                                <img src="{{ asset('storage/images/icons/basket_white.svg') }}" alt="star" class="basket_btn">
                            </a>
                            <a href="#" class="trash_btn_wrapper">
                                <img src="{{ asset('storage/images/icons/fluent_delete-28-filled.svg') }}" alt="star" class="trash_btn">
                            </a>
                        </div>

                        <div class="cell">
                            <a href="#" class="basket_btn_wrapper">
                                <img src="{{ asset('storage/images/icons/basket_white.svg') }}" alt="star" class="basket_btn">
                            </a>
                            <a href="#" class="trash_btn_wrapper">
                                <img src="{{ asset('storage/images/icons/fluent_delete-28-filled.svg') }}" alt="star" class="trash_btn">
                            </a>
                        </div>

                        <div class="cell">
                            <a href="#" class="basket_btn_wrapper">
                                <img src="{{ asset('storage/images/icons/basket_white.svg') }}" alt="star" class="basket_btn">
                            </a>
                            <a href="#" class="trash_btn_wrapper">
                                <img src="{{ asset('storage/images/icons/fluent_delete-28-filled.svg') }}" alt="star" class="trash_btn">
                            </a>
                        </div>

                        <div class="cell">
                            <a href="#" class="basket_btn_wrapper">
                                <img src="{{ asset('storage/images/icons/basket_white.svg') }}" alt="star" class="basket_btn">
                            </a>
                            <a href="#" class="trash_btn_wrapper">
                                <img src="{{ asset('storage/images/icons/fluent_delete-28-filled.svg') }}" alt="star" class="trash_btn">
                            </a>
                        </div>

                        <div class="cell">
                            <a href="#" class="basket_btn_wrapper">
                                <img src="{{ asset('storage/images/icons/basket_white.svg') }}" alt="star" class="basket_btn">
                            </a>
                            <a href="#" class="trash_btn_wrapper">
                                <img src="{{ asset('storage/images/icons/fluent_delete-28-filled.svg') }}" alt="star" class="trash_btn">
                            </a>
                        </div>

                        <div class="cell">
                            <a href="#" class="basket_btn_wrapper">
                                <img src="{{ asset('storage/images/icons/basket_white.svg') }}" alt="star" class="basket_btn">
                            </a>
                            <a href="#" class="trash_btn_wrapper">
                                <img src="{{ asset('storage/images/icons/fluent_delete-28-filled.svg') }}" alt="star" class="trash_btn">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('components.footer')
@endsection
