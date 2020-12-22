<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="container">
        <div class="col-12 col-md-12">
            <a href="{{route('agency.create')}}" class="btn btn-success">ADD</a>
            <form action="{{route('agency.search')}}" class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">
                    <input type="text" name="keyword" class="form-control bg-light border-0 small"
                           placeholder="Search for..." aria-label="Search"
                           aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
</nav>
<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            Danh sách đại lý phân phối
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>Mã số đại lý</th>
                    <th>Tên đại lý</th>
                    <th>Điện thoại</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Tên người quản lý</th>
                    <th>Trạng thái</th>
                    <th colspan="2">Chức năng</th>
                </tr>
                @forelse($agencies as $key => $agency)
                    <tr>

                        <td>{{$agency->code}}</td>
                        <td>{{$agency->name}}</td>
                        <td>{{$agency->phone}}</td>
                        <td>{{$agency->email}}</td>
                        <td>{{$agency->address}}</td>
                        <td>{{$agency->manager}}</td>
                        <td>{{$agency->status}}</td>
                        <td><a href="{{route('agency.edit',$agency->id)}}" class="btn btn-warning">
                                <svg width="22px" height="22px" viewBox="0 0 16 16" class="bi bi-pencil-fill"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                </svg>
                            </a></td>
                        <td><a onclick="return confirm('Bạn chắc chắn muốn xóa???')" href="{{route('agency.destroy',$agency->id)}}" class="btn btn-danger">
                                <svg width="22px" height="22px" viewBox="0 0 16 16" class="bi bi-trash-fill"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                                </svg>
                            </a></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" style="text-align: center">No data</td>
                    </tr>
                @endforelse
            </table>

</body>
</html>
