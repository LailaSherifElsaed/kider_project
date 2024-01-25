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
		@include('admin.classes_nav')
		<div class="container">
			<form class="m-auto" method="post" action="{{route('update_class',[$class->id])}}" style="max-width:600px" enctype="multipart/form-data">
			@csrf
            @method('put')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
				<h3 class="my-4">Edit Class</h3>
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="title2" class="col-md-5 col-form-label">ClassName</label>
					<div class="col-md-7"><input type="text" class="form-control form-control-lg" id="title2" name="className" value="{{ $class->className }}" required></div>
				</div>
				<hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row"><label for="price6" class="col-md-5 col-form-label">FromAge</label>
					<div class="col-md-7"><input type="text" class="form-control form-control-lg" id="price6" name="fromAge" value="{{ $class->fromAge }}"></div>
				</div>
                <hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row"><label for="price6" class="col-md-5 col-form-label">ToAge</label>
					<div class="col-md-7"><input type="text" class="form-control form-control-lg" id="price6" name="toAge" value="{{ $class->toAge }}"></div>
				</div>
                <hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row">
                    <label for="fromTime" class="col-md-5 col-form-label">From Time (HH)</label>
                    <div class="col-md-7"><input type="time" class="form-control form-control-lg" id="fromTime" name="fromTime" value="{{ $class->fromTime }}" required></div>
                </div>

                <div class="form-group mb-3 row">
                    <label for="toTime" class="col-md-5 col-form-label">To Time (HH)</label>
                    <div class="col-md-7"><input type="time" class="form-control form-control-lg" id="toTime" name="toTime" value="{{ $class->toTime }}" required></div>
                </div>

				<hr class="bg-transparent border-0 py-1" />
                <div class="form-group mb-3 row">
                    <label for="price6" class="col-md-5 col-form-label">Capacity</label>
                    <div class="col-md-7"><input type="text" class="form-control form-control-lg" id="price6" name="capacity" value="{{ $class->capacity }}"></div>
                </div>

                <div class="form-group mb-3 row">
                    <label for="price6" class="col-md-5 col-form-label">Price</label>
                    <div class="col-md-7"><input type="text" class="form-control form-control-lg" id="price6" name="price" value="{{ $class->price }}"></div>
                </div>
				<hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row">
					<label for="image" class="col-md-5 col-form-label">Select Image</label>
					<input type="file" id="image" name="class_image" accept="image/*">
                    <img src="{{ asset('assets/images/' . $class->class_image) }}" alt="$class" style="width: 200px;">
				</div>
                <div class="form-group">
                    <label for="teacher">Teacher Name:</label>
                    <select name="teacherId" id="">
                        <option value=""> Select Teacher</option>
                            @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}" {{ $teacher->id == $currentTeacherId ? 'selected' : '' }}>
                                    {{$teacher->teacherName}}
                                </option>
                            @endforeach 

                    </select>

                </div>
                <hr class="bg-transparent border-0 py-1" />
				<div class="checkbox">
      				<label><input type="checkbox" name="active" @checked($class->active)>Active</label>
    			</div>
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="insert10" class="col-md-5 col-form-label"></label>
					<div class="col-md-7"><button class="btn btn-primary btn-lg" type="submit">Update</button></div>
				</div>
			</form>
		</div>
	</body>

</html>