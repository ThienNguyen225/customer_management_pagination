@extends('home')
@section('title', 'Bạn có muốn xóa thông tỉnh thành phố')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <h1>Bạn có muốn xóa tỉnh thành phố</h1>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên tỉnh thành</th>
                    <th scope="col">Số khách hàng</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">{{ $city->id }}</th>
                    <td>{{ $city->name }}</td>
                    <td>{{ count($city->customers) }}</td>
                </tr>
                </tbody>
            </table>
            <a href="{{route('cities.destroy', ['id' => $city->id])}}">
                <button type="button" class="btn btn-danger">Delete</button>
            </a>
            <a class="btn btn-primary" href="{{route('cities.index')}}">Back</a>
        </div>
    </div>
@endsection