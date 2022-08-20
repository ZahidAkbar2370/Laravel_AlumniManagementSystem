<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                    class="ficon feather icon-menu"></i></a></li>
                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-language-link" href="#" data-toggle="dropdown">
                                <div class="d-flex align-items-center"><i class="fas fa-language ficon"></i>
                                    {{-- @if (LaravelLocalization::getCurrentLocale() == 'fr')
                                        French
                                    @elseif(LaravelLocalization::getCurrentLocale() == 'es')
                                        Spanish
                                    @elseif(LaravelLocalization::getCurrentLocale() == 'pt')
                                        Portuguese
                                    @elseif(LaravelLocalization::getCurrentLocale() == 'en')
                                        English
                                    @endif&nbsp; --}}
                                    <i class="fas fa-caret-down"></i>
                                </div>
                            </a>
                            {{-- <div class="dropdown-menu dropdown-menu-left">
                                <a href="{{ url('client.local.update', ['French']) }}">
                                    <div class="dropdown-item">
                                        French
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('client.local.update', ['English']) }}">
                                    <div class="dropdown-item">
                                        English
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('client.local.update', ['Spanish']) }}">
                                    <div class="dropdown-item">
                                        Spanish
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href="{{ route('client.local.update', ['Portuguese']) }}">
                                    <div class="dropdown-item">
                                        Portuguese
                                    </div>
                                </a>
                            </div> --}}
                        </li>

                    </ul>
                </div>
                @php
                    $user = \Illuminate\Support\Facades\Auth::user();
                    $notif_count = 2;
                    // $notif_count = \App\Models\Notifications::where('created_at', '>', $user->notification_check ?? 0)->count();
                    $event_count = 3;
                    // $event_count = \App\Models\EventNotifications::where('created_at', '>', $user->event_check ?? 0)->count();
                    $events = [];
                    $notifications = [];
                @endphp
                <ul class="nav navbar-nav float-right">

                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                                class="ficon feather icon-maximize"></i></a></li>

                    <li class="dropdown dropdown-user nav-item"><a
                            class="dropdown-toggle nav-link dropdown-notification-link" href="#" onclick="event_check()"
                            data-toggle="dropdown"><i class="fas fa-calendar-alt ficon position-relative">
                                @if ($event_count > 0)
                                    <div class="bg-danger position-absolute rounded-circle text-white top" style="
                                top: -8px;
                                right: -8px;
                                font-size: 10px;
                                padding: 5px 7px;
                                border: 1px solid white;
                        ">{{ $event_count }}</div>
                                @endif
                            </i></a>
                        <div class="dropdown-menu dropdown-menu-right" style="max-width: 600px; width:80vw">
                            @foreach ($events as $event)
                                <div class="dropdown-item">
                                    <div class="row">
                                        <div class="col">
                                            <h6>{{ $event->subject }}</h6>
                                        </div>
                                        <div class="col text-right text-muted">{{ $event->created_at }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-11 text-wrap">
                                            <p>{{ $event->message }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                            @endforeach
                        </div>
                    </li>

                    <li class="dropdown dropdown-user nav-item"><a
                            class="dropdown-toggle nav-link dropdown-notification-link" href="#" onclick="notif_check()"
                            data-toggle="dropdown"><i class="fas fa-bell ficon position-relative">
                                @if ($notif_count > 0)
                                    <div class="bg-danger position-absolute rounded-circle text-white top" style="
                                    top: -8px;
                                    right: -8px;
                                    font-size: 10px;
                                    padding: 5px 7px;
                                    border: 1px solid white;
                            ">{{ $notif_count }}</div>
                                @endif
                            </i></a>
                        <div class="dropdown-menu dropdown-menu-right" style="max-width: 600px; width:80vw">
                            @foreach ($notifications as $notif)
                                <div class="dropdown-item">
                                    <div class="row">
                                        <div class="col">
                                            <h6>{{ $notif->subject }}</h6>
                                        </div>
                                        <div class="col text-right text-muted">{{ $notif->created_at }}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-11 text-wrap">
                                            <p>{{ $notif->message }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                            @endforeach
                        </div>
                    </li>


                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link"
                            href="#" data-toggle="dropdown">
                            <div class="user-nav d-sm-flex d-none">
                                <span class="user-name text-bold-600">
                                    {{ Auth::User()->first_name  ?? ""}}
                                </span>
                                <span class="user-status text-success">{{ __('Online') }}</span>
                            </div>
                            <span>
                                @if (!empty(Auth::User()->image ?? ""))
                                    <img class="round" src="{{ auth::user()->image ?? "" }}" alt="avatar"
                                        height="40" width="40">
                                @else
                                    <img class="round" src="{{ asset('/backend/images/placeholder.png') }}"
                                        class="avatar-lg rounded-circle" height="40" width="40">
                                @endif


                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            {{-- <a class="dropdown-item"
                                href="{{ route('client.profile.show', [strtolower(Auth::User()->role)]) }}"><i
                                    class="feather icon-user"></i> {{ __('Edit Profile') }}</a> --}}

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item"
                                href="{{ url('client.logout') }}"><i
                                    class="feather icon-power"></i> {{ __('Logout') }}</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<script>
    function notif_check() {
        fetch("{{ url('notif.check') }}");
    }

    function event_check() {
        fetch("{{ url('event.check') }}");
    }
</script>
