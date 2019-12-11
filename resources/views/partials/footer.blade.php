<footer class="footer">
  <div class="container">
    <div class="row footer__container">
      @php dynamic_sidebar('sidebar-footer') @endphp
      <a class="footer__logo" href="../#home">
        <img class="footer__logo-image" src="@php echo App\asset_path('images/logo-footer.svg') @endphp"/>
      </a>
      <nav class="footer__nav-menu">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'footer__nav']) !!}
        @endif
      </nav>
    </div>
  </div>
</footer>