<header class="nav-container col-12" id="nav-container">
<<<<<<< HEAD
  <div class="container nav-container__wrap">
    <a class="header__logo" href="{{ home_url('/') }}">
      <img class="header__logo-image" src="@php echo App\asset_path('images/logo.svg') @endphp"/>
    </a>
    <nav class="header__nav">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
=======
  <a class="header__logo" href="{{ home_url('/') }}">
    <img class="header__logo-image" src="@php echo App\asset_path('images/logo.svg') @endphp"/>
  </a>
  <nav class="header__nav">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
  </nav>
>>>>>>> ac3fc0c5e923cbcf87f45115a86989eb579480e3
</header>
