@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

<section>
  <p>This is a test</p>
</section>

  @endwhile

@endsection
