@extends ('layouts.master')

@section ('content')
  <div class="col-sm-8 blog-main">
    <h1 class="blog-post-title">Publish a post</h1>
    <hr>
    <form method="POST" action="/posts">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" aria-describedby="titleHelp">
        <small id="titleHelp" class="form-text text-muted">Try to summary and use some key words from your post's history.</small>
      </div>
      <div class="form-group">
        <label for="body">Body</label>
        <textarea id="body" name="body" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Publish</button>
      </div>
      @include ('layouts.errors')
    </form>
  </div>
@endsection
