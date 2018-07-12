@extends ('layouts.master')

@section('content')
<div class="col-md-8 blog-main">



<form method="POST" action="/posts">
	{{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="title" name="title" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <textarea id="body" name="body" class="form-control"></textarea>
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Publish</button>
  </div>
</form>

@include('layouts.errors')

</div>
@endsection