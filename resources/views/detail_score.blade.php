<!DOCTYPE html>
<html lang="vn">
<head>
    <title>Điểm sinh viên</title>
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
    <h2>Thông tin điểm sinh viên</h2>
    <p><a href="{{route('students.index')}}">Về trang chủ</a></p>            
    <table class="table table-striped table-bordered">
        <tr>
            <td>STT</td>
            <td>Tên học sinh</td>
            <td>Tên môn học</td>
            <td>Điểm</td>
        </tr>
        <?php $i=1?>
        @foreach($scores as $key => $value)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$value->name_student}}</td>
            <td>{{$value->name_language}}</td>
            <td>{{$value->score}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>