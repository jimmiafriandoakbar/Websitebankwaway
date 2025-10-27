@include('admin.partials.head')

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1 text-danger"><img src="{{ asset('logo.png') }}" width="283px" height="70px"
                        alt=""></a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Login untuk memulai session</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" id="email" name="email" type="email"
                            class="form-control @error('email') is-invalid @enderror" placeholder="Email" required
                            autocomplete="email" autofocus>

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" id="password" name="password" type="password"
                            class="form-control  @error('password') is-invalid @enderror" placeholder="Password"
                            required autocomplete="email" autofocus>

                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">
                                    Ingat Saya
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


                @if (Route::has('password.request'))
                    <p class="mb-1">
                        <a href="{{ route('password.request') }}">Lupa Password..</a>
                    </p>
                @endif
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->


    @include('admin.partials.script')

</body>

</html>
