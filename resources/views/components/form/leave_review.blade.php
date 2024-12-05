<form name="leave_review" action="" method="POST" class="form_leave_review">
   <div class="input_wrapper">
       <input type="text" name="author_name" id="author_name"  class="input_leave_review"
              placeholder="{{__('product.leave_review.name')}}" required>
       <input type="email" name="author_email" id="author_email" pattern=".+@example\.com" class="input_leave_review"
               placeholder="E-mail" size="30" required />
   </div>


    <textarea  rows="7" cols="20" name="review" id="review"
               placeholder="{{__('product.leave_review.textarea_review')}}" required>
    </textarea>

    <div class="rate_and_submit">
        <div class="rate" i>
            <div class="review_rate_box">
                <span>{{__('product.leave_review.rate_product')}}&#58;</span>
            </div>

            <div class="star_red_rating_box">
                <img src="{{ asset('storage/images/icons/ph_star-red.svg') }}" alt="star" class="star_red_img">
                <img src="{{ asset('storage/images/icons/ph_star-red.svg') }}" alt="star" class="star_red_img">
                <img src="{{ asset('storage/images/icons/ph_star-red.svg') }}" alt="star" class="star_red_img">
                <img src="{{ asset('storage/images/icons/ph_star-red.svg') }}" alt="star" class="star_red_img">
                <img src="{{ asset('storage/images/icons/ph_star-red.svg') }}" alt="star" class="star_red_img">
            </div>
        </div>

        <input type="submit" value="{{__('product.leave_review.send')}}"
               class="btn_send">
    </div>
</form>
