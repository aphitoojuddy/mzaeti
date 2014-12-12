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
          <a class="navbar-brand" href="<?=base_url('home')?>"><img src="<?=img_url('logo-aeti-200.jpg')?>" alt="AETI"></a>
        </div>
        <div class="collapse navbar-collapse">
          <!-- <button class="navbar-btn btn btn-theme-primary pull-right hidden-sm hidden-xs">Sign In</button> -->
          <ul class="nav navbar-nav navbar-right">
            <li class="hidden-sm <?=($current_page == 'home' ? 'active' : '')?>">
              <a href="<?=site_url('home');?>">Home</a>
            </li>
            <li class="hidden-sm <?=($current_page == 'news' ? 'active' : '')?>">
              <a href="<?=site_url('news');?>">News</a>
            </li>
            <li class="hidden-sm <?=($current_page == 'regulation' ? 'active' : '')?>">
              <a href="<?=site_url('regulation');?>">Regulation</a>
            </li>
            <li class="hidden-sm <?=($current_page == 'gallery' ? 'active' : '')?>">
              <a href="<?=site_url('gallery');?>">Gallery</a>
            </li>
            <li class="dropdown <?=(($current_page == 'overview') || ($current_page == 'members') || ($current_page == 'structure') ? 'active' : '')?>">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="<?=site_url('overview');?>">Organization's Overview</a></li>
                <li><a href="<?=site_url('structure');?>">Organization's Structure</a></li>
                <li><a href="<?=site_url('members');?>">Our Members</a></li>
              </ul>
            </li>
            <li class="hidden-sm <?=($current_page == 'contact_us' ? 'active' : '')?>">
              <a href="<?=site_url('contact_us');?>">Contact Us</a>
            </li>
            <li class="hidden-sm">
              <a href="<?=site_url('home/id');?>"><img src="<?=img_url('id.png')?>" alt="bahasa indonesia"></a>
            </li>
            <li class="hidden-sm">
              <a href="<?=site_url('home/en');?>"><img src="<?=img_url('en.png')?>" alt="english"></a>
            </li>
            <!-- Navbar Search -->
            <!-- <li class="hidden-xs" id="navbar-search">
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
            </li> -->
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
