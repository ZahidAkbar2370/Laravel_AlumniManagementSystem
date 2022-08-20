@extends('Admin.layouts.app')
@section('title', 'Jobs')
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">{{ __('Jobs') }}</h2>
                            <span class="float-right">
                                <a href="{{ url('admin/create-job') }}" class="btn btn-primary text-white">Create Job</a>
                        </span>




                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Zero configuration table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-content">
                                    <div class="card-body card-dashboard">

                                        @if(Session::has('message'))
                                            <span class="message text-weight-bold text-white bg-success" style="padding:5px">{{ Session::get('message') }}</span>
                                        @endif

                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th style="" class="text-center">{{ __('SR #') }}</th>
                                                        <th style="" class="text-center">{{ __('Job Title') }}</th>
                                                        <th style="" class="text-center">{{ __('Company Name') }}</th>
                                                        <th style="" class="text-center">{{ __('Posted By') }}</th>
                                                        <th style="" class="text-center">{{ __('Action') }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(!empty($allJobs))
                                                    @foreach ($allJobs as $key => $job)
                                                        <tr>
                                                            <td class="text-center">{{ $key+1  }}</td>
                                                            <td class="text-center">{{ $job->job_title  }}</td>
                                                            <td class="text-center">{{ $job->company  }}</td>
                                                            <td class="text-center">{{ $job->user_id }}</td>

                                                            <td class="text-center">
                                                                    <a class="btn btn-info btn-sm  text-white" href="{{ url('admin/view-job', $job->id) }}">View</a>
                                                                    <a class="btn btn-info btn-sm  text-white" href="{{ url('admin/edit-job', $job->id) }}">Edit</a>
                                                                    <a class="btn btn-danger btn-sm  text-white" href="{{ url('admin/delete-job', $job->id) }}" onclick="return confirm('Are You Sure To Delete Job?')">Delete</a>
                                                                </div>
                                                            </td>


                                                        </tr>
                                                    @endforeach
                                                    @endif



                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Zero configuration table -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection