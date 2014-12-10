    <style type="text/css">
        .datecal {
          display: block;
          width: 100px;
          height: 110px;
          margin: 30px auto;
          background: #fff;
          text-align: center;
          font-family: 'Helvetica', sans-serif;
          position: relative;
        }

        .datecal .binds {
          position: absolute;
          height: 15px;
          width: 60px;
          background: transparent;
          border: 2px solid #999;
          border-width: 0 5px;
          top: -6px;
          left: 0;
          right: 0;
          margin: auto;
        }

        .datecal .month {
          background: #555;
          display: block;
          padding: 8px 0;
          color: #fff;
          font-size: 12px;
          font-weight: bold;
          border-bottom: 2px solid #333;
          box-shadow: inset 0 -1px 0 0 #666;
        }

        .datecal .day {
          display: block;
          margin: 0;
          padding: 10px 0;
          font-size: 48px;
          box-shadow: 0 0 3px #ccc;
          position: relative;
        }

        .datecal .day > span {
          display: block;
          margin: 0;
          font-size: 11px;
        }

        .datecal .day::after {
          content: '';
          display: block;
          height: 100%;
          width: 96%;
          position: absolute;
          top: 3px;
          left: 2%;
          z-index: -1;
          box-shadow: 0 0 3px #ccc;
        }

        .datecal .day::before {
          content: '';
          display: block;
          height: 100%;
          width: 90%;
          position: absolute;
          top: 6px;
          left: 5%;
          z-index: -1;
          box-shadow: 0 0 3px #ccc;
        }
    </style>
    <!-- Wrapper -->
    <div class="wrapper">

      <!-- Topic Header -->
      <div class="topic">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <ol class="breadcrumb hidden-xs">
                <li><a href="index.html">Home</a></li>
                <li class="active">News</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h3 class="headline"><span>News</span></h3>
          </div>
        </div>
        <?php
          if (!empty($news_data)) {
            // foreach ($news_data as $key => $value) {
              // var_dump($key);
              $datetime = new DateTime($news_data->article_date);
              $year = $datetime->format('Y');
              $month = $datetime->format('F');
              $day = $datetime->format('j');
        ?>
        <div class="row">
          <div class="col-sm-2">
            <div class="datecal">
              <span class="binds"></span>
              <span class="month"><?=$month?></span>
              <h1 class="day"><?=$day?><br/><span><?=$year?></span></h1>
            </div>
          </div>
          <div class="col-sm-10">
            <div class="panel panel-default">
              <div class="panel-heading">
                <a href="<?=site_url('news/detail/'.$news_data->article_id)?>"><?=($lang == 'id' ? $news_data->article_title_id : $news_data->article_title_en)?></a>
              </div>
              <div class="panel-body">
                <?=($lang == 'id' ? $news_data->article_content_id : $news_data->article_content_en)?>
              </div>
            </div> <!-- / .panel -->
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