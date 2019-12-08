@extends('layouts.app')
@section('content')
  @include('partials.hero')
  @while(have_posts()) @php the_post() @endphp

<section>
</section>

  @endwhile

@endsection
