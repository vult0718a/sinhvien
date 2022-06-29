<!DOCTYPE html>
<html lang="vn">
<head>
    <title>Điểm sinh viên</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        div{
            text-align:center;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Thông tin điểm sinh viên</h2>
    <form>
    <div class="input-group">
        <form action="{{route('scores.score')}}" method="get">
            <input type="text" class="form-control" placeholder="Nhập email học sinh, id học sinh hoặc môn học
" name="search">
            <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
                <i class="glyphicon glyphicon-search"></i>
            </button>
            </div>
        </form>
    </div>
    </form>
    <br>
    <p><a href="{{route('students.index')}}">Về trang chủ</a></p>    
    <p><a href="{{route('scores.create')}}">Thêm điểm</a></p>          
    <table class="table table-striped table-bordered">
        <tr>
            <td>STT</td>
            <td>ID học sinh</td>
            <td>Tên học sinh</td>
            <td>Email học sinh</td>
            <td>Tên môn học</td>
            <td>Điểm</td>
            <td>Thao tác</td>
        </tr>
        <?php $i=1?>
        @foreach($scores as $key => $value)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$value->student_id}}</td>
            <td>{{$value->name_student}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->name_language}}</td>
            <td>{{$value->score}}</td>
            <td>
                <a href="{{route('scores.edit',['id'=>$value->id])}}"><button type="button" class="btn btn-warning">Sửa</button></a>
                <a href="{{route('scores.destroy',['id'=>$value->id])}}"><button type="button" class="btn btn-danger">Xóa</button></a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>