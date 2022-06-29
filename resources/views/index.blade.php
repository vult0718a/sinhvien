<!DOCTYPE html>
<html lang="vn">
<head>
    <title>Sinh viên</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        div{
            text-align:center;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Thông tin sinh viên tuổi 20</h2>
    <p><a href="{{route('students.create')}}">Thêm sinh viên mới</a></p> 
    <p><a href="{{route('scores.score')}}">Điểm toàn sinh viên</a></p>             
    <table class="table table-striped table-bordered">
        <tr>
            <td>STT</td>
            <td>id</td>
            <td>Tên</td>
            <td>Email</td>
            <td>Tuổi</td>
            <td>Giới tính</td>
            <td>Ngôn ngữ lập trình</td>
            <td>Điểm</td>
            <td>Thao tác</td>
        </tr>
        <?php $i=1?>
        @foreach($students as $key => $value)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$value['id']}}</td>
            <td>{{$value['name']}}</td>
            <td>{{$value['email']}}</td>
            <td>{{$value['age']}}</td>
            <td>
                @if ($value['gender']==0)
                    Nam
                @elseif ($value['gender']==1)
                    Nữ
                @else
                    Không xác định
                @endif
            </td>
            <td>{{$value['language']}}</td>
            <td><a href="{{route('scores.detail_score',['id'=>$value->id])}}"><button type="button" class="btn btn-success">Xem chi tiết</button></a></td>
            <td>
                <a href="{{route('students.edit',['id'=>$value->id])}}"><button type="button" class="btn btn-warning">Sửa</button></a>
                <a href="{{route('students.destroy',['id'=>$value->id])}}"><button type="button" class="btn btn-danger">Xóa</button></a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>