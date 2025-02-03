<div class="order_history_component_wrapper" x-data="{ openedTab: null }">
    <div
        :class="openedTab === 1 ? 'order_history_box_opened' : 'order_history_box'"
        @click="openedTab = openedTab === 1 ? null : 1"
    >
        <!-- Shared Attributes -->
        <div class="heading" :class="openedTab === 1 ? 'active' : ''">
            <div class="order_attributes">
                <div>
                    <p class="order_attributes_title">
                        {{__('bonuses_and_order_history.order_history.order_number')}} №467474634444626&#44;
                        <span style="font-weight: 500">02.09.24</span>
                    </p>
                </div>
                <div>
                    <span class="text_700_16_black">{{__('bonuses_and_order_history.order_history.sent')}}</span>
                </div>
            </div>

            <div class="order_attributes" x-show="openedTab !== 1">
                <div>
                    <p class="order_title">{{__('bonuses_and_order_history.order_history.order_amount')}}</p>
                </div>
                <div>
                    <span class="text_700_16_black">1795 &#8372;</span>
                </div>
            </div>

            <div class="order_attributes" x-show="openedTab !== 1">
                <div>
                    <p class="order_title">{{__('bonuses_and_order_history.order_history.number_of_products')}}</p>
                </div>
                <div>
                    <span class="text_700_16_black">4</span>
                </div>
            </div>

            <div class="img_24_box">
                <img
                    :class="{ 'rotate-180': openedTab === 1 }"
                    src="{{asset('storage/images/icons/material-symbols-light_keyboard-arrow-up.svg')}}"
                    alt="icon"
                    class="img_24 transition-transform duration-200"
                >
            </div>
        </div>

        <!-- Conditional Opened Content -->
        <template x-if="openedTab === 1">
            <div class="order_details">
                <!-- Product Descriptions -->
                <div class="product_description_wrapper">
                    @include('components.cabinet.order_description')
                    @include('components.cabinet.order_description')
                    @include('components.cabinet.order_description')
                    @include('components.cabinet.order_description')
                </div>

                <!-- Cost and Delivery -->
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
                                    <span class="text_500_16_black">
                                        &#40;{{__('bonuses_and_order_history.order_history.nearly')}} 70 &#8372;&#41;
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
                        <p>
                            {{__('bonuses_and_order_history.order_history.delivery_date')}}&#58;
                            <span class="text_400_16_black">06.09.2024</span>
                        </p>
                        <p>
                            {{__('bonuses_and_order_history.order_history.phone')}}&#46;
                            <span class="text_400_16_black">0987453884</span>
                        </p>
                        <p>
                            <span class="text_400_16_black">{{__('bonuses_and_order_history.order_history.address')}}</span>
                        </p>
                    </div>
                </div>
            </div>
        </template>

        <!-- Shared Attributes  mobile version-->
        <div class="heading_mobile" :class="openedTab === 1 ? 'active' : ''">
            <div class="order_attributes_box">
                <div>
                    <p class="order_attributes_title">
                        {{__('bonuses_and_order_history.order_history.order_number')}} №467474634444626&#44;
                        <span style="font-weight: 500">02.09.24</span>
                    </p>
                </div>

                <div class="img_24_box">
                    <img
                        :class="{ 'rotate-180': openedTab === 1 }"
                        src="{{asset('storage/images/icons/material-symbols-light_keyboard-arrow-up.svg')}}"
                        alt="icon"
                        class="img_24 transition-transform duration-200"
                    >
                </div>
            </div>

            <div class="order_attributes_box">
                <div>
                    <span class="order_history_sent">{{__('bonuses_and_order_history.order_history.sent')}}</span>
                </div>

                <div>
                    <span class="order_history_sent sent_active" :class="openedTab === 1 ? 'active' : ''">1795 &#8372;</span>
                </div>
            </div>

            <!-- Delivery Opened Content mobile version-->

            <template x-if="openedTab === 1">
                <div class="order_details_mobile">
                    <div class="delivery_box_mobile">
                        <div class="order_history_line" >
                        </div>

                        <p class="delivery_text_mobile">
                            {{__('bonuses_and_order_history.order_history.delivery_date')}}&#58;
                            <span class="delivery_text_bold_mobile">06.09.2024</span>
                        </p>
                        <p class="delivery_text_mobile">
                            {{__('bonuses_and_order_history.order_history.phone')}}&#46;
                            <span class="delivery_text_bold_mobile">0987453884</span>
                        </p>
                        <p class="delivery_text_mobile">
                            <span class="delivery_text_bold_mobile">{{__('bonuses_and_order_history.order_history.address')}}</span>
                        </p>
                    </div>
                </div>
            </template>
        </div>

        <!-- Conditional Opened Content mobile version-->
        <template x-if="openedTab === 1">
            <div class="order_details_mobile">
                <!-- Product Descriptions -->
                <div class="product_description_wrapper">
                    @include('components.cabinet.order_description')
                    @include('components.cabinet.order_description')
                    @include('components.cabinet.order_description')
                    @include('components.cabinet.order_description')
                </div>

                <!-- Cost and Delivery -->
                <div class="cost_box_wrapper_mobile">
                    <div class="cost_box_mobile">
                        <span class="cost_text_mobile">
                            {{__('bonuses_and_order_history.order_history.cost')}}
                        </span>

                        <span class="cost_text_bold_mobile">4200 &#8372;</span>
                    </div>

                    <div class="cost_box_mobile">
                        <div>
                             <span class="cost_text_mobile">
                            {{__('bonuses_and_order_history.order_history.delivery')}}
                            </span>
                        </div>

                       <div class="delivery_cost_box_mobile">
                           <div>
                               <div class="new_post_text">
                                   <span >
                                    {{__('bonuses_and_order_history.order_history.new_post')}}
                                    </span>
                               </div>

                               <div class="new_post_nearly_text">
                                   <span >
                                        &#40;{{__('bonuses_and_order_history.order_history.nearly')}} 70 &#8372;&#41;
                                    </span>
                               </div>
                           </div>
                       </div>
                    </div>

                    <div class="cost_box_mobile">
                        <span class="cost_text_mobile">
                            {{__('bonuses_and_order_history.order_history.total')}}
                        </span>

                        <span class="cost_text_bold_mobile">4270 &#8372;</span>
                    </div>
                </div>
            </div>
        </template>
    </div>


    <div
        :class="openedTab === 2 ? 'order_history_box_opened' : 'order_history_box'"
        @click="openedTab = openedTab === 2 ? null : 2"
    >
        <!-- Shared Attributes -->
        <div class="heading" :class="openedTab === 2 ? 'active' : ''">
            <div class="order_attributes">
                <div>
                    <p class="order_attributes_title">
                        {{__('bonuses_and_order_history.order_history.order_number')}} №467474634444626&#44;
                        <span style="font-weight: 500">02.09.24</span>
                    </p>
                </div>
                <div>
                    <span class="text_700_16_black">{{__('bonuses_and_order_history.order_history.sent')}}</span>
                </div>
            </div>

            <div class="order_attributes" x-show="openedTab !== 2">
                <div>
                    <p class="order_title">{{__('bonuses_and_order_history.order_history.order_amount')}}</p>
                </div>
                <div>
                    <span class="text_700_16_black">1795 &#8372;</span>
                </div>
            </div>

            <div class="order_attributes" x-show="openedTab !== 2">
                <div>
                    <p class="order_title">{{__('bonuses_and_order_history.order_history.number_of_products')}}</p>
                </div>
                <div>
                    <span class="text_700_16_black">4</span>
                </div>
            </div>

            <div class="img_24_box">
                <img
                    :class="{ 'rotate-180': openedTab === 2 }"
                    src="{{asset('storage/images/icons/material-symbols-light_keyboard-arrow-up.svg')}}"
                    alt="icon"
                    class="img_24 transition-transform duration-200"
                >
            </div>
        </div>

        <!-- Conditional Opened Content -->
        <template x-if="openedTab === 2">
            <div class="order_details">
                <!-- Product Descriptions -->
                <div class="product_description_wrapper">
                    @include('components.cabinet.order_description')
                    @include('components.cabinet.order_description')
                    @include('components.cabinet.order_description')
                    @include('components.cabinet.order_description')
                </div>

                <!-- Cost and Delivery -->
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
                                    <span class="text_500_16_black">
                                        &#40;{{__('bonuses_and_order_history.order_history.nearly')}} 70 &#8372;&#41;
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
                        <p>
                            {{__('bonuses_and_order_history.order_history.delivery_date')}}&#58;
                            <span class="text_400_16_black">06.09.2024</span>
                        </p>
                        <p>
                            {{__('bonuses_and_order_history.order_history.phone')}}&#46;
                            <span class="text_400_16_black">0987453884</span>
                        </p>
                        <p>
                            <span class="text_400_16_black">{{__('bonuses_and_order_history.order_history.address')}}</span>
                        </p>
                    </div>
                </div>
            </div>
        </template>

        <!-- Shared Attributes  mobile version-->
        <div class="heading_mobile" :class="openedTab === 2 ? 'active' : ''">
            <div class="order_attributes_box">
                <div>
                    <p class="order_attributes_title">
                        {{__('bonuses_and_order_history.order_history.order_number')}} №467474634444626&#44;
                        <span style="font-weight: 500">02.09.24</span>
                    </p>
                </div>

                <div class="img_24_box">
                    <img
                        :class="{ 'rotate-180': openedTab === 2 }"
                        src="{{asset('storage/images/icons/material-symbols-light_keyboard-arrow-up.svg')}}"
                        alt="icon"
                        class="img_24 transition-transform duration-200"
                    >
                </div>
            </div>

            <div class="order_attributes_box">
                <div>
                    <span class="order_history_sent">{{__('bonuses_and_order_history.order_history.sent')}}</span>
                </div>

                <div>
                    <span class="order_history_sent sent_active" :class="openedTab === 2 ? 'active' : ''">1795 &#8372;</span>
                </div>
            </div>

            <!-- Delivery Opened Content mobile version-->

            <template x-if="openedTab === 2">
                <div class="order_details_mobile">
                    <div class="delivery_box_mobile">
                        <div class="order_history_line" >
                        </div>

                        <p class="delivery_text_mobile">
                            {{__('bonuses_and_order_history.order_history.delivery_date')}}&#58;
                            <span class="delivery_text_bold_mobile">06.09.2024</span>
                        </p>
                        <p class="delivery_text_mobile">
                            {{__('bonuses_and_order_history.order_history.phone')}}&#46;
                            <span class="delivery_text_bold_mobile">0987453884</span>
                        </p>
                        <p class="delivery_text_mobile">
                            <span class="delivery_text_bold_mobile">{{__('bonuses_and_order_history.order_history.address')}}</span>
                        </p>
                    </div>
                </div>
            </template>
        </div>

        <!-- Conditional Opened Content mobile version-->
        <template x-if="openedTab === 2">
            <div class="order_details_mobile">
                <!-- Product Descriptions -->
                <div class="product_description_wrapper">
                    @include('components.cabinet.order_description')
                    @include('components.cabinet.order_description')
                    @include('components.cabinet.order_description')
                    @include('components.cabinet.order_description')
                </div>

                <!-- Cost and Delivery -->
                <div class="cost_box_wrapper_mobile">
                    <div class="cost_box_mobile">
                        <span class="cost_text_mobile">
                            {{__('bonuses_and_order_history.order_history.cost')}}
                        </span>

                        <span class="cost_text_bold_mobile">4200 &#8372;</span>
                    </div>

                    <div class="cost_box_mobile">
                        <div>
                             <span class="cost_text_mobile">
                            {{__('bonuses_and_order_history.order_history.delivery')}}
                            </span>
                        </div>

                        <div class="delivery_cost_box_mobile">
                            <div>
                                <div class="new_post_text">
                                   <span >
                                    {{__('bonuses_and_order_history.order_history.new_post')}}
                                    </span>
                                </div>

                                <div class="new_post_nearly_text">
                                   <span >
                                        &#40;{{__('bonuses_and_order_history.order_history.nearly')}} 70 &#8372;&#41;
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cost_box_mobile">
                        <span class="cost_text_mobile">
                            {{__('bonuses_and_order_history.order_history.total')}}
                        </span>

                        <span class="cost_text_bold_mobile">4270 &#8372;</span>
                    </div>
                </div>
            </div>
        </template>
    </div>


    <div
        :class="openedTab === 3 ? 'order_history_box_opened' : 'order_history_box'"
        @click="openedTab = openedTab === 3 ? null : 3"
    >
        <!-- Shared Attributes -->
        <div class="heading" :class="openedTab === 3 ? 'active' : ''">
            <div class="order_attributes">
                <div>
                    <p class="order_attributes_title">
                        {{__('bonuses_and_order_history.order_history.order_number')}} №467474634444626&#44;
                        <span style="font-weight: 500">02.09.24</span>
                    </p>
                </div>
                <div>
                    <span class="text_700_16_black">{{__('bonuses_and_order_history.order_history.sent')}}</span>
                </div>
            </div>

            <div class="order_attributes" x-show="openedTab !== 3">
                <div>
                    <p class="order_title">{{__('bonuses_and_order_history.order_history.order_amount')}}</p>
                </div>
                <div>
                    <span class="text_700_16_black">1795 &#8372;</span>
                </div>
            </div>

            <div class="order_attributes" x-show="openedTab !== 3">
                <div>
                    <p class="order_title">{{__('bonuses_and_order_history.order_history.number_of_products')}}</p>
                </div>
                <div>
                    <span class="text_700_16_black">4</span>
                </div>
            </div>

            <div class="img_24_box">
                <img
                    :class="{ 'rotate-180': openedTab === 3 }"
                    src="{{asset('storage/images/icons/material-symbols-light_keyboard-arrow-up.svg')}}"
                    alt="icon"
                    class="img_24 transition-transform duration-200"
                >
            </div>
        </div>

        <!-- Conditional Opened Content -->
        <template x-if="openedTab === 3">
            <div class="order_details">
                <!-- Product Descriptions -->
                <div class="product_description_wrapper">
                    @include('components.cabinet.order_description')
                    @include('components.cabinet.order_description')
                    @include('components.cabinet.order_description')
                    @include('components.cabinet.order_description')
                </div>

                <!-- Cost and Delivery -->
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
                                    <span class="text_500_16_black">
                                        &#40;{{__('bonuses_and_order_history.order_history.nearly')}} 70 &#8372;&#41;
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
                        <p>
                            {{__('bonuses_and_order_history.order_history.delivery_date')}}&#58;
                            <span class="text_400_16_black">06.09.2024</span>
                        </p>
                        <p>
                            {{__('bonuses_and_order_history.order_history.phone')}}&#46;
                            <span class="text_400_16_black">0987453884</span>
                        </p>
                        <p>
                            <span class="text_400_16_black">{{__('bonuses_and_order_history.order_history.address')}}</span>
                        </p>
                    </div>
                </div>
            </div>
        </template>

        <!-- Shared Attributes  mobile version-->
        <div class="heading_mobile" :class="openedTab === 3 ? 'active' : ''">
            <div class="order_attributes_box">
                <div>
                    <p class="order_attributes_title">
                        {{__('bonuses_and_order_history.order_history.order_number')}} №467474634444626&#44;
                        <span style="font-weight: 500">02.09.24</span>
                    </p>
                </div>

                <div class="img_24_box">
                    <img
                        :class="{ 'rotate-180': openedTab === 3 }"
                        src="{{asset('storage/images/icons/material-symbols-light_keyboard-arrow-up.svg')}}"
                        alt="icon"
                        class="img_24 transition-transform duration-200"
                    >
                </div>
            </div>

            <div class="order_attributes_box">
                <div>
                    <span class="order_history_sent">{{__('bonuses_and_order_history.order_history.sent')}}</span>
                </div>

                <div>
                    <span class="order_history_sent sent_active" :class="openedTab === 3 ? 'active' : ''">1795 &#8372;</span>
                </div>
            </div>

            <!-- Delivery Opened Content mobile version-->

            <template x-if="openedTab === 3">
                <div class="order_details_mobile">
                    <div class="delivery_box_mobile">
                        <div class="order_history_line" >
                        </div>

                        <p class="delivery_text_mobile">
                            {{__('bonuses_and_order_history.order_history.delivery_date')}}&#58;
                            <span class="delivery_text_bold_mobile">06.09.2024</span>
                        </p>
                        <p class="delivery_text_mobile">
                            {{__('bonuses_and_order_history.order_history.phone')}}&#46;
                            <span class="delivery_text_bold_mobile">0987453884</span>
                        </p>
                        <p class="delivery_text_mobile">
                            <span class="delivery_text_bold_mobile">{{__('bonuses_and_order_history.order_history.address')}}</span>
                        </p>
                    </div>
                </div>
            </template>
        </div>

        <!-- Conditional Opened Content mobile version-->
        <template x-if="openedTab === 3">
            <div class="order_details_mobile">
                <!-- Product Descriptions -->
                <div class="product_description_wrapper">
                    @include('components.cabinet.order_description')
                    @include('components.cabinet.order_description')
                    @include('components.cabinet.order_description')
                    @include('components.cabinet.order_description')
                </div>

                <!-- Cost and Delivery -->
                <div class="cost_box_wrapper_mobile">
                    <div class="cost_box_mobile">
                        <span class="cost_text_mobile">
                            {{__('bonuses_and_order_history.order_history.cost')}}
                        </span>

                        <span class="cost_text_bold_mobile">4200 &#8372;</span>
                    </div>

                    <div class="cost_box_mobile">
                        <div>
                             <span class="cost_text_mobile">
                            {{__('bonuses_and_order_history.order_history.delivery')}}
                            </span>
                        </div>

                        <div class="delivery_cost_box_mobile">
                            <div>
                                <div class="new_post_text">
                                   <span >
                                    {{__('bonuses_and_order_history.order_history.new_post')}}
                                    </span>
                                </div>

                                <div class="new_post_nearly_text">
                                   <span >
                                        &#40;{{__('bonuses_and_order_history.order_history.nearly')}} 70 &#8372;&#41;
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cost_box_mobile">
                        <span class="cost_text_mobile">
                            {{__('bonuses_and_order_history.order_history.total')}}
                        </span>

                        <span class="cost_text_bold_mobile">4270 &#8372;</span>
                    </div>
                </div>
            </div>
        </template>
    </div>
</div>
