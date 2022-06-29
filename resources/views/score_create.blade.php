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
    <h2>Thêm điểm</h2>
    <p><a href="{{route('scores.score')}}">Trở về</a></p>   
    <form action="{{route('scores.store')}}" method="post"> 
    @csrf 
        <div class="form-group" >
            <label for="student_id">ID sinh viên:</label>
            <select name="student_id" class="form-control" require>
                @foreach($students as $key => $value)
                <option value="{{$value['id']}}">{{$value['id']}} - {{$value['name']}}</option>
                @endforeach
            </select>
        </div>   
        <div class="form-group" >
            <label for="course_id" require>Ngôn ngữ lập trình:</label>
            <select name="course_id" class="form-control">
                @foreach($courses as $key => $value)
                <option value="{{$value['id']}}">{{$value['name']}}</option>
                @endforeach
            </select>
        </div>  
        <div class="form-group">
            <label for="score">Điểm:</label>
            <input type="number" step='0.01' value='0.00' placeholder='0.00' class="form-control" name="score"> 
        </div>  
        <p>
        @if($errors->has('required'))
            $errors->first('required');
        @endif
        @if($errors->has('numeric'))
            $errors->first('numeric');
        @endif
        </p>
        <button type="submit" class="btn btn-success">Đồng ý</button> 
    </form>  
    <script>
	    if ( window.history.replaceState ) {
	        window.history.replaceState( null, null, window.location.href );
	    }
	</script>   
</body>     
</html>