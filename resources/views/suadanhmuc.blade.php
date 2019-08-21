@extends('trangchu');
@section('content')
    <form action="{{route('luudanhmuc',['id'=>$danhmuc->id])}}" method="POST" role="form">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" class="form-control" id="name" placeholder="sủa tên" name="name" value="{{$danhmuc->ten}}">
        </div>
        <button type="submit" class="btn btn-primary" >lưu</button>
    </form>
@endsection

