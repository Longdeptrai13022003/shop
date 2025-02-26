<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>{{ config('apps.user.title') }}</h2>
        <ol class="breadcrumb" style="margin-bottom: 10px;">
            <li>
                <a href="{{ route('dashboard.index') }}">Dashboard</a>
            </li>
            <li>
                <a>Quản lý thành viên</a>
            </li>
            <li class="active">
                <strong>{{config('apps.user.title')}}</strong>
            </li>
    </div>
</div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>{{ config('apps.user.tableHeading') }}</h5>
                        @include('backend.user.component.toolbox')
                    </div>
                    <div class="ibox-content">
                        @include('backend.user.component.filter')
                        @include('backend.user.component.table')
                    </div>
                </div>
            </div>

        </div>
    </div>
<script>
    $(document).ready(function() {
        var elem = document.querySelector('.js-switch');
        var switchery = new Switchery(elem, { color: '#1AB394' });
    });
</script>