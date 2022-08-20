
@extends('Admin.layouts.app')
@section('title', 'Create Job')
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
                                                <h4 class="mb-0 text-center">{{ __('Create Job') }}</h4>
                                            </div>
                                        </div>
                                        <div class="card-content">
                                            <div class="card-body pt-0">
                                                <form class="form-horizontal" method="post" action="{{ url('admin/save-job') }}" enctype="multipart/form-data">
                                                    @csrf

                                               


                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label>{{ __('Job Title') }} <span class="text-danger">*</span></label>
                                                                <div class="controls">
                                                                    <input type="text" name="job_title" class="form-control" placeholder="{{ __('Job Title') }}" >
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label>{{ __('Company Name') }} <span class="text-danger">*</span></label>
                                                                <div class="controls">
                                                                    <input type="text" name="company_name" class="form-control" placeholder="{{ __('Company Name') }}" >
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label>{{ __('Location') }} <span class="text-danger">*</span></label>
                                                                <div class="controls">
                                                                    <input type="text" name="location" class="form-control" placeholder="{{ __('Company Location') }}" >
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label>{{ __('Description') }} <span class="text-danger">*</span></label>
                                                                <div class="controls">
                                                                    <textarea name="description" class="form-control" placeholder="{{ __('Job Description') }}"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{-- <div class="col-lg-4 col-md-6 col-12">
                                                            <div class="form-group">
                                                                <label>{{ __('About') }}  <span class="text-danger">*</span></label>
                                                                <div class="controls">
                                                                    <input type="file" name="course_about" class="form-control" required data-validation-required-message="{{ __('Last Name is required') }}">
                                                                </div>
                                                            </div>
                                                        </div> --}}


                                                       
                                                        
                                                    </div>
                                                     <button type="submit" class="btn btn-primary float-left btn-inline mb-50">{{ __('Save Job') }}</button>
                                                </form>


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