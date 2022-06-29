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
    <h2>Thêm sinh viên</h2>
    <p><a href="{{route('students.index')}}">Trở về trang chủ</a></p>   
    <form action="{{route('students.add')}}" method="post"> 
    @csrf 
        <div class="form-group">
            <label for="name">Tên:</label>
            <input type="text" class="form-control" placeholder="Nhập họ tên" name="name" required required> 
        </div>   
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" placeholder="Nhập email" name="email" required required> 
        </div>  
        <div class="form-group">
            <label for="age">Tuổi:</label>
            <input type="number" class="form-control" placeholder="Nhập tuổi" name="age" required required> 
        </div>  
        <div class="form-group">
            <label for="gender">Giới tính:</label>
            <select name="gender" class="form-control">
                <option value='0'>Nam</option>
                <option value='1'>Nữ</option>
                <option value='2'>Khác</option>
            </select>
        </div>  
        <div class="form-group" >
            <label for="language">Ngôn ngữ lập trình:</label>
            <select name="language" class="form-control">
                @foreach($courses as $key => $value)
                <option value="{{$value['name']}}">{{$value['name']}}</option>
                @endforeach
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