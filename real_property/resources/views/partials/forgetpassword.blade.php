<!-- Forget Password-->
<div class="modal" id="forgetpasswordModal" tabindex="-1" role="dialog" aria-labelledby="forgetpasswordModal" aria-hidden="true">
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
                            <div class="col-lg-6 d-none d-lg-block" style="background-image: url('{{ asset('images/properties/prop-9.jpg')}}');"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                        <p class="mb-4">We get it, stuff happens. Just enter your email address
                                            below
                                            and we'll send you a link to reset your password!</p>
                                    </div>
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <form class="user" method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Email Address...">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>
                                        <button type="submit" class="btn btn-org btn-user btn-block">
                                            {{ __('Send Password Reset Link') }}
                                        </button>
                                    </form>
                                    <hr style="border-top: 1px solid #6c757d !important;">
                                    <div class="text-center">
                                        <a href="" class="small color-b" data-dismiss="modal" data-toggle="modal"
                                            data-target="#registerModal">{{ __('Create an Account!') }}</a>
                                    </div>
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

@section('scripts')
@parent

@if(session('status'))
    <script>
    $(function() {
        $('#forgetpasswordModal').modal({
            show: true
        });
    });
    </script>
@endif

@endsection
