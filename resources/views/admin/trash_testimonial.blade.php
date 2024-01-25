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
@include('includes.nav')
<div class="container">
  <h2>Trashed</h2>        
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Content</th>
        <th>Image</th>
        <th>Published</th>
        <th>Delete</th>
        <th>Restore</th>
      </tr>
    </thead>
    <tbody>
    @foreach($testimonials as $testimonial)
  <tr>
    <td>{{$testimonial->clientName}}</td>
    <td>{{$testimonial->position}}</td>
    <td>{{$testimonial->content}}</td>
    <td><img src="{{ asset('assets/images/' . $testimonial->image) }}" alt="testimonial" style="width: 150px;"></td>
    <td>{{$testimonial->published ? 'yes' : 'no'}}</td>
    <td><a href="forceDelete/{{ $testimonial->id }}" onclick="return confirm('Are you sure you want to delete?')">Trashed Delete</a></td>
    <td><a href="restoreTestimonial/{{ $testimonial->id }}" >Restore</a></td>
  </tr>
@endforeach

    </tbody>
  </table>
</div>

</body>
</html>
