<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.navHome')
    <h1>{{$contact->name}}</h1>
    <p>Email:{{$contact->email}}</p>
    <p>Subject:{{$contact->subject}}</p>
    <p>Message:{{$contact->message}}</p>
    <h5>Created at:{{$contact->created_at}}</h5>
    <h5>Updated at:{{$contact->updated_at}}</h5>
</body>
</html>