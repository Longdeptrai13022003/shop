

<!DOCTYPE html>
<html>
<S>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
  <link rel="stylesheet" href="..\resources\css\login.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <!-- Mainly scripts -->
<script src="backend/js/jquery-3.1.1.min.js"></script>
<script src="backend/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="backend/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
  <!-- jQuery UI -->
<script src="backend/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Toastr -->
<script src="backend/js/plugins/toastr/toastr.min.js"></script>
<!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

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
    
    // document.addEventListener("DOMContentLoaded", function () {
    //     @if(session('logout_success'))
    //         Swal.fire({
    //             icon: 'success',
    //             title: 'Đăng xuất thành công!',
    //             text: '{{ session("login_success") }}',
    //             showConfirmButton: false,
    //             timer: 2500
    //         });
    //     @endif
    //     @if(session('login_error'))
    //         Swal.fire({
    //             icon: 'error',
    //             title: 'Sai tên đăng nhập hoặc mật khẩu!',
    //             text: '{{ session("login_error") }}',
    //             showConfirmButton: false,
    //             timer: 2000
    //         });
    //     @endif
    // });
    document.addEventListener("DOMContentLoaded", function () {
        @if(session('logout_success'))
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
            };
            toastr.success("{{ session('logout_success') }}");
        @endif
    });
    document.addEventListener("DOMContentLoaded", function () {
        @if(session('login_error'))
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
            };
            toastr.error("{{ session('login_error') }}");
        @endif
    });
    document.addEventListener("DOMContentLoaded", function () {
        @if(session('authen_error'))
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
            };
            toastr.error("{{ session('authen_error') }}");
        @endif
    });
</script>
</html>