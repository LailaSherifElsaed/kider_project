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
@include('includes.navTeachers')
<div class="container">
  <h2>Teachers Data</h2>        
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Teacher Name</th>
        <th>Position</th>
        <th>Image</th>
        <th>Facebook</th>
        <th>Twiter</th>
        <th>Instagram</th>
        <th>Active</th>
        <th>Edit</th>
        <th>Delete</th>


      </tr>
    </thead>
    <tbody>
    @foreach($teachers as $teacher)
  <tr>
    <td>{{$teacher->teacherName}}</td>
    <td>{{$teacher->position}}</td>
    <td><img src="{{ asset('assets/images/' . $teacher->image) }}" alt="teacher" style="width: 150px;"></td>
    <td>{{$teacher->facebook}}</td>
    <td>{{$teacher->twiter}}</td>
    <td>{{$teacher->instagram}}</td>
    <td>{{$teacher->active}}</td>
    <td><a href="editTeacher/{{ $teacher->id }}">Edit</a></td>
    <td><a href="deleteTeacher/{{ $teacher->id }}">Delete</a></td>

  </tr>
@endforeach

    </tbody>
  </table>
</div>

</body>
</html>
