    <style type="text/css" media="screen">
      * {margin: 0; padding: 0;}

      .tree {
        white-space: nowrap;
        overflow: auto;
      }

      .tree ul {
        padding-top: 20px; position: relative;
    
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        transition: all 0.5s;
      }

      .tree li {
        float:none;
        display:inline-block;
        vertical-align:top;

        /*float: left; */
        text-align: center;
        list-style-type: none;
        position: relative;
        padding: 20px 5px 0 5px;
    
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        transition: all 0.5s;
      }

      /*We will use ::before and ::after to draw the connectors*/

      .tree li::before, .tree li::after{
        content: '';
        position: absolute; top: 0; right: 50%;
        border-top: 1px solid #ccc;
        width: 50%; height: 45px;
        z-index: -1;
      }
      .tree li::after{
        right: auto; left: 50%;
        border-left: 1px solid #ccc;
      }

      /*We need to remove left-right connectors from elements without 
      any siblings*/
      .tree li:only-child::after, .tree li:only-child::before {
        display: none;
      }

      /*Remove space from the top of single children*/
      .tree li:only-child{ padding-top: 0;}

      /*Remove left connector from first child and 
      right connector from last child*/
      .tree li:first-child::before, .tree li:last-child::after{
        border: 0 none;
      }
      /*Adding back the vertical connector to the last nodes*/
      .tree li:last-child::before{
        border-right: 1px solid #ccc;
        border-radius: 0 5px 0 0;
        
        -webkit-transform: translateX(1px);
        -moz-transform: translateX(1px);
        transform: translateX(1px);
        
        -webkit-border-radius: 0 5px 0 0;
        -moz-border-radius: 0 5px 0 0;
        border-radius: 0 5px 0 0;
      }
      .tree li:first-child::after{
        border-radius: 5px 0 0 0;
        -webkit-border-radius: 5px 0 0 0;
        -moz-border-radius: 5px 0 0 0;
      }

      /*Time to add downward connectors from parents*/
      .tree ul ul::before{
        content: '';
        position: absolute; top: -12px; left: 50%;
        border-left: 1px solid #ccc;
        width: 0; height: 32px;
        z-index: -1;
      }

      .tree ul ul ul::before{
        content: '';
        position: absolute; top: -12px; left: 50%;
        border-left: 1px solid #ccc;
        width: 0; height: 32px;
        z-index: -1;
      }

      .tree li a{
        border: 1px solid #ccc;
        padding: 5px 10px;
        text-decoration: none;
        color: #666;
        font-family: arial, verdana, tahoma;
        font-size: 11px;
        display: inline-block;
        background: white;
    
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
    
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        transition: all 0.5s;
      }
      .tree li a+a {
        margin-left: 20px;
        position: relative;
      }
      .tree li a+a::before {
        content: '';
        position: absolute;
        border-top: 1px solid #ccc;
        top: 50%; left: -21px; 
        width: 20px;
      }

      /*Time for some hover effects*/
      /*We will apply the hover effect the the lineage of the element also*/
      .tree li a:hover, .tree li a:hover~ul li a {
        background: #c8e4f8; color: #000; border: 1px solid #94a0b4;
      }
      /*Connector styles on hover*/
      .tree li a:hover~ul li::after, 
      .tree li a:hover~ul li::before, 
      .tree li a:hover~ul::before, 
      .tree li a:hover~ul ul::before
      {
        border-color: #94a0b4;
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
          <div class="col-sm-12 text-center">
            <!--
            We will create a family tree using just CSS(3)
            The markup will be simple nested lists
            -->
            <div class="tree">
              <ul>
                <li>
                  <a href="#"><b>Ketua Umum</b><br/><br/>Jabin Sufianto</a>
                  <ul>
                    <li>
                      <a href="#"><b>Wakil Ketua Umum</b><br/><br/>Fandy Lingga</a>
                      <a href="#"><b>Wakil Ketua Umum</b><br/><br/>Meily</a>
                      <a href="#"><b>Wakil Ketua Umum</b><br/><br/>Achmad Albani</a>
                      <ul>
                        <a href="#"><b>Sekretaris</b><br/><br/>Eddy Mulyono</a>
                        <a href="#"><b>Bendahara</b><br/><br/>Welly Jusuf</a>
                        <li>
                          <a href="#"><b>Anggota</b><br/><br/>Fenny Widjaja</a>
                          <a href="#"><b>Anggota</b><br/><br/>Hendry Lie</a>
                          <a href="#"><b>Anggota</b><br/><br/>Petrus Tjandra</a>
                          <a href="#"><b>Anggota</b><br/><br/>Budi Santoso</a>
                          <a href="#"><b>Anggota</b><br/><br/>Rudi Irawan</a>
                          <a href="#"><b>Anggota</b><br/><br/>Dian Trihardjo Goestiadji</a>
                          <a href="#"><b>Anggota</b><br/><br/>Suwito Gunawan</a>
                          <a href="#"><b>Anggota</b><br/><br/>Tamron</a>
                          <a href="#"><b>Anggota</b><br/><br/>Hendry Parsito</a>
                          <a href="#"><b>Anggota</b><br/><br/>Kassan Mulyono</a>
                          <a href="#"><b>Anggota</b><br/><br/>Apik Chakib Rasjidi</a>
                          <a href="#"><b>Anggota</b><br/><br/>Hendrik Suhardiman</a>
                          <a href="#"><b>Anggota</b><br/><br/>Tjahyono</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->

    </div> <!-- / .wrapper -->