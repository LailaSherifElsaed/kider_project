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
		@include('includes.nav')
		<div class="container">
			<form class="m-auto" method="post" action="{{route('store_teacher')}}" style="max-width:600px" enctype="multipart/form-data">
			@csrf
				<h3 class="my-4">Add Teacher</h3>
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="title2" class="col-md-5 col-form-label">Teacher Name</label>
					<div class="col-md-7"><input type="text" class="form-control form-control-lg" id="title2" name="teacherName" required></div>
				</div>
				<hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row"><label for="price6" class="col-md-5 col-form-label">Position</label>
					<div class="col-md-7"><input type="text" class="form-control form-control-lg" id="price6" name="position"></div>
				</div>
				<hr class="bg-transparent border-0 py-1" />
                <div class="form-group mb-3 row"><label for="price6" class="col-md-5 col-form-label">Facebook</label>
					<div class="col-md-7"><input type="text" class="form-control form-control-lg" id="price6" name="facebook"></div>
				</div>
				<hr class="bg-transparent border-0 py-1" />
                <div class="form-group mb-3 row"><label for="price6" class="col-md-5 col-form-label">Twiter</label>
					<div class="col-md-7"><input type="text" class="form-control form-control-lg" id="price6" name="twiter"></div>
				</div>
				<hr class="bg-transparent border-0 py-1" />
                <div class="form-group mb-3 row"><label for="price6" class="col-md-5 col-form-label">Instagram</label>
					<div class="col-md-7"><input type="text" class="form-control form-control-lg" id="price6" name="instagram"></div>
				</div>
				<hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row">
					<label for="image" class="col-md-5 col-form-label">Select Image</label>
					<input type="file" id="image" name="image" accept="image/*">
				</div>
                <hr class="bg-transparent border-0 py-1" />
				<div class="checkbox">
      				<label><input type="checkbox" name="active" >Active</label>
    			</div>
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="insert10" class="col-md-5 col-form-label"></label>
					<div class="col-md-7"><button class="btn btn-primary btn-lg" type="submit">Insert</button></div>
				</div>
			</form>
		</div>
	</body>

</html>