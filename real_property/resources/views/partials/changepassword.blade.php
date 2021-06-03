<!-- Password Change Modal-->
<div class="modal" id="changepasswordModal" tabindex="-1" role="dialog" aria-labelledby="changepasswordModal" aria-hidden="true">
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
                                        <h1 class="h4 text-gray-900 mb-4">{{ __('Change Password with Current Password') }}</h1>
                                    </div>
                                        <form class="user" method="POST" id="changepasswordForm">
                                        @csrf
                                            <div class="form-group">
                                                <input id="current_passwordInput" type="password" class="form-control form-control-user" name="current_password" required autocomplete="current_password" placeholder="Current Password">

                                                <span class="invalid-feedback" role="alert" id="current_passwordError">
                                                    <strong></strong>
                                                </span>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <input id="new_passwordInput" type="password" class="form-control form-control-user" name="new_password" required autocomplete="new-password" placeholder="Password">

                                                    <span class="invalid-feedback" role="alert" id="new_passwordError">
                                                        <strong></strong>
                                                    </span>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-org btn-user btn-block">{{ __('Update Password') }}</button>
                                            </div>

                                            <hr style="border-top: 1px solid #6c757d !important;">
                                        </form>
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
    $('#changepasswordForm').submit(function (e) {
        e.preventDefault();
        let formData = $(this).serializeArray();
        $(".invalid-feedback").children("strong").text("");
        $("#changepasswordForm input").removeClass("is-invalid");
        $.ajax({
            method: "POST",
            headers: {
                Accept: "application/json"
            },
            url: "{{ route('change.password') }}",
            data: formData,
            success: () => [window.location.assign("{{ url('/admin') }}"),alert("password Successfully Updated!")],
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