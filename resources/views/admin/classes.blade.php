<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@include('admin.classes_nav')
<div class="container">
  <h2>Classes Data</h2>        
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Teacher Name</th>
        <th>className</th>
        <th>Age</th>
        <th>Time</th>
        <th>Capacity</th>
        <th>Price</th>
        <th>Active</th>
        <th>Class Image</th>
        <th>Edit</th>
        <th>Delete</th>


      </tr>
    </thead>
    <tbody>
    @foreach($classes as $class)
  <tr>
    <td>{{optional($class->teacher)->teacherName}}</td>
    <td>{{$class->className}}</td>
    <td>{{$class->fromAge}}-{{$class->toAge}} years</td>
    <td>{{date('h ', strtotime($class['fromTime']))}}-{{date('h ', strtotime($class['toTime']))}} Am</td>
    <td>{{$class->capacity}}kids</td>
    <td>{{$class->price}}$</td>
    <td>{{$class->active}}</td>
    <td><img src="{{ asset('assets/images/' . $class->class_image) }}" alt="class" style="width: 150px;"></td>
    <td><a href="editClass/{{$class->id}}">Edit</a></td>
    <td><a href="deleteClass/{{$class->id}}">Delete</a></td>
  

  </tr>
@endforeach

    </tbody>
  </table>
</div>

</body>
</html>
