<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <center>
  Name: {{$Dept->name}} <br>
  ID: {{$Dept->id}} <br>
  </center>
  
  <u>Offered Courses: <br></u>
  <ol type='1'>
  @foreach($Dept->courses as $course)

    @foreach($course->MixCourseTeacher as $ct)

    <li>
    {{$ct->Course->name}}--> {{$ct->Teacher->name}}   
    </li>

    <ol type='a'>
    @foreach($course->MixCourseStudent as $st)
    <li>{{$st->Student->name}}</li>
    
    @endforeach 
    </ol>
    @endforeach    
    
    

  
  @endforeach
  </ol>
</body>
</html>