<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Testimonial</title>
</head>
<body>

    <h1>{{$testimonial->clientName}}</h1>
    <p>Position:{{$testimonial->position}}</p>
    <p>Content:{{$testimonial->content}}</p>
    <h5>Created at:{{$testimonial->created_at}}</h5>
    <h5>Updated at:{{$testimonial->updated_at}}</h5>
    <h5>{{$testimonial->published ?"Published":"Not Published"}}</h5>
    <h5>Image:</h5>
    <img src="{{ asset('assets/images/' . $testimonial->image) }}" alt="testimonial" style="width: 200px;">

</body>
</html>