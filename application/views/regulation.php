    <!-- Wrapper -->
    <div class="wrapper">

      <!-- Topic Header -->
      <div class="topic">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <ol class="breadcrumb hidden-xs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Regulation</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h3 class="headline"><span>Regulations</span></h3>
          </div>
          <?php
            if (!empty($regulation_data)) {
              foreach ($regulation_data as $key => $value) {
          ?>
          <div class="col-sm-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <?=($lang == 'id' ? $value->article_title_id : $value->article_title_en)?> <a class="btn btn-xs btn-theme-secondary pull-right" href="<?=asset_url().'upload/'.$value->downloadable_content?>">download</a>
              </div>
              <div class="panel-body">
                <?=($lang == 'id' ? $value->article_content_id : $value->article_content_en)?>
              </div>
            </div> <!-- / .panel -->
          </div>
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
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->