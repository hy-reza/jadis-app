<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Index</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<br />
		@if (\Session::has('success'))
		<div class="alert alert-success">
			<p>{{ \Session::get('success') }}</p>
		</div><br />
		@endif
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>NIM</th>
					<th>NAMA</th>
					<th>JURUSAN</th>
					<th>FAKULTAS</th>
					<th>ALAMAT</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $data)
				<tr>
					<td>{{$data['id']}}</td>
					<td>{{$data['nim']}}</td>
					<td>{{$data['nama']}}</td>
					<td>{{$data['jurusan']}}</td>
					<td>{{$data['fakultas']}}</td>
					<td>{{$data['alamat']}}</td>
					<td><a href="{{action('DataController@edit', $data['id'])}}" class="btn btn-warning">Ubah</a></td>
					<td>
						<form action="{{action('DataController@destroy', $data['id'])}}" method="post">
							@csrf
							<input type="hidden" name="_method" value="DELETE">
							<button class="btn btn-danger" type="submit">Hapus</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</body>
</html>