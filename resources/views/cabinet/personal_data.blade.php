@extends('layouts.app')
@section('title', 'Особисті дані')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/personal_data.css') }}">
@endsection
@section('content')
    @include('components.header')

    <div class="content_wrapper">
        <div class="container">
            <div class="personal_data_wrapper">
                <div class="personal_data_container">
                    <div class="personal_data_box">
                        <div class="personal_name_box">
                            <div class="avatar">OT</div>
                            <div class="text_600_18_black">Олександра Таран</div>
                        </div>

                        <div class="personal_info_box">
                            <div class="different_icon_box">
                                <svg
                                    width="67" height="67" viewBox="0 0 67 67" fill="none"
                                      xmlns="http://www.w3.org/2000/svg">
                                    <rect width="67" height="67" fill="#DB0614"/>
                                    <path d="M40.922 31.14L41.849 30.213C42.5864 29.4755 43.0007 28.4754
                                     43.0007 27.4325C43.0007 26.3896 42.5864 25.3894 41.849 24.652C41.1116
                                     23.9145 40.1114 23.5002 39.0685 23.5002C38.0256 23.5002 37.0254 23.9145
                                     36.288 24.652L35.361 25.579L26.839 34.099C26.262 34.677 25.973 34.966
                                     25.725 35.284C25.4321 35.6592 25.181 36.0653 24.976 36.495C24.803 36.859
                                     24.674 37.247 24.416 38.021L23.322 41.302M40.922 31.14C40.922 31.14 38.953
                                      31.024 37.215 29.286C35.477 27.549 35.362 25.579 35.362 25.579M40.922
                                      31.14L32.401 39.66C31.824 40.237 31.535 40.526 31.217 40.774C30.8417 41.0669
                                      30.4357 41.318 30.006 41.523C29.642 41.696 29.255 41.825 28.48 42.083L25.199
                                      43.177M25.199 43.177L24.397 43.445C24.21 43.5077 24.0093 43.517 23.8174
                                      43.4718C23.6254 43.4267 23.4499 43.3289 23.3105 43.1895C23.171 43.0501 23.0733
                                      42.8745 23.0281 42.6826C22.983 42.4906 22.9923 42.2899 23.055 42.103L23.323
                                      41.301L25.199 43.177Z" stroke="white"/>
                                </svg>
                            </div>
                            <div class="personal_info font_style">
                                <span>{{ __('personal_date.personal_date') }}</span>
                            </div>
                        </div>

                        <div class="personal_info_box">
                            <div class="different_icon_box">
                                <svg
                                    width="67" height="67" viewBox="0 0 67 67"
                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="67" height="67" fill="#E8E9EE"/>
                                    <path d="M28.5 39.5C28.8978 39.5 29.2794 39.658
                                     29.5607 39.9393C29.842 40.2206 30 40.6022 30 41C30 41.3978 29.842
                                     41.7794 29.5607 42.0607C29.2794 42.342 28.8978 42.5 28.5 42.5C28.1022 42.5
                                     27.7206 42.342 27.4393 42.0607C27.158 41.7794 27 41.3978 27 41C27 40.6022 27.158
                                     40.2206 27.4393 39.9393C27.7206 39.658 28.1022 39.5 28.5 39.5ZM37.5 39.5C37.8978
                                     39.5 38.2794 39.658 38.5607 39.9393C38.842 40.2206 39 40.6022 39 41C39 41.3978
                                     38.842 41.7794 38.5607 42.0607C38.2794 42.342 37.8978 42.5 37.5 42.5C37.1022 42.5
                                     36.7206 42.342 36.4393 42.0607C36.158 41.7794 36 41.3978 36 41C36 40.6022 36.158
                                     40.2206 36.4393 39.9393C36.7206 39.658 37.1022 39.5 37.5 39.5Z"
                                      stroke="black"/>
                                    <path d="M23.2495 23.792C23.0617 23.726 22.8554 23.7372 22.6759
                                     23.8233C22.4965 23.9094 22.3585 24.0632 22.2925 24.251C22.2265 24.4388
                                     22.2377 24.6451 22.3238 24.8246C22.4099 25.0041 22.5637 25.142 22.7515
                                     25.208L23.2495 23.792ZM41.6585 31.383L42.3925 31.534L42.3935 31.53L41.6585
                                     31.383ZM26.7085 31.26V28.538H25.2085V31.26H26.7085ZM23.5105 23.884L23.2495
                                     23.792L22.7515 25.208L23.0125 25.299L23.5105 23.884ZM31.9385
                                     37.75H37.2405V36.25H31.9385V37.75ZM26.7085 28.538C26.7085 27.831 26.7095
                                     27.241 26.6585 26.762C26.6035 26.265 26.4885 25.812 26.2065 25.4L24.9675
                                     26.246C25.0575 26.378 25.1275 26.56 25.1665 26.923C25.2075 27.303 25.2085
                                     27.798 25.2085 28.538H26.7085ZM23.0125 25.299C23.6805 25.534 24.1195 25.69
                                     24.4425 25.85C24.7455 25.998 24.8795 26.118 24.9675 26.247L26.2065 25.4C25.9225
                                     24.984 25.5435 24.718 25.1025 24.501C24.6825 24.295 24.1445 24.107 23.5105
                                     23.884L23.0125 25.299ZM25.2085 31.26C25.2085 32.713 25.2225 33.76 25.3585
                                     34.56C25.5055 35.414 25.7985 36.026 26.3435 36.602L27.4325 35.57C27.1125
                                     35.232 26.9395 34.902 26.8375 34.307C26.7275 33.657 26.7085 32.749 26.7085
                                     31.26H25.2085ZM31.9385 36.25C30.5215 36.25 29.5385 36.248 28.7975 36.143C28.0825
                                     36.042 27.7055 35.858 27.4325 35.57L26.3435 36.602C26.9375 37.229 27.6905 37.502
                                     28.5865 37.628C29.4565 37.752 30.5675 37.75 31.9385 37.75V36.25ZM25.9585
                                     28.37H38.0885V26.87H25.9595L25.9585 28.37ZM40.9235 31.231L40.4235 33.656L41.8935
                                     33.958L42.3925 31.534L40.9235 31.231ZM38.0905 28.37C38.9465 28.37 39.7005 28.371
                                     40.2955 28.437C40.5905 28.471 40.8125 28.517 40.9675 28.571C41.1285 28.628 41.1545
                                     28.671 41.1415 28.654L42.3305 27.74C42.0955 27.434 41.7655 27.261 41.4645
                                     27.156C41.139 27.049 40.8026 26.9786 40.4615 26.946C39.7665 26.869 38.9185
                                     26.87 38.0905 26.87V28.37ZM42.3935 31.53C42.5635 30.682 42.7075 29.97 42.7425
                                     29.4C42.7795 28.814 42.7125 28.236 42.3305 27.74L41.1415 28.654C41.2035 28.735
                                     41.2715 28.88 41.2455 29.308C41.2185 29.752 41.1015 30.345 40.9235 31.236L42.3935
                                     31.53ZM37.2405 37.75C38.0025 37.75 38.6425 37.751 39.1585 37.688C39.6935 37.623 40.1825
                                     37.479 40.6085 37.132L39.6605 35.969C39.5355 36.071 39.3585 36.153 38.9755 36.199C38.5725 36.249
                                     38.0405 36.25 37.2405 36.25V37.75ZM40.4255 33.656C40.2635 34.439 40.1555 34.959 40.0255 35.344C39.9025
                                     35.71 39.7855 35.867 39.6605 35.969L40.6085 37.132C41.0355 36.784 41.2745 36.335 41.4465 35.823C41.6125 35.331
                                     41.7405 34.705 41.8945 33.959L40.4255 33.656Z"
                                      fill="black"/>
                                    <path d="M34 34.5V32.5M34 32.5V30.5M34 32.5H36M34 32.5H32"
                                      stroke="black" stroke-linecap="round"/>
                                </svg>
                            </div>

                            <div class="personal_info font_style">
                                <span>{{ __('personal_date.order_history') }}</span>
                            </div>
                        </div>

                        <div class="personal_info_box">
                            <div class="different_icon_box">
                                <svg
                                    width="67" height="67" viewBox="0 0 67 67"
                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="67" height="67" fill="#E8E9EE"/>
                                    <path d="M43 33.5H23M33 23.5V43.5M34 33.5C34 34.5609 34.4214 35.5783 35.1716 36.3284C35.9217 37.0786 36.9391 37.5 38 37.5M32 33.5C32 34.5609 31.5786 35.5783 30.8284 36.3284C30.0783 37.0786 29.0609 37.5 28 37.5"
                                          stroke="black" stroke-width="1.5" stroke-linecap="round"/>
                                    <path d="M33.0027 31.535C33.0033 30.8109 33.2456 30.1078 33.6912 29.5371C34.1369 28.9665 34.7604 28.561 35.4627 28.385C37.0657 27.985 38.5187 29.437 38.1177 31.041C37.9417 31.7433 37.5362 32.3668 36.9655 32.8124C36.3949 33.2581 35.6918 33.5004 34.9677 33.501H33.0027M33.0027 31.535V33.501M33.0027 31.535C33.0021 30.8109 32.7598 30.1078 32.3141 29.5371C31.8685 28.9665 31.245 28.561 30.5427 28.385C28.9397 27.985 27.4867 29.437 27.8877 31.041C28.0637 31.7433 28.4692 32.3668 29.0398 32.8124C29.6105 33.2581 30.3136 33.5004 31.0377 33.501H33.0027"
                                          stroke="black" stroke-width="1.5"/>
                                    <path d="M23 33.5C23 28.786 23 26.429 24.464 24.964C25.93 23.5 28.286 23.5 33 23.5C37.714 23.5 40.071 23.5 41.535 24.964C43 26.43 43 28.786 43 33.5C43 38.214 43 40.571 41.535 42.035C40.072 43.5 37.714 43.5 33 43.5C28.286 43.5 25.929 43.5 24.464 42.035C23 40.572 23 38.214 23 33.5Z"
                                          stroke="black" stroke-width="1.5"/>
                                </svg>
                            </div>

                            <div class="personal_info font_style">
                                <span>{{ __('personal_date.my_bonuses') }}</span>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="exit_box">
                        <img src="{{asset('storage/images/icons/exit.svg')}}" alt="exit" class="exit_img">
                    </a>
                </div>

                <div class="personal_data_change_box">
                    @include('components.form.change_personal_data')
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection


