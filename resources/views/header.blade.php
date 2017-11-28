<header>
   <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <a class="navbar-brand" href="/">
      <img src="http://www.grandprixadvertisingstrategies.com/wp-content/themes/GP30-1.1/images/gp30/logo.png "/>
    </a>

    @if (Auth::check())

    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ Request::is('docs*') ? 'active' : 'no' }}">
          <a class="nav-link" href="/">Lavori</a>
        </li>
        <li class="nav-item {{ Request::is('utenti*') ? 'active' : 'no' }}">
          <a class="nav-link" href="/utenti">Utenti</a>
        </li>

      </ul>

      <div class="form-inline">
        <div class="form-group" style="color: #fff">
           {{ Auth::user()->name }}  <a class="nav-link" href="/logout"> Logout</a>
        </div>
      </div>

    </div>


    @endif
  </nav>
</header>
