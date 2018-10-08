{{-- <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">FRN</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/service">Service</a>
            </li>
            <li class="nav-item btn-group dropdown dp"> --}}
              {{-- <a class="nav-link dropdown-toggle" href="/posts" id="blog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="/posts/create">Create Post</a>
              </div> --}}
              {{-- <a class="blog" href="/posts">Blog</a>
              <a class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropright</span>
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="/posts/create">Create Post</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav> --}}


      {{-- --- --}}
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container ">
            <a class="navbar-brand" href="{{ url('/') }}">
                FRN
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                  @if(!Auth::guest())
                    <li class="nav-item active">
                      <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                    </li>
                  @endif
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/service">Service</a>
                  </li>
                  <li class="nav-item btn-group dropdown dp">
                    {{-- <a class="nav-link dropdown-toggle" href="/posts" id="blog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                      <a class="dropdown-item" href="/posts/create">Create Post</a>
                    </div> --}}
                    <a class="blog" href="/posts">Blog</a>
                    <a class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="sr-only">Toggle Dropright</span>
                    </a>
                    @if(!Auth::guest())
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="/posts/create">Create Post</a>
                      </div>
                    @endif
                  </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>