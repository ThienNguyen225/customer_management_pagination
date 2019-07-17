@extends('home')
@section('title', 'Cập nhập thông tin tỉnh thành')
@section('content')
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Thêm mới tỉnh thành</h1>
        </div>
        <div class="col-12">
            <form action="{{route('cities.update', ['id' => $city->id])}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Province name</label>
                    <input type="text" class="form-control" name="name" value="{{$city->name}}" required>
                    @if($errors->has('name'))
                        <p class="alert-danger">{{$errors->first('name')}}</p>
                        @endif
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection