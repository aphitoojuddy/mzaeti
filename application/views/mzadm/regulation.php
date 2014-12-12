		<!-- MAIN PANEL -->
		<div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon">

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li>Home</li><li>Regulation</li>
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
							<i class="fa-fw fa fa-file-text"></i> 
							Regulation Management
						</h1>
					</div>
					<!-- end col -->
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
					<div class="row">				
						
						<!-- NEW WIDGET START -->
						<article class="col-xs-8 col-sm-8 col-md-8 col-lg-8">

							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-darken" id="wid-id-2" data-widget-editbutton="false">
								<!-- widget options:
								usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
				
								data-widget-colorbutton="false"
								data-widget-editbutton="false"
								data-widget-togglebutton="false"
								data-widget-deletebutton="false"
								data-widget-fullscreenbutton="false"
								data-widget-custombutton="false"
								data-widget-collapsed="true"
								data-widget-sortable="false"
				
								-->
								<header>
									<span class="widget-icon"> <i class="fa fa-table"></i> </span>
									<h2>Regulation Data</h2>
				
								</header>
				
								<!-- widget div-->
								<div>
				
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
				
									</div>
									<!-- end widget edit box -->
				
									<!-- widget content -->
									<div class="widget-body no-padding">
				
										<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
											<thead>			                
												<tr>
													<th data-hide="phone">ID</th>
													<th data-class="expand"><i class="fa fa-fw fa-text-height text-muted hidden-md hidden-sm hidden-xs"></i> Title</th>
													<th data-hide="phone"><i class="fa fa-fw fa-envelope-o text-muted hidden-md hidden-sm hidden-xs"></i> Description</th>
													<th data-hide="expand"><i class="fa fa-fw fa-file-text-o text-muted hidden-md hidden-sm hidden-xs"></i>File</th>
													<th>Status</th>
													<th align="center">Action</th>
													<!-- <th data-hide="phone" class="text-center">Action</th> -->
												</tr>
											</thead>
											<tbody>
												<?php
													$dcounter = 0;
													foreach ($regulations_data as $key => $value) {
														$dcounter++;
												?>
												<tr>
													<td><?=$dcounter?></td>
													<td><?=$value->article_title_id?></td>
													<td><?=$value->article_content_id?></td>
													<td><a href="<?=asset_url()?>upload/<?=$value->downloadable_content?>"><?=$value->downloadable_content?></a></td>
													<td><?=($value->article_status == 1 ? "active" : "inactive")?></td>
													<td align="center">
														<a href="<?=site_url('mzadm/regulation/delete/'.$value->article_id)?>"><i class="fa fa-fw fa-times text-muted hidden-md hidden-sm hidden-xs" style="color: red;"></i></a>
													</td>
													<!-- <td class="text-center">
														<a href="<?=site_url('mzadm/regulation/edit/'.$value->article_id)?>"><i class="fa fa-fw fa-edit text-muted hidden-md hidden-sm hidden-xs"></i> Edit</a>
														<a href="<?=site_url('mzadm/regulation/block/'.$value->article_id)?>"><i class="fa fa-fw fa-lock text-muted hidden-md hidden-sm hidden-xs"></i> Block</a>
													</td> -->
												</tr>
												<?php
													}
												?>
											</tbody>
										</table>

									</div>
									<!-- end widget content -->
				
								</div>
								<!-- end widget div -->
				
							</div>
							<!-- end widget -->
						</article>
						<!-- WIDGET END -->

						<!-- NEW WIDGET START -->
						<article class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="false">
								<!-- widget options:
								usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
				
								data-widget-colorbutton="false"
								data-widget-editbutton="false"
								data-widget-togglebutton="false"
								data-widget-deletebutton="false"
								data-widget-fullscreenbutton="false"
								data-widget-custombutton="false"
								data-widget-collapsed="true"
								data-widget-sortable="false"
				
								-->
								<header role="heading">
									<span class="widget-icon"> <i class="fa fa-table"></i> </span>
									<h2>Add Regulation</h2>
				
								</header>
				
								<!-- widget div-->
								<div role="content">

									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
				
									</div>
									<!-- end widget edit box -->
				
									<!-- widget content -->
									<div class="widget-body no-padding">
										<form id="add_regulation" class="smart-form" method="POST" action="<?=site_url('mzadm/regulation/add')?>" enctype="multipart/form-data">
											<header>
												Add Regulation
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
													<label class="label">Document File</label>
													<div class="input input-file <?=(!empty($error_msg['i_regulation_file']) ? 'state-error' : '')?>">
														<span class="button"><input id="i_regulation_file" name="i_regulation_file" onchange="this.parentNode.nextSibling.value = this.value" type="file">Browse</span><input placeholder="Include the document" readonly="" type="text">
													</div>
													<?php echo (!empty($error_msg['i_regulation_file']) ? '<em for="i_regulation_file" class="invalid" style="display: inline;">'.$error_msg['i_regulation_file'].'</em>' : '' ); ?>
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
								<!-- end widget div -->
				
							</div>
							<!-- end widget -->
						</article>
						<!-- WIDGET END -->
					</div>
					<!-- END ROW -->

				</section>
				<!-- end widget grid -->

			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->