		<!-- MAIN PANEL -->
		<div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon">

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li>Home</li><li>Organization Overview</li>
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
							<i class="fa-fw fa fa-wrench"></i> 
							Organization Overview
						</h1>
					</div>
					<!-- end col -->

					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-align-right">
						<div class="page-title">
							<a href="<?=site_url('mzadm/overview/edit/'.$overview_data->article_id)?>" class="btn btn-default">Edit</a>
						</div>
					</div>
				</div>
				<!-- end row -->
				
				<?php
					if (!empty($msg_success)) {
				?>
				<div class="alert alert-block alert-success fade in">
					<a class="close" data-dismiss="alert" href="#">×</a>
					<h4 class="alert-heading"><i class="fa fa-check-square-o"></i> <?=$msg_success?></h4>
				</div>
				<?php
					}
				?>
				
				<div class="row">

					<div class="col-sm-12">

						<div class="well padding-10">
							<?php
							if(!empty($overview_data)){
							?>
							<div class="row">
								<div class="col-md-12">
									<h3 class="margin-top-0"><a href="javascript:void(0);"> <?=$overview_data->article_title_id?> </a><br><small class="font-xs"><i>Published by <a href="javascript:void(0);"><?=$overview_data->article_author?></a></i> || <i class="fa fa-calendar"></i>
											<?=$overview_data->article_date?></small></h3>
									<p><?=$overview_data->article_content_id?></p>
								</div>
							</div>
							<hr>
							<?php
							}
							?>
							<!-- <div class="row">
								<div class="col-md-4">
									<img src="img/superbox/superbox-full-19.jpg" class="img-responsive" alt="img">
									<ul class="list-inline padding-10">
										<li>
											<i class="fa fa-calendar"></i>
											<a href="javascript:void(0);"> March 12, 2015 </a>
										</li>
										<li>
											<i class="fa fa-comments"></i>
											<a href="javascript:void(0);"> 38 Comments </a>
										</li>
									</ul>
								</div>
								<div class="col-md-8 padding-left-0">
									<h3 class="margin-top-0"><a href="javascript:void(0);"> Mums favorite shopping malls in USA </a><br><small class="font-xs"><i>Published by <a href="javascript:void(0);">John Doe</a></i></small></h3>
									<p>
										At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. 

										<br><br>Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat. Pellentesque viverra vehicula sem ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
										<br><br>
									</p>
									<a class="btn btn-primary" href="javascript:void(0);"> Read more </a>
								</div>
							</div>
							<hr> -->
						</div>

					</div>
				</div>

			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->