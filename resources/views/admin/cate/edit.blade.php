@extends('admin.layouts.main')

@section('page-title', 'Sửa danh mục')

@section('content')
    <div class="col-md-6 offset-md-3">
        <form action="" method="POST">
            @csrf
            <div class="form-group ofset-3">
                <label for="">Tên danh mục</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $model->name) }}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name')}}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="">Miêu tả</label>
                <input type="text" name="detail" class="form-control" value="{{ old('name', $model->detail) }}">
                @if ($errors->has('detail'))
                    <span class="text-danger">{{ $errors->first('detail')}}</span>
                @endif
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Cập nhật</button>
                <a href="{{ route('cate.index') }}" class="btn btn-warning">Hủy</a>
            </div>
        </form>
    </div>
@endsection
    
