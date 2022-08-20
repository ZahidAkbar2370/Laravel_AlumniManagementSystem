@extends('Admin.layouts.app')
@section('title', 'Courses')
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
                            <h2 class="content-header-title float-left mb-0">{{ __('Courses') }}</h2>
                            <span class="float-right">
                                <a href="{{ url('admin/create-course') }}" class="btn btn-primary text-white">Create Course</a>
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
                                                        <th style="" class="text-center">{{ __('Course Name') }}</th>
                                                        {{-- <th style="" class="text-center">{{ __('About') }}</th> --}}
                                                        <th style="" class="text-center">{{ __('Created at') }}</th>
                                                        <th style="" class="text-center">{{ __('Action') }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(!empty($allCourses))
                                                    @foreach ($allCourses as $key => $course)
                                                        <tr>
                                                            <td class="text-center">{{ $key+1  }}</td>
                                                            <td class="text-center">{{ $course->course  }}</td>
                                                            {{-- <td class="text-center">{{ $course->about  }}</td> --}}
                                                            <td class="text-center">{{ $course->created_at->diffForHumans() }}</td>

                                                            <td class="text-center">
                                                                <div class="btn-group">
                                                                    <a class="btn btn-info btn-sm Login  text-white" href="{{ url('admin/edit-course', $course->id) }}">Edit</a>
                                                                    <a class="btn btn-danger btn-sm  text-white" href="{{ url('admin/delete-course', $course->id) }}" onclick="return confirm('Are You Sure to Delete Selected Couses?')">Delete</a>
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