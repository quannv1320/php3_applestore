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
                        <!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModal">
    Chi tiết
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Chi tiết sản phẩm</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $pro->name }}</td>
                        <td>{{ $pro->description }}</td>
                    </tr>
                </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    
@endsection
    
