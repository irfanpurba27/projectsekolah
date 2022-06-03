<!DOCTYPE html>
<html lang="zxx">

<head>
    <title> Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all">
    <link rel="icon"  href="{{ asset('images/bn.png') }}">

</head>

<body>
    <div class="w3l-signinform">
        <div class="wrapper">
            <!-- main content -->
            <div class="w3l-form-info">
                <div class="w3_info">
                    
                    <h1>SMK Bagimu Negeriku</h1>

                    <p class="sub-para">Data Adminitrasi Siswa</p>
                    <h2>Log In</h2>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        <div class="input-group">
                            <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            <input id="email" type="email" placeholder="Email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group two-groop">
                            <span><i class="fa fa-key" aria-hidden="true"></i></span>
                            <input id="password" type="Password" placeholder="Password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-row bottom">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember"> Remember me?</label>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">{{ __('Login') }}</button>
                    </form>

                    <p class="account">Belum punya akun? <a href="{{ url('register') }}">{{ __('Register') }}</a></p>
                </div>
            </div>
            <!-- //main content -->
        </div>
        <!-- //container -->
    </div>
    @include('sweetalert::alert')
</body>

</html>


