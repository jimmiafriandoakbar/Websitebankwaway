
@include('admin.partials.head')
<body class="hold-transition login-page">

    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
            <a href="#" class="h1 text-danger">BANK<b> WAWAY</b></a>
            </div>
            <div class="card-body">
            <p class="login-box-msg">Anda hanya selangkah lagi dari kata sandi baru Anda, pulihkan kata sandi Anda sekarang.</p>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="input-group mb-3">
                    <input  id="email" type="email"  class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" >
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
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password Baru" name="password" required autocomplete="new-password">
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

                <div class="input-group mb-3">
                <input id="password-confirm" type="password" class="form-control" placeholder="Konfirmasi Password" name="password_confirmation" required autocomplete="new-password">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Ubah Password</button>
                </div>
                <!-- /.col -->
                </div>
            </form>
        
            <p class="mt-3 mb-1">
                <a href="{{route('login')}}">Login</a>
            </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

@include('admin.partials.script')

</body>
</html>
