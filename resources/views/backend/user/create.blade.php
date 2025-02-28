@include('backend.dashboard.component.breadcum', ['title' => $config['seo']['create']['title']])

<form action="" method="" class="box">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">Thông tin chung</div>
                    <div class="panel-description">
                        <p>Nhập thông tin cá nhân người sử dụng</p>
                        <p>Lưu ý: Những thông tin chứa dấu <span class="text-danger font-normal">(*)</span> là bắt buộc</p>
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
                                    type="text" class="form-control" name="email" placeholder="" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">
                                        Name <span class="text-danger font-normal">(*)</span>
                                    </label>
                                    <input
                                    type="text" class="form-control" name="name" placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row mt20">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">
                                        Nhóm thành viên
                                    </label>
                                    <select name="user_catalogue_id" id="" class="form-control chosen-select setupSelect2">
                                        <option value="">[Chọn nhóm thành viên]</option>
                                        <option value="">Admin</option>
                                        <option value="">User</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">
                                        Ngày sinh
                                    </label>
                                    <input
                                    type="text" class="form-control" name="birthday" placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row mt20">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">
                                        Mật khẩu <span class="text-danger font-normal">(*)</span>
                                    </label>
                                    <input
                                    type="password" class="form-control" name="password" placeholder="" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">
                                        Nhập lại mật khẩu <span class="text-danger font-normal">(*)</span>
                                    </label>
                                    <input
                                    type="password" class="form-control" name="re_password" placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row mt20">
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">
                                        Ảnh đại diện
                                    </label>
                                    <input
                                    type="text" class="form-control" name="image" placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt20">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">Thông tin liên hệ</div>
                    <div class="panel-description">Nhập thông tin liên hệ của người dùng</div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">
                                        Số điện thoại
                                    </label>
                                    <input
                                    type="text" class="form-control" name="phone" placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row mt20">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">
                                        Thành phố
                                    </label>
                                    <select name="province_id" id="" class="form-control setupSelect2 province">
                                        <Option value="0">[Chọn thành phố]</Option>
                                        @if (isset($provinces) && count($provinces) > 0)
                                            @foreach ($provinces as $province)
                                                <option value="{{ $province->code }}">{{ $province->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">
                                        Quận/Huyện
                                    </label>
                                    <select name="district_id" id="districts" class="form-control setupSelect2 districts">
                                        <Option value="0">[Chọn quận/huyện]</Option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt20">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">
                                        Phường/Xã
                                    </label>
                                    <select name="ward_id" id="" class="form-control setupSelect2">
                                        <Option value="0">[Chọn phường/xã]</Option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">
                                        Địa chỉ
                                    </label>
                                    <input
                                    type="text" class="form-control" name="address" placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row mt20">
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">
                                        Ghi chú
                                    </label>
                                    <input
                                    type="text-area" class="form-control" name="description" placeholder="" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-right">
            <button class="btn btn-primary mb15 btn-lg btn-outline" type="submit" name="send">Lưu lại</button>
        </div>
    </div>
</form>
