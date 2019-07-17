@extends('home')
@section('title', 'Chi tiết khách hàng')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Xóa thông tin khách hàng</h1>
            </div>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Customer name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Birthday</th>
                        <th scope="col">Email</th>
                        <th scope="col">City</th>
                        <th scope="col">Image</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">{{$customer->id}}</th>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->age}}</td>
                        <td>{{$customer->phone}}</td>
                        <td>{{$customer->dob}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{$customer->city->name}}</td>
                        <td>
                            <img src="{{asset('storage/'. $customer->image)}}" alt="" style="width: 50px">
                        </td>
                    </tr>
                    </tbody>
                </table>
                <a href="{{route('customers.destroy', ['id' => $customer->id])}}" class="btn btn-dark">Delete</a>
                <a class="btn btn-primary" href="{{route('customers.index')}}">Back</a>
            </div>
        </div>
    </div>
@endsection