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

    <!-- Wrapper -->
    <div class="wrapper">

      <!-- Home Slider -->
      <div class="home-slider">
        <!-- Carousel -->
        <div id="home-slider" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#home-slider" data-slide-to="0" class="active"></li>
            <li data-target="#home-slider" data-slide-to="1"></li>
            <li data-target="#home-slider" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <!-- Slide #1 -->
            <div class="item active" id="item-1">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="home-slider__content">
                      <h1 class="first-child animated slideInDown delay-2">Powerful Responsive Theme For Business and Personal Projects</h1>
                      <h3 class="animated slideInDown delay-3">Beautiful Theme That Works Out Of The Box</h3>
                      <p class="text-muted animated slideInLeft delay-4">Nulla pretium libero interdum, tempus lorem non, rutrum diam. Quisque pellentesque diam sed pulvinar lobortis. <a href="#" id="tooltip" data-toggle="tooltip" data-placement="top" title="Quisque pellentesque diam.">Vestibulum ante ipsum</a> primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                      <a href="#" class="btn btn-lg btn-theme-primary animated fadeInUpBig delay-5">Purchase Now</a>
                    </div>
                  </div>
                </div> <!-- / .row -->
              </div> <!-- / .container -->
              <div class="bg-img hidden-xs">
                <img src="img/item-1.png" alt="...">
              </div>
            </div> <!-- / .item -->
            <!-- Slide #2 -->
            <div class="item" id="item-2">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="home-slider__content">
                      <ul class="lead">
                        <li class="animated slideInLeft delay-2"><span>Built with Bootstrap 3x</span></li>
                        <li class="animated slideInLeft delay-3"><span>20+ HTML Templates</span></li>
                        <li class="animated slideInLeft delay-4"><span>Isotope Gallery</span></li>
                        <li class="animated slideInLeft delay-5"><span>LESS Files Included</span></li>
                      </ul>
                      <ul class="lead string">
                        <li class="animated fadeInUpBig delay-6"><span>Professional Multi-purpose Theme</span></li>
                        <li class="animated fadeInUpBig delay-7"><span>That Works Out Of The Box</span></li>
                      </ul>
                    </div>
                  </div>
                </div> <!-- / .row -->
              </div> <!-- / .container -->
              <div class="bg-img hidden-xs">
                <img src="img/item-2.png" alt="...">
              </div>         
            </div> <!-- / .item -->
            <!-- Slide #3 -->
            <div class="item" id="item-3">
              <div class="container">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="home-slider__content">
                      <h1 class="first-child animated slideInDown delay-2">Fully Packed With Features</h1>
                      <h3 class="animated slideInDown delay-3">Look No Further</h3>
                      <ul>
                        <li class="animated slideInLeft delay-4"><i class="fa fa-chevron-circle-right fa-fw"></i> Built With Bootstrap 3</li>
                        <li class="animated slideInLeft delay-5"><i class="fa fa-chevron-circle-right fa-fw"></i> Fully Responsive Design</li>
                        <li class="animated slideInLeft delay-6"><i class="fa fa-chevron-circle-right fa-fw"></i> Easy to Customize</li>
                        <li class="animated slideInLeft delay-7"><i class="fa fa-chevron-circle-right fa-fw"></i> 20+ HTML Templates</li>
                      </ul>
                      <a href="#" class="btn btn-lg btn-theme-primary animated fadeInUpBig delay-8">Purchase Now</a>
                    </div>
                  </div>
                </div> <!-- / .row -->
              </div> <!-- / .container -->
              <div class="bg-img hidden-xs">
                <img src="img/item-3.png" alt="...">
              </div>       
            </div> <!-- / .item -->
          </div> <!-- / .carousel -->
          <!-- Controls -->
          <a class="carousel-arrow carousel-arrow-prev" href="#home-slider" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-arrow carousel-arrow-next" href="#home-slider" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
      </div> <!-- / .home-slider -->

      <!-- Services -->
      <div class="home-services">
        <div class="container">
          <div class="row">
            <!-- <div class="col-sm-12 col-md-7">
              <ul>
                <li>
                  <i class="fa fa-gears"></i>
                  <p><span>Built with </span> Bootstrap 3</p>
                </li>
                <li>
                  <i class="fa fa-flag"></i>
                  <p>Font Awesome <span>Icons</span></p>
                </li>
                <li>
                  <i class="fa fa-picture-o"></i>
                  <p>Isotope <span>Portfolio</span></p>
                </li>
                <li>
                  <i class="fa fa-envelope-o"></i>
                  <p>24/7 Support <span>by e-mail</span></p>
                </li>
              </ul>
            </div> -->
            <!-- <div class="col-md-5 hidden-sm hidden-xs"> -->
              <p class="lead text-center">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore."</p>
            <!-- </div> -->
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </div> <!-- / .services -->

      <!-- Main Services -->
      <div class="main-services">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="headline-lg">Recent News</h2>
            </div>
            <div class="col-sm-4">
              <div class="services">
                <div class="service-item">
                  <i class="fa fa-gear"></i>
                  <div class="service-desc">
                    <h4>Built With Bootstrap 3</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.</p>
                    <a class="pull-right" href="">Read More...</a>
                  </div>
                </div>
              </div> <!-- / .services -->
            </div>
            <div class="col-sm-4">
              <div class="services">
                <div class="service-item">
                  <i class="fa fa-arrows-alt"></i>
                  <div class="service-desc">
                    <h4>Responsive Design</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.</p>
                    <a class="pull-right" href="">Read More...</a>
                  </div>
                </div>
              </div> <!-- / .services -->
            </div>
            <div class="col-sm-4">
              <div class="services">
                <div class="service-item">
                  <i class="fa fa-refresh"></i>
                  <div class="service-desc">
                    <h4>Easy to Customize</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.</p>
                    <a class="pull-right" href="">Read More...</a>
                  </div>
                </div>
              </div> <!-- / .services -->
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <div class="services">
                <div class="service-item">
                  <i class="fa fa-plus"></i>
                  <div class="service-desc">
                    <h4>20+ Templates Included</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.</p>
                    <a class="pull-right" href="">Read More...</a>
                  </div>
                </div>
              </div> <!-- / .services -->
            </div>
            <div class="col-sm-4">
              <div class="services">
                <div class="service-item">
                  <i class="fa fa-envelope"></i>
                  <div class="service-desc">
                    <h4>24/7 Support</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.</p>
                    <a class="pull-right" href="">Read More...</a>
                  </div>
                </div>
              </div> <!-- / .services -->
            </div>
            <div class="col-sm-4">
              <div class="services">
                <div class="service-item">
                  <i class="fa fa-picture-o"></i>
                  <div class="service-desc">
                    <h4>Isotope Gallery</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam id ipsum varius, tincidunt odio nec, placerat enim.</p>
                    <a class="pull-right" href="">Read More...</a>
                  </div>
                </div>
              </div> <!-- / .services -->
            </div>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </div> <!-- / .main-features -->

      <!-- Responsive Showcase -->
      <div class="responsive-showcase">
        <div class="container">
          <div class="responsive-design">
            <div class="row">
              <div class="col-sm-6">
                <h2 class="headline-lg headline-lg_left first-child">Our Members</h2>
                <p class="lead btn btn-sm btn-theme-primary" href="blog-post.html">Company Name</p>
                <p class="lead text-muted">
                  Pellentesque magna turpis, porttitor non leo ac, imperdiet sollicitudin neque. Sed id condimentum quam. Ut dui velit, suscipit et libero vulputate, feugiat vestibulum velit. Integer auctor, orci sit amet tincidunt posuere.
                </p>
                <ul class="list-inline hidden-xs">
                  <li><i class="fa fa-mobile text-theme-secondary inactive" data-device="#iphone"></i></li>
                  <li><i class="fa fa-tablet text-theme-secondary inactive" data-device="#ipad"></i></li>
                  <li><i class="fa fa-laptop text-theme-secondary" data-device="#macbook"></i></li>
                  <li><i class="fa fa-desktop text-theme-secondary inactive" data-device="#imac"></i></li>
                </ul>
              </div>
              <div class="col-sm-6 hidden-xs">
                <img class="img-responsive show" src="img/macbook.png" alt="..." id="macbook">
                <img class="img-responsive hidden" src="img/imac.png" alt="..." id="imac">
                <img class="img-responsive hidden" src="img/ipad.png" alt="..." id="ipad">
                <img class="img-responsive hidden" src="img/iphone.png" alt="..." id="iphone">
              </div>
            </div> <!-- / .row -->
          </div> <!-- / .template-thumbnails -->
        </div> <!-- / .container -->
      </div> <!-- / .template-showcase -->

    </div> <!-- / .wrapper -->