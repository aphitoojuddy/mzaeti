    <!-- Wrapper -->
    <div class="wrapper">

      <!-- Topic Header -->
      <div class="topic">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <ol class="breadcrumb hidden-xs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Gallery</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h3 class="headline"><span>Gallery</span></h3>
          </div>
          <?php
            if (!empty($gallery_data)) {
              foreach ($gallery_data as $key => $value) {
          ?>
          <div class="col-sm-3">
            <div class="portfolio-item">
              <div class="portfolio-thumbnail">
                <img class="img-responsive" src="<?=img_url('gallery/'.$value->downloadable_content_extra)?>" alt="...">
                <div class="mask">
                  <p>
                    <a href="<?=img_url('gallery/'.$value->downloadable_content)?>" data-lightbox="template_showcase"><i class="fa fa-search-plus fa-2x"></i></a>
                    <!-- <a href="portfolio-item.html"><i class="fa fa-info-circle fa-2x"></i></a> -->
                  </p>
                </div>
              </div>
            </div> <!-- / .portfolio-item -->
          </div>
          <?php
              }
            }
          ?>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->