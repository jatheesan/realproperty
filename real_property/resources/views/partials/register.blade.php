<!-- Register Modal-->
<div class="modal" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
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
                            <div class="col-lg-5 d-none d-lg-block bg-register-image"
                                style="background-image: url('{{ asset('images/properties/prop-9.jpg')}}');"></div>
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                    </div>
                                        <form class="user" method="POST" id="registerForm">
                                        @csrf
                                            <div class="form-group">
                                                <input id="nameInput" type="text" class="form-control form-control-user" name="name" value="{{ old('name') }}"  autocomplete="name" placeholder="User Name" autofocus>

                                                <span class="invalid-feedback" role="alert" id="nameError">
                                                    <strong></strong>
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <input id="emailInput" type="email" class="form-control form-control-user" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                                <span class="invalid-feedback" role="alert" id="emailError">
                                                    <strong></strong>
                                                </span>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input id="passwordInput" type="password" class="form-control form-control-user" name="password" required autocomplete="new-password" placeholder="Password">

                                                    <span class="invalid-feedback" role="alert" id="passwordError">
                                                        <strong></strong>
                                                    </span>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-org btn-user btn-block">{{ __('Register Account') }}</button>
                                            </div>

                                            <hr style="border-top: 1px solid #6c757d !important;">
                                        </form>
                                    <div class="text-center">
                                        <a href="" class="small color-b" data-dismiss="modal" data-toggle="modal"
                                            data-target="#forgetpasswordModal">{{ __('Forgot Password?') }}</a>
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

<script>
$(function () {
    $('#registerForm').submit(function (e) {
        e.preventDefault();
        let formData = $(this).serializeArray();
        $(".invalid-feedback").children("strong").text("");
        $("#registerForm input").removeClass("is-invalid");
        $.ajax({
            method: "POST",
            headers: {
                Accept: "application/json"
            },
            url: "{{ route('register') }}",
            data: formData,
            success: () => window.location.assign("{{ route('home') }}"),
            error: (response) => {
                if(response.status === 422) {
                    let errors = response.responseJSON.errors;
                    Object.keys(errors).forEach(function (key) {
                        $("#" + key + "Input").addClass("is-invalid");
                        $("#" + key + "Error").children("strong").text(errors[key][0]);
                    });
                } else {
                    window.location.reload();
                }
            }
        })
    });
})
</script>
@endsection