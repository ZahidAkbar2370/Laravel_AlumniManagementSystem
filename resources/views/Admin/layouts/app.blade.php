<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>@yield('title') </title>

    <!-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('backend/app-assets/images/ico/favicon.ico') }}"> -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/vendors/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/pages/authentication.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}">
    <!-- END: Custom CSS-->

    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/vendors/css/forms/select/select2.min.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/css/plugins/forms/validation/form-validation.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/css/plugins/extensions/toastr.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/vendors/css/extensions/toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/app-assets/css/plugins/forms/wizard.css') }}">


    <link rel="stylesheet" type="text/css"
        href="{{ asset('backend/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('/backend/app-assets/images/ico/favicon.ico') }}" type="image/x-icon">


    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style type="text/css">
        .error {
            color: red;
        }

        .c1 {
            border: 2px red ridge;
        }
    </style>
    @yield('head');
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    @include('Admin.layouts.inc.sidebar')

    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('Admin.layouts.inc.header')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @yield('content')

    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    @include('Admin.layouts.inc.footer')
    <!-- END: Footer-->



    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('backend/app-assets/vendors/js/vendors.min.js') }}"></script>

    <script src="{{ asset('backend/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('backend/app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('backend/app-assets/js/scripts/components.js') }}"></script>

    <script src="{{ asset('backend/app-assets/js/scripts/forms/select/form-select2.js') }}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>



    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('backend/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') }}"></script>

    <script src="{{ asset('backend/app-assets/js/scripts/forms/validation/form-validation.js') }}"></script>

    <script src="{{ asset('backend/app-assets/js/scripts/extensions/toastr.js') }}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/extensions/toastr.min.js') }}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/extensions/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('backend/app-assets/js/scripts/forms/wizard-steps.js') }}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>


    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset('backend/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('backend/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/app-assets/js/scripts/datatables/datatable.js') }}"></script>


    <!-- JQuery Validation -->
    <script src="{{ asset('backend/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#release_form").validate({
                rules: {
                    field: {
                        required: true,
                    }
                },
                highlight: function(element) {
                    $(element).addClass("c1");
                },
                unhighlight: function(element) {
                    $(element).removeClass("c1");
                }
            });
        });
    </script>

    <!-- END: Theme JS-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->
    @yield('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @if (session('status'))
        <script>
            $(document).ready(function() {
                toastr.success('{!! session('status') !!}', "{{ __('Success') }}");
            });
        </script>
    @endif




    @if (Session::has('flash_message_error'))
        <script>
            $(document).ready(function() {
                toastr.error('{!! session('flash_message_error') !!}', "{{ __('Danger') }}");
            });
        </script>
    @endif

    @if (Session::has('flash_message_success'))
        <script>
            $(document).ready(function() {
                toastr.success('{!! session('flash_message_success') !!}', "{{ __('Success') }}");
            });
        </script>
    @endif

    <script>
        $(document).ready(function() {
            $(function() {

                $(".Delete").click(function() {
                    var id = $(this).attr('rel');
                    var url = $(this).attr('rel1');
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    });

                    $('.swal2-confirm').click(function() {
                        window.location.href = '{{ route('home') }}' + '/' + url + '/' +
                        id;
                    });
                });
            });
        });

        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('select').select2();
        });
    </script>

</body>
<!-- END: Body-->

</html>
