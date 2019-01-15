<section class="section-wrap bg-color">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="title-row">
                    <h2 class="section-title">Satisfied Customers</h2>
                    <p class="subtitle">Those who already tried it.</p>
                </div>

                <div id="owl-testimonials" class="owl-carousel owl-theme owl-carousel--arrows-outside owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-950px, 0px, 0px); transition: all 0s ease 0s; width: 3800px;">
                            @for ($i = 0; $i <= 5; $i++)
                                <div class="owl-item cloned" style="width: 435px; margin-right: 40px;">
                                    <div class="testimonial clearfix">
                                        <img src="{{asset('img/1.png')}}" alt="" class="testimonial__img">
                                        <div class="testimonial__info">
                                            <span class="testimonial__author">Joeby Ragpa</span>
                                            <span class="testimonial__company">DeoThemes</span>
                                        </div>
                                        <div class="testimonial__body">
                                            <p class="testimonial__text">“I have witnessed and admired the work for years.
                                                I highly
                                                recommend this work for anyone seeking to increase.”</p>
                                            <div class="testimonial__rating">
                                                <i class="ui-star"></i>
                                                <i class="ui-star"></i>
                                                <i class="ui-star"></i>
                                                <i class="ui-star"></i>
                                                <i class="ui-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 435px; margin-right: 40px;">
                                    <div class="testimonial clearfix">
                                        <img src="{{asset('img/2.png')}}" alt="" class="testimonial__img">
                                        <div class="testimonial__info">
                                            <span class="testimonial__author">Alexander Samokhin</span>
                                            <span class="testimonial__company">DeoThemes</span>
                                        </div>
                                        <div class="testimonial__body">
                                            <p class="testimonial__text">“Every detail has been taken care these team are
                                                realy amazing
                                                and talented! I will work only to help your sales goals.”</p>
                                            <div class="testimonial__rating">
                                                <i class="ui-star"></i>
                                                <i class="ui-star"></i>
                                                <i class="ui-star"></i>
                                                <i class="ui-star"></i>
                                                <i class="ui-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="ui-arrow-left"></i></button><button
                            type="button" role="presentation" class="owl-next"><i class="ui-arrow-right"></i></button></div>
                    <div class="owl-dots disabled"></div>
                </div> <!-- end owl-carousel -->
            </div>
        </div>
    </div>
</section>
