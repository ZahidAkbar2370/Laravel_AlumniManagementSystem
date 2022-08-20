@extends('Admin.layouts.app')
@section('title', 'Fourms')
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
                            <h2 class="content-header-title float-left mb-0">{{ __('Fourms') }}</h2>
                            <span class="float-right">
                                <a href="{{ url('admin/create-fourm') }}" class="btn btn-primary text-white">Create Fourm</a> 
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
                                                        <th style="" class="text-center">{{ __('Title') }}</th>
                                                        <th style="" class="text-center">{{ __('Created By') }}</th>
                                                        <th style="" class="text-center">{{ __('Comments') }}</th>
                                                        <th style="" class="text-center">{{ __('Description') }}</th>
                                                        <th style="" class="text-center">{{ __('Action') }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(!empty($allFourms))
                                                    @foreach ($allFourms as $key => $fourm)
                                                        <tr>
                                                            <td class="text-center">{{ $key+1  }}</td>
                                                            <td class="text-center">{{ $fourm->title  }}</td>
                                                            <td class="text-center">{{ Auth::user()->name }}</td>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">{{ $fourm->description }}</td>

                                                            <td class="text-center">
                                                                <div class="btn-group">

                                                                    <a class="btn btn-info btn-sm  text-white" href="{{ url('admin/view-fourm', $fourm->id) }}">View</a>
                                                                    <a class="btn btn-info btn-sm  text-white" href="{{ url('admin/edit-fourm', $fourm->id) }}">Edit</a>
                                                                    <a class="btn btn-danger btn-sm  text-white" href="{{ url('admin/delete-fourm', $fourm->id) }}">Delete</a>
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