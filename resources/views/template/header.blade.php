<!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <!--logo start-->
      <a  class="logo">CHEL <span class="lite">SEA</span></a>
      <!--logo end-->
      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
                                <a href="#" class="fa fa-user" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
    </header>

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li>
            <a class="" href="chelsea">
                          <i class="icon_house_alt"></i>
                          <span>Home</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="galeri" class="">
                          <i class="icon_desktop"></i>
                          <span>Galeri</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="tabel" class="">
                          <i class="icon_table"></i>
                          <span>Data</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="sejarah" class="">
                          <i class="fa fa-pencil"></i>
                          <span>Paragraf</span>
                      </a>
            
          </li>
          <li>
            <a class="" href="manager">
                          <i class="fa fa-money"></i>
                          <span>Manager</span>
                      </a>
          </li>
          <li>
            <a class="" href="about">
                          <i class="fa fa-user"></i>
                          <span>About</span>

                      </a>

          </li>
          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>

