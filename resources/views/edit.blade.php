<!DOCTYPE html>
<html lang="vn">
<head>
    <title>Thêm sinh viên</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Sửa thông tin sinh viên</h2>
    <p><a href="{{route('students.index')}}">Trở về trang chủ</a></p>   
    <form action="{{route('students.update',['id'=>$student['id']])}}" method="post">
    @csrf 
        <div class="form-group">
            <label for="name">Tên:</label>
            <input type="text" class="form-control" value="{{$student['name']}}" placeholder="Nhập họ tên" name="name" required required> 
        </div>   
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" value="{{$student['email']}}" placeholder="Nhập email" name="email" required required> 
        </div>  
        <div class="form-group">
            <label for="age">Tuổi:</label>
            <input type="number" class="form-control" value="{{$student['age']}}" readonly placeholder="Nhập tuổi" name="age" required required> 
        </div>  
        <div class="form-group" >
            <label for="gender">Giới tính:</label>
            <select name="gender" class="form-control" value="{{$student['gender']}}">
                <option value='0'>Nam</option>
                <option value='1'>Nữ</option>
                <option value='2'>Khác</option>
            </select>
        </div>  
        <div class="form-group" >
            <label for="language">Ngôn ngữ lập trình:</label>
            <select name="language" class="form-control" value="{{$student['language']}}">
                <option value='JavaScript'>JavaScript</option>
                <option value='Python'>Python</option>
                <option value='C/C++'>C/C++</option>
                <option value='Java'>Java</option>
                <option value='PHP'>PHP</option>
                <option value='Swift'>Swift</option>
                <option value='C# (C-Sharp)'>C# (C-Sharp)</option>
                <option value='Ruby'>Ruby</option>
            </select>
        </div>  
        <button type="submit" class="btn btn-success">Đồng ý</button> 
    </form>  
    <script>
	    if ( window.history.replaceState ) {
	        window.history.replaceState( null, null, window.location.href );
	    }
	</script>   
</body>     
</html>