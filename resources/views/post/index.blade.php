@extends('template.main')

@section('content')
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Posts</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="{{route('posts.create')}}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Post</span></a>
												
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Image</th>
						<th>Title</th>
						<th>Description</th>
						<th>Published</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($posts as $post)
					<tr>
						<td><img style="width: 100px;" src="{{asset('storage/assets/img_posts/'.$post->img)}}" alt=""></td>
						<td>{{$post->title}}</td>
						<td>{{$post->description}}</td>
						<td>{{$post->updated_at}}</td>
						<td>
							<a href="{{route('posts.show',$post)}}" class="view"><i class="material-icons" title="View">&#xe8f4;</i></a>
							<a href="{{route('posts.edit',$post)}}" class="edit" ><i class="material-icons" title="Edit">&#xE254;</i></a>
							<form action="{{route('posts.destroy',$post)}}" method="POST">
							@csrf
							@method('DELETE')
							 <button type="submit" class="deleteBtn" onclick="return confirm('Delete this post?');"><i class="material-icons"  title="Delete">&#xE872;</i></button>
							</form>
			
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="pagination">
			{{ $posts->links("pagination::bootstrap-4") }}
			</div>
		</div>
	</div>        
</div>
@endsection