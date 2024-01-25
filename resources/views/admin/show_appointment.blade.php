<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Appointment</title>
</head>
<body>

    <p>Gurdian Name:{{$appointment->gurdian_name}}</p>
    <p>Gurdian Email:{{$appointment->gurdian_email}}</p>
    <p>Child Name:{{$appointment->child_name}}</p>
    <p>Child Age:{{$appointment->child_age}}</p>
    <h5>Created at:{{$appointment->created_at}}</h5>
    <h5>Updated at:{{$appointment->updated_at}}</h5>
    <p>Message:{{$appointment->message}}</p>


</body>
</html>