@extends('Admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                @if(Session::has("message"))
                    <p>{{ Session::get("message") }}</p>
                @endif
            </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->

                <section id="dashboard-analytics">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <a href="{{ url('admin/view-users') }}">
                                <div class="card">
                                    <div class="card-header d-flex align-items-start pb-0">
                                        <div>
                                            <h2 class="text-bold-700 mb-0">{{ $users ?? "1"}}</h2>
                                            <p class="text-dark">{{ __('Users') }}</p>
                                        </div>
                                        <div class="avatar bg-rgba-success p-50 m-0">
                                            <div class="avatar-content">
                                                <i class="feather icon-image text-success font-medium-5"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="col-lg-3 col-sm-6 col-12">
                            <a href="{{ url('admin/view-jobs') }}">
                                <div class="card">
                                    <div class="card-header d-flex align-items-start pb-0">
                                        <div>
                                            <h2 class="text-bold-700 mb-0">{{ $jobs ?? "2"}}</h2>
                                            <p class="text-dark">{{ __('Jobs') }}</p>
                                        </div>
                                        <div class="avatar bg-rgba-success p-50 m-0">
                                            <div class="avatar-content">
                                                <i class="feather icon-users text-success font-medium-5"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="col-lg-3 col-sm-6 col-12">
                            <a href="{{ url('admin/view-fourms') }}">
                                <div class="card">
                                    <div class="card-header d-flex align-items-start pb-0">
                                        <div>
                                            <h2 class="text-bold-700 mb-0">{{ $fourms ?? "3"}}</h2>
                                            <p class="text-dark">{{ __('Fourms') }}</p>
                                        </div>
                                        <div class="avatar bg-rgba-success p-50 m-0">
                                            <div class="avatar-content">
                                                <i class="feather icon-tag text-success font-medium-5"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-sm-6 col-12">
                            <a href="{{ url('admin/view-courses') }}">
                                <div class="card">
                                    <div class="card-header d-flex align-items-start pb-0">
                                        <div>
                                            <h2 class="text-bold-700 mb-0">{{ $courses ?? "3"}}</h2>
                                            <p class="text-dark">{{ __('Courses') }}</p>
                                        </div>
                                        <div class="avatar bg-rgba-success p-50 m-0">
                                            <div class="avatar-content">
                                                <i class="feather icon-tag text-success font-medium-5"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <a href="{{ url('admin/view-alimnus') }}">
                                <div class="card">
                                    <div class="card-header d-flex align-items-start pb-0">
                                        <div>
                                            <h2 class="text-bold-700 mb-0">{{ $alimuns ?? "4"}}</h2>
                                            <p class="text-dark">{{ __('Alimnus') }}</p>
                                        </div>
                                        <div class="avatar bg-rgba-success p-50 m-0">
                                            <div class="avatar-content">
                                                <i class="feather icon-image text-success font-medium-5"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                        
                        <div class="col-lg-3 col-sm-6 col-12">
                            <a href="{{ url('admin/view-gallery') }}">
                                <div class="card">
                                    <div class="card-header d-flex align-items-start pb-0">
                                        <div>
                                            <h2 class="text-bold-700 mb-0">{{ $gallery ?? "4"}}</h2>
                                            <p class="text-dark">{{ __('Gallery') }}</p>
                                        </div>
                                        <div class="avatar bg-rgba-success p-50 m-0">
                                            <div class="avatar-content">
                                                <i class="feather icon-image text-success font-medium-5"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                        {{-- <div class="col-lg-3 col-sm-6 col-12">
                            <a href="{{ url('admin/labels') }}">
                                <div class="card">
                                    <div class="card-header d-flex align-items-start pb-0">
                                        <div>
                                            <h2 class="text-bold-700 mb-0">{{ $labels ?? "5"}}</h2>
                                            <p class="text-dark">{{ __('Labels') }}</p>
                                        </div>
                                        <div class="avatar bg-rgba-success p-50 m-0">
                                            <div class="avatar-content">
                                                <i class="feather icon-users text-success font-medium-5"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <div class="col-lg-3 col-sm-6 col-12">
                            <a href="{{ url('admin/artists') }}">
                                <div class="card">
                                    <div class="card-header d-flex align-items-start pb-0">
                                        <div>
                                            <h2 class="text-bold-700 mb-0">{{ $artists ?? "6"}}</h2>
                                            <p class="text-dark">{{ __('Artists') }}</p>
                                        </div>
                                        <div class="avatar bg-rgba-success p-50 m-0">
                                            <div class="avatar-content">
                                                <i class="feather icon-tag text-success font-medium-5"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div> --}}
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="card h-100">
                                <div class="card-header d-flex align-items-start pb-0">
                                    <h2 class="mt-2 primary">{{ __('Sales Overview') }}</h2>
                                </div>
                                <hr class="mx-2">
                                <div class="card-body">
                                    <canvas id="canvas" height="280" width="600"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script type="text/javascript">
        var months = ["jan", "feb", "march", "april", "may", "june"]
        var user = [0,4,5,6,7,8,34];
        var barChartData = {
            labels: months,
            datasets: [{
                label: 'Royalties Total €',
                backgroundColor: "skyblue",
                data: user
            }]
        };

        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myBar = new Chart(ctx, {
                type: 'line',
                data: barChartData,
                options: {
                    // elements: {
                    //     rectangle: {
                    //         borderWidth: 2,
                    //         borderColor: '#c1c1c1',
                    //         borderSkipped: 'bottom'
                    //     }
                    // },
                    responsive: true,
                    // title: {
                    //     display: true,
                    //     text: 'Yearly User Joined'
                    // }
                }
            });
        };
    </script>
@endsection
