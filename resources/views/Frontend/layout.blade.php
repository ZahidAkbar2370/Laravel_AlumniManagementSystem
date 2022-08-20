<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>FUUAST Alumni</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="Code With Zahid">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="description" content="Code With Zahid. CWZ is a Free Online Institute..">
        <!-- favicon icon -->
        <!-- app/images/favicon.png -->
        <link rel="shortcut icon" href="{{asset('icon.jpeg')}}">
        <link rel="apple-touch-icon" href="{{asset('app/images/apple-touch-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('app/images/apple-touch-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('app/images/apple-touch-icon-114x114.png')}}">
        <!-- style sheets and font icons  -->
        <link rel="stylesheet" type="text/css" href="{{asset('app/css/font-icons.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app/css/theme-vendors.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app/css/style.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('app/css/responsive.css')}}" />
        <!-- revolution slider -->
        <link rel="stylesheet" type="text/css" href="{{asset('app/revolution/css/settings.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app/revolution/css/layers.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('app/revolution/css/navigation.css')}}">
    </head>
    <body data-mobile-nav-style="classic">
        <!-- start header -->
        <header>
            <!-- start navigation -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-transparent header-light fixed-top navbar-boxed header-reverse-scroll">
                <div class="container-fluid nav-header-container">
                    <div class="col-auto col-sm-6 col-lg-2 me-auto ps-lg-0">
                        <a class="navbar-brand" href="#">
                            <!-- app/images/logo-white.png -->
                            <h4>Fuuast</h4>
                            {{-- <img src="{{asset('logo.png')}}" data-at2x="{{asset('logo.png')}}" class="default-logo" alt="">
                            <img src="{{asset('logo.png')}}" data-at2x="{{asset('logo.png')}}" class="alt-logo" alt="">
                            <img src="{{asset('logo.png')}}" data-at2x="{{asset('logo.png')}}" class="mobile-logo" alt=""> --}}
                        </a>
                    </div>
                    <div class="col-auto col-lg-8 menu-order px-lg-0">
                        <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                            <span class="navbar-toggler-line"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                            <ul class="navbar-nav alt-font">
                                <li class="nav-item dropdown megamenu">
                                    <a href="{{url('/')}}" class="nav-link">Home</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                </li>

                                {{-- <li class="nav-item dropdown megamenu">
                                    <a href="#" class="nav-link">About Me</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                </li> --}}

                                {{-- <li class="nav-item dropdown simple-dropdown">
                                    <a href="#" class="nav-link">About Me</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    <ul class="dropdown-menu" role="menu">
                                       
                                        <li class="dropdown">
                                            <a href="{{url('about-me')}}" style="text-transform: uppercase">About Me<i class="dropdown-toggle"></i></a>
                                        </li>

                                        <li class="dropdown">
                                            <a href="{{url('portfolio')}}" style="text-transform: uppercase">Potfolio<i class="dropdown-toggle"></i></a>
                                        </li>

                                        <li class="dropdown">
                                            <a href="{{url('tutorials')}}" style="text-transform: uppercase">Resume<i class="dropdown-toggle"></i></a>
                                        </li>
                                        <!-- <li class="dropdown">
                                            <a data-bs-toggle="dropdown" href="javascript:void(0);">Wordpress<i class="fas fa-angle-right dropdown-toggle"></i></a>
                                        </li> -->
                                    </ul>
                                </li> --}}

                                @if(!empty(Auth::user()))
    
                                <li class="nav-item dropdown megamenu">
                                    <a href="{{ url('events') }}" class="nav-link">Events</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                </li>
                                @endif

                                @if(!empty(Auth::user()))
                                    <li class="nav-item dropdown megamenu">
                                        <a href="{{ url('fourms') }}" class="nav-link">Fourms</a>
                                        <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                    </li>
                                @endif

                                {{-- <li class="nav-item dropdown megamenu">
                                    <a href="#" class="nav-link">PDF Courses</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                </li> --}}

                                <li class="nav-item dropdown megamenu">
                                    <a href="{{url('departments')}}" class="nav-link">Departments</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                </li>

                                @if(!empty(Auth::user()))

                                <li class="nav-item dropdown megamenu">
                                    <a href="{{url('jobs')}}" class="nav-link">Jobs</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                </li>
                                @endif

                                <li class="nav-item dropdown megamenu">
                                    <a href="{{url('gallary')}}" class="nav-link">Gallary</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                </li>

                                <li class="nav-item dropdown megamenu">
                                    <a href="{{url('contact-us')}}" class="nav-link">Contact Us</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                </li>

                                @if(empty(Auth::user()))
                                <li class="nav-item dropdown megamenu">
                                    <a href="{{url('login')}}" class="nav-link">Login/Register</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                </li>
                                @else
                                <li class="nav-item dropdown megamenu">
                                    <a href="{{url('system-logout')}}" class="nav-link">Logout</a>
                                    <i class="fa fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                </li>
                                @endif


                            </ul>
                        </div>
                    </div>




                    <!-- <div class="col-auto col-lg-2 text-end pe-0 font-size-0">
                        

                        <div class="header-push-button d-none d-lg-inline-block hidden-xs">
                            <a href="javascript:void(0);" class="push-button">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div> -->
                </div>
            </nav>
            <!-- <div class="push-menu padding-50px-lr bg-white">
                <a href="javascript:void(0);" class="close-menu text-extra-dark-gray text-green-hover"><i class="fas fa-times"></i></a>
                <div class="push-menu-wrapper text-center" data-scroll-options='{ "theme": "dark" }'>
                    <h1 class="text-extra-dark-gray alt-font font-weight-700 letter-spacing-minus-3px text-uppercase no-margin-bottom">Hello</h1>
                    <span class="alt-font text-green text-large text-uppercase d-block">Let's be friends.</span>
                    <div class="w-100 margin-5-rem-tb lg-margin-3-rem-tb">
                        <ul class="instafeed-grid instafeed-wrapper grid grid-3col xl-grid-3col lg-grid-3col md-grid-3col sm-grid-3col xs-grid-3col gutter-small" data-total="6">
                            <li class="grid-item"><figure><a href="#" data-href="" target="_blank"><img src="#" data-src="" class="insta-image" alt="" /><span class="insta-counts"><i class="fab fa-instagram"></i></span></a></figure></li>
                        </ul>
                    </div>
                    <div class="margin-5-rem-bottom text-center lg-margin-3-rem-bottom">
                        <span class="alt-font text-large margin-3-rem-bottom w-70 mx-auto text-extra-dark-gray d-inline-block line-height-26px lg-margin-2-rem-bottom">Get latest update for our trusted applications</span>
                        <form action="email-templates/subscribe-newsletter.php" method="post">
                            <div class="newsletter-email position-relative">
                                <input class="border-radius-5px medium-input m-0 required" name="email" placeholder="Enter your email address" type="email">
                                <input type="hidden" name="redirect" value="">
                                <button class="btn btn-medium line-height-18px submit" type="submit"><i class="far fa-envelope text-green left-icon"></i>subscribe</button>
                                <div class="form-results rounded d-none position-absolute"></div>
                            </div>
                        </form>
                    </div>
                    <div class="text-center elements-social social-icon-style-05 margin-10px-bottom">
                        <ul class="small-icon">
                            <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                            <li><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fab fa-dribbble"></i><span></span></a></li>
                            <li><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i><span></span></a></li>
                            <li><a class="instagram" href="http://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i><span></span></a></li>
                            <li><a class="linkedin" href="http://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i><span></span></a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
        </header>
        <!-- end header -->


   


        @yield("content")


         <!-- start section -->
        {{-- <section class="wow animate__fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-5 col-lg-8 col-md-10 text-center">
                        <h6 class="font-weight-300 margin-eight-bottom sm-margin-30px-bottom">This is a simple subscription form and it will be showed after the pre-defined delay once the pages is loaded.</h6>
                        <a class="btn btn-medium btn-round-edge btn-fast-blue modal-popup" href="#subscribe-popup">Show modal again</a>
                        
                        <div id="subscribe-popup" class="mfp-hide subscribe-popup">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-lg-10 col-md-12 bg-white modal-popup-main">
                                        <div class="row">
                                            <div class="col-12 col-sm-10 order-2 order-sm-1 newsletter-popup padding-6-rem-all lg-padding-4-rem-all xs-padding-3-rem-all">
                                                <span class="text-extra-large font-weight-500 text-extra-dark-gray d-block margin-10px-bottom">Aslam o Alikum, We are Working On Webiste... We Launch Only For Online Registration....</span>
                                                <p class="margin-30px-bottom xs-margin-20px-bottom">Complete website with Lectures, Blogs, Interviews & Discussions Will Launch on 30 May 2022</p>
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- end section -->















        <!-- start footer  -->
        <footer class="footer-dark bg-slate-blue border-top">
            <div class="footer-top padding-five-tb lg-padding-eight-tb md-padding-50px-tb">
                <div class="container">
                    <div class="row">
                        <!-- start footer column -->
                        <div class="col-12 col-lg-3 col-sm-6 md-margin-40px-bottom xs-margin-25px-bottom">
                            <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Company</span>
                            <ul>
                                <li><a href="#">About CWZ</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Contact us</a></li>
                            </ul>
                        </div>
                        <!-- end footer column -->


                        <!-- start footer column -->
                        <div class="col-12 col-lg-3 col-sm-6 md-margin-40px-bottom xs-margin-25px-bottom">
                            <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Customer</span>
                            <ul>                           
                                <li><a href="#">Student Support</a></li>
                                <li><a href="#">Pricing Packages</a></li>
                                <li><a href="">Projects</a></li>
                                <li><a href="#">Online Apply</a></li>
                            </ul>
                        </div>
                        <!-- end footer column -->
                        <!-- start footer column -->
                        <div class="col-12 col-lg-3 col-sm-6 xs-margin-25px-bottom">
                            <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom xs-margin-10px-bottom">Get in touch</span>
                            <p class="w-85 margin-15px-bottom">Chah Gopal Wala, Ward # 5, Eid Gha, Layyah</p>
                            <div><i class="feather icon-feather-phone-call icon-very-small margin-10px-right text-white"></i>+92 308 1312527</div>
                            <div><i class="feather icon-feather-mail icon-very-small margin-10px-right text-white"></i><a href="#">codewithzahid.dev@gmail.com</a></div>
                            <div><i class="feather icon-feather-mail icon-very-small margin-10px-right text-white"></i><a href="#">zahidjakhar2370@gmail.com</a></div>
                        </div>
                        <!-- end footer column -->


                        <!-- start footer column -->
                        <div class="col-12 col-lg-3 col-sm-6">
                            <span class="alt-font font-weight-500 d-block text-white margin-20px-bottom">Follow us on Instagram</span>
                            <div class="w-100 d-inline-block ">
                                
                                <a class="alt-font text-extra-small text-uppercase font-weight-500 margin-20px-top d-inline-block" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram icon-extra-small align-middle margin-10px-right text-gradient-light-purple-light-orange"></i><span class="d-inline-block align-middle">Follow instagram</span></a>

                                 <a class="alt-font text-extra-small text-uppercase font-weight-500 margin-20px-top d-inline-block" href="#" target="_blank"><i class="fab fa-facebook icon-extra-small align-middle margin-10px-right text-gradient-light-purple-light-orange"></i><span class="d-inline-block align-middle">Follow Facebook</span></a>

                                 <a class="alt-font text-extra-small text-uppercase font-weight-500 margin-20px-top d-inline-block" href="#" target="_blank"><i class="fab fa-linkedin icon-extra-small align-middle margin-10px-right text-gradient-light-purple-light-orange"></i><span class="d-inline-block align-middle">Follow Linkedin</span></a>

                                 <a class="alt-font text-extra-small text-uppercase font-weight-500 margin-20px-top d-inline-block" href="#" target="_blank"><i class="fab fa-youtube icon-extra-small align-middle margin-10px-right text-gradient-light-purple-light-orange"></i><span class="d-inline-block align-middle">Follow Youtube</span></a>
                            </div>
                        </div>
                        <!-- end footer column -->
                    </div>
                </div>
            </div>



            {{-- <div class="footer-bottom padding-40px-tb border-top border-color-white-transparent">
                <div class="container"> 
                    <div class="row align-items-center">
                        
                        <div class="col-12 col-md-12 text-center last-paragraph-no-margin sm-margin-20px-bottom">
                            <p>&copy; 2022 Code With Zahid is Powered by <a href="https://www.codewithzahid.dev/" target="_blank">CWZ</a></p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </footer>
        <!-- end footer -->

        <a href="{{ url('support-chat') }}" class="open-button" title="Send Message"><i class="fa fa-envelope"></i></a>
        <a href="https://www.facebook.com/ZahidAkbarJakhar" id="myBtn" title="Chat on Messenger"><i class="fab fa-facebook-messenger"></i></a>
        <a href="https://api.whatsapp.com/send/?phone=923081312527&text=Write Your Message Please...&app_absent=0"  id="btnWhatsapp" title="Whatsapp Chat"><i class="fab fa-whatsapp"></i></a>
        <div class="icon-bar">
            {{-- <a href="#" class="facebook" target="_blank"><i class="fab fa-whatsapp"></i></a>  --}}
            <a href="https://www.facebook.com/ZahidAkbarJakhar" class="facebook" target="_blank"><i class="fab fa-facebook"></i></a> 
            <a href="#" class="twitter" target="_blank"><i class="fab fa-twitter"></i></a> 
            {{-- <a href="#" class="google" target="_blank"><i class="fab fa-google"></i></a> 
            <a href="#" class="linkedin" target="_blank"><i class="fab fa-linkedin"></i></a> --}}
            <a href="https://www.youtube.com/channel/UC9rEJ6dG3TTHz8GFUjpNuqQ" target="_blank" class="youtube" target="_blank"><i class="fab fa-youtube"></i></a> 
          </div>

          <div class="chat-popup" id="myForm">
            <h1>Here</h1>
          </div>

          <style>
              .scroll-top-arrow{
                  bottom: 90px !important;
              }

              .chat-popup {
  display: none;
  position: fixed;
  bottom: 70px;
  right: 30px;
  border: 3px solid #f1f1f1;
  z-index: 99;
  cursor: pointer;
                outline: none;
                /* max-height: 400px; */
                overflow-y: scroll;
                /* scrollbar-width: 1px; */
                /* -webkit-overflow-scrolling: 1px;
                scrollbar-width: 2px !important; */
}

/* Add styles to the form container */
.form-container {
  max-width: 270px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 100px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 7px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}
.open-button {

    position: fixed;
                bottom: 15px;
                right: 80px;
                z-index: 99;
                font-size: 18px;
                border: none;
                /* background-color: rgb(1, 165, 247); */
                color: white;
                cursor: pointer;
                outline: none;
                padding-top: 8px;
                padding-bottom: 8px;
                padding-left: 15px;
                padding-right: 15px;
                border-radius: 4px;


  background-color: rgb(147, 134, 134);
  color: white;
  /* padding: 15px; */
  border: none;
  cursor: pointer;
  /* opacity: 0.8; */
  position: fixed;
  bottom: 15px;
  right: 30px;
  cursor: pointer;
                outline: none;
  font-size: 18px;
  padding-top: 8px;
                padding-bottom: 8px;
                padding-left: 15px;
                padding-right: 15px;
                border-radius: 4px;
  /* width: 280px; */
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
            #myBtn{
                /* display: none; */
                position: fixed;
                bottom: 15px;
                right: 80px;
                z-index: 99;
                font-size: 18px;
                border: none;
                
                background-color: rgb(1, 165, 247);
                color: white;
                cursor: pointer;
                outline: none;
                padding-top: 8px;
                padding-bottom: 8px;
                padding-left: 15px;
                padding-right: 15px;
                border-radius: 4px;
                }

                #btnWhatsapp{
                /* display: none; */
                position: fixed;
                bottom: 15px;
                right: 130px;
                z-index: 99;
                font-size: 18px;
                border: none;
                outline: none;
                background-color: #25D366;
                color: white;
                cursor: pointer;
                padding-top: 8px;
                padding-bottom: 8px;
                padding-left: 15px;
                padding-right: 15px;
                border-radius: 4px;
                }

              .icon-bar {
                    position: fixed;
                    top: 70%;
                    -webkit-transform: translateY(-50%);
                    -ms-transform: translateY(-50%);
                    transform: translateY(-50%);
                    }

                    .icon-bar a {
                    display: block;
                    text-align: center;
                    padding: 16px;
                    transition: all 0.3s ease;
                    color: white;
                    font-size: 20px;
                    }

                    .icon-bar a:hover {
                    background-color: #000;
                    }

                    .facebook {
                    background: #3B5998;
                    color: white;
                    }

                    .twitter {
                    background: #55ACEE;
                    color: white;
                    }

                    .google {
                    background: #dd4b39;
                    color: white;
                    }

                    .linkedin {
                    background: #007bb5;
                    color: white;
                    }

                    .youtube {
                    background: #bb0000;
                    color: white;
                    }
          </style>



        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="feather icon-feather-arrow-up"></i></a>
        <!-- end scroll to top -->
        <!-- javascript -->
        <script type="text/javascript" src="{{asset('app/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('app/js/theme-vendors.min.js')}}"></script>
        <!-- revolution js files -->
        <script type="text/javascript" src="{{asset('app/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('app/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('app/js/main.js')}}"></script>

        <!-- slider revolution 5.0 extensions (load extensions only on local file systems ! the following part can be removed on server for on demand loading) --> 
        <script type="text/javascript" src="{{asset('app/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('app/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('app/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('app/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('app/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('app/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('app/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('app/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('app/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('app/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

        <script type="text/javascript">
var revapi263,
        tpj;
(function () {
    if (tpj === undefined) {
        tpj = jQuery;
        if ("off" == "on")
            tpj.noConflict();
    }
    if (!/loaded|interactive|complete/.test(document.readyState))
        document.addEventListener("DOMContentLoaded", onLoad);
    else
        onLoad();
    function onLoad() {
        if (tpj("#rev_slider_26_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_26_1");
        } else {
            var revOffset = tpj(window).width() <= 991 ? '73px' : '';
            revapi263 = tpj("#rev_slider_26_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "app/revolution/js/",
                sliderLayout: "fullscreen",
                dottedOverlay: "none",
                delay: 4500,
                navigation: {
                    keyboardNavigation: "on",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        touchOnDesktop: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        enable: true,
                        style: 'ares',
                        tmp: '',
                        rtl: false,
                        hide_onleave: false,
                        hide_onmobile: true,
                        hide_under: 767,
                        hide_over: 9999,
                        hide_delay: 0,
                        hide_delay_mobile: 0,

                        left: {
                            container: 'slider',
                            h_align: 'left',
                            v_align: 'center',
                            h_offset: 60,
                            v_offset: 0
                        },

                        right: {
                            container: 'slider',
                            h_align: 'right',
                            v_align: 'center',
                            h_offset: 60,
                            v_offset: 0
                        }
                    },
                    bullets: {
                        enable: true,
                        style: 'zeus',
                        direction: 'horizontal',
                        rtl: false,

                        container: 'slider',
                        h_align: 'center',
                        v_align: 'bottom',
                        h_offset: 0,
                        v_offset: 30,
                        space: 7,

                        hide_onleave: false,
                        hide_onmobile: false,
                        hide_under: 0,
                        hide_over: 767,
                        hide_delay: 200,
                        hide_delay_mobile: 1200
                    },
                },
                responsiveLevels: [1240, 1025, 778, 480],
                visibilityLevels: [1920, 1500, 1025, 768],
                gridwidth: [1200, 991, 778, 480],
                gridheight: [1025, 1366, 1025, 868],
                lazyType: "none",
                shadow: 0,
                spinner: "spinner4",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "on",
                fullScreenAutoWidth: "on",
                fullScreenAlignForce: "off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: revOffset,
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLimit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });
        }
        ; /* END OF revapi call */
    }
    ; /* END OF ON LOAD FUNCTION */
}()); /* END OF WRAPPING FUNCTION */
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-93NGDNYKNY"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'G-93NGDNYKNY');
        </script>

<script>
    // var mybutton = document.getElementById("myBtn");
    // var btnWhatsapp = document.getElementById("btnWhatsapp");
    // var admissionCounter = document.getElementById("admissionCounter");
    
    function openForm() {
  document.getElementById("myForm").style.display = "block";
    // mybutton.style.display = "none";
    // btnWhatsapp.style.display = "none";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
    // mybutton.style.display = "block";
    // btnWhatsapp.style.display = "block";
}

// window.onscroll = function() {scrollFunction()};

// function scrollFunction() {
//   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//     mybutton.title = 'Whatsapp Chat Here';
//     // mybutton.style.display = "block";   
//     // btnWhatsapp.style.display = "block";
//     // admissionCounter.style.display = "block";

//   } else {
//     // mybutton.style.display = "none";
//     // btnWhatsapp.style.display = "none";
//     // admissionCounter.style.display = "none";
//   }
// }
</script>
    </body>
</html>