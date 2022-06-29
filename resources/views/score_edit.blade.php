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
    <h2>Sửa điểm</h2>
    <p><a href="{{route('scores.score')}}">Trở về</a></p>   
    <form action="{{route('scores.update', ['id'=>$scores['id']])}}" method="post"> 
    @csrf 
        <div class="form-group" >
            <label for="student_id">ID sinh viên:</label>
            <input type="text"  class="form-control" value="{{$scores['student_id']}}" readonly>
        </div>   
        <div class="form-group" >
            <label for="course_id" require>Ngôn ngữ lập trình:</label>
            <input type="text"  class="form-control" value="{{$scores['course_id']}}" readonly>
        </div>  
        <div class="form-group">
            <label for="score">Điểm:</label>
            <input type="number" step='0.01' value="{{$scores['score']}}" placeholder='0.00' class="form-control" name="score" required> 
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