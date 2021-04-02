
  <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('public/backEnds/')}}/images//img.jpg" alt="">{{Session::get('admin_username')}}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{url('supper/admin/master/profile')}}">Profile</a></li>
                    <li><a href="{{url('supper/admin/master/change/password')}}">Change Password</a></li>
                    <li><a href="{{url('supper/admin/master/logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

            
              </ul>
            </nav>
          </div>
    </div>