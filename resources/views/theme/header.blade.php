 <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">Moddy<span>Coder</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a> --}}
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li class="menu-has-children"><a href="javascript:void(0);">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
          @if (Route::has('login'))
                
                    @auth
                       <li> <a href="{{ url('/home') }}" id="home">Home</a></li>
                    @else
                       <li> <a href="{{ route('login') }}" id="login"> Login</a></li>

                        @if (Route::has('register'))
                          <li>  <a href="{{ route('register') }}" id="register">Register</a></li>
                        @endif
                    @endauth
                
            @endif
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->