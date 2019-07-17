@extends('home')
@section('title', 'Danh sách tỉnh thành phố')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Danh Sách Khách Hàng</h1>
            </div>
            <a href="{{route('cities.create')}}" class="btn btn-primary">ADD</a>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Name of province</th>
                    <th scope="col">Customer number</th>
                    <th >Action</th>
                </tr>
                </thead>
                <tbody>
                @if(count($cities) === 0)
                    <tr>
                        <th colspan="4">No data</th>
                    </tr>
                @else
                @foreach($cities as $key => $city)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                       <td>{{$city->name}}</td>
                       <td>{{count($city->customers)}}</td>
                       <td>
                           <a href="{{route('cities.edit', ['id' => $city->id])}}" class="btn badge-info">Edit</a>
                           <a href="{{route('cities.delete', ['id' => $city->id])}}" class="btn btn-dark">Delete</a>
                       </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection