<header>
  <div class="header_wrapper">
    <div class="logo_brand">
      <img src="{{ asset('img/logo.png')}}" alt="logo" class="logo">
    </div>
    <div class="burgher_icon">
      <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <div class="header_navigation">
      <ul class="navigation_menu">
        <li><a href="{{ route('home')}}">Home</a></li>
        <li><a href="#">Corso</a></li>
        <li><a href="#">Dopo il corso</a></li>
        <li><a href="#">Lezione gratuita</a></li>
        <li><a href="#">Assumi i nostri studenti</a></li>
        <li><button type="button" class="primary_button">Candidati ora</button></li>
      </ul>
    </div>
  </div>

  <div class="burgher_navigation">
    <ul class="burgher_menu">
      <li><a href="{{ route('home')}}">Home</a></li>
      <li><a href="#">Corso</a></li>
      <li><a href="#">Dopo il corso</a></li>
      <li><a href="#">Lezione gratuita</a></li>
      <li><a href="#">Assumi i nostri studenti</a></li>
      <li> <a href="#">Candidati ora</a></li>
    </ul>
    <div class="close_burgher_menu">
      <i class="fa fa-times" aria-hidden="true"></i>
    </div>
  </div>
</header>
