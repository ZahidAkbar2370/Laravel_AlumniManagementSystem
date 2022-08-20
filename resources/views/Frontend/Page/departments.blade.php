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


@endsection