@extends('admin.layouts.main')

@section('page-title', 'Danh sách danh mục')

@section('content')
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Miêu tả</th>
                <th>
                    <a href="{{ route('cate.add') }}" class="btn btn-sm btn-success">Thêm mới</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $cate)
                <tr>
                    <td>{{ $cate->id }}</td>
                    <td>{{ $cate->name }}</td>
                    <td>{{ $cate->detail }}</td>
                    <td>
                        <a href="{{ route('cate.edit', ['id' => $cate->id]) }}" class="btn btn-sm btn-primary">Sửa</a>
                        <a href="{{ route('cate.remove', ['id' => $cate->id]) }}" class="btn btn-sm btn-danger">Xóa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
    
