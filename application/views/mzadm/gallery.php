		<!-- MAIN PANEL -->
		<div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon">

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li>Home</li><li>Gallery</li>
				</ol>
				<!-- end breadcrumb -->

				<!-- You can also add more buttons to the
				ribbon for further usability

				Example below:

				<span class="ribbon-button-alignment pull-right">
				<span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
				<span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
				<span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
				</span> -->

			</div>
			<!-- END RIBBON -->
			
			

			<!-- MAIN CONTENT -->
			<div id="content">

				<!-- row -->
				<div class="row">
					
					<!-- col -->
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<h1 class="page-title txt-color-blueDark">

							<!-- PAGE HEADER -->
							<i class="fa-fw fa fa-file-image-o"></i> 
							Gallery Management
						</h1>
					</div>
					<!-- end col -->

					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-align-right">
						<div class="page-title">
							<a href="<?=site_url('mzadm/gallery/add')?>" class="btn btn-default">Upload</a>
						</div>
					</div>
				</div>
				<!-- end row -->
				
				<?php
					if ($add_success) {
				?>
				<div class="alert alert-block alert-success fade in">
					<a class="close" data-dismiss="alert" href="#">×</a>
					<h4 class="alert-heading"><i class="fa fa-check-square-o"></i> Add Image Success!</h4>
				</div>
				<?php
					}
				?>

				<!-- row -->
				<div class="row">
					<!-- SuperBox -->
					<div class="superbox col-sm-12">
						<div class="well">
							<h2 class="alert alert-info" style="margin: .5em;"> Click image for info and edit function </h2>
							<?php
							foreach ($gallery_data as $key => $value) {
							?>
							<div class="superbox-list">
								<img src="<?=img_url('gallery/'.$value->downloadable_content_extra)?>" data-img="<?=img_url('gallery/'.$value->downloadable_content)?>" alt="<?=$value->article_content_id?>" title="<?=$value->article_title_id?>" class="superbox-img">
							</div>
							<?php
							}
							?>
							<div class="superbox-float"></div>
						</div>
					</div>
					<!-- /SuperBox -->
					
					<div class="superbox-show" style="height:300px; display: none"></div>
				</div>
				<!-- end row -->
				<!-- <div class="row">
					<div class="col-sm-12">
						<ul class="pagination pagination-sm pull-right">
							<li>
								<a href="javascript:void(0);"><i class="fa fa-angle-left"></i></a>
							</li>
							<li>
								<a href="javascript:void(0);">1</a>
							</li>
							<li>
								<a href="javascript:void(0);">2</a>
							</li>
							<li class="active">
								<a href="javascript:void(0);">3</a>
							</li>
							<li>
								<a href="javascript:void(0);">4</a>
							</li>
							<li>
								<a href="javascript:void(0);">5</a>
							</li>
							<li>
								<a href="javascript:void(0);"><i class="fa fa-angle-right"></i></a>
							</li>
						</ul>
					</div>
				</div> -->
			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->