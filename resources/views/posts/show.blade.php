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
</div>
@endsection
