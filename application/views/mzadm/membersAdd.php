		<style type="text/css">
			/* Apply these styles only when #preview-pane has
			 been placed within the Jcrop widget */
			.jcrop-holder #preview-pane {
				display: block;
				position: absolute;
				z-index: 200;
				right: -280px;
				padding: 3px;
				border: 1px rgba(0,0,0,.4) solid;
				background-color: white;
				-webkit-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.1);
				-moz-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.1);
				box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.1);
			}

			/* The Javascript code will set the aspect ratio of the crop
			 area based on the size of the thumbnail preview,
			 specified here */
			#preview-pane .preview-container {
				width: 250px;
				height: 250px;
				overflow: hidden;
			}

		</style>

		<!-- MAIN PANEL -->
		<div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon">

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li>Home</li><li>Members</li>
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
							Add Member
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
					<?php
					if ($step != 1) {
					?>
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
		
								<form class="form-horizontal" method="POST" action="<?=site_url('mzadm/members/upload_file')?>" enctype="multipart/form-data" onsubmit="return postForm()">
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
									
									<fieldset>
										<legend>Member Logo</legend>
										<div class="smart-form form-group <?=(!empty($error_msg['i_image_file']) ? 'has-error' : '')?>">
											<label class="col-md-2 control-label">Logo File :</label>
											<div class="col-md-10">
												<div class="form-control input input-file <?=(!empty($error_msg['i_image_file']) ? 'state-error' : '')?>">
													<span class="button"><input id="i_image_file" name="i_image_file" onchange="this.parentNode.nextSibling.value = this.value" type="file">Browse</span><input placeholder="Include the file Logo" readonly="" type="text">
												</div>
											</div>
											<?php echo (!empty($error_msg['i_image_file']) ? '<em for="i_image_file" class="invalid" style="display: inline;">'.$error_msg['i_image_file'].'</em>' : '' ); ?>
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

					<?php
					}else{
					?>
					<div class="well">
						<div class="widget-body">
						<!-- <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> -->
							<form id="coords" class="smart-form" method="POST" action="<?=site_url('mzadm/members/thumbnail/'.$this->uri->rsegment(3))?>">
							<header>
								Create Image Thumbnail
							</header>
							<fieldset>
								<section style="overflow: hidden;">
									<img src="<?=img_url('logo/'.$image_temp->downloadable_content)?>" id="target-3" alt="[Jcrop Example]" style="max-width: 800px;" />
							
									<div id="preview-pane">
										<div class="preview-container">
											<img src="<?=img_url('logo/'.$image_temp->downloadable_content)?>" class="jcrop-preview" id="target-3a" alt="Preview" />
										</div>
									</div>
							</section>
							<section>
							<div>
								<input type="text" size="4" id="x1" name="x1" />
								<input type="text" size="4" id="y1" name="y1" />
								<input type="text" size="4" id="x2" name="x2" />
								<input type="text" size="4" id="y2" name="y2" />
								<input type="text" size="4" id="w" name="w" />
								<input type="text" size="4" id="h" name="h" />
								<input type="text" size="4" id="wd" name="wd" />
								<input type="text" size="4" id="hd" name="hd" /><br/>

								<input type="text" size="4" id="ox1" name="ox1" />
								<input type="text" size="4" id="oy1" name="oy1" />
								<input type="text" size="4" id="ox2" name="ox2" />
								<input type="text" size="4" id="oy2" name="oy2" />
								<input type="text" size="4" id="ow" name="ow" />
								<input type="text" size="4" id="oh" name="oh" /> 
								<input type="text" size="4" id="owd" name="owd" />
								<input type="text" size="4" id="ohd" name="ohd" />
							</div>
							</section>
							<footer>
								<button type="submit" class="btn btn-primary">
									Submit
								</button>
								<button type="button" class="btn btn-default" onclick="window.history.back();">
									Cancel
								</button>
							</footer>
							</form>
						<!-- </article>
						<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> -->
						<!-- </article> -->
						</div>
					</div>
					<?php
					}
					?>
				</section>
				<!-- end widget grid -->

			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->