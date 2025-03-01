
<script>
    document.addEventListener("DOMContentLoaded", function () {
        @if(session('success_create'))
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
            };
            toastr.success("{{ session('success_create') }}");
        @endif
    });
    document.addEventListener("DOMContentLoaded", function () {
        @if(session('success_update'))
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
            };
            toastr.success("{{ session('success_update') }}");
        @endif
    });
</script>




