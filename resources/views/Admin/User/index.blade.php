@extends('Admin.layouts.app')
@section('title', 'Users')
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
                            <h2 class="content-header-title float-left mb-0">{{ __('Users') }}</h2>
                            <span class="float-right">
                                <a href="{{ url('admin/create-user') }}" class="btn btn-primary text-white">Create User</a>
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
                                                        <th style="" class="text-center">{{ __('Name') }}</th>
                                                        <th style="" class="text-center">{{ __('Email') }}</th>
                                                        <th style="" class="text-center">{{ __('Registered at') }}</th>
                                                        <th style="" class="text-center">{{ __('Type') }}</th>
                                                        <th style="" class="text-center">{{ __('Status') }}</th>
                                                        <th style="" class="text-center">{{ __('Action') }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(!empty($allUsers))
                                                    @foreach ($allUsers as $user)
                                                        <tr>
                                                            <td class="text-center">{{ $user->name  }}</td>
                                                            <td class="text-center">{{ $user->email }}</td>
                                                            <td class="text-center">{{ $user->created_at }}</td>
                                                            <td class="text-center">{{ $user->type }}</td>
                                                            <td class="text-center">{{ $user->status }}</td>
                                                            <td class="text-center">
                                                                <div class="btn-group">
                                                                    @if($user->status == "0")

                                                                        <a class="btn btn-success btn-sm Login  text-white" href="{{ url('admin/active-user', $user->id) }}" target="_blank">Active</a>
                                                                    
                                                                    @else
                                                                        <a class="btn btn-danger btn-sm Login  text-white" href="{{ url('admin/inactive-user', $user->id) }}" target="_blank">Unactive</a>

                                                                    @endif
                                                                    <a class="btn btn-danger btn-sm Delete  text-white" href="{{ url('admin/delete-user', $user->id) }}">Delete</a>
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
