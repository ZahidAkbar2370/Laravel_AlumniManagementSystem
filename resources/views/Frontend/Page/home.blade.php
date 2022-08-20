@extends("Frontend.layout")
@section('content')




        <!-- start revolution slider -->
        <section class="p-0 example home-startup bg-dark-slate-blue">
            <article class="content">
                <div id="rev_slider_26_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="mask-showcase" data-source="gallery">
                    <!-- Start revolution slider 5.4.1 fullscreen mode -->
                    <div id="rev_slider_26_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                        <ul> 
                            <!-- start slide 01 -->
                            <li data-index="rs-73" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="http://works.themepunch.com/revolution_5_3/wp-content/"  data-rotate="0"  data-saveperformance="off"  data-title="01" data-param1="01" data-description="">
                                <!-- main image -->
                                <img src="{{asset('cover2.jpeg')}}" alt="" data-bgcolor="#262b32" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>

                                <div class="overlay-bg bg-extra-dark-gray" style="opacity: 0.7;"></div> 

                                <!-- main text layer -->
                                <div class="tp-caption tp-resizeme alt-font text-white font-weight-600 text-center"
                                     id="slide-411-layer-01"
                                     data-frames='[{"delay":200,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                     data-type="text"
                                     data-whitespace="nowrap"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-115','-65']" 
                                     data-width="auto"
                                     data-height="auto"
                                     data-fontsize="['70','53','60','35']"
                                     data-lineheight="['70','59','70','39']"
                                     data-letterspacing="['-2','-1','-1','-1']"
                                     data-responsive="off"
                                     data-responsive_offset="off"
                                     data-paddingtop="['0','0','0','0']"
                                     data-paddingbottom="['15','8','8','8']"
                                     data-paddingright="['0','0','0','0']"
                                     data-paddingleft="['0','0','0','0']"
                                     style="text-shadow: 0 0 20px rgba(0,0,0,0.3);">Welcome To Fedral Urdu University <br>(FUUAST) Islamabad.</div>

                                <!-- small text layer -->
                                {{-- <div class="tp-caption tp-resizeme alt-font text-white font-weight-300 text-center"
                                     id="slide-411-layer-02" 
                                     data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                     data-type="text"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['65','100','-5','15']" 
                                     data-width="auto"
                                     data-height="auto"
                                     data-fontsize="['19','16','19','14']"
                                     data-lineheight="['28','14','23','20']"
                                     data-letterspacing="['0.5','0.5','0.5','0.5']"
                                     data-responsive="off"
                                     data-responsive_offset="on">The best Plateform to Learn Free Programming Courses</div>  --}}

                                <!-- btn layer -->
                                {{-- <a class="tp-caption tp-resizeme rs-btn btn btn-rounded d-flex align-items-center justify-content-center"
                                   href="{{url('registration')}}"
                                   id="slide-411-layer-03" 
                                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                   data-y="['middle','middle','middle','middle']" data-voffset="['152','130','82','80']"
                                   data-whitespace="nowrap"
                                   data-type="button"
                                   data-responsive="off"
                                   data-responsive_offset="off"
                                   data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                   data-textAlign="['center','center','center','center']"
                                   data-paddingtop="['8','8','8','8']"
                                   data-paddingbottom="['8','8','8','8']"
                                   data-paddingright="['7','7','7','7']"
                                   data-paddingleft="['34','34','34','34']"
                                   style="background-color: #00B057; color: #fff; font-size: 15px;">Get started now 
                                    <div style="display: flex; justify-content: center; align-items: center; width: 38px; height: 38px; border-radius: 50%; background: #007C3E; margin-left: 19px;">
                                        <i class="fas fa-play" style="color: #fff; font-size: 12px; line-height: 15px; margin-top: 2px; margin-left: 3px;"></i>
                                    </div>
                                </a>          --}}
                            </li>
                            <!-- end slide 01 -->
                            <!-- start slide 02 -->
                            <li data-index="rs-74" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="http://works.themepunch.com/revolution_5_3/wp-content/"  data-rotate="0"  data-saveperformance="off"  data-title="02" data-param1="02" data-description="">
                                <!-- main image -->
                                <img src="{{asset('cover3.jpg')}}" alt="" data-bgcolor="#262b32" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>

                                <div class="overlay-bg bg-extra-dark-gray" style="opacity: 0.5;"></div> 

                                <!-- main text layer -->
                                {{-- <div class="tp-caption tp-resizeme alt-font text-white font-weight-600 text-center"
                                     id="slide-411-layer-04" 
                                     data-frames='[{"delay":200,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                     data-type="text"
                                     data-whitespace="nowrap"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-115','-65']" 
                                     data-width="auto"
                                     data-height="auto"
                                     data-fontsize="['70','53','60','35']"
                                     data-lineheight="['70','59','70','39']"
                                     data-letterspacing="['-2','-1','-1','-1']"
                                     data-responsive="off"
                                     data-responsive_offset="off"
                                     data-paddingtop="['0','0','0','0']"
                                     data-paddingbottom="['15','8','8','8']"
                                     data-paddingright="['0','0','0','0']"
                                     data-paddingleft="['0','0','0','0']"
                                     style="text-shadow: 0 0 20px rgba(0,0,0,0.3);">Schooling doesn't assure employment<br>but skill does.</div> --}}

                                <!-- small text layer -->
                                {{-- <div class="tp-caption tp-resizeme alt-font text-white font-weight-300 text-center"
                                     id="slide-411-layer-05" 
                                     data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                     data-type="text"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['65','100','-5','15']" 
                                     data-width="auto"
                                     data-height="auto"
                                     data-fontsize="['19','13','19','14']"
                                     data-lineheight="['28','14','23','20']"
                                     data-letterspacing="['0.5','0.5','0.5','0.5']"
                                     data-responsive="off"
                                     data-responsive_offset="on">Connect With Our Support Time For Discussion.</div>  --}}

                                <!-- btn layer -->
                                {{-- <a class="tp-caption tp-resizeme rs-btn btn btn-rounded d-flex align-items-center justify-content-center"
                                   href="{{url('registration')}}"
                                   id="slide-411-layer-06" 
                                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                   data-y="['middle','middle','middle','middle']" data-voffset="['152','130','82','80']"
                                   data-whitespace="nowrap"
                                   data-type="button"
                                   data-responsive="off"
                                   data-responsive_offset="off"
                                   data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                   data-textAlign="['center','center','center','center']"
                                   data-paddingtop="['8','8','8','8']"
                                   data-paddingbottom="['8','8','8','8']"
                                   data-paddingright="['7','7','7','7']"
                                   data-paddingleft="['34','34','34','34']"
                                   style="background-color: #00B057; color: #fff; font-size: 15px;">Get started now 
                                    <div style="display: flex; justify-content: center; align-items: center; width: 38px; height: 38px; border-radius: 50%; background: #007C3E; margin-left: 19px;">
                                        <i class="fas fa-play" style="color: #fff; font-size: 12px; line-height: 15px; margin-top: 2px; margin-left: 3px;"></i>
                                    </div>
                                </a>        --}}
                            </li>

                            <li data-index="rs-74" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="http://works.themepunch.com/revolution_5_3/wp-content/"  data-rotate="0"  data-saveperformance="off"  data-title="02" data-param1="02" data-description="">
                                <!-- main image -->
                                <img src="{{asset('cover4.jpg')}}" alt="" data-bgcolor="#262b32" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>

                                <div class="overlay-bg bg-extra-dark-gray" style="opacity: 0.5;"></div> 

                                <!-- main text layer -->
                                {{-- <div class="tp-caption tp-resizeme alt-font text-white font-weight-600 text-center"
                                     id="slide-411-layer-04" 
                                     data-frames='[{"delay":200,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                     data-type="text"
                                     data-whitespace="nowrap"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-115','-65']" 
                                     data-width="auto"
                                     data-height="auto"
                                     data-fontsize="['70','53','60','35']"
                                     data-lineheight="['70','59','70','39']"
                                     data-letterspacing="['-2','-1','-1','-1']"
                                     data-responsive="off"
                                     data-responsive_offset="off"
                                     data-paddingtop="['0','0','0','0']"
                                     data-paddingbottom="['15','8','8','8']"
                                     data-paddingright="['0','0','0','0']"
                                     data-paddingleft="['0','0','0','0']"
                                     style="text-shadow: 0 0 20px rgba(0,0,0,0.3);">Schooling doesn't assure employment<br>but skill does.</div> --}}

                                <!-- small text layer -->
                                {{-- <div class="tp-caption tp-resizeme alt-font text-white font-weight-300 text-center"
                                     id="slide-411-layer-05" 
                                     data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                     data-type="text"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['65','100','-5','15']" 
                                     data-width="auto"
                                     data-height="auto"
                                     data-fontsize="['19','13','19','14']"
                                     data-lineheight="['28','14','23','20']"
                                     data-letterspacing="['0.5','0.5','0.5','0.5']"
                                     data-responsive="off"
                                     data-responsive_offset="on">Connect With Our Support Time For Discussion.</div>  --}}

                                <!-- btn layer -->
                                {{-- <a class="tp-caption tp-resizeme rs-btn btn btn-rounded d-flex align-items-center justify-content-center"
                                   href="{{url('registration')}}"
                                   id="slide-411-layer-06" 
                                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                   data-y="['middle','middle','middle','middle']" data-voffset="['152','130','82','80']"
                                   data-whitespace="nowrap"
                                   data-type="button"
                                   data-responsive="off"
                                   data-responsive_offset="off"
                                   data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                   data-textAlign="['center','center','center','center']"
                                   data-paddingtop="['8','8','8','8']"
                                   data-paddingbottom="['8','8','8','8']"
                                   data-paddingright="['7','7','7','7']"
                                   data-paddingleft="['34','34','34','34']"
                                   style="background-color: #00B057; color: #fff; font-size: 15px;">Get started now 
                                    <div style="display: flex; justify-content: center; align-items: center; width: 38px; height: 38px; border-radius: 50%; background: #007C3E; margin-left: 19px;">
                                        <i class="fas fa-play" style="color: #fff; font-size: 12px; line-height: 15px; margin-top: 2px; margin-left: 3px;"></i>
                                    </div>
                                </a>        --}}
                            </li>
                            <!-- end slide 02 -->
                            <!-- start slide 03 -->
                            <!--  <li data-index="rs-75" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="1500"  data-thumb="http://works.themepunch.com/revolution_5_3/wp-content/"  data-rotate="0"  data-saveperformance="off"  data-title="03" data-param1="03" data-description=""> -->
                                <!-- main image -->
                                <!--<img src="https://via.placeholder.com/1920x1100" alt="" data-bgcolor="#262b32" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>

                                <div class="overlay-bg bg-extra-dark-gray" style="opacity: 0.5;"></div> -->

                                <!-- main text layer -->
                              <!--  <div class="tp-caption tp-resizeme alt-font text-white font-weight-600 text-center"
                                     id="slide-411-layer-07" 
                                     data-frames='[{"delay":200,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                     data-type="text"
                                     data-whitespace="nowrap"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-115','-65']" 
                                     data-width="auto"
                                     data-height="auto"
                                     data-fontsize="['70','53','60','35']"
                                     data-lineheight="['70','59','70','39']"
                                     data-letterspacing="['-2','-1','-1','-1']"
                                     data-responsive="off"
                                     data-responsive_offset="off"
                                     data-paddingtop="['0','0','0','0']"
                                     data-paddingbottom="['15','8','8','8']"
                                     data-paddingright="['0','0','0','0']"
                                     data-paddingleft="['0','0','0','0']"
                                     style="text-shadow: 0 0 20px rgba(0,0,0,0.3);">Delivering creative<br> digital products</div>-->

                                <!-- small text layer -->
                              <!--  <div class="tp-caption tp-resizeme alt-font text-white font-weight-300 text-center"
                                     id="slide-411-layer-08" 
                                     data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                     data-type="text"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                     data-y="['middle','middle','middle','middle']" data-voffset="['65','100','-5','15']" 
                                     data-width="auto"
                                     data-height="auto"
                                     data-fontsize="['19','13','19','14']"
                                     data-lineheight="['28','14','23','20']"
                                     data-letterspacing="['0.5','0.5','0.5','0.5']"
                                     data-responsive="off"
                                     data-responsive_offset="on">The best way to promote your business</div>--> 

                                <!-- btn layer -->
                                <!--<a class="tp-caption tp-resizeme rs-btn btn btn-rounded d-flex align-items-center justify-content-center"
                                   href="contact-us-classic.html"
                                   id="slide-411-layer-09" 
                                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                   data-y="['middle','middle','middle','middle']" data-voffset="['152','130','82','80']"
                                   data-whitespace="nowrap"
                                   data-type="button"
                                   data-responsive="off"
                                   data-responsive_offset="off"
                                   data-frames='[{"delay":1200,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[-100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                   data-textAlign="['center','center','center','center']"
                                   data-paddingtop="['8','8','8','8']"
                                   data-paddingbottom="['8','8','8','8']"
                                   data-paddingright="['7','7','7','7']"
                                   data-paddingleft="['34','34','34','34']"
                                   style="background-color: #00B057; color: #fff; font-size: 15px;">Get started now 
                                    <div style="display: flex; justify-content: center; align-items: center; width: 38px; height: 38px; border-radius: 50%; background: #007C3E; margin-left: 19px;">
                                        <i class="fas fa-play" style="color: #fff; font-size: 12px; line-height: 15px; margin-top: 2px; margin-left: 3px;"></i>
                                    </div>
                                </a>
                            </li> -->
                            <!-- end slide 01 -->
                        </ul>
                    </div>
                </div>
            </article>
        </section>
        <!-- end revolution slider -->



        {{-- <div class="col alt-font font-weight-600 text-extra-dark-gray padding-six-tb overflow-hidden">
            <h4 class="mb-0 animate__flash wow text-center">Welcome To Code With Zahid</h4>
        </div> --}}



        <!-- start section -->
        <section id="position-open" class="wow animate__fadeIn" style="padding-top: 70px">
            <div class="container">
                <div class="row justify-content">
                    <div class="col-12 col-lg-5 col-sm-7">
                        <a href="{{ url('departments') }}"><h5 class="alt-font font-weight-500 text-extra-dark-gray d-inline-block letter-spacing-minus-1-half">Departments</h5></a>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center">

                    @if(!empty($departments))
                        @foreach($departments as $department)
                    <!-- start interactive banner item -->
                    <div style="margin-top: 20px !important" class="col position-relative interactive-banners-style-12 text-center mb-5 mt-6 md-margin-5-half-rem-bottom sm-margin-7-half-rem-bottom xs-margin-6-half-rem-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                        <figure>
                            <div class="interactive-banners-image bg-extra-dark-gray border-radius-6px">
                                <img alt="our team 02" src="{{asset('Images/Offering/laravelvuereact.jpeg')}}">
                                <div class="interactive-banners-details align-items-center justify-content-center d-flex flex-column">
                                    <a href="https://www.fuuastisb.edu.pk/" target="_blank" class="bg-white border-radius-100 w-100px h-100px d-flex align-items-center justify-content-center flex-column padding-20px-all box-shadow-extra-large">
                                        <i class="ti-user d-block text-large text-fast-blue margin-10px-bottom"></i>
                                        <span class="alt-font font-weight-500 text-small line-height-14px text-extra-dark-gray text-uppercase w-100">Apply now</span>
                                    </a>
                                </div>
                            </div>
                            <figcaption class="text-center">
                                <div class="bg-white d-inline-block border-radius-4px padding-three-tb padding-20px-lr w-70 box-shadow-medium alt-font font-weight-500 text-uppercase">
                                    <span class="text-extra-dark-gray text-uppercase text-medium">{{ $department->department_name }}</span>
                                    <span class="alt-font text-extra-small d-block margin-5px-bottom">{{ $department->hod_name }}</span>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end interactive banner item -->
                    @endforeach
                    @endif

                    <!-- start interactive banner item -->
                    {{-- <div class="col position-relative interactive-banners-style-12 text-center md-margin-5-half-rem-bottom sm-margin-7-half-rem-bottom xs-margin-6-half-rem-bottom wow animate__fadeIn" data-wow-delay="0.4s">
                        <figure>
                            <div class="interactive-banners-image bg-extra-dark-gray border-radius-6px">
                                <img alt="our team 02" src="{{asset('Images/Offering/wordpresscsharp.jpeg')}}">
                                <div class="interactive-banners-details align-items-center justify-content-center d-flex flex-column">
                                    <a href="https://www.fuuastisb.edu.pk/" target="_blank" class="bg-white border-radius-100 w-100px h-100px d-flex align-items-center justify-content-center flex-column padding-20px-all box-shadow-extra-large">
                                        <i class="ti-user d-block text-large text-fast-blue margin-10px-bottom"></i>
                                        <span class="alt-font font-weight-500 text-small line-height-14px text-extra-dark-gray text-uppercase w-100">Apply now</span>
                                    </a>
                                </div>
                            </div>
                            <figcaption class="text-center">
                                <div class="bg-white d-inline-block border-radius-4px padding-three-tb padding-20px-lr w-70 box-shadow-medium alt-font font-weight-500 text-uppercase">
                                    <span class="text-extra-dark-gray text-uppercase text-medium">Applied Physics</span>
                                    <span class="alt-font text-extra-small d-block margin-5px-bottom">4 Year</span>
                                </div>
                            </figcaption>
                        </figure>
                    </div> --}}
                    <!-- end interactive banner item -->
                </div>
            </div>
        </section>
        <!-- end section -->




 <!-- start section -->
        <section class="big-section position-relative wow animate__fadeIn">
            <div class="opacity-full bg-gradient-fast-blue-purple"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-7 col-lg-8 col-md-10 position-relative text-center padding-five-tb">
                        <h3 class="alt-font text-white font-weight-600 margin-35px-bottom">Code With Zahid</h3>
                        <p class="text-white opacity-7 alt-font text-large w-80 mx-auto line-height-32px margin-45px-bottom sm-w-100">CWZ is Free Online Institute. CWZ Offering Online Free Courses For Students.</p>
                        <a href="{{url('registration')}}" class="btn btn-large btn-white btn-rounded btn-box-shadow">Get Started Now</a>
                    </div>
                </div>
            </div>
            <div class="bg-video-wrapper">
                <iframe allow="autoplay" src="https://www.youtube.com/embed/sU3FkzUKHXU?rel=0&amp;showinfo=0&background=1&autoplay=1&loop=1&mute=1&playlist=sU3FkzUKHXU" frameborder="0" mozallowfullscreen allowfullscreen></iframe>
            </div>
        </section>
        <!-- end section -->



<!-- start section -->
        {{-- <section class="overflow-visible"  style="margin-top: 0px !important;padding: 0px !important;">
            <div class="container">
                <div class="overlap-section">
                    <div class="bg-neon-orange border-radius-6px padding-4-half-rem-tb padding-4-rem-lr sm-no-padding-lr wow animate__pulse">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-xl-3 text-center text-xl-start">
                                <span class="text-extra-medium alt-font text-extra-dark-gray">Seats are filling up fast!</span>
                                <h6 class="alt-font font-weight-600 text-extra-dark-gray letter-spacing-minus-1-half m-0">Not yet registered?</h6>
                            </div>
                            <!-- start countdown -->
                            <div class="col-10 col-sm-12 col-xl-6 col-md-auto text-center text-xl-end md-margin-30px-bottom xs-margin-15px-bottom">
                                <div data-enddate="2022/1/31 23:59:00" class="countdown countdown-style-03 text-center alt-font d-inline-block"></div>
                            </div>
                            <!-- end countdown -->
                            <div class="col-12 col-lg-3 text-center">
                                <a href="{{url('registration')}}" class="btn btn-medium btn-dark-gray btn-fancy btn-round-edge section-link">Apply Online Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- end section -->



         <!-- start section -->
         <section class="border-top border-color-medium-gray bg-light-gray">
            <div class="container">
                <div class="row margin-5-half-rem-bottom align-items-center">
                    <div class="col-12 col-lg-6 col-md-7 text-center text-md-start sm-margin-10px-bottom wow animate__fadeIn" data-wow-delay="0.1s">
                        <h5 class="alt-font font-weight-600 text-extra-dark-gray letter-spacing-minus-1px text-uppercase margin-5px-bottom">Featured Events</h5>
                        <p class="m-0 d-block">Best Rated & More Searched</p>
                    </div>
                    <div class="col-12 col-lg-6 col-md-5 text-center text-md-end wow animate__fadeIn" data-wow-delay="0.2s">
                        <a href="{{ url('events') }}" class="btn btn-link btn-extra-large text-extra-dark-gray text-extra-dark-gray-hover">All Events</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 position-relative p-0 wow animate__fadeIn" data-wow-delay="0.4s">
                        <div class="swiper-container h-auto padding-15px-all black-move" data-slider-options='{ "loop": true, "slidesPerView": 1, "spaceBetween": 30, "autoplay": { "delay": 3000, "disableOnInteraction": false },  "observer": true, "observeParents": true, "navigation": { "nextEl": ".swiper-button-next-nav-3", "prevEl": ".swiper-button-previous-nav-3" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                <!-- start info banner slider item -->

                               
                                {{-- <div class="swiper-slide box-shadow-small box-shadow-extra-large-hover"> --}}
                                    {{-- <a href="#"><img src="https://via.placeholder.com/525x431" alt="" /></a> --}}
                                    {{-- <a href="https://www.youtube.com/channel/UC9rEJ6dG3TTHz8GFUjpNuqQ"><img src="{{asset('Images/LectureThumbnail/1642859675.jpeg')}}" alt="" /></a> --}}
                                    {{-- <div class="position-relative bg-white padding-3-rem-all md-padding-4-rem-lr"> --}}
                                        {{-- <div class="bg-neon-orange text-small font-weight-500 alt-font text-white text-uppercase position-absolute top-minus-15px right-0px padding-5px-tb padding-20px-lr">Laravel</div> --}}
                                        {{-- <span class="text-medium text-uppercase d-block margin-5px-bottom">08 Days</span> --}}
                                        {{-- <a href="https://www.youtube.com/channel/UC9rEJ6dG3TTHz8GFUjpNuqQ" class="alt-font font-weight-500 d-block margin-30px-bottom line-height-24px text-extra-dark-gray text-neon-orange-hover d-block">Laravel Introduction</a> --}}
                                        {{-- <span class="text-golden-yellow text-small line-height-18px d-block"><i class="fas fa-star"></i>&nbsp;<i class="fas fa-star"></i>&nbsp;<i class="fas fa-star"></i>&nbsp;<i class="fas fa-star"></i>&nbsp;<i class="fas fa-star"></i></span> --}}
                                        {{-- <span class="text-medium">20 Reviews</span> --}}
                                    {{-- </div> --}}
                                {{-- </div> --}}

                                {{-- <div class="swiper-slide box-shadow-small box-shadow-extra-large-hover"> --}}
                                    {{-- <a href="#"><img src="https://via.placeholder.com/525x431" alt="" /></a> --}}
                                    {{-- <a href="https://www.youtube.com/channel/UC9rEJ6dG3TTHz8GFUjpNuqQ"><img src="{{asset('Images/LectureThumbnail/1642859675.jpeg')}}" alt="" /></a> --}}
                                    {{-- <div class="position-relative bg-white padding-3-rem-all md-padding-4-rem-lr"> --}}
                                        {{-- <div class="bg-neon-orange text-small font-weight-500 alt-font text-white text-uppercase position-absolute top-minus-15px right-0px padding-5px-tb padding-20px-lr">Laravel</div> --}}
                                        {{-- <span class="text-medium text-uppercase d-block margin-5px-bottom">08 Days</span> --}}
                                        {{-- <a href="https://www.youtube.com/channel/UC9rEJ6dG3TTHz8GFUjpNuqQ" class="alt-font font-weight-500 d-block margin-30px-bottom line-height-24px text-extra-dark-gray text-neon-orange-hover d-block">Laravel Introduction</a> --}}
                                        {{-- <span class="text-golden-yellow text-small line-height-18px d-block"><i class="fas fa-star"></i>&nbsp;<i class="fas fa-star"></i>&nbsp;<i class="fas fa-star"></i>&nbsp;<i class="fas fa-star"></i>&nbsp;<i class="fas fa-star"></i></span> --}}
                                        {{-- <span class="text-medium">20 Reviews</span> --}}
                                    {{-- </div> --}}
                                {{-- </div> --}}

                                {{-- <div class="swiper-slide box-shadow-small box-shadow-extra-large-hover"> --}}
                                    {{-- <a href="#"><img src="https://via.placeholder.com/525x431" alt="" /></a> --}}
                                    {{-- <a href="https://www.youtube.com/channel/UC9rEJ6dG3TTHz8GFUjpNuqQ"><img src="{{asset('Images/LectureThumbnail/1642859675.jpeg')}}" alt="" /></a> --}}
                                    {{-- <div class="position-relative bg-white padding-3-rem-all md-padding-4-rem-lr"> --}}
                                        {{-- <div class="bg-neon-orange text-small font-weight-500 alt-font text-white text-uppercase position-absolute top-minus-15px right-0px padding-5px-tb padding-20px-lr">Laravel</div> --}}
                                        {{-- <span class="text-medium text-uppercase d-block margin-5px-bottom">08 Days</span> --}}
                                        {{-- <a href="https://www.youtube.com/channel/UC9rEJ6dG3TTHz8GFUjpNuqQ" class="alt-font font-weight-500 d-block margin-30px-bottom line-height-24px text-extra-dark-gray text-neon-orange-hover d-block">Laravel Introduction</a> --}}
                                        {{-- <span class="text-golden-yellow text-small line-height-18px d-block"><i class="fas fa-star"></i>&nbsp;<i class="fas fa-star"></i>&nbsp;<i class="fas fa-star"></i>&nbsp;<i class="fas fa-star"></i>&nbsp;<i class="fas fa-star"></i></span> --}}
                                        {{-- <span class="text-medium">20 Reviews</span> --}}
                                    {{-- </div> --}}
                                {{-- </div> --}}

                                @if(!empty($events))
                                @foreach($events as $event)
                                <div class="swiper-slide box-shadow-small box-shadow-extra-large-hover">
                                    {{-- <a href="#"><img src="https://via.placeholder.com/525x431" alt="" /></a> --}}
                                    <a href="#"><img src="{{$event->banner}}" alt="" /></a>
                                    <div class="position-relative bg-white padding-3-rem-all md-padding-4-rem-lr">
                                        <div class="bg-neon-orange text-small font-weight-500 alt-font text-white text-uppercase position-absolute top-minus-15px right-0px padding-5px-tb padding-20px-lr">{{$event->schedule}}</div>
                                        {{-- <span class="text-medium text-uppercase d-block margin-5px-bottom">08 Days</span> --}}
                                        <a href="#" class="alt-font font-weight-500 d-block margin-30px-bottom line-height-24px text-extra-dark-gray text-neon-orange-hover d-block">{{$event->title}}</a>
                                        {{-- <span class="text-golden-yellow text-small line-height-18px d-block"><i class="fas fa-star"></i>&nbsp;<i class="fas fa-star"></i>&nbsp;<i class="fas fa-star"></i>&nbsp;<i class="fas fa-star"></i>&nbsp;<i class="fas fa-star"></i></span> --}}
                                        {{-- <span class="text-medium">20 Reviews</span> --}}
                                    </div>
                                </div>
                                @endforeach
                                @endif
                                <!-- end info banner slider item -->
                                
                            </div> 
                        </div>
                        <div class="swiper-button-next-nav-3 swiper-button-next rounded-circle light slider-navigation-style-07 box-shadow-double-large" tabindex="0" role="button" aria-label="Next slide"><i class="feather icon-feather-arrow-right"></i></div>
                        <div class="swiper-button-previous-nav-3 swiper-button-prev rounded-circle light slider-navigation-style-07 box-shadow-double-large" tabindex="0" role="button" aria-label="Previous slide"><i class="feather icon-feather-arrow-left"></i></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start section -->


<!-- start section --> 
        <section class="bg-light-gray pt-0 padding-eleven-lr xl-padding-two-lr lg-no-padding-lr">
            <div class="container">
                <div class="row justify-content">
                    <div class="col-12 col-lg-12 col-md-8 col-sm-10 blog-content sm-no-padding-lr">
                        
                        <h5 class="alt-font font-weight-600 text-extra-dark-gray letter-spacing-minus-1px text-uppercase margin-5px-bottom">Fourms</h5>
                        {{-- <h4 class="mt-2" style="text-transform:uppercase;">Categories</h4> --}}
                      
                        <ul class="blog-widget blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-2col md-grid-1col sm-grid-1col xs-grid-1col gutter-double-extra-large">
                            <li class="grid-sizer"></li>
                            <!-- start blog item -->

                            @if(!empty($fourms))
                                @foreach($fourms as $fourm)
                                    <li class="grid-item wow animate__fadeIn">
                                        <div class="d-flex box-shadow-medium bg-white padding-30px-all xs-padding-15px-all border-radius-5px">
                                            <div class="media-body flex-grow-1">
                                                <!-- <a href="blog-masonry.html" class="text-extra-small alt-font d-block margin-5px-bottom">11 February 2019</a> -->
                                                <a href="#" class="alt-font font-weight-500 text-extra-dark-gray margin-5px-bottom d-block line-height-22px text-center text-uppercase">{{ $fourm->title }}</a>
                                                <!-- <span class="text-extra-small alt-font">By <a href="blog-masonry.html">Stefano shane</a></span> -->
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                            <!-- end blog item -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->



          <!-- start section -->
        <!-- section id="down-section" class="padding-100px-top md-padding-70px-top md-padding-40px-bottom sm-padding-50px-top xs-padding-20px-top sm-padding-25px-bottom">
            <div class="container-fluid padding-seven-lr xl-padding-three-lr md-padding-2-half-rem-lr xs-padding-15px-lr">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 justify-content-center">

                    <div class="col team-style-02 text-center">
                        <figure>
                            <div class="team-member-image border-radius-5px overflow-hidden">
                                <img alt="" src="https://via.placeholder.com/800x875">
                                <div class="team-member-details bg-transparent-gradient-fast-blue-purple align-items-center justify-content-center d-flex flex-column padding-2-half-rem-lr">
                                    <div class="text-white opacity-7 w-85 sm-w-95">Lorem ipsum is simply dummy text of the printing typesetting industry</div>
                                    <div class="social-icon w-100 position-absolute bottom-40px left-0px">
                                        <a href="https://www.facebook.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                                        <a href="https://http://www.dribbble.com" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-dribbble"></i></a>
                                        <a href="https://twitter.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <figcaption class="team-member-position text-center padding-35px-tb sm-padding-25px-tb">
                                <div class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">Zahid Akbar</div>
                                <span class="text-small text-uppercase">CEO Code With Zahid</span>
                            </figcaption>
                        </figure>
                    </div>

                    <div class="col team-style-02 text-center">
                        <figure>
                            <div class="team-member-image border-radius-5px overflow-hidden">
                                <img alt="" src="https://via.placeholder.com/800x875">
                                <div class="team-member-details bg-transparent-gradient-fast-blue-purple align-items-center justify-content-center d-flex flex-column padding-2-half-rem-lr">
                                    <div class="text-white opacity-7 w-85 sm-w-95">Lorem ipsum is simply dummy text of the printing typesetting industry</div>
                                    <div class="social-icon w-100 position-absolute bottom-40px left-0px">
                                        <a href="https://www.facebook.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                                        <a href="https://http://www.dribbble.com" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-dribbble"></i></a>
                                        <a href="https://twitter.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <figcaption class="team-member-position text-center padding-35px-tb sm-padding-25px-tb">
                                <div class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">Mahr Kamran</div>
                                <span class="text-small text-uppercase">Laravel Developer</span>
                            </figcaption>
                        </figure>
                    </div>


                    <div class="col team-style-02 text-center">
                        <figure>
                            <div class="team-member-image border-radius-5px overflow-hidden">
                                <img alt="" src="https://via.placeholder.com/800x875">
                                <div class="team-member-details bg-transparent-gradient-fast-blue-purple align-items-center justify-content-center d-flex flex-column padding-2-half-rem-lr">
                                    <div class="text-white opacity-7 w-85 sm-w-95">Lorem ipsum is simply dummy text of the printing typesetting industry</div>
                                    <div class="social-icon w-100 position-absolute bottom-40px left-0px">
                                        <a href="https://www.facebook.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-facebook-f"></i></a>
                                        <a href="https://http://www.dribbble.com" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-dribbble"></i></a>
                                        <a href="https://twitter.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-twitter"></i></a>
                                        <a href="http://www.instagram.com/" target="_blank" class="icon-very-small text-white"><i aria-hidden="true" class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                            <figcaption class="team-member-position text-center padding-35px-tb sm-padding-25px-tb">
                                <div class="text-extra-dark-gray alt-font line-height-18px text-medium text-uppercase font-weight-500">Rida Abbas</div>
                                <span class="text-small text-uppercase">Laravel Developer</span>
                            </figcaption>
                        </figure>
                    </div>
                                     
                </div>
            </div>
        </section> -->
        <!-- end section -->






        <!-- start section --> 
        {{-- <section>
            <h4 class="text-center">Lastest Update</h4>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 blog-content">
                        <ul class="blog-clean blog-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                            <li class="grid-sizer"></li>
                            <!-- start blog item -->
                            @if(!empty($lectures))
                            @foreach($lectures as $lecture)
                            <li class="grid-item fashion wow animate__fadeIn">
                                <div class="blog-post text-center border-radius-6px bg-white box-shadow box-shadow-large-hover">
                                    <div class="blog-post-image bg-gradient-fast-blue-purple">
                                        <!-- https://via.placeholder.com/850x885 -->
                                        <a href="{{url('lecture-detail',$lecture->id)}}"><img src="{{asset('Images/LectureThumbnail')}}\{{$lecture->thumbnail}}" alt="">
                                            <div class="blog-rounded-icon bg-white border-color-white absolute-middle-center">
                                                <i class="feather icon-feather-arrow-right text-extra-dark-gray icon-extra-small"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="post-details padding-30px-all xl-padding-25px-lr">
                                        <a href="#" class="post-author text-medium text-uppercase">{{$lecture->language->language_name}}</a>
                                        <a class="text-extra-dark-gray font-weight-400 d-block">{{$lecture->title}}</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            @endif
                            <!-- end blog item -->

                            
                           
                        </ul>
                    </div>              
                </div>
            </div>
        </section> --}}
        <!-- end section --> 



        <!-- start section -->
        <section class="bg-light-blue" style="padding: 0%">
            <div class="container">
                <div class="row justify-content">
                    {{-- <div class="col-12 col-xl-5 col-lg-6 col-md-8 col-sm-7 text-center margin-5-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn"> --}}
                        {{-- <span class="d-inline-block alt-font text-medium text-gradient-sky-blue-pink text-uppercase font-weight-500 margin-20px-bottom sm-margin-15px-bottom">Why choose us</span> --}}
                        <h5 class="alt-font text-extra-dark-gray font-weight-600 letter-spacing-minus-1px d-inline-block d-sm-block xs-w-95">Recent Jobs</h5>
                    {{-- </div> --}}
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 wow animate__fadeIn">
                        <div class="outside-box-right">
                            <!-- start slider -->
                            <div class="swiper-container white-move" data-slider-options='{"loop": true, "slidesPerView": 1, "spaceBetween": 30, "autoplay": { "delay": 3500, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } } }'>
                                <div class="swiper-wrapper">
                                    <!-- start interactive banner item -->

                                    @if(!empty($careers))
                                    @foreach($careers as $career)
                                    <div class="swiper-slide interactive-banners-style-07">
                                        <div class="interactive-banners-box bg-dark-slate-blue">
                                            <div class="interactive-banners-box-image">
                                                <img src="https://via.placeholder.com/915x716" alt=""/>
                                                {{-- <img src="" alt=""/> --}}
                                                <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>
                                            </div>
                                            <div class="fancy-text-content padding-55px-lr md-padding-55px-lr xs-padding-30px-lr">
                                                <span class="text-very-small letter-spacing-1px line-height-16px alt-font border-radius-2px text-white text-uppercase padding-5px-tb padding-15px-lr bg-neon-blue margin-20px-bottom d-inline-block">{{$career->company}}</span>
                                                <div class="alt-font text-extra-large text-white margin-10px-bottom w-80 xl-w-90 lg-w-80 md-w-90 sm-w-60 xs-w-100">{{$career->job_title}}</div>
                                                <a href="#" class="btn btn-fancy btn-very-small btn-white margin-15px-top btn-round-edge-small">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                    <!-- end interactive banner item -->
                                    
                                    
                                    <!-- start interactive banner item -->
                                    {{-- <div class="swiper-slide interactive-banners-style-07">
                                        <div class="interactive-banners-box bg-dark-slate-blue">
                                            <div class="interactive-banners-box-image">
                                                <img src="https://via.placeholder.com/915x716" alt=""/>
                                                <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>
                                            </div>
                                            <div class="fancy-text-content padding-55px-lr md-padding-55px-lr xs-padding-30px-lr">
                                                <span class="text-very-small letter-spacing-1px line-height-16px alt-font border-radius-2px text-white text-uppercase padding-5px-tb padding-15px-lr bg-neon-blue margin-20px-bottom d-inline-block">Laravel</span>
                                                <div class="alt-font text-extra-large text-white margin-10px-bottom w-80 xl-w-90 lg-w-80 md-w-90 sm-w-60 xs-w-100">What is Laravel?</div>
                                                <a href="https://www.youtube.com/channel/UC9rEJ6dG3TTHz8GFUjpNuqQ" class="btn btn-fancy btn-very-small btn-white margin-15px-top btn-round-edge-small">Learn More</a>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- end interactive banner item -->

                                    <!-- start interactive banner item -->
                                    {{-- <div class="swiper-slide interactive-banners-style-07">
                                        <div class="interactive-banners-box bg-dark-slate-blue">
                                            <div class="interactive-banners-box-image">
                                                <img src="https://via.placeholder.com/915x716" alt=""/>
                                                <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>
                                            </div>
                                            <div class="fancy-text-content padding-55px-lr md-padding-55px-lr xs-padding-30px-lr">
                                                <span class="text-very-small letter-spacing-1px line-height-16px alt-font border-radius-2px text-white text-uppercase padding-5px-tb padding-15px-lr bg-neon-blue margin-20px-bottom d-inline-block">Laravel</span>
                                                <div class="alt-font text-extra-large text-white margin-10px-bottom w-80 xl-w-90 lg-w-80 md-w-90 sm-w-60 xs-w-100">What is Framework?</div>
                                                <a href="https://www.youtube.com/channel/UC9rEJ6dG3TTHz8GFUjpNuqQ" class="btn btn-fancy btn-very-small btn-white margin-15px-top btn-round-edge-small">Learn More</a>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- end interactive banner item -->


                                    <!-- start interactive banner item -->
                                    {{-- <div class="swiper-slide interactive-banners-style-07">
                                        <div class="interactive-banners-box bg-dark-slate-blue">
                                            <div class="interactive-banners-box-image">
                                                <img src="https://via.placeholder.com/915x716" alt=""/>
                                                <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>
                                            </div>
                                            <div class="fancy-text-content padding-55px-lr md-padding-55px-lr xs-padding-30px-lr">
                                                <span class="text-very-small letter-spacing-1px line-height-16px alt-font border-radius-2px text-white text-uppercase padding-5px-tb padding-15px-lr bg-neon-blue margin-20px-bottom d-inline-block">Wordpress</span>
                                                <div class="alt-font text-extra-large text-white margin-10px-bottom w-80 xl-w-90 lg-w-80 md-w-90 sm-w-60 xs-w-100">What is Wordpress?</div>
                                                <a href="https://www.youtube.com/channel/UC9rEJ6dG3TTHz8GFUjpNuqQ" class="btn btn-fancy btn-very-small btn-white margin-15px-top btn-round-edge-small">Learn More</a>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- end interactive banner item -->

                                    <!-- start interactive banner item -->
                                    {{-- <div class="swiper-slide interactive-banners-style-07">
                                        <div class="interactive-banners-box bg-dark-slate-blue">
                                            <div class="interactive-banners-box-image">
                                                <img src="https://via.placeholder.com/915x716" alt=""/>
                                                <div class="overlay-bg bg-gradient-dark-slate-blue-transparent"></div>
                                            </div>
                                            <div class="fancy-text-content padding-55px-lr md-padding-55px-lr xs-padding-30px-lr">
                                                <span class="text-very-small letter-spacing-1px line-height-16px alt-font border-radius-2px text-white text-uppercase padding-5px-tb padding-15px-lr bg-neon-blue margin-20px-bottom d-inline-block">VUE JS</span>
                                                <div class="alt-font text-extra-large text-white margin-10px-bottom w-80 xl-w-90 lg-w-80 md-w-90 sm-w-60 xs-w-100">What is Vue JS?</div>
                                                <a href="https://www.youtube.com/channel/UC9rEJ6dG3TTHz8GFUjpNuqQ" class="btn btn-fancy btn-very-small btn-white margin-15px-top btn-round-edge-small">Learn More</a>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- end interactive banner item -->
                                </div>
                            </div>
                            <!-- end slider -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->




<br><br>

        <!-- start section -->
        {{-- <section class="bg-light-gray">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-md-8 col-sm-9 text-center margin-5-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn">
            <h4 class="alt-font font-weight-600 text-slate-blue letter-spacing-minus-1px margin-15px-bottom">Lastest Interviews</h4>
                        <p class="w-75 mx-auto lg-w-95 sm-w-100">Lorem ipsum dolor amet consectetur eiusmod tempor incididunt labore magna nostrud exercitation.</p>
                    </div>
                </div>
                <div class="row justify-content-center">  --}}
                    {{-- <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                        <div class="testimonials testimonials-style-03 last-paragraph-no-margin">
                            <div class="testimonials-bubble border-radius-5px bg-white box-shadow-medium box-shadow-extra-large-hover padding-3-rem-lr padding-2-rem-tb margin-35px-bottom lg-padding-2-rem-lr" style="height: 180px;">
                                <p>Laravel</p>
                                <a href="#" style="color:blue" target="_blank">Watch Interview</a>
                            </div>
                            <div class="author padding-20px-lr">
                                <img class="rounded-circle w-60px h-60px margin-15px-right" src="https://via.placeholder.com/125x125" alt="">
                                <div class="d-inline-block align-middle">
                                    <span class="alt-font text-medium font-weight-500 line-height-24px text-extra-dark-gray d-block">Laravel</span>
                                    <span class="d-block text-small">Laravel Dev</span>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- start testimonial items -->
                    {{-- @if(!empty($interviews))
                    @foreach($interviews as $interview)
                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                        <div class="testimonials testimonials-style-03 last-paragraph-no-margin">
                            <div class="testimonials-bubble border-radius-5px bg-white box-shadow-medium box-shadow-extra-large-hover padding-3-rem-lr padding-2-rem-tb margin-35px-bottom lg-padding-2-rem-lr" style="height: 180px;">
                                <p>{{$interview->short_introduction}}</p>
                                <a href="{{$interview->video_url}}" style="color:blue" target="_blank">Watch Interview</a>
                            </div>
                            <div class="author padding-20px-lr">
                                <img class="rounded-circle w-60px h-60px margin-15px-right" src="https://via.placeholder.com/125x125" alt="">
                                <div class="d-inline-block align-middle">
                                    <span class="alt-font text-medium font-weight-500 line-height-24px text-extra-dark-gray d-block">{{$interview->guest_name}}</span>
                                    <span class="d-block text-small">{{$interview->pation}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif --}}
                    <!-- end testimonial items -->
                {{-- </div>
            </div>
        </section> --}}
        <!-- end section -->


        <!-- start section -->
        <footer class="footer-dark bg-neon-orange">
            {{-- <div class="container-fluid">
                <div class="overlap-section">
                    <div class="border-radius-6px padding-4-half-rem-tb padding-4-rem-lr sm-no-padding-lr wow animate__pulse">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-12 col-xl-3 text-center text-xl-start">
                                <span class="text-extra-medium alt-font text-extra-dark-gray">Seats are filling up fast!</span>
                                <h6 class="alt-font font-weight-600 text-extra-dark-gray letter-spacing-minus-1-half m-0">Not yet registered?</h6>
                            </div>
                            <!-- start countdown -->
                            <div class="col-10 col-sm-12 col-xl-6 col-md-auto text-center text-xl-end md-margin-30px-bottom xs-margin-15px-bottom">
                                <div data-enddate="2022/12/31 23:59:00" class="countdown countdown-style-03 text-center alt-font d-inline-block"></div>
                            </div>
                            <!-- end countdown -->
                            <div class="col-12 col-lg-3 text-center">
                                <a href="{{url('registration')}}" class="btn btn-medium btn-dark-gray btn-fancy btn-round-edge section-link">Apply Online Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </footer>
        <!-- end section -->

  

@endsection