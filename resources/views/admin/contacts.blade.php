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

<div class="container">
  <h2>Contacts Data</h2>        
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Show</th>
      </tr>
    </thead>
    <tbody>
    @foreach($contacts as $contact)
      <tr>
        <td>{{$contact->name}}</td>
        <td>{{$contact->email}}</td>
        <td>{{$contact->subject}}</td>
        <td>{{$contact->message}}</td>
        <td><a href="showcontacts/{{ $contact->id }}">Show</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>


</body>
</html>



