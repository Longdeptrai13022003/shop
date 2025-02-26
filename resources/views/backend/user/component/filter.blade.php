<div class="row">
    <div class="col-sm-3 m-b-xs"><select class="input-sm form-control input-s-sm inline">
        @for ($i=20; $i<=200; $i++)
            <option value="{{ $i }}">{{ $i }} Results</option>
        @endfor
    </select>
    </div>
    <div class="col-sm-4 m-b-xs">
        <select name="" id="" class="input-sm form control input-s-s inline">
            <option value="0" class="text-center">Chọn nhóm thành viên</option>
            <option value="1">Admin</option>
            <option value="2">User</option>
            <option value="3">Guest</option>
        </select>
    </div>
    <div class="col-sm-5">
        <div class="input-group"><input type="text" placeholder="Search" class="input-sm form-control" name="search"> <span class="input-group-btn">
            <button type="button" class="btn btn-sm btn-primary"> Search</button> </span></div>
    </div>
</div>
<div>
    <a href="" class="btn btn-primary"><i class="fa fa-plus"></i> Thêm thành viên mới</a>
</div>