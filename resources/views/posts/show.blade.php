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
</div>



@endsection
