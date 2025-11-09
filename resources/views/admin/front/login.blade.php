@include('admin.includes.head')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
            <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg" style="background-color: #f4f7fc !important; height: 100vh;">
                <div class="card col-lg-4 mx-auto shadow-lg rounded">
                    <div class="card-body px-5 py-5" style="background-color: #1a1a1a; border-radius: 15px;">
                        <div class="text-center mb-4">
                            <h3 class="card-title text-white mb-3">Mahalaxmi Steel and Hardware</h3>
                            <p class="text-muted">Enter your login credentials</p>
                            <hr>
                        </div>

                        <form action="{{ route('login.check') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @include('admin.includes.errors')
                            @include('admin.includes.message')

                            <!-- Email Input -->
                            <div class="form-group mb-3">
                                <input type="email" class="form-control p_input" placeholder="Email Id..." name="email" value="{{ old('email') }}" required
                                       pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$"
                                       title="Enter a valid email address"
                                       style="border-radius: 25px; padding: 15px; background-color: #333333; color: #fff;">
                            </div>

                            <!-- Password Input -->
                            <div class="form-group mb-4">
                                <input type="password" class="form-control p_input" placeholder="Password..." name="password" value="{{ old('password') }}" required
                                       style="border-radius: 25px; padding: 15px; background-color: #333333; color: #fff;">
                            </div>

                            <!-- Login Button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block enter-btn" style="border-radius: 25px; padding: 10px 30px; background-color: #007bff; color: #fff;">
                                    Login
                                </button>
                            </div>

                            <!-- Additional Options (optional) -->
                            <!--
                            <div class="text-center mt-3">
                                <a href="#" class="forgot-pass text-white">Forgot password?</a>
                            </div>
                            -->

                            <!-- Sign Up Option (optional) -->
                            <!--
                            <p class="sign-up mt-3 text-center">Don't have an Account? <a href="#" style="color: #007bff;">Sign Up</a></p>
                            -->
                        </form>
                    </div>
                </div>
            </div>

            <!-- page-body-wrapper ends -->
        </div>
