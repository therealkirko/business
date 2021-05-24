<x-guest-layout>
    <div class="card">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-md-6 p-5">
                    <div class="mx-auto mb-5">
                        <a href="index.html">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="" height="24" />
                            <h3 class="d-inline align-middle ml-1 text-logo">Shreyu</h3>
                        </a>
                    </div>

                    <h6 class="h5 mb-0 mt-4">Welcome back!</h6>
                    <p class="text-muted mt-1 mb-4">Enter your email address and password to access admin panel.</p>

                    <x-jet-validation-errors class="mb-4" />

                    <form action="{{ route('register') }}" method="POST" class="authentication-form">
                        @csrf
                        <div class="form-group">
                            <label class="form-control-label">Full Name</label>
                            <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-dual" data-feather="user"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" :value="old('name')" required autofocus />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-control-label">Email Address</label>
                            <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-dual" data-feather="mail"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" id="email" name="email" placeholder="hello@email.com" :value="old('email')" required />
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <label class="form-control-label">Password</label>
                            <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-dual" data-feather="lock"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="Enter your password" required autocomplete="current-password" >
                            </div>
                        </div>

                        <div class="form-group mt-4">
                            <label class="form-control-label">Password</label>
                            <div class="input-group input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="icon-dual" data-feather="lock"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm your passeord" required autocomplete="new-password" >
                            </div>
                        </div>

                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="form-group mb-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signin" name="terms">
                                    <label class="custom-control-label" for="checkbox-signin">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </label>
                                </div>
                            </div>
                        @endif


                        <div class="form-group mb-0 text-center">
                            <button class="btn btn-primary btn-block" type="submit"> Register
                            </button>
                        </div>
                    </form>
                    <div class="py-3 text-center"><span class="font-size-16 font-weight-bold">Or</span></div>
                    <div class="row">
                        <div class="col-6">
                            <a href="#" class="btn btn-white"><i class='uil uil-google icon-google mr-2'></i>With Google</a>
                        </div>
                        <div class="col-6 text-right">
                            <a href="#" class="btn btn-white"><i class='uil uil-facebook mr-2 icon-fb'></i>With Facebook</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-md-inline-block">
                    <div class="auth-page-sidebar">
                        <div class="overlay"></div>
                        <div class="auth-user-testimonial">
                            <p class="font-size-24 font-weight-bold text-white mb-1">I simply love it!</p>
                            <p class="lead">"It's a elegent templete. I love it very much!"</p>
                            <p>- Admin User</p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div> <!-- end card-body -->
    </div>
    <!-- end card -->

    <div class="row mt-3">
        <div class="col-12 text-center">
            <p class="text-muted">Don't have an account? <a href="{{ route('login') }}" class="text-primary font-weight-bold ml-1">Sign Up</a></p>
        </div> <!-- end col -->
    </div>
</x-guest-layout>
