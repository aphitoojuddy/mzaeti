    <!-- Wrapper -->
    <div class="wrapper">

      <!-- Topic Header -->
      <div class="topic">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <ol class="breadcrumb hidden-xs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Our Members</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h3 class="headline"><span>Our Members</span></h3>
          </div>
        </div>
        <?php
          if (!empty($members_data)) {
            foreach ($members_data as $key => $value) {
        ?>
        <div class="row" style="margin-bottom: 40px;">
          <div class="col-sm-3">
            <img src="<?=img_url('logo/'.$value->downloadable_content_extra)?>" style="max-width: 230px;">
          </div>
          <div class="col-sm-9">
              <h3><span><a href="<?=site_url('members/detail/'.$value->article_id)?>"><?=($lang == 'id' ? $value->article_title_id : $value->article_title_en)?></a></span></h3>
              <div>
                <?=($lang == 'id' ? $value->article_content_id : $value->article_content_en)?>
              </div>
          </div>
        </div> <!-- / .row -->
        <?php
            }
          }
        ?>

          <!-- pagination
          <div class="col-sm-12">
              <ul class="pagination">
                <li><a href="#">«</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">»</a></li>
              </ul>
          </div> -->
        
      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->