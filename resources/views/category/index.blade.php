@extends('template')
@section('content')
<div class="mt-5">
	<div class="row">
		<div class="col-md-8">
			<h1 class="text-center">Category List</h1>
		</div>

		<div class="col-md-4 mx-auto">
		<a href="{{route('category.create')}}" class="btn btn-danger">Add Category</a>
		</div>
	</div>
</div>

<table border="1" cellpadding="10" cellspacing="0" class="mt-4 mx-auto">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Created at</th>
			<th>Updated at</th>
			<th colspan="3">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($categories as $row)
		<tr>
			<th>{{$row->id}}</th>
			<th>{{$row->name}}</th>
			<th>{{$row->created_at}}</th>
			<th>{{$row->updated_at}}</th>
			<th><a href="{{route('category.edit',$row->id)}}" class="btn btn-danger">Edit</a></th>
			<th><form method="post" action="{{route('category.destroy',$row->id)}}">
			@csrf
			@method('DELETE')
			 <input type="submit" class="btn btn-danger" value="Delete"></form></th>

		</tr>
		@endforeach
	</tbody>
</table>
@endsection