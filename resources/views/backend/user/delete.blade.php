@include('backend.dashboard.component.breadcum', ['title' => $config['seo']['delete']['title']])
<form action="{{ route('user.destroy', $user->id) }}" method="post" class="box">
    @csrf
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">Xoá thông tin người dùng</div>
                    <div class="panel-description">
                        <p>Bạn đang thực hiện xoá thông tin người dùng có email: <strong>{{ $user->email }}</strong></p>
                        <p>Lưu ý: Tài khoản người dùng sau khi xoá <strong>KHÔNG THỂ PHỤC HỒI</strong></p>
                        <P><span class="text-danger font-normal">BẠN CHẮC CHẮN CHỨ ?</span></P>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">
                                        Email <span class="text-danger font-normal">(*)</span>
                                    </label>
                                    <input
                                    type="text" value="{{ old('email', ($user->email) ?? '') }}" class="form-control" name="email" placeholder="" autocomplete="off" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">
                                        Name <span class="text-danger font-normal">(*)</span>
                                    </label>
                                    <input
                                    type="text" value="{{ old('name', ($user->name) ?? '') }}" class="form-control" name="name" placeholder="" autocomplete="off" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right">
            <button class="btn btn-danger mb15 btn-lg btn-outline center-block" type="submit" name="send">Xoá nè</button>
        </div>
    </div>
</form>

