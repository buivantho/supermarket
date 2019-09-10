<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{url("/themstudent")}}" method="post">
    @csrf
    <div class="form-group">
        <label>student</label>
        <input class="form-control" type="text" name="name" value="{{old("name")}}" placeholder="Tên student" required>
        @if($errors->has("name"))
            <p class="error" style="color:red">{{$errors->first("name")}}</p>
        @endif
    </div>
    <div class="form-group">
        <label>tuoi</label>
        <input class="form-control" type="text" name="age" value="{{old("age")}}" placeholder="tuoi" required>
        @if($errors->has("age"))
            <p class="error" style="color:red">{{$errors->first("age")}}</p>
        @endif
    </div>
    <div class="form-group">
        <label>dia chi</label>
        <input class="form-control" type="text" name="address" value="{{old("address")}}" placeholder="dia chi" required>
        @if($errors->has("age"))
            <p class="error" style="color:red">{{$errors->first("address")}}</p>
        @endif
    </div>
    <div class="form-group">
        <label>dien thoai</label>
        <input class="form-control" type="text" name="telephone" value="{{old("telephone")}}" placeholder="dia chi" required>
        @if($errors->has("telephone"))
            <p class="error" style="color:red">{{$errors->first("telephone")}}</p>
        @endif
    </div>


    <div class="form-group text-right">
        <button type="submit" class="btn btn-danger">them student</button>
    </div>
</form>
</body>
</html>
