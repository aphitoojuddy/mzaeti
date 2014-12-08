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
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h1 class="page-title txt-color-blueDark">

							<!-- PAGE HEADER -->
							<i class="fa-fw fa fa-wrench"></i> 
							Site Settings
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
		
								<form class="form-horizontal" method="POST" action="<?=site_url('mzadm/setting/edit')?>">
									<fieldset>
										<legend>General Information</legend>
										<?php
										foreach ($general_setting as $key => $value) {
										?>
										<div class="form-group <?=(!empty($error_msg[$value->config_var]) ? 'has-error' : '')?>">
											<label class="col-md-2 control-label"><?=$value->config_display_var?> :</label>
											<div class="col-md-10">
												<?php
												if($value->config_var == 'site_address' || $value->config_var == 'site_desc'){
												?>
												<textarea class="form-control" placeholder="" rows="4" name="<?=$value->config_var?>" id="<?=$value->config_var?>"><?=$value->config_value?></textarea>
												<?php
												}else{
												?>
												<input class="form-control" placeholder="" type="text" name="<?=$value->config_var?>" id="<?=$value->config_var?>" value="<?=$value->config_value?>">
												<?php
												}
												?>
												<?php echo (!empty($error_msg[$value->config_var]) ? '<span class="help-block"><i class="fa fa-warning"></i>'.$error_msg[$value->config_var].'</span>' : '' ); ?>
											</div>
										</div>
										<?php
										}
										?>
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