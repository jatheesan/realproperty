<!-- Login Modal-->
<div class="modal" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <button type="button" onclick="javascript:window.location.reload()" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block"
                                style="background-image: url('{{ asset('images/properties/prop-9.jpg')}}');"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." required autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password" placeholder="Password">
                                        
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input"  name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-org btn-user btn-block">{{ __('Login') }}</button>
                                        </div>
                                        <hr style="border-top: 1px solid #6c757d !important;">
                                    </form>

                                    @if (Route::has('password.request'))
                                        <div class="text-center">
                                            <a href="" class="small color-b" data-dismiss="modal" data-toggle="modal"
                                            data-target="#forgetpasswordModal">{{ __('Forgot Your Password?') }}</a>
                                        </div>
                                    @endif
                                    {{--<div class="text-center">
                                        <a href="{{ route('password.request') }}" class="small color-b">{{ __('Forgot Your Password?') }}</a>
                                    </div>--}}
                                    <div class="text-center">
                                        <a href="" class="small color-b" data-dismiss="modal" data-toggle="modal"
                                            data-target="#registerModal">{{ __('Create an Account!') }}</a>
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

@section('scripts')
@parent

@if($errors->has('email') || $errors->has('password'))
    <script>
    $(function() {
        $('#loginModal').modal({
            show: true
        });
    });
    </script>
@endif

@endsection