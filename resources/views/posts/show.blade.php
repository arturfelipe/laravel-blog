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
</div>
@endsection
