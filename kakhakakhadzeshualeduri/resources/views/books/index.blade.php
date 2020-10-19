<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<table>
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Description</th>
				<th>Author name</th>
				<th>genre id</th>
				<th>action</th>
			</tr>
			@foreach ($books as $book)
				<tr>
					<td>{{ ++$loop->index }}</td>
					<td>{{ $book->title }}</td>
					<td>{{ $book->description }}</td>
					<td>{{ $book->author_name }}</td>
					<td>{{ $book->genre_id }}</td>
					<td>
						<form method="POST" action="{{ route('admindestroy') }}">
							@csrf
							<input type="hidden" name="id" value="{{ $book->id }}">
							<button>remove</button>
						</form>
						<button>edit</button>
						<a href="{{ route('adminshow', ['id'=>$book->id]) }}">show</a>
					</td>
				</tr>
			@endforeach

		</table>
	</div>
</body>
</html>