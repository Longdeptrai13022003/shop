<!DOCTYPE html>
<html>
<S>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
  <link rel="stylesheet" href="..\resources\css\login.css">
</S>
<body>
<div class="wrapper">
    <form action="{{ route('auth.login') }}" method="post">
        @csrf
        <h2>Login</h2>
        <div class="input-field">
            <input type="text" name="email" value="{{ old('email') }}">
            <label>Enter your email</label>
        </div>
        @if ($errors->has('email'))
            <span class="error-mess">*{{ $errors->first('email') }}</span>
        @endif
        <div class="input-field">
            <input type="password" name="password">
            <label>Enter your password</label>
        </div>
        @if ($errors->has('password'))
            <span class="error-mess">*{{ $errors->first('password') }}</span>
        @endif
        <div class="forget">
            <label for="remember">
                <input type="checkbox" id="remember" name="remember">
                <p>Remember me</p>
            </label>
            <a href="#">Forgot password?</a>
        </div>
        <button type="submit">Log In</button>
        <div class="register">
            <p>Don't have an account? <a href="#">Register</a></p>
        </div>
    </form>
    @if (session('error'))
        <div class="error-mess">{{ session('error') }}</div>
    @endif
</div>
</body>
<script>
    document.querySelectorAll(".input-field input").forEach((input) => {
        input.addEventListener("input", function () {
            if (this.value.trim() !== "") {
                this.classList.add("active");
            } else {
                this.classList.remove("active");
            }
        });
    });
</script>
</html>