<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="#">


                    @if(Auth::user()->type == "admin")
                        <h2 class="brand-text mb-0">{{ __('Admin') }}</h2>
                    @endif

                    @if(Auth::user()->type == "alumini")
                        <h2 class="brand-text mb-0">{{ __('Alumini') }}</h2>
                    @endif
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                        class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                        data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class=" navigation-header"><span>{{ __('Apps') }}</span></li>
            @if(Auth::user()->type == "admin")
            <li
                class=" nav-item {{ strpos(url()->full(), strtolower(Auth::User()->role ?? "admin") . '/dashboard') ? 'active' : '' }}">
                <a href="{{ url('admin/dashboard') }}">
                    <i class="feather icon-home"></i>
                    <span class="menu-title">{{ __('Dashboard') }}</span>
                </a>
            </li>



            <li
                class=" nav-item {{ strpos(url()->full(), strtolower(Auth::User()->role ?? "admin") . '/view-gallery') ? 'active' : '' }}">
                <a href="{{ url('admin/view-gallery') }}">
                    <i class="feather icon-image"></i>
                    <span class="menu-title">{{ __('Gallary') }}</span>
                </a>
            </li>

            <li
                class=" nav-item {{ strpos(url()->full(), strtolower(Auth::User()->role ?? "admin") . '/view-courses') ? 'active' : '' }}">
                <a href="{{ url('admin/view-courses') }}">
                    <i class="feather icon-users"></i>
                    <span class="menu-title">{{ __('Courses') }}</span>
                </a>
            </li>
            @endif

            {{-- <li
                class=" nav-item {{ strpos(url()->full(), strtolower(Auth::User()->role ?? "admin") . '/view-alumni') ? 'active' : '' }}">
                <a href="{{ url('admin/labels') }}">
                    <i class="feather icon-tag"></i>
                    <span class="menu-title">{{ __('Labels') }}</span>
                </a>
            </li> --}}

            <li
                class=" nav-item {{ strpos(url()->full(), strtolower(Auth::User()->role ?? "admin") . '/view-jobs') ? 'active' : '' }}">
                <a href="{{ url('admin/view-jobs') }}">
                    <i class="feather icon-lock"></i>
                    <span class="menu-title">{{ __('Jobs') }}</span>
                </a>
            </li>

            <li
                class=" nav-item {{ strpos(url()->full(), strtolower(Auth::User()->role ?? "admin") . '/view-events') ? 'active' : '' }}">
                <a href="{{ url('admin/view-events') }}">
                    <i class="feather icon-lock"></i>
                    <span class="menu-title">{{ __('Events') }}</span>
                </a>
            </li>

            <li
                class=" nav-item {{ strpos(url()->full(), strtolower(Auth::User()->role ?? "admin") . '/view-fourms') ? 'active' : '' }}">
                <a href="{{ url('admin/view-fourms') }}">
                    <i class="feather icon-lock"></i>
                    <span class="menu-title">{{ __('Fourms') }}</span>
                </a>
            </li>

            

            @if(Auth::user()->type == "admin")
            <li
                class=" nav-item {{ strpos(url()->full(), strtolower(Auth::User()->role ?? "admin") . '/view-departments') ? 'active' : '' }}">
                <a href="{{ url('admin/view-departments') }}">
                    <i class="feather icon-lock"></i>
                    <span class="menu-title">{{ __('Departments') }}</span>
                </a>
            </li>
    
            <li
                class=" nav-item {{ strpos(url()->full(), strtolower(Auth::User()->role ?? "admin") . '/view-users') ? 'active' : '' }}">
                <a href="{{ url('admin/view-users') }}">
                    <i class="feather icon-lock"></i>
                    <span class="menu-title">{{ __('User') }}</span>
                </a>
            </li>
            @endif

            {{-- <li
                class=" nav-item {{ strpos(url()->full(), strtolower(Auth::User()->role ?? "admin") . '/change-password') ? 'active' : '' }}">
                <a href="{{ url('admin/change-password') }}">
                    <i class="feather icon-lock"></i>
                    <span class="menu-title">{{ __('Change Password') }}</span>
                </a>
            </li> --}}

            <li
                class=" nav-item {{ strpos(url()->full(), strtolower(Auth::User()->role ?? "admin") . '/logout') ? 'active' : '' }}">
                <a href="{{ url('admin/logout') }}">
                    <i class="feather icon-lock"></i>
                    <span class="menu-title">{{ __('Logout') }}</span>
                </a>
            </li>


        </ul>
    </div>
</div>
