@extends('trangchu');
@section('content')
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Thêm danh mục</button>\
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">age</th>
            <th scope="col">address</th>
            <th scope="col">telephone</th>
        </tr>
        </thead>
        <tbody>
        @foreach($danhmucs as $danhmuc)
            <tr>
                <td>{{$danhmuc->id}}</td>
                <td>{{$danhmuc->ten}}</td>
                <td>{{$danhmuc->gioi_tinh}}</td>
                <td>{{$danhmuc->tuoi}}</td>
                <td>{{$danhmuc->dien_thoai}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

