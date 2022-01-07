<nav class="navbar navbar-expand-lg navbar-light bg-light mynewnave">
    <div class="container-fluid">
      <a class="navbar-brand active" href="/">Developers forum</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @if (Auth::user())
            @else
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Register%Login
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item droplink" href="/"></a></li>
                  @if (Route::has('login'))
                   <li class="dropdown-item">
                    <a class="dropdown-item droplink" href="{{ route('login') }}">{{ __('Login') }}</a>
                     </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="dropdown-item droplink">
                     <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                  @endif
                </ul>
              </li>
            @endif

          <li class="nav-item">
            <a class="nav-link" href="{{route('askquestion')}}">Ask Question</a>
          </li>

       @if (Auth::user())
       @if (Auth::user()->role_as===1)
       <li class="nav-item">
        <a class="nav-link" href="{{route('category')}}">Add Category</a>
    </li>
       <li class="nav-item">
           <a class="nav-link" href="">Admin/{{Auth::user()->name}}</a>
       </li>
       @elseif (Auth::user()->role_as===0)
       <li class="nav-item">
           <a class="nav-link" href="">{{Auth::user()->name}}</a>
       </li>
       @endif
       @endif
       @if (Auth::check('user'))

       <li class="nav-item">
           <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                       {{ __('Logout') }}
           </a>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
           </form>
       </li>
       @endif
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

      </div>
    </div>
  </nav>
  <div class="card-body">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
</div>
