<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Swadesh Properties</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('crm/assets/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('crm/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('crm/assets/vendors/css/vendor.bundle.base.css') }}" />
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('crm/assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('crm/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('crm/assets/css/style.css') }}" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('crm/assets/images/logo.png') }}" />
</head>
<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <img src="{{ asset('crm/assets/images/logo.png') }}" />
                            </div>
                            <h4>New here?</h4>
                            <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>

                            <form class="pt-3" method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="name" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <!-- Email Address -->
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg" id="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Email" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="password" name="password" required autocomplete="new-password" placeholder="Password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <div class="mb-4">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input" /> I agree to all Terms & Conditions
                                        </label>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                                </div>

                                <div class="text-center mt-4 font-weight-light">
                                    Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ asset('crm/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('crm/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('crm/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('crm/assets/js/misc.js') }}"></script>
    <!-- endinject -->
</body>
</html>
