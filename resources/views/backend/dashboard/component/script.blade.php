<!-- Mainly scripts -->

<script src="backend/js/bootstrap.min.js"></script>

<script src="backend/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="backend/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src='backend/library/library.js'></script>

<!-- jQuery UI -->
<script src="backend/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Toastr -->
<script src="backend/js/plugins/toastr/toastr.min.js"></script>
<!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<!-- FontAwesome (Icons đẹp) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">



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

<!-- iCheck -->
<script src="backend/js/plugins/iCheck/icheck.min.js"></script>
<script src="backend/js/plugins/dataTables/datatables.min.js"></script>
<!-- Custom and plugin javascript -->
    <script src="backend/js/inspinia.js"></script>
    <script src="backend/js/plugins/pace/pace.min.js"></script>


<script>
    $(document).ready(function(){
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
</script>

<!-- đống tìm kiếm, xuất file -->
<script>
    $(document).ready(function(){
        $('.dataTables-example').DataTable({
            pageLength: parseInt($('.perpage').val()),
            responsive: true,
            searching: false,
            dom: '<"html5buttons"B>lTfgitp',
            // buttons: [
            //     { extend: 'copy'},
            //     {extend: 'csv'},
            //     {extend: 'excel', title: 'ExampleFile'},
            //     {extend: 'pdf', title: 'ExampleFile'},

            //     {extend: 'print',
            //      customize: function (win){
            //             $(win.document.body).addClass('white-bg');
            //             $(win.document.body).css('font-size', '12px');

            //             $(win.document.body).find('table')
            //                     .addClass('compact')
            //                     .css('font-size', 'inherit');
            //     }
            //     }
            // ]
            buttons: [
        {
            extend: 'copy',
            text: '<i class="fas fa-copy"></i> Sao chép',
            className: 'btn btn-primary'
        },
        {
            extend: 'csv',
            text: '<i class="fas fa-file-csv"></i> CSV',
            className: 'btn btn-success'
        },
        {
            extend: 'excel',
            text: '<i class="fas fa-file-excel"></i> Excel',
            className: 'btn btn-warning'
        },
        {
            extend: 'pdf',
            text: '<i class="fas fa-file-pdf"></i> PDF',
            orientation: 'landscape',
            className: 'btn btn-danger'
        },
        {
            extend: 'print',
            text: '<i class="fas fa-print"></i> In',
            className: 'btn btn-info',
            customize: function (win){
                $(win.document.body).addClass('white-bg');
                $(win.document.body).css('font-size', '12px');
                $(win.document.body).find('table')
                    .addClass('compact')
                    .css('font-size', 'inherit');
            }
        }
    ]
        });

    });
</script>

