    <!-- Wrapper -->
    <div class="wrapper">

      <!-- Topic Header -->
      <div class="topic">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <ol class="breadcrumb hidden-xs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Organization Overview</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <?php
          if (!empty($overview_data)) {
            // foreach ($news_data as $key => $value) {
              // var_dump($key);
        ?>
        <div class="row">
          <div class="col-sm-12">
            <h3 class="text-center"><a href="javascript:void(0);"><?=($lang == 'id' ? $overview_data->article_title_id : $overview_data->article_title_en)?></a></h3>
          </div>
        </div>
        <div class="row" style="padding-top: 30px;">
          <div class="col-sm-12">
              <?=($lang == 'id' ? $overview_data->article_content_id : $overview_data->article_content_en)?>
          </div>
        </div> <!-- / .row -->
        <?php
            // }
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