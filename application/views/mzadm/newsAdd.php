		<!-- MAIN PANEL -->
		<div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon">

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li>Home</li><li>News</li>
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
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1 class="page-title txt-color-blueDark">

							<!-- PAGE HEADER -->
							<i class="fa-fw fa fa-wrench"></i> 
							Add News
						</h1>
					</div>
					<!-- end col -->
				</div>
				<!-- end row -->
				
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
		
								<form class="form-horizontal" method="POST" action="<?=site_url('mzadm/news/add')?>" enctype="multipart/form-data" onsubmit="return postForm()">
									<fieldset>
										<legend>Indonesian Version</legend>
										<div class="form-group <?=(!empty($error_msg['i_title_id']) ? 'has-error' : '')?>">
											<label class="col-md-2 control-label">Title :</label>
											<div class="col-md-10">
												<input class="form-control" placeholder="" type="text" name="i_title_id" id="i_title_id" value="">
										
												

												<?php echo (!empty($error_msg['i_title_id']) ? '<span class="help-block"><i class="fa fa-warning"></i>'.$error_msg['i_title_id'].'</span>' : '' ); ?>
											</div>
										</div>
										<div class="form-group <?=(!empty($error_msg['i_content_id']) ? 'has-error' : '')?>">
											<label class="col-md-2 control-label">Content :</label>
											<div class="col-md-10">
												<textarea class="form-control summernote" placeholder="" rows="4" name="i_content_id" id="i_content_id"></textarea>												

												<?php echo (!empty($error_msg['i_content_id']) ? '<span class="help-block"><i class="fa fa-warning"></i>'.$error_msg['i_content_id'].'</span>' : '' ); ?>
											</div>
										</div>
									</fieldset>

									<fieldset>
										<legend>English Version</legend>
										<div class="form-group <?=(!empty($error_msg['i_title_en']) ? 'has-error' : '')?>">
											<label class="col-md-2 control-label">Title :</label>
											<div class="col-md-10">
												<input class="form-control" placeholder="" type="text" name="i_title_en" id="i_title_en" value="">
										
												

												<?php echo (!empty($error_msg['i_title_en']) ? '<span class="help-block"><i class="fa fa-warning"></i>'.$error_msg['i_title_en'].'</span>' : '' ); ?>
											</div>
										</div>
										<div class="form-group <?=(!empty($error_msg['i_content_en']) ? 'has-error' : '')?>">
											<label class="col-md-2 control-label">Content :</label>
											<div class="col-md-10">
												<textarea class="form-control summernote" placeholder="" rows="4" name="i_content_en" id="i_content_en"></textarea>												

												<?php echo (!empty($error_msg['i_content_en']) ? '<span class="help-block"><i class="fa fa-warning"></i>'.$error_msg['i_content_en'].'</span>' : '' ); ?>
											</div>
										</div>
									</fieldset>
									
									<div class="form-actions">
										<div class="row">
											<div class="col-md-12">
												<button class="btn btn-default" type="button" onclick="window.history.back();">
													Cancel
												</button>
												<button class="btn btn-primary" type="submit">
													<i class="fa fa-save"></i>
													Submit
												</button>
											</div>
										</div>
									</div>
		
								</form>
								<script type="text/javascript">
									var postForm = function() {
										if($('#i_content_id').code() != "<p><br></p>"){
											var i_content_id = $('#i_content_id').html($('#i_content_id').code());
										}else{
											var i_content_id = $('#i_content_id').html('');
										}
										if($('#i_content_en').code() != "<p><br></p>"){
											var i_content_en = $('#i_content_en').html($('#i_content_en').code());
											var i_content_en = $('#i_content_en').html('');
										}
										// alert($('#i_content_id').code());
									}
								</script>
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