<!DOCTYPE html>
<html>

    <head>
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body class="bg-light">
        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">

        </div>
         @endif
        <div class="container mt-5">
            <h2 class="mb-4">Login</h2>

            @if ($errors->any())
            <div class="alert alert-danger">{{ $errors->first() }}</div>
            @endif

            <form method="POST" action="{{ route('login_user') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required
                        autofocus>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="remember_me" id="remember_me">
                    <label class="form-check-label" for="remember_me">Remember me</label>
                </div>

                <button type="submit" class="btn btn-primary">Login</button>

                <a href="{{ route('register') }}" class="btn btn-link">Don't have an account? Register here</a>
            </form>
        </div>
    </body>

</html>