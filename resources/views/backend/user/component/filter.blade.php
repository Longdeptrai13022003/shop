<form action="{{ route('user.index') }}">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-2 m-b-xs">
                @php
                    $perpage=request('perpage') ? : old('perpage');
                @endphp
                <select class="input-sm form-control input-s-sm inline perpage" name="perpage">
                    @for ($i=20; $i<=200; $i+=20)
                        <option {{ ($perpage==$i) ? 'selected':'' }} value="{{ $i }}">{{ $i }} Results</option>
                    @endfor
                </select>
            </div>
            <div class="col-sm-3 m-b-xs">
                <select name="" id="" class="input-sm form control input-s-s inline setupSelect2">
                    <option value="0" class="text-center">Chọn nhóm thành viên</option>
                    <option value="1">Admin</option>
                    <option value="2">User</option>
                    <option value="3">Guest</option>
                </select>
            </div>
            <div class="col-sm-5">
                <div class="input-group">
                    <input type="text" name="keyword" placeholder="Please enter a keyword..." class="form-control" value="{{ request('keyword') ?:old('keyword') }}">
                    <span class="input-group-btn"><button type="submit" name="search" class="btn btn-primary"><i class="fa fa-search"></i> Search</button><span>
                </div>
            </div>
            <div class="col-sm-2">
                <a href="{{ route('user.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Thêm thành viên mới</a>
            </div>
        </div>
    </div>
</form>
