		<!-- MAIN PANEL -->
		<div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon">

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li>Home</li><li>Site Settings</li>
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
							Site Settings
						</h1>
					</div>
					<!-- end col -->

					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-align-right">
						<div class="page-title">
							<a href="<?=site_url('mzadm/setting/edit')?>" class="btn btn-default">Edit</a>
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
				<!--
					The ID "widget-grid" will start to initialize all widgets below 
					You do not need to use widgets if you dont want to. Simply remove 
					the <section></section> and you can use wells or panels instead 
					-->
				
				<!-- widget grid -->
				<section id="widget-grid" class="">

					<!-- START ROW -->
					<div class="well">
						<!-- widget div-->
						<div>
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
							<!-- This area used as dropdown edit box -->
		
							</div>
							<!-- end widget edit box -->
		
							<!-- widget content -->
							<div class="widget-body">
		
								<div class="form-horizontal">
									<fieldset>
										<legend>General Information</legend>
										<?php
										foreach ($general_setting as $key => $value) {
										?>
										<div class="form-group">
											<label class="col-md-2 control-label"><?=$value->config_display_var?> :</label>
											<div class="col-md-10">
												<p><?=$value->config_value?></p>
											</div>
										</div>
										<?php
										}
										?>
									</fieldset>
								</div>
							</div>
							<!-- end widget content -->
		
						</div>
						<!-- end widget div -->

					</div>
					<!-- END ROW -->

				</section>
				<!-- end widget grid -->

			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->