@extends('trangchu');
@section('content')


    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Thêm danh mục</button>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <form action="{{route('themdanhmuc')}}" method="POST" role="form">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="nhập tên muốn thêm" name="name">
                        </div>
                        <button type="submit" class="btn btn-primary" >Thêm</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th ></th>
        </tr>
        </thead>
        <tbody>
        @foreach($danhmucs as $danhmuc)
            <tr>
                <td>{{$danhmuc->id}}</td>
                <td>{{$danhmuc->ten}}</td>
                <td><a href="{{route('xoadanhmuc',['id'=>$danhmuc->id])}}" class="btn btn-danger">Xóa</a> &nbsp<a href="{{route('suadanhmuc',['id'=>$danhmuc->id])}}" class="btn btn-danger">Sửa</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
