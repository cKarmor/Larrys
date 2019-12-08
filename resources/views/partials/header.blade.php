<header class="nav-container" id="nav-container">
  <div class="col-12">
    <a class="brand" href="{{ home_url('/') }}"><img class="nav-container__right__toggle-button" id="nav-toggle-button" src="@php echo App\asset_path('images/logo.svg') @endphp"/></a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
