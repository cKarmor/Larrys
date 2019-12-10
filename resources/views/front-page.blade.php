@extends('layouts.app')

@section('content')
  @include('partials.hero')
  @include('partials.usp')
  @include('partials.testimonials')
  @include('partials.about')
  @while(have_posts()) @php the_post() @endphp

<section>
</section>

  @endwhile

@endsection
