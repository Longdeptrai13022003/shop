<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered dataTables-example">
        <thead>
            <tr>
                <th>
                    <input type="checkbox" id="checkAll" value="" class="i-checks">
                </th>
                <th>STT</th>
                <th>Anh</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Thao tác</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($users) && is_object($users))
                @foreach ($users as $user)
                    <tr>
                        <td><input type="checkbox" class="i-checks" name="input[]"></td>
                        <td>{{ $user->id }}</td>
                        <td>
                            <span class="image img-cover"><img src="./backend/img/linh.jpg" alt=""></span>
                        </td>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td>
                            {{ $user->phone }}
                        </td>
                        <td>
                            {{ $user->address }}
                        </td>
                        <td>
                            <a href="" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                        <td><input type="checkbox" class="js-switch" checked /></td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    {{ $users->links('pagination::bootstrap-5') }}
</div>