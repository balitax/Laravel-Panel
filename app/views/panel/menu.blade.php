<!--header start-->
      <header class="header white-bg">
            <div class="sidebar-toggle-box">
                <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
            </div>
            <!--logo start-->
            <a href="" class="logo"><span>CAHYOLABS</span></a>
            <!--logo end-->
            
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                <li><a href="{{URL::to('../')}}" target="_blank">View Website</a></li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img src="<?= Gravatar::src('cahyo.mamen@gmail.com', 20) ?>">
                            <span class="username">AGUSC</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="{{URL::to('dashboard/profil/4')}}"><i class=" icon-suitcase"></i>Profile</a></li>
                            <li><a href="{{URL::to('logout')}}"><i class="icon-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="{{URL::to('dashboard')}}">
                          <i class="icon-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-laptop"></i>
                          <span>Pages</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('dashboard/pages')}}">All Pages</a></li>
                          <li><a  href="{{URL::to('dashboard/pages/add')}}">New Pages</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-laptop"></i>
                          <span>Blogs</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('dashboard/blog')}}">All Blogs</a></li>
                          <li><a  href="{{URL::to('dashboard/blog/add')}}">New Blogs</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-laptop"></i>
                          <span>Portofolio</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('dashboard/portofolio')}}">All Portofolio</a></li>
                          <li><a  href="{{URL::to('dashboard/portofolio/add')}}">New Portofolio</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-laptop"></i>
                          <span>Galeri</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{URL::to('dashboard/galeri')}}">All Galeri</a></li>
                          <li><a  href="{{URL::to('dashboard/galeri/add')}}">New Galeri</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      