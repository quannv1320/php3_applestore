@extends('admin.layouts.main')

@section('page-title', 'Danh sách sản phẩm')

@section('content')
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Danh mục</th>
                <th>Ảnh</th>
                <th>Giá</th>
                <th>Sale</th>
                <th>
                    <a href="{{ route('pro.add') }}" class="btn btn-sm btn-success">Thêm mới</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $pro)
                <tr>
                    <td>{{ $pro->name }}</td>
                    <td>{{ $pro->category->name }}</td>
                    <td>
                        <img src="{{asset($pro->image_url)}}" alt="Image" width="100" class="img-thumbnail">
                    </td>
                    <td>{{ $pro->price }} $</td>
                    <td>{{ $pro->sale_percent }} %</td>
                    <td>
                        <a href="" class="btn btn-sm btn-primary">Sửa</a>
                        <a href="{{ route('pro.remove', ['id' => $pro->id]) }}" class="btn btn-sm btn-danger">Xóa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    
@endsection
    
