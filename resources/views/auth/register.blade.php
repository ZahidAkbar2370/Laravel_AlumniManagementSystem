@extends("Frontend.layout")
@section('content')

<!-- start revolution slider -->
        <section class="p-5 example home-startup bg-dark-slate-blue">
            <article class="content">
                <div id="rev_slider_26_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="mask-showcase" data-source="gallery">
                	
                </div>
            </article>
        </section>
<!-- end revolution slider -->
@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            
                            <div class="col-md-6">
                                <label for="firstname" class="col-md-4 col-form-label">{{ __('First Name') }}</label>

                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="name" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="middlename" class="col-md-4 col-form-label">{{ __('Middle Name') }}</label>

                                <input id="middlename" type="text" class="form-control @error('middlename') is-invalid @enderror" name="middlename" value="{{ old('middlename') }}" required autocomplete="name" autofocus>

                                @error('middlename')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="lastname" class="col-md-4 col-form-label">{{ __('Last Name') }}</label>

                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="name" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="gender" class="col-md-4 col-form-label">{{ __('Gender') }}</label>

                                <select id="gender" class="form-control" name="gender" required>
                                    <option value="">Select Course</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="batch" class="col-md-4 col-form-label">{{ __('Batch') }}</label>

                                <select id="batch" class="form-control" name="batch" required>
                                    <option value="">Select Batch</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                </select>

                                @error('batch')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                        {{-- <div class="row mb-3"> --}}
                            
                            <div class="col-md-6">
                                <label for="email" class="col-md-4 col-form-label">{{ __('Email Address') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        {{-- </div> --}}

                        {{-- <div class="row mb-3"> --}}
                            
                            <div class="col-md-6">
                                <label for="password" class="col-md-4 col-form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        {{-- </div> --}}

                        {{-- <div class="row mb-3"> --}}
                            
                            <div class="col-md-6">
                                <label for="password-confirm" class="col-md-4 col-form-label ">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-3">

                            <div class="col-md-6">
                            <label style="color: black" for="courses" class="col-md-4 col-form-label">{{ __('Select Course') }}</label>
                                <select id="courses" class="form-control" name="course" required>
                                    <option value="">Select Course</option>
                                    @php
                                        $courses = App\Models\Course::all();
                                    @endphp
                                    @if(!empty($courses))
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->id }}" style="color: black">{{ $course->course_name }}</option>
                                        @endforeach
                                    @endif
                                </select>

                                @error('course')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                            <label style="color: black" for="type" class="col-md-4 col-form-label">{{ __('Select Course') }}</label>
                                <select id="type" class="form-control" name="type" required>
                                    <option value="">Select Type</option>
                                    <option value="student">Student</option>
                                    <option value="alumini">Alumni</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
