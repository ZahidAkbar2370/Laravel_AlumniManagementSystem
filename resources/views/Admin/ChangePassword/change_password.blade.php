@extends('Admin.layouts.app')
@section('title', 'Change Password')
@section('content')

<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section id="dashboard-analytics">
                
                <div class="row">
                   

                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-header ">
                                <h4>{{ __('Update Password') }} </h4>
                            </div>
                            <div class="card-body">
                                @if (Session::has('message'))

                                    <h4 style="background-color: bisque;padding:8px">{{ Session::get('message') }}</h4>                                    
                                @endif
                                <form class="form-horizontal" method="post" action="{{ url('admin/change-password') }}">
                                    @csrf

                                


                                    <div class="row">
                                        <div class="col-lg-12 col-md-6 col-12">
                                            <div class="form-group">
                                                <label>{{ __('Current Password') }} <span class="text-danger">*</span></label>
                                                <div class="controls">
                                                    <input type="text" name="current_password" id="current_password" class="form-control" placeholder="{{ __('Current Password') }}" required value="{{ old('current_password') }}">
                                                    <span id="change"></span>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label>{{ __('New Password') }}<span class="text-danger">*</span></label>

                                                <div class="controls">
                                                    <input type="password" name="password" class="form-control" placeholder="{{ __('Your Password') }}" required minlength="3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="form-group">
                                                <label>{{ __('Confirm Password') }} <span class="text-danger">*</span></label>

                                                <div class="controls">
                                                    <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password') }}" required data-validation-match-match="new_password" data-validation-required-message="{{ __('The Confirm password field is required') }}" minlength="3">
                                                </div>
                                            </div>
                                        </div>
                                     
                                        
                                        
                                    </div>
                                     <button type="submit" class="btn btn-primary btn-block float-left btn-inline mb-50">{{ __('Update Password') }}</button>
                                </form>
                                

                
                            </div> <!-- end card-body -->
                        </div> <!-- end card-->
                    </div>
               
            </section>
            <!-- Dashboard Analytics end -->

        </div>
    </div>
</div>
@endsection

@section('js')
{{-- <script type="text/javascript">
    $("#current_password").on('change', function(){
        var current_password = $(this).val();
        // alert(current_password);
        var url = "{{ route('client.password.show')}}";
        $.ajax({
            type: 'get',
            url: url,
            data: {current_password:current_password},
            success:function(resp){
                $("#change").html(resp);

            },
            error:function(resp){
                alert("Opps Try Agian...");
            }

        });
    });
</script> --}}

@endsection
