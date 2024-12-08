<a href="{{ route('product', ['locale' => App::currentLocale(), 'id' => $id])  }}" class="product_card">
    <div class="product_card_img_wrapper">
        <img src="{{ asset($image) }}" alt="photo" class="product_card_img">

        @if(isset($isFavorite) && !$isFavorite)
        <div class="image_overlay">
            <div class="product_card_buttons">
                <div class="product_card_button">

                    <div class="img_wrapper">
                        <svg width="24" height="24" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"
                             class="product_card_button_img">
                            <path d="M8.38011 11.3905L8.10006 11.4785V11.7721V21.0001C8.10006 22.601 9.39914 23.9001 11.0001 23.9001H12.2581H13.2237L12.5409 23.2172L11.6011 22.2774C11.3951 22.0711 11.2794 21.7916 11.2794 21.5001C11.2794 21.2086 11.3951 20.929 11.6011 20.7227L11.6021 20.7217C11.7038 20.6191 11.8249 20.5376 11.9582 20.4821C12.0916 20.4265 12.2346 20.3979 12.3791 20.3979C12.5235 20.3979 12.6666 20.4265 12.7999 20.4821C12.9333 20.5376 13.0543 20.6191 13.156 20.7217L13.1572 20.7229L16.6572 24.2229L17.4344 25.0001L16.6572 25.7772L13.1572 29.2772L13.1572 29.2772L13.1522 29.2823C13.0508 29.3874 12.9295 29.4713 12.7953 29.529C12.6611 29.5867 12.5168 29.6171 12.3707 29.6185C12.2247 29.6198 12.0798 29.592 11.9446 29.5368C11.8094 29.4815 11.6865 29.3999 11.5832 29.2967C11.4799 29.1934 11.3981 29.0707 11.3428 28.9355C11.2874 28.8004 11.2595 28.6555 11.2607 28.5095C11.2619 28.3634 11.2922 28.219 11.3497 28.0848C11.4073 27.9506 11.4911 27.8292 11.5961 27.7276L11.5961 27.7277L11.6009 27.7229L12.5409 26.7829L13.2237 26.1001H12.2581H11.0001C9.64745 26.1001 8.35025 25.5627 7.39381 24.6063C6.43738 23.6499 5.90006 22.3527 5.90006 21.0001V11.7721V11.4785L5.62001 11.3905C4.57107 11.0607 3.67485 10.3663 3.09361 9.43298C2.51237 8.49962 2.28452 7.38899 2.45132 6.30217C2.61811 5.21535 3.16853 4.22416 4.00292 3.50806C4.8373 2.79196 5.90051 2.39827 7.00006 2.39827C8.09961 2.39827 9.16281 2.79196 9.9972 3.50806C10.8316 4.22416 11.382 5.21535 11.5488 6.30217C11.7156 7.38899 11.4878 8.49962 10.9065 9.43298C10.3253 10.3663 9.42905 11.0607 8.38011 11.3905ZM18.8429 2.72291L18.8431 2.72308L18.8527 2.71275C18.9534 2.60468 19.0748 2.518 19.2098 2.45787C19.3447 2.39775 19.4904 2.36542 19.6381 2.36282C19.7858 2.36021 19.9325 2.38738 20.0694 2.44271C20.2064 2.49803 20.3308 2.58038 20.4353 2.68483C20.5397 2.78928 20.6221 2.91371 20.6774 3.05067C20.7327 3.18765 20.7599 3.33436 20.7573 3.48205C20.7547 3.62975 20.7224 3.77541 20.6622 3.91034C20.6021 4.04527 20.5154 4.16671 20.4074 4.26742L20.4072 4.26724L20.3972 4.27722L19.4572 5.21722L18.7744 5.90006H19.7401H21.0001C22.3527 5.90006 23.6499 6.43738 24.6063 7.39382C25.5627 8.35025 26.1001 9.64746 26.1001 11.0001V20.2281V20.5216L26.3801 20.6097C27.4291 20.9394 28.3253 21.6338 28.9065 22.5672C29.4877 23.5005 29.7156 24.6111 29.5488 25.698C29.382 26.7848 28.8316 27.776 27.9972 28.4921C27.1628 29.2082 26.0996 29.6019 25.0001 29.6019C23.9005 29.6019 22.8373 29.2082 22.0029 28.4921C21.1685 27.776 20.6181 26.7848 20.4513 25.698C20.2845 24.6111 20.5124 23.5005 21.0936 22.5672C21.6749 21.6338 22.5711 20.9394 23.62 20.6097L23.9001 20.5216V20.2281V11.0001C23.9001 9.39915 22.601 8.10006 21.0001 8.10006H19.7401H18.7744L19.4572 8.78291L20.3972 9.72291L20.397 9.72308L20.4074 9.73271C20.5154 9.83341 20.6021 9.95485 20.6622 10.0898C20.7224 10.2247 20.7547 10.3704 20.7573 10.5181C20.7599 10.6658 20.7327 10.8125 20.6774 10.9495C20.6221 11.0864 20.5397 11.2108 20.4353 11.3153C20.3308 11.4198 20.2064 11.5021 20.0694 11.5574C19.9325 11.6127 19.7858 11.6399 19.6381 11.6373C19.4904 11.6347 19.3447 11.6024 19.2098 11.5423C19.0748 11.4821 18.9534 11.3954 18.8527 11.2874L18.8529 11.2872L18.8429 11.2772L15.3429 7.77722L14.5657 7.00006L15.3429 6.22291L18.8429 2.72291ZM8.69711 8.69712C9.1472 8.24703 9.40006 7.63658 9.40006 7.00006C9.40006 6.36354 9.1472 5.75309 8.69711 5.30301C8.24703 4.85292 7.63658 4.60006 7.00006 4.60006C6.36354 4.60006 5.75309 4.85292 5.303 5.30301C4.85291 5.75309 4.60006 6.36354 4.60006 7.00006C4.60006 7.63658 4.85291 8.24703 5.303 8.69712C5.75309 9.14721 6.36354 9.40006 7.00006 9.40006C7.63658 9.40006 8.24703 9.14721 8.69711 8.69712ZM25.0001 27.4001C25.6366 27.4001 26.247 27.1472 26.6971 26.6971C27.1472 26.247 27.4001 25.6366 27.4001 25.0001C27.4001 24.3635 27.1472 23.7531 26.6971 23.303C26.247 22.8529 25.6366 22.6001 25.0001 22.6001C24.3635 22.6001 23.7531 22.8529 23.303 23.303C22.8529 23.7531 22.6001 24.3635 22.6001 25.0001C22.6001 25.6366 22.8529 26.247 23.303 26.6971C23.7531 27.1472 24.3635 27.4001 25.0001 27.4001Z" fill="none" stroke="none" stroke-width="0.8"/>
                        </svg>
                    </div>
                    <span class="product_card_button_text">{{ __('product-card.compare') }}</span>
                </div>
                <div class="product_card_button">
                    <div class="img_wrapper">
                        <svg width="24" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                             class="product_card_button_img">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.77048 4.42505C4.11148 5.18305 2.89648 6.98705 2.89648 9.13805C2.89648 11.335 3.79648 13.029 5.08448 14.481C6.14748 15.677 7.43349 16.669 8.68748 17.635C8.98615 17.865 9.28115 18.0944 9.57248 18.323C10.0985 18.738 10.5675 19.101 11.0205 19.366C11.4735 19.631 11.8365 19.751 12.1465 19.751C12.4565 19.751 12.8205 19.631 13.2725 19.366C13.7255 19.101 14.1945 18.738 14.7205 18.323C15.0118 18.0937 15.3068 17.8647 15.6055 17.636C16.8595 16.668 18.1455 15.677 19.2085 14.481C20.4975 13.029 21.3965 11.335 21.3965 9.13805C21.3965 6.98805 20.1815 5.18305 18.5225 4.42505C16.9105 3.68805 14.7445 3.88305 12.6865 6.02205C12.6165 6.09463 12.5326 6.15237 12.4399 6.1918C12.3471 6.23124 12.2473 6.25156 12.1465 6.25156C12.0457 6.25156 11.9459 6.23124 11.8531 6.1918C11.7603 6.15237 11.6764 6.09463 11.6065 6.02205C9.54848 3.88305 7.38248 3.68805 5.77048 4.42505ZM12.1465 4.46105C9.83448 2.39105 7.24548 2.10105 5.14648 3.06005C2.93248 4.07505 1.39648 6.42705 1.39648 9.13905C1.39648 11.804 2.50648 13.838 3.96348 15.478C5.12948 16.791 6.55648 17.89 7.81748 18.86C8.10415 19.08 8.37948 19.294 8.64348 19.502C9.15648 19.906 9.70648 20.336 10.2635 20.662C10.8205 20.988 11.4565 21.252 12.1465 21.252C12.8365 21.252 13.4725 20.987 14.0295 20.662C14.5875 20.336 15.1365 19.906 15.6495 19.502C15.9135 19.294 16.1888 19.08 16.4755 18.86C17.7355 17.89 19.1635 16.79 20.3295 15.478C21.7865 13.838 22.8965 11.804 22.8965 9.13905C22.8965 6.42705 21.3615 4.07505 19.1465 3.06205C17.0475 2.10205 14.4585 2.39205 12.1465 4.46105Z" fill="black"/>
                        </svg>
                    </div>
                    <span class="product_card_button_text">{{ __('product-card.to_favorite') }}</span>
                </div>
                <div class="product_card_button">
                    <div class="img_wrapper">
                        <svg width="24" height="24" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"
                             class="product_card_button_img">
                            <path d="M7.15464 11.6384C7.15464 11.4323 7.07278 11.2346 6.92706 11.0889C6.78133 10.9432 6.58369 10.8613 6.37761 10.8613C6.17153 10.8613 5.97389 10.9432 5.82817 11.0889C5.68245 11.2346 5.60059 11.4323 5.60059 11.6384V15.7825C5.60059 15.9886 5.68245 16.1862 5.82817 16.3319C5.97389 16.4777 6.17153 16.5595 6.37761 16.5595C6.58369 16.5595 6.78133 16.4777 6.92706 16.3319C7.07278 16.1862 7.15464 15.9886 7.15464 15.7825V11.6384ZM14.6659 10.8613C14.872 10.8613 15.0696 10.9432 15.2154 11.0889C15.3611 11.2346 15.4429 11.4323 15.4429 11.6384V15.7825C15.4429 15.9886 15.3611 16.1862 15.2154 16.3319C15.0696 16.4777 14.872 16.5595 14.6659 16.5595C14.4598 16.5595 14.2622 16.4777 14.1165 16.3319C13.9708 16.1862 13.8889 15.9886 13.8889 15.7825V11.6384C13.8889 11.4323 13.9708 11.2346 14.1165 11.0889C14.2622 10.9432 14.4598 10.8613 14.6659 10.8613ZM11.2988 11.6384C11.2988 11.4323 11.2169 11.2346 11.0712 11.0889C10.9255 10.9432 10.7278 10.8613 10.5218 10.8613C10.3157 10.8613 10.118 10.9432 9.97232 11.0889C9.8266 11.2346 9.74474 11.4323 9.74474 11.6384V15.7825C9.74474 15.9886 9.8266 16.1862 9.97232 16.3319C10.118 16.4777 10.3157 16.5595 10.5218 16.5595C10.7278 16.5595 10.9255 16.4777 11.0712 16.3319C11.2169 16.1862 11.2988 15.9886 11.2988 15.7825V11.6384Z" fill="none"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.9858 1.76805C15.4927 1.57535 14.9405 1.54323 14.2328 1.53805C14.0859 1.22773 13.8538 0.965515 13.5637 0.781921C13.2735 0.598328 12.9372 0.500901 12.5938 0.500977H8.44968C8.10643 0.500808 7.77018 0.59808 7.48004 0.781484C7.1899 0.964887 6.95778 1.22689 6.81067 1.53701C6.10202 1.54323 5.55085 1.57535 5.05769 1.76805C4.46899 1.99833 3.957 2.38969 3.5803 2.89733C3.20008 3.4081 3.02084 4.06495 2.77634 4.96733L2.12571 7.35333C1.71775 7.55836 1.36036 7.85134 1.07931 8.21117C0.434893 9.03689 0.320929 10.0201 0.435929 11.1473C0.546785 12.2414 0.891785 13.6193 1.32278 15.3433L1.34971 15.4541C1.62323 16.544 1.8439 17.4298 2.10706 18.1209C2.38161 18.842 2.73075 19.4325 3.30472 19.8811C3.87972 20.3297 4.5376 20.5234 5.30323 20.6167C6.03675 20.7037 6.95053 20.7037 8.07463 20.7037H12.9689C14.093 20.7037 15.0057 20.7037 15.7403 20.6156C16.5069 20.5245 17.1638 20.3297 17.7378 19.8801C18.3128 19.4325 18.6609 18.842 18.9354 18.1209C19.1996 17.4298 19.4203 16.544 19.6928 15.4531L19.7207 15.3443C20.1517 13.6193 20.4957 12.2414 20.6076 11.1483C20.7215 10.0191 20.6076 9.03689 19.9632 8.21117C19.6824 7.85146 19.3254 7.55849 18.9178 7.35333L18.2672 4.96733C18.0216 4.06495 17.8424 3.4081 17.4632 2.8963C17.0864 2.38903 16.5744 1.99805 15.9858 1.76805ZM5.62337 3.2154C5.8513 3.1263 6.12688 3.1004 6.8117 3.09314C7.10387 3.70441 7.72756 4.12711 8.44864 4.12711H12.5928C13.3159 4.12711 13.9396 3.70441 14.2318 3.09314C14.9166 3.1004 15.1922 3.1263 15.4201 3.2154C15.7372 3.33972 16.0128 3.55004 16.2158 3.82355C16.3982 4.06909 16.5049 4.41202 16.8064 5.51747L17.1731 6.86121C16.0977 6.7172 14.7094 6.7172 12.9844 6.7172H8.05806C6.33409 6.7172 4.9458 6.7172 3.87039 6.86121L4.23715 5.51747C4.5376 4.41202 4.64535 4.06909 4.82769 3.82355C5.03056 3.55015 5.30631 3.33939 5.62337 3.2154ZM8.44968 2.05503C8.38099 2.05503 8.31511 2.08232 8.26653 2.1309C8.21796 2.17947 8.19067 2.24535 8.19067 2.31404C8.19067 2.38274 8.21796 2.44862 8.26653 2.49719C8.31511 2.54576 8.38099 2.57305 8.44968 2.57305H12.5938C12.6625 2.57305 12.7284 2.54576 12.777 2.49719C12.8256 2.44862 12.8528 2.38274 12.8528 2.31404C12.8528 2.24535 12.8256 2.17947 12.777 2.1309C12.7284 2.08232 12.6625 2.05503 12.5938 2.05503H8.44968ZM2.30494 9.16743C2.594 8.79757 3.05089 8.54892 3.99368 8.41216C4.95823 8.27333 6.26571 8.27126 8.12333 8.27126H12.9202C14.7778 8.27126 16.0842 8.27333 17.0488 8.41216C17.9926 8.54892 18.4495 8.79757 18.7386 9.16847C19.0276 9.53833 19.1582 10.0408 19.0608 10.9898C18.9624 11.9596 18.6474 13.2277 18.1967 15.0304C17.9097 16.1783 17.7098 16.974 17.4839 17.5687C17.2643 18.1426 17.0498 18.4462 16.7815 18.6565C16.5132 18.8658 16.1661 18.9994 15.5559 19.073C14.9239 19.1486 14.1054 19.1497 12.9202 19.1497H8.12333C6.9381 19.1497 6.1186 19.1486 5.48765 19.073C4.87639 19.0005 4.53035 18.8658 4.26202 18.6565C3.99265 18.4462 3.77819 18.1426 3.55958 17.5687C3.33373 16.974 3.13377 16.1783 2.84575 15.0304C2.39611 13.2277 2.08012 11.9596 1.9817 10.9898C1.88535 10.0408 2.01589 9.5373 2.30494 9.16743Z" fill="none"/>
                        </svg>

                    </div>

                    <span class="product_card_button_text">{{ __('product-card.buy_in_1_click') }}</span>
                </div>
            </div>
        </div>
        @endif
    </div>
    <div class="card_describe_product">
        <div class="product_price_wrapper">
            @if($oldPrice && $newPrice)
                <span class="old_price">{{ $oldPrice }} &#8372;</span>
                <span class="new_price">₴ {{ $newPrice }}</span>
            @elseif($oldPrice)
                <span class="single_price">{{ $oldPrice }} &#8372;</span>
            @endif
        </div>
        <span class="product_title">{{ $title }}</span>
    </div>

    @if($label === 'Top')
        <span class="product_label top-label @if(isset($isFavorite) && $isFavorite) favorite-label @endif">TOP</span>
    @elseif($label === 'Sale')
        <span class="product_label sale-label @if(isset($isFavorite) && $isFavorite) favorite-label @endif">Sale</span>
    @elseif($label === 'New')
        <span class="product_label new-label @if(isset($isFavorite) && $isFavorite) favorite-label @endif">New</span>
    @endif

    @if(isset($isFavorite) && $isFavorite)
        <div class="favorite">
            <img src="{{ asset('/storage/images/icons/heart_outline.svg') }}" alt="favorite" class="favorite_img">
        </div>
    @endif
</a>
