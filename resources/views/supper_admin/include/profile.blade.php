 <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('public/backEnds/')}}/images//img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>
                {{Session::get('admin_username')}}
                  <?php 
                       // echo'<pre>';
                        // print_r( $data);
     
                  ?>
                </h2>
              </div>
            </div>