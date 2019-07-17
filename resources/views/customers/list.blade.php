@extends('home')
@section('title', 'Hiển thị danh sách khách hang')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh sách khách hàng</h1>
            </div>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        {{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <div class="col-6">
                <form class="navbar-form navbar-left" action="{{route('customers.search')}}">
                    @csrf
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <input type="text" name="keyword" class="form-control" placeholder="Search">
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-outline-primary">Tìm kiếm</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12">
                <a href="{{route('customers.create')}}" class="btn btn-primary">ADD</a>
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
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($customers) === 0)
                        <tr>
                            <td colspan="4">No Data</td>
                        </tr>
                    @else
                        @foreach($customers as $key => $customer)
                            <tr>
                                <td scope="row">{{++$key}}</td>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->age}}</td>
                                <td>{{$customer->phone}}</td>
                                <td>{{$customer->dob}}</td>
                                <td>{{$customer->email}}</td>
                                <td>{{$customer->city->name}}</td>
                                <td>
                                    <img src="{{asset('storage/'. $customer->image)}}" alt="" style="width: 50px">
                                </td>
                                <td>
                                    <a href="{{route('customers.show', ['id' =>$customer->id])}}" class="btn badge-primary">Show</a>
                                    <a href="{{route('customers.edit', ['id' =>$customer->id])}}" class="btn badge-info">Edit</a>
                                    <a href="{{route('customers.delete', ['id' =>$customer->id])}}" class="btn badge-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{ $customers->appends(request()->query()) }}
@endsection