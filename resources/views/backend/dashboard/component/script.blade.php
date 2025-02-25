<!-- Mainly scripts -->
<script src="backend/js/jquery-3.1.1.min.js"></script>
<script src="backend/js/bootstrap.min.js"></script>

<script src="backend/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="backend/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- jQuery UI -->
<script src="backend/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Toastr -->
<script src="backend/js/plugins/toastr/toastr.min.js"></script>
<!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


@if(isset($config['js']) && is_array($config['js']))
    @foreach ($config['js'] as $key=>$val)
        {!!'<script src="'.$val.'"></script>'!!}
    @endforeach
@endif
{{-- @foreach ($config['js'] as $key=>$val)
    {!!'<script src="'.$val.'"></script>'!!}
@endforeach --}}

<script>
    // document.addEventListener("DOMContentLoaded", function () {
    //     @if(session('login_success'))
    //         Swal.fire({
    //             icon: 'success',
    //             title: 'Đăng nhập thành công!',
    //             text: '{{ session("login_success") }}',
    //             showConfirmButton: false,
    //             timer: 2500
    //         });
    //     @endif
    // });
    // document.addEventListener("DOMContentLoaded", function () {
    //     toastr.success("Test Toastr", "Thông báo");
    // });
    document.addEventListener("DOMContentLoaded", function () {
        @if(session('login_success'))
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
            };
            toastr.success("{{ session('login_success') }}");
        @endif
    });
</script>