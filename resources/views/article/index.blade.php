<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<br>
	<a href="{{url('article/create')}}">Create Article</a>
	<br><br>

	<?php $no=1; ?>

	@foreach($article as $row)

	<b>Article Number {{$no++}}</b> <br>
	- Title = {{$row->title}} <br>
	- Content = {{substr($row->content,0,10)}}<br>
	- Action = 
		<a href="{{url('article/show/'.$row->id)}}">Detail</a> |
		<a href="{{url('article/edit/'.$row->id)}}">Edit</a> |
		<a href="{{url('article/delete/'.$row->id)}}">Delete</a>

	@endforeach

</body>
</html>