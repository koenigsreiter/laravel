<header>

<div class="wrapper-header">
  <div class="logo">
      
      <img src="{{ asset('images/Element 1.png')}}" width="37px" height="48px">

      <div class="logo-content">
          <p>Dr.med. Fiona Kirk</p>

          <p id="tel">Tel:02731 8224</p>

      </div>
  </div>

</div>




<nav>


    <div class="topnav" id="myTopnav">

        <div class="menu-icon">
            <i id="toggle" class="fa fa-bars"></i>


        </div>
        <div class="menu">
        <ul class="menu-right">

           <li> <a href="{{ route('home') }}" class="active">Home</a></li>
            <hr>
            <li class="dropdown">
                <div class="dropdown-first">

                <a href="{{ (URL::to('leistungen')) }}">Leistungen </a><i class="fa fa-plus"></i>
                </div>
                <hr>
                <div class="dropdown-content">

                    <a href="{{ (URL::to('allgemeinmedizin')) }}">Allgemeinmedizin</a>
                    <hr>
                    <a href="{{ (URL::to('privatleistungen')) }}">Privatleistungen & Ganzheitsmedizin</a>
                    <hr>
                    <a href="{{ (URL::to('schularzt')) }}">  Schularzt</a>

                    <hr>
                    <a href="{{ (URL::to('arbeitsmedizin')) }}">Arbeitsmedizin</a>
                    <hr>
                </div>

            </li>

            <li><a href="{{ (URL::to('ordination')) }}">Ordination</a> </li>
            <hr>

            <li> <a href="{{ (URL::to('kontakt')) }}">Kontakt</a></li>
            <hr>

            <li><a href="{{ (URL::to('vital')) }}">Vitalwochenende</a></li>

            <hr>

        </ul>

        <ul class="navbar-login">

            @if( auth()->check() )


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">
                        <i class="fa fa-sign-out"></i> Logout
                    </a>
                </li>



            @else

                <li class="nav-item">
                    <a class="nav-link" href="{{ (URL::to('auth_login')) }}">
                        <i class="fa fa-sign-in"></i> Login
                    </a>
                </li>

            @endif

        </ul>
    </div>
    </div>


</nav>

</header>