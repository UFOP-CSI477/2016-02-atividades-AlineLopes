<nav class="navbar navbar-inverse navbar-static-top"style="background-color: #20B2AA;    height:48px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/" style="color:#fff">PetShop</a>
    </div>
    <div class="navbar-custom-menu" id="myNavbar">

      <ul class="nav navbar-nav navbar-right">
          <!-- Authentication Links -->
          @if (Auth::guest())
              <li><a href="{{ route('login') }}" style="color:#fff"><i class="fa fa-sign-in" aria-hidden="true" style="color:#fff"></i> Login</a></li>
              <li><a href="{{ route('register') }}" style="color:#fff"><i class="fa fa-plus-circle" aria-hidden="true" style="color:#fff"></i> Registrar</a></li>
          @else
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:#fff">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li>
                        @if(Auth::user()->type == 2)
                            <a href="/cliente" style="color:#20B2AA;">
                                Sua conta
                            </a>
                        @else
                            <a href="/produto" style="color:#20B2AA;">
                                Sua conta
                            </a>
                        @endif
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();" style="color:#20B2AA;">
                              Sair
                          </a>


                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          @endif
      </ul>
    </div>
  </div>
</nav>
