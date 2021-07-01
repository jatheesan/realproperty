@extends('layouts.boxroomlayout')
@section('content')
    <!--============== Signup Form Start ==============-->
    <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 mx-auto">
                        <div class="bg-white xs-p-20 p-50 border rounded">
                            <div class="form-icon-left rounded form-boder">
                                <h2 class="mb-4" style="color:#ff7f50 !important;">{{ __('Login') }}</h2>
                                <form method="POST" action="{{ route('login') }}">
                                @csrf
                                    <div class="row row-cols-1 g-3">
                                        <div class="col">
                                            <label class="mb-2">Email Address</label>
                                            <input type="email" id="email" name="email" class="form-control bg-light @error('email') is-invalid @enderror" value="{{ old('email') }}" aria-describedby="emailHelp" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <label class="mb-2">Password</label>
                                            <input id="password" type="password" class="form-control bg-light @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col">
                                            <button type="submit" class="btn btn-primary mb-3">{{ __('Login') }}</button>
                                        </div>
                                        <div class="col">
                                            <a href="" class="text-dark d-table py-1" data-bs-toggle="modal" data-bs-target="#exampleModal">{{ __('Forgot Your Password or Username?') }}</a>
                                            <a href="#" class="text-dark d-table py-1"><u>Don't have account? Click here.</u></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Signup Form End ==============-->

        <!-- Modal -->
        <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-fade-transform">
                    <!-- Outer Row -->
                <div class="row justify-content-left">
                <button type="button" onclick="javascript:window.location.reload()" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row justify-content-center">
                    <div class="modal-content p-0">
                        <div class="col-xl-12 col-lg-12 col-md-9">
                            <div class="card">
                                <div class="card-body p-0">
                                    <!-- Nested Row within Card Body -->
                                    <div class="row">
                                        <div class="col-lg-6 d-none d-lg-block"
                                            style="background-image: url('{{ asset('images/properties/prop-9.jpg')}}');"></div>
                                        <div class="col-lg-6">
                                            <div class="p-5">
                                                <div class="text-center">
                                                    <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                                    <p class="mb-4">We get it, stuff happens. Just enter your email address
                                                        below and we'll send you a link to reset your password!</p>
                                                </div>
                                                @if (session('status'))
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('status') }}
                                                </div>
                                                @endif
                                                <form class="user" method="POST" action="{{ route('password.email') }}">
                                                    @csrf
                                                    <div class="row row-cols-1 g-3 justify-content-center">
                                                        <div class="col">
                                                            <label class="mb-2">Email Address</label>
                                                            <input id="email" type="email"
                                                                class="form-control bg-light @error('email') is-invalid @enderror"
                                                                name="email" value="{{ old('email') }}" required
                                                                autocomplete="email" autofocus>

                                                            @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                        <div class="col justify-content-center">
                                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                                {{ __('Send Reset Link') }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <hr style="border-top: 1px solid #6c757d !important;">
                                                <div class="text-center">
                                                    <a href="" class="small color-b" data-dismiss="modal" data-toggle="modal"
                                                        data-target="#loginModal">{{ __('Already have an account? Login!') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

@endsection

@section('scripts')
@parent

@if(session('status'))
    <script>
    $(function() {
        $('#exampleModal').modal({
            show: true
        });
    });
    </script>
@endif

@endsection