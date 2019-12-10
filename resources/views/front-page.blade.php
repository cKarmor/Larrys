@extends('layouts.app')
@section('content')
  @include('partials.hero')
  @include('partials.usp')
  @include('partials.about')
  @include('partials.whylarry')
  @include('partials.contact')
  @while(have_posts()) @php the_post() @endphp

<section>
</section>

  @endwhile

@endsection
