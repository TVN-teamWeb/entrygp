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
        <li class="nav-item {{ Request::is('works*') ? 'active' : 'no' }}">
          <a class="nav-link" href="/works">
            <i class="fa fa-list" aria-hidden="true"></i>
            Lavori</a>
        </li>
        @if( Auth::user()->ruolo == 'ADMIN' )
        <li class="nav-item {{ Request::is('users*') ? 'active' : 'no' }}">
          <a class="nav-link" href="/users">
            <i class="fa fa-users" aria-hidden="true"></i>
            Utenti</a>
        </li>
        @endif
      </ul>

      <div class="form-inline">
        <div class="form-group" style="color: #fff">
           <a href="/users/{{Auth::user()->id}}">
             <i class="fa fa-user" aria-hidden="true"></i>
             {{ Auth::user()->name }}
           </a>
           <a class="nav-link" href="/logout">
             <i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
        </div>
      </div>

    </div>


    @endif
  </nav>
</header>
