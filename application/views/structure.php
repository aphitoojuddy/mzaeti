    <style type="text/css">
      * {
          margin:0;
          padding:0;
          line-height:1.5em;
      }
      #wrappertree {
          margin-left:20px;
      }
      .chart-title {
          color: #09C;
          font-weight:bold;
      }
      .organization {
          font-family: arial, sans-serif;
          color:black;
          font-size: 14px;
          text-indent:0px !important;
          white-space: nowrap;
          overflow: hidden;
          position: relative;
      }
      #board-of-directors {
          margin-left:0px;
      }
      ul#organization-chart {
          list-style: none;
          float:left;
          border-left:1px solid #CCC;
          ;
          margin-left:30px;
          margin-top:2px;
      }
      .organization ul li {
          margin: 10px 0px 10px 0px;
          display:block;
          float:none;
          vertical-align: top;
          padding: 10px 20px;
      }
      li.parent {
          margin-left:20px !important;
      }
      li.parent::before {
          content:"";
          width:42px;
          height:100%;
          border-top:1px solid #CCC;
          position:absolute;
          margin-top:10px;
          left:50px;
      }
      /* Remove vertical connector from last element in chart */
       li.parent:last-child::before {
          border-left:1px solid white !important;
      }
      li.child {
          margin-left:42px !important;
      }
      li.child::before {
          content:"";
          width:32px;
          height:30px;
          border-bottom:1px solid #CCC;
          border-left:1px solid #CCC;
          position:absolute;
          margin-top:-18px;
          left:120px;
      }
      li.child:nth-child(n+2) {
          margin-top:-10px;
      }
      li.child:nth-child(n+2):before {
          height:60px;
          margin-top:-50px;
      }
      .organization a {
          text-decoration:none !important;
          color:black !important;
          padding:5px 10px;
          border-radius: 5px;
          border:1px solid #ccc;
          transition: all 0.5s;
          -webkit-transition: all 0.5s;
          -moz-transition: all 0.5s;
      }
      .organization li a:hover, .organization li a:hover+ul li a {
          background: #c8e4f8 !important;
          color: #000 !important;
          border: 1px solid #94a0b4 !important;
      }
      .organization li a:hover+ul li::before, .organization li a:hover+ul::before {
          border-color: #94a0b4 !important;
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
                <li class="active">Structure</li>
              </ol>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h3 class="headline"><span>Organization Structure</span></h3>
          </div>
          <div class="col-sm-12">
            <div id="wrappertree">
              <div class="organization">

                <ul id="board-of-directors">
                  <li>
                    <a href="javascript:void(0)"><span class="chart-title">Ketua Umum</span> Jabin Sufianto</a>
                      <ul id="organization-chart">
                          <li class="parent"> <a href="javascript:void(0)"><span class="chart-title">Wakil Ketua Umum</span></a>
                              <ul>
                                  <li class="child">  <a href="javascript:void(0)">Fandy Lingga</a></li>
                                  <li class="child">  <a href="javascript:void(0)">Meily</a></li>
                                  <li class="child">  <a href="javascript:void(0)">Achmad Albani</a></li>
                              </ul>
                          </li>
                          <li class="parent"> <a href="javascript:void(0)"><span class="chart-title">Sekretaris</span> Eddy Mulyono</a></li>
                          <li class="parent"> <a href="javascript:void(0)"><span class="chart-title">Bendahara</span> Welly Jusuf</a></li>
                          <li class="parent"> <a href="javascript:void(0)"><span class="chart-title">Anggota</span></a>
                              <ul>
                                  <li class="child">  <a href="javascript:void(0)">Fenny Widjaja</a></li>
                                  <li class="child">  <a href="javascript:void(0)">Hendry Lie</a></li>
                                  <li class="child">  <a href="javascript:void(0)">Petrus Tjandra</a></li>
                                  <li class="child">  <a href="javascript:void(0)">Budi Santoso</a></li>
                                  <li class="child">  <a href="javascript:void(0)">Rudi Irawan</a></li>
                                  <li class="child">  <a href="javascript:void(0)">Dian Trihardjo Goestiadji</a></li>
                                  <li class="child">  <a href="javascript:void(0)">Suwito Gunawan</a></li>
                                  <li class="child">  <a href="javascript:void(0)">Tamron</a></li>
                                  <li class="child">  <a href="javascript:void(0)">Hendry Parsito</a></li>
                                  <li class="child">  <a href="javascript:void(0)">Kassan Mulyono</a></li>
                                  <li class="child">  <a href="javascript:void(0)">Apik Chakib Rasjidi</a></li>
                                  <li class="child">  <a href="javascript:void(0)">Hendrik Suhardiman</a></li>
                                  <li class="child">  <a href="javascript:void(0)">Tjahyono</a></li>
                              </ul>
                          </li>
                      </ul>
                  </li>
                </ul>
              </div>
            </div>
              <!--wrappertree-->
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->