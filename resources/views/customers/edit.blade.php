@extends('home')
@section('title', 'Cập nhật thông tin khách hàng')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Cập nhật thông tin khách hàng</h1>
            </div>
            <div class="col-12">
                <form action="{{route('customers.update', ['id' =>$customer->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Customer name</label>
                        <input type="text" class="form-control" name="name" value="{{$customer->name}}" placeholder="Enter name" required>
                        @if($errors->has('name'))
                            <p class="alert-dark">{{$errors->first('name')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input type="number" class="form-control" name="age" value="{{$customer->age}}" placeholder="Enter age" required>
                        @if($errors->has('age'))
                            <p class="alert-dark">{{$errors->first('age')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="number" class="form-control" name="phone" value="{{$customer->phone}}" placeholder="Enter phone" required>
                        @if($errors->has('phone'))
                            <p class="alert-dark">{{$errors->first('phone')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>Birthday</label>
                        <input type="date" class="form-control" name="date" value="{{$customer->dob}}" placeholder="Enter birthday" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="{{$customer->email}}" placeholder="Enter email" required>
                        @if($errors->has('email'))
                            <p class="alert-dark">{{$errors->first('email')}}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <select class="form-control" name="city">
                            @foreach($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control-file" name="image" value="{{$customer->image}}" required>
                        @if($errors->has('image'))
                            <p class="alert-dark">{{$errors->first('image')}}</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-secondary" onclick="window.history.go(-1); return false;">
                        Cancel
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection