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
					<li>Home</li><li>Gallery</li><li>Add Image</li>
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
							<i class="fa-fw fa fa-file-image-o"></i> 
							Gallery Management
						</h1>
					</div>
					<!-- end col -->
				</div>
				<!-- end row -->
				
				<?php
					if ($add_success) {
				?>
				<div class="alert alert-block alert-success fade in">
					<a class="close" data-dismiss="alert" href="#">×</a>
					<h4 class="alert-heading"><i class="fa fa-check-square-o"></i> Add User Success!</h4>
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

					<?php
					if ($step != 1) {
					?>
					<!-- START ROW -->
					<div class="well">				
						
						<!-- widget content -->
						<div class="widget-body no-padding">
							<form id="add_image" class="smart-form" method="POST" action="<?php echo site_url('mzadm/gallery/upload_file'); ?>" enctype="multipart/form-data">
								<header>
									Add new image
								</header>
								<fieldset>
									<section>
										<label class="label">Title :</label>
										<label class="input <?=(!empty($error_msg['i_title']) ? 'state-error' : '')?>">
											<input type="text" class="input-sm" name="i_title" id="i_title" value="">
										</label>
										<?php echo (!empty($error_msg['i_title']) ? '<em for="i_title" class="invalid" style="display: inline;">'.$error_msg['i_title'].'</em>' : '' ); ?>
									</section>
									<section>
										<label class="label">Description :</label>
										<label class="textarea textarea-resizable">
											<textarea class="custom-scroll" name="i_desc" id="i_desc"></textarea>
										</label>
									</section>
									<section>
										<label class="label">Image File</label>
										<div class="input input-file <?=(!empty($error_msg['i_image_file']) ? 'state-error' : '')?>">
											<span class="button"><input id="i_image_file" name="i_image_file" onchange="this.parentNode.nextSibling.value = this.value" type="file">Browse</span><input placeholder="Include the document" readonly="" type="text">
										</div>
										<?php echo (!empty($error_msg['i_image_file']) ? '<em for="i_image_file" class="invalid" style="display: inline;">'.$error_msg['i_image_file'].'</em>' : '' ); ?>
									</section>
								</fieldset>	
								<footer>
									<button type="submit" class="btn btn-primary">
										Submit
									</button>
									<button type="button" class="btn btn-default" onclick="window.history.back();">
										Cancel
									</button>
								</footer>
							</form>
						</div>
						<!-- end widget content -->
					</div>
					<!-- END ROW -->

					<?php
					}else{
					?>
					<div class="well">
						<div class="widget-body">
						<!-- <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> -->
							<form id="coords" class="smart-form" method="POST" action="<?=site_url('mzadm/gallery/thumbnail/'.$this->uri->rsegment(3))?>">
							<header>
								Create Image Thumbnail
							</header>
							<fieldset>
								<section style="overflow: hidden;">
									<img src="<?=img_url('gallery/'.$image_temp->image_path)?>" id="target-3" alt="[Jcrop Example]" width="500" />
							
									<div id="preview-pane">
										<div class="preview-container">
											<img src="<?=img_url('gallery/'.$image_temp->image_path)?>" class="jcrop-preview" id="target-3a" alt="Preview" />
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