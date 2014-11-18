    <!-- Navigation -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=base_url('home')?>"><img src="img/logo.png" alt="AETI"></a>
        </div>
        <div class="collapse navbar-collapse">
          <!-- <button class="navbar-btn btn btn-theme-primary pull-right hidden-sm hidden-xs">Sign In</button> -->
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.html">Home: Default</a></li>
                <li><a href="index-full.html">Home: Fullscreen</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                  <a href="javascript:void(0);">About Us</a>
                  <ul class="dropdown-menu">
                    <li><a href="about-us.html">About Us: Default</a></li>
                    <li><a href="about-us_option-1.html">About Us: Option 1</a></li>
                  </ul>
                </li>
                <li><a href="coming-soon.html">Coming Soon</a></li>
                <li class="dropdown-submenu">
                  <a href="javascript:void(0);">Contact Us</a>
                  <ul class="dropdown-menu">
                    <li><a href="contact-us.html">Contact Us: Default</a></li>
                    <li><a href="contact-us_option-1.html">Contact Us: Option 1</a></li>
                  </ul>
                </li>
                <li><a href="help-center.html">Help Center</a></li>
                <li><a href="help-item.html">Help Item</a></li>
                <li class="dropdown-submenu">
                  <a href="javascript:void(0);">Pricing Options</a>
                  <ul class="dropdown-menu">
                    <li><a href="pricing.html">Pricing: Boxes</a></li>
                    <li><a href="pricing_joint.html">Pricing: Joint Boxes</a></li>
                    <li><a href="pricing_table.html">Pricing: Table</a></li>
                  </ul>
                </li>
                <li><a href="responsive-video.html">Responsive Video</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="sign-in.html">Sign In</a></li>
                <li><a href="sign-up.html">Sign Up</a></li>
                <li><a href="search-results.html">Search Results</a></li>
                <li class="dropdown-submenu">
                  <a href="javascript:void(0);">Timeline</a>
                  <ul class="dropdown-menu">
                    <li><a href="timeline_center.html">Timeline: Center</a></li>
                    <li><a href="timeline_left.html">Timeline: Left</a></li>
                    <li><a href="timeline_right.html">Timeline: Right</a></li>
                  </ul>
                </li>
                <li><a href="error-page.html">404 Error Page</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="portfolio-item.html">Portfolio Item</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                  <a href="javascript:void(0);">Blog</a>
                  <ul class="dropdown-menu">
                    <li><a href="blog_sidebar-right.html">Sidebar Right</a></li>
                    <li><a href="blog_sidebar-left.html">Sidebar Left</a></li>
                    <li><a href="blog_sidebar-no.html">Without Sidebar</a></li>
                  </ul>
                </li>
                <li class="dropdown-submenu">
                  <a href="javascript:void(0);">Blog Post</a>
                  <ul class="dropdown-menu">
                    <li><a href="blog-post_sidebar-right.html">Sidebar Right</a></li>
                    <li><a href="blog-post_sidebar-left.html">Sidebar Left</a></li>
                    <li><a href="blog-post_sidebar-no.html">Without Sidebar</a></li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="shop.html">Shop</a></li>
                <li><a href="shop-item.html">Shop Item</a></li>
                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                <li><a href="user-profile.html">User Profile</a></li>
              </ul>
            </li>
            <li class="hidden-sm">
              <a href="ui-elements.html">UI Elements</a>
            </li>
            <!-- Navbar Search -->
            <li class="hidden-xs" id="navbar-search">
              <a href="#">
                <i class="fa fa-search"></i>
              </a>
              <div class="hidden" id="navbar-search-box">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </li>
          </ul>
          <!-- Mobile Search -->
          <form class="navbar-form navbar-right visible-xs" role="search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search">
              <span class="input-group-btn">
                <button class="btn btn-theme-primary" type="button">Search!</button>
              </span>
            </div>
          </form>
        </div><!--/.nav-collapse -->
      </div>
    </div> <!-- / .navigation -->