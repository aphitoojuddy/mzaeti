    
    <!-- Wrapper -->
    <div class="wrapper">

      <!-- Home Slider -->
      <div class="home-slider">
        <!-- Carousel -->
        <div>
          
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <!-- Slide #1 -->
            <div class="item active" id="item-1">
              
              
            </div> <!-- / .item -->
            
          </div> <!-- / .carousel -->
          
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
            <?php
              if (!empty($news_data)) {
                foreach ($news_data as $key => $value) {
            ?>
            <div class="col-sm-4">
              <div class="services">
                <div class="service-item">
                  <i class="fa fa-gear"></i>
                  <div class="service-desc">
                    <h4><?=($lang == 'id' ? $value->article_title_id : $value->article_title_en)?></h4>
                    <p><?=($lang == 'id' ? substr($value->article_content_id, 0, 100) : substr($value->article_content_en, 0, 100 ))?></p>
                    <a class="pull-right" href="<?=site_url('news/detail/'.$value->article_id)?>">Read More...</a>
                  </div>
                </div>
              </div> <!-- / .services -->
            </div>
            <?php
                }
              }
            ?>
          </div> <!-- / .row -->
        </div> <!-- / .container -->
      </div> <!-- / .main-features -->

      <!-- Responsive Showcase -->
      <div class="responsive-showcase">
        <div class="container">
          <div class="responsive-design">
            <div class="row">
              <div class="col-sm-12">
                <h2 class="headline-lg headline-lg_left first-child">Our Members</h2>
              </div>

              <!-- <div class="col-sm-6">
                <?php
                  if (!empty($members_data)) {
                    foreach ($members_data as $key => $value) {
                ?>
                <p class="lead btn btn-sm btn-theme-primary" href="blog-post.html"><?=($lang == 'id' ? $value->article_title_id : $value->article_title_en)?></p>
                <p class="lead text-muted">
                  <?=($lang == 'id' ? substr($value->article_content_id, 0, 100) : substr($value->article_content_en, 0, 100 ))?>
                </p>
                <?php
                    }
                  }
                ?>
              </div> -->

              <div class="col-sm-12">

                <div class="member-slider">
                  <!-- Carousel -->
                  <div id="member-slider" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#member-slider" data-slide-to="0" class="active"></li>
                      <li data-target="#member-slider" data-slide-to="1"></li>
                      <li data-target="#member-slider" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      <!-- Slide #1 -->
                      <?php
                        if (!empty($members_data)) {
                          $var_count = 0;
                          foreach ($members_data as $key => $value) {
                            $var_count++;
                      ?>
                      <div class="item <?=($var_count == 1 ? 'active' : '' )?>" id="item-<?=$var_count?>">
                        <div class="container">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="member-slider__content">
                                <a href="<?=site_url('members/detail/'.$value->article_id)?>" class="btn btn-lg btn-theme-primary <?=($var_count == 1 ? 'first-child' : '' )?> animated slideInDown delay-2"><?=($lang == 'id' ? $value->article_title_id : $value->article_title_en)?></a>
                                <!-- <h3 class="animated slideInDown delay-3">Beautiful Theme That Works Out Of The Box</h3> -->
                                <p class="text-muted animated slideInLeft delay-3"><?=strip_tags($lang == 'id' ? substr($value->article_content_id, 0, 100) : substr($value->article_content_en, 0, 100 ))?></p>
                                <!-- <a href="#" class="btn btn-lg btn-theme-primary animated fadeInUpBig delay-5">Purchase Now</a> -->
                              </div>
                            </div>
                          </div> <!-- / .row -->
                        </div> <!-- / .container -->
                        <div class="bg-img hidden-xs">
                          <img src="<?=img_url('logo/'.$value->downloadable_content_extra)?>" alt="<?=($lang == 'id' ? $value->article_title_id : $value->article_title_en)?>">
                        </div>
                      </div> <!-- / .item -->
                      <?php
                          }
                        }
                      ?>
                    </div> <!-- / .carousel -->
                    <!-- Controls -->
                    <a class="carousel-arrow carousel-arrow-prev" href="#member-slider" data-slide="prev">
                      <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-arrow carousel-arrow-next" href="#member-slider" data-slide="next">
                      <i class="fa fa-angle-right"></i>
                    </a>
                  </div>
                </div> <!-- / .member-slider -->
              </div>

            </div> <!-- / .row -->
          </div> <!-- / .template-thumbnails -->
        </div> <!-- / .container -->
      </div> <!-- / .template-showcase -->

    </div> <!-- / .wrapper -->