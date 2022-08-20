@extends("Frontend.layout")
@section('content')

<!-- start revolution slider -->
        <section class="p-5 example home-startup bg-dark-slate-blue">
            <article class="content">
                <div id="rev_slider_26_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="mask-showcase" data-source="gallery">
                	
                </div>
            </article>
        </section>
<!-- end revolution slider -->

	<!-- start section -->
        <section>
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2">
                    <!-- start feature box item -->
                    <div class="col md-margin-50px-bottom sm-margin-30px-bottom">
                        <div class="feature-box text-center">
                            <div class="feature-box-icon">
                                <i class="line-icon-Geo2-Love icon-extra-medium text-fast-blue margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">Address</span>
                                <p class="d-inline-block w-70 lg-w-90 md-w-60 sm-w-80 xs-w-100">Chah Gopal Wala, Ward # 5, Layyah</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col md-margin-50px-bottom sm-margin-30px-bottom">
                        <div class="feature-box text-center">
                            <div class="feature-box-icon">
                                <i class="line-icon-Headset icon-extra-medium text-fast-blue margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">Let's Talk</span>
                                <p>Call/SMS: +92 308 1312527<br>Call: +92 316 6356700</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col xs-margin-30px-bottom">
                        <div class="feature-box text-center">
                            <div class="feature-box-icon">
                                <i class="line-icon-Mail-Read icon-extra-medium text-fast-blue margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">E-mail Us</span>
                                <p><a href="mailto:codewithzahid.dev@gmail.com" class="text-sky-blue-hover">codewithzahid.dev@gmail.com</a><br><a href="mailto:zahidjakhar2370@gmail.com" class="text-light-blue text-sky-blue-hover">zahidjakhar2370@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                    <!-- start feature box item -->
                    <div class="col">
                        <div class="feature-box text-center">
                            <div class="feature-box-icon">
                                <i class="line-icon-Information icon-extra-medium text-fast-blue margin-30px-bottom md-margin-15px-bottom sm-margin-10px-bottom"></i>
                            </div>
                            <div class="feature-box-content last-paragraph-no-margin">
                                <span class="alt-font font-weight-500 margin-10px-bottom d-block text-extra-dark-gray text-small text-uppercase">Customer Services</span>
                                <p class="d-inline-block w-70 lg-w-90 md-w-60 sm-w-80 xs-w-100">Support Chat Available</p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                </div>
            </div>
        </section>
        <!-- end section -->

<br>


        <!-- start section -->
        <section class="bg-light-gray overflow-visible pt-md-0">
            <div class="container">
                <div class="z-index-6 position-relative overlap-section-three-fourth bg-white box-shadow-large padding-8-rem-all md-padding-5-rem-all xs-padding-4-rem-tb xs-padding-2-rem-lr wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="row justify-content-center">
                        <div class="col-12 col-xl-6 col-lg-7 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom">
                            <span class="alt-font letter-spacing-minus-1-half text-extra-medium d-block margin-5px-bottom">Fill out the form and we'll be in touch soon!</span>
                            <h4 class="alt-font font-weight-600 text-extra-dark-gray">How we can help you?</h4>
                        </div>
                        <div class="col-12">
                            <!-- start contact form -->
                            <form action="{{URL::to('save-contact-message')}}" method="POST">
                                @csrf
                                <div class="row row-cols-1 row-cols-md-2">
                                    <div class="col margin-4-rem-bottom sm-margin-25px-bottom">
                                        <input class="medium-input bg-white margin-25px-bottom required" type="text" name="name" placeholder="Your name">
                                        <input class="medium-input bg-white margin-25px-bottom required" type="email" name="email" placeholder="Your email address">
                                        <input class="medium-input bg-white mb-0" type="tel" name="mobile_no" placeholder="Your mobile">
                                    </div>
                                    <div class="col margin-4-rem-bottom sm-margin-20px-bottom">
                                        <textarea class="medium-textarea bg-white h-200px" rows="6" name="message" placeholder="Your message"></textarea>
                                    </div>
                                    <div class="col text-center text-md-end">
                                        <input type="submit" value="Send Message" class="btn btn-medium btn-gradient-light-purple-light-orange mb-0">
                                        
                                    </div>
                                </div>
                                <!-- <div class="form-results d-none"></div> -->
                            </form>
                            <!-- end contact form -->
                        </div>
                    </div>
                </div>
                <!-- <div class="row justify-content-center wow animate__fadeIn">
                    <div class="col-12 col-lg-10 d-flex flex-row align-items-center justify-content-center text-center margin-7-half-rem-top">
                        <span class="col-auto w-40px h-1px bg-dark-gray opacity-3"></span>
                        <div class="alt-font font-weight-500 text-large text-extra-dark-gray padding-20px-lr">We like to talk and on the strength of that you are invited for a coffee</div>
                        <span class="col-auto w-40px h-1px bg-dark-gray opacity-3"></span>
                    </div>
                </div> -->
            </div>
        </section>
        <!-- end section -->


        <!-- start map section -->
        <section class="no-padding-tb wow animate__fadeIn">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-0">
                        <div class="map-style-3 h-500px xs-h-300px">
                        	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3421.0398721740567!2d70.94055891461677!3d30.969369481241287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3925a7a2c40016dd%3A0xfd117ea3e096687a!2sCode%20With%20Zahid!5e0!3m2!1sen!2s!4v1642539436808!5m2!1sen!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                            <!-- <iframe class="w-100 h-100 filter-grayscale-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.843821917424!2d144.956054!3d-37.817127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1427947693651"></iframe> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end map section -->

@endsection