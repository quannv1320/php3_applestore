@extends('admin.layouts.main')

@section('page-title', 'Tạo mới sản phẩm')

@section('content')
    <div class="col-md-8 offset-md-2">
        <form action="" method="post">
            @csrf
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Tên sản phẩm:</label>
                <div class="col-sm-10">
                  <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                  {{-- @if ($errors->has('name'))
                          <span class="text-danger">{{ $errors->first('name')}}</span>
                  @endif --}}
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Danh mục:</label>
                <div class="col-sm-10">
                    <select name="category_id" class="custom-select">
                        @foreach ($categories as $cate)
                        <option value="{{$cate->id}}">{{$cate->name}}</option>
                        @endforeach
                    </select>
                  {{-- @if ($errors->has('name'))
                          <span class="text-danger">{{ $errors->first('name')}}</span>
                  @endif --}}
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Đường dẫn ảnh:</label>
                <div class="col-sm-10">
                  <input type="text" name="iamge_url" class="form-control" value="{{ old('image_url') }}">
                  {{-- @if ($errors->has('name'))
                          <span class="text-danger">{{ $errors->first('name')}}</span>
                  @endif --}}
                </div>
              </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-form-label">Miêu tả:</label>
              <div class="col-sm-10">
                <textarea name="desciption" class="form-control">{{ old('description') }}</textarea>
                {{-- @if ($errors->has('detail'))
                        <span class="text-danger">{{ $errors->first('detail')}}</span>
                @endif --}}
              </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Giá:</label>
                <div class="col-sm-10">
                  <input type="text" name="price" class="form-control" value="{{ old('price') }}">
                  {{-- @if ($errors->has('name'))
                          <span class="text-danger">{{ $errors->first('name')}}</span>
                  @endif --}}
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Sale:</label>
                <div class="col-sm-10">
                  <input type="text" name="sale_percent" class="form-control" value="{{ old('sale_percent') }}">
                  {{-- @if ($errors->has('name'))
                          <span class="text-danger">{{ $errors->first('name')}}</span>
                  @endif --}}
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
    
