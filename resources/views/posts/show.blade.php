@extends ('layouts.master')

@section ('content')
<div class="col-sm-8 blog-main">
  <h1>Meu post {{ $post->id }}</h1>

  <p class="blog-post-meta">
    {{ $post->created_at->toFormattedDateString() }}
    <!--by <a href="#">Jacob</a>-->
  </p>

  <p>
    {{ $post->body }}
  </p>

  <hr>

  <div class="comments">
    <ul class="list-group">
      @foreach ($post->comments as $comment)
        <li class="list-group-item">
          <strong>{{ $comment->created_at->diffForHumans() }}</strong> &nbsp; {{ $comment->body }}
        </li>
      @endforeach
    </ul>
  </div>

  <hr>

  <div class="card">
    <div class="card-block">
      <form method="POST" action="/posts/{{ $post->id }}/comments">
        {{ csrf_field() }}
        <div class="form-group">
          <textarea name="body" id="body" class="form-control" placeholder="Type your comment here"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Add a comment</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
