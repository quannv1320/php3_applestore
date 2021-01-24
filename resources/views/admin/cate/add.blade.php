@extends('admin.layouts.main')

@section('page-title', 'Tạo mới danh mục')

@section('content')
    <div class="col-md-8 offset-md-2">
        <form action="" method="post">
            @csrf
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label">Tên danh mục:</label>
              <div class="col-sm-10">
                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name')}}</span>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Miêu tả:</label>
              <div class="col-sm-10">
                <textarea name="detail" class="form-control">{{ old('detail') }}</textarea>
                @if ($errors->has('detail'))
                        <span class="text-danger">{{ $errors->first('detail')}}</span>
                @endif
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-10">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">Tạo mới</button>
                    <a href="" class="btn btn-warning">Hủy</a>
                </div>
              </div>
            </div>
          </form>
    </div>
@endsection
    
