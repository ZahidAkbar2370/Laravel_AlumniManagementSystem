
@extends('Admin.layouts.app')
@section('title', 'View Event')
@section('content')

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-12 col-12 justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                               
                                <div class="col-lg-12 col-12 p-0">
                                    <div class="card rounded-0 mb-0 p-2">
                                        <div class="card-header pt-50 pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0 text-center">{{ __('View Event') }}</h4>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body pt-0">
                                               


                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <h5>{{ __('Event Title') }}</h5>
                                                                <label>{{ $showEvent->title }}</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <h5>{{ __('Schedule') }}</h5>
                                                                <label>{{ $showEvent->schedule }}</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <h5>{{ __('Created at') }}</h5>
                                                                <label>{{ $showEvent->created_at->diffForHumans() }}</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <h5>{{ __('Banner') }}</h5>
                                                                <label>{{ $showEvent->banner }}</label>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-12 col-md-12 col-12">
                                                            <div class="form-group">
                                                                <h5>{{ __('Description') }}</h5>
                                                                <label>{{ $showEvent->content }}</label>
                                                            </div>
                                                        </div>

                                                           
                                                    </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->  




@endsection