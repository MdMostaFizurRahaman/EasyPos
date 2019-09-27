<div class="slim-header">
        <div class="container">
          <div class="slim-header-left">
            <h2 class="slim-logo"><a href="index.html">Deadly<span>Arena</span></a></h2>
          </div><!-- slim-header-left -->
          <div class="slim-header-right">
            
            @guest
            <div class="dropdown dropdown-c">
                <a class="nav-link d-inline" href="{{ route('login') }}">{{ __('Login') }}</a>
                @if (Route::has('register'))
                <a class="nav-link d-inline" href="{{ route('register') }}">{{ __('Register') }}</a>
            </div>

             @endif
             @else
             <div class="dropdown dropdown-a">
              <a href="" data-toggle="tooltip"  title="POS Screen" class="header-notification">
                <i class="icon ion-ios-monitor-outline"></i>
              </a>
            </div>
             <div class="dropdown dropdown-a">
                <a href="" data-toggle="tooltip"  title="Settings" class="header-notification">
                  <i class="icon ion-ios-gear-outline"></i>
                </a>
              </div>
            <div class="dropdown dropdown-c">
              <a href="#" class="logged-user" data-toggle="dropdown">
                <img src="{{asset('uploads')}}/{{Auth::user()->image}}" alt="">
                <span> {{ Auth::user()->name }} </span>
                <i class="fa fa-angle-down"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <nav class="nav">
                  <a href="page-edit-profile.html" class="nav-link"><i class="icon ion-compose"></i> Update Profile</a>
                  @if(Auth::user()->admin)
                    <a href="" class="nav-link"><i class="icon ion-person"></i> Manage Users</a>
                  @endif
                  <a class="nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                    <i class="icon ion-forward"></i> Log Out
                    </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </nav>
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->

            @endguest
          </div><!-- header-right -->
        </div><!-- container -->
    </div><!-- slim-header -->

    <div class="slim-navbar"  style="margin-bottom:20px;">
        <div class="container">
          <ul class="nav">
            <li class="nav-item">
                <router-link :to="{ name: 'home' }"  class="nav-link"><span> <i class="fa fa-home"></i> Dashboard</span></router-link>
            </li>
            <li class="nav-item">
                <router-link :to="{ name: 'product' }"  class="nav-link"><span>  <i class="fa fa-cubes "></i> Products </span></router-link>
            </li>
            
            <li class="nav-item {{Request::is('supplier') || Request::is('supplier/*') ? 'active' : '' }}">
              <a class="nav-link" href="">
                  <span> <i class="fa fa-user-tie"></i> Customers</span>
              </a>
              
          </li>
          <li class="nav-item {{Request::is('supplier') || Request::is('supplier/*') ? 'active' : '' }}">
            <a class="nav-link" href="">
                <span> <i class="fa fa-user-tie"></i> Stock</span>
            </a>
        </li>
            <li class="nav-item {{Request::is('item') || Request::is('stock') || Request::is('item/*') || Request::is('stock/*') ? 'active' : '' }}">
              <a class="nav-link" href="#">
                  <span>  <i class="fa fa-inbox "></i> Sales </span>
              </a>
          </li>
        
            <li class="nav-item {{Request::is('distribute') || Request::is('distribute/*') ? 'active' : '' }}">
                <a class="nav-link" href="">
                  <span><i class="fa fa-money"></i>  Expense</span>
                </a>
            </li>

            <li class="nav-item {{Route::currentRouteNamed('report') ? 'active' : '' }}">
                <a class="nav-link" href="">
                    <span><i class="fas fa-chart-bar"></i> Reports</span>
                </a>
            </li>
          
          </ul>
        </div><!-- container -->
    </div><!-- slim-navbar -->
