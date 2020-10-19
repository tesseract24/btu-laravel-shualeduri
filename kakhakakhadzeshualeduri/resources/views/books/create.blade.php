<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<form method="POST" action="{{ route('adminstore') }}">
			@csrf
			<input type="text" name="title" placeholder="title">
			<label>description</label>
			<textarea name="description" ></textarea>
			<input type="text" name="author_name" placeholder="Author name">
			<input type="number" name="genre_id" placeholder="Genre id">
			<button>save</button>
		</form>
	</div>
</body>
</html>