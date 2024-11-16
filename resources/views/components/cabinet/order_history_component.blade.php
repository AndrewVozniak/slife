<div class="order_history_component_wrapper">
    <div class="order_history_box">
        <div class="order_attributes">
            <div>
                <p class="order_attributes_title">{{__('bonuses_and_order_history.order_history.order_number')}}
                    №467474634444626&#44; <span style="font-weight: 500">02.09.24</span></p>
            </div>
            <div>
                <span class="text_700_16_black">{{__('bonuses_and_order_history.order_history.sent')}}</span>
            </div>
        </div>

        <div class="order_attributes">
            <div>
                <p class="order_title">{{__('bonuses_and_order_history.order_history.order_amount')}}
            </div>
            <div>
                <span class="text_700_16_black">1795 &#8372;    </span>
            </div>
        </div>

        <div class="order_attributes">
            <div>
                <p class="order_title">{{__('bonuses_and_order_history.order_history.number_of_products')}}
            </div>
            <div>
                <span class="text_700_16_black">4</span>
            </div>
        </div>

        <div class="img_24_box">
            <img src="{{asset('storage/images/icons/material-symbols-light_keyboard-arrow-up.svg')}}" alt="icon"
                 class="img_24">
        </div>
    </div>

    <div class="order_history_box_opened">
        <div class="order_history_box border_none">
            <div class="order_attributes">
                <div>
                    <p class="order_attributes_title">{{__('bonuses_and_order_history.order_history.order_number')}}
                        №467474634444626&#44; <span style="font-weight: 500">02.09.24</span></p>
                </div>
                <div>
                    <span class="text_700_16_black">{{__('bonuses_and_order_history.order_history.sent')}}</span>
                </div>
            </div>


            <div class="img_24_box">
                <img src="{{asset('storage/images/icons/material-symbols-light_keyboard-arrow-up.svg')}}" alt="icon"
                     class="img_24">
            </div>
        </div>

        <div class="product_description_wrapper">
            @include('components.cabinet.order_description')
            @include('components.cabinet.order_description')
            @include('components.cabinet.order_description')
            @include('components.cabinet.order_description')
        </div>

        <div class="cost_and_delivery_wrapper">
            <div class="cost_and_delivery_box">
                <div class="cost_and_delivery_options">
                    <div>
                        <span class="text_400_16_black">
                            {{__('bonuses_and_order_history.order_history.cost')}}
                        </span>
                    </div>

                    <div>
                        <span class="text_500_16_black">4200 &#8372;</span>
                    </div>
                </div>
                <div class="cost_and_delivery_options">
                    <div>
                        <span class="text_400_16_black">
                            {{__('bonuses_and_order_history.order_history.delivery')}}
                        </span>
                    </div>

                    <div>
                        <span>
                            {{__('bonuses_and_order_history.order_history.new_post')}}
                            <span class="text_500_16_black">&#40;{{__('bonuses_and_order_history.order_history.nearly')}}
                                70 &#8372;&#41;
                            </span>
                        </span>
                    </div>
                </div>
                <div class="cost_and_delivery_options">
                    <div>
                        <span class="text_700_16_black">
                            {{__('bonuses_and_order_history.order_history.total')}}
                        </span>
                    </div>

                    <div>
                        <span class="text_700_16_black">4270 &#8372;</span>
                    </div>
                </div>
            </div>
            <div class="cost_and_delivery_box delivery_box">
                <p>{{__('bonuses_and_order_history.order_history.delivery_date')}}&#58;
                    <span class="text_400_16_black">06.09.2024</span>
                </p>

                <p>{{__('bonuses_and_order_history.order_history.phone')}}&#46;
                    <span class="text_400_16_black">0987453884</span>
                </p>

                <p>
                    <span class="text_400_16_black">{{__('bonuses_and_order_history.order_history.address')}}</span>
                </p>
            </div>
        </div>
    </div>
</div>


