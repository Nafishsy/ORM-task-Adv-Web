<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


        
    Name: {{$Dept->name}}<br>
    ID: {{$Dept->id}}   
    <br>
    <br>

    Offered Courses:

    <ol>
    @foreach($courses as $cr)
    <li>
      {{$cr->course->name}}, Faculty :{{$cr->teacher->name}}
      <ol type='a'>
      @foreach($students as $st)
        <li>
        @if($st->c_id==$cr->c_id)
        {{$st->student->name}}
        @endif
        </li>
        @endforeach
      </ol>

    </li>
    
    @endforeach

    </ol>

  <!-- 
  <li>Tea</li>
  <li>Milk</li>
    </ol>  
    -->

</body>
</html>
