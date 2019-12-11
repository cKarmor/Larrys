<header class="nav-container col-12" id="nav-container">
  <div class="container nav-container__wrap">
    <a class="header__logo" href="../#home">
      <img class="header__logo-image" src="@php echo App\asset_path('images/logo.svg') @endphp"/>
    </a>
    <nav class="header__nav">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
