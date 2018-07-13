@extends ('layouts.master')

@section('content')

<div class="col-md-8 blog-main">

<h1>{{$post->title}}</h1>

	<h3>{{$post->body}}</h3>

	<div class="comments">
		<ul class="list-group">

		<hr>
	
	@foreach($post->comments as $comment)
		<article>
		<li class="list-group-item">
			<strong>
				{{$comment->created_at->diffForHumans()}}: &nbsp;
			</strong>
			{{$comment->body}}
		</li>
			<hr>
		</article>
	@endforeach
</ul>

</div>

<div class="card">
	<div class="card-block">
		
		<form method="POST" action="/posts/{{$post->id}}/comments">
			{{csrf_field()}}
			<div class="form-group">
				<textarea name="body" placeholder="Your comment here" class="form-control">
					
				</textarea>
				</div>
					<div class="form-group">
  						<button type="submit" class="btn btn-primary">Post</button>
   				    </div>
			
		</form>

	@include('layouts.errors')

	</div>
</div>

</div>



@endsection
