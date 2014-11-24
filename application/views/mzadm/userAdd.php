		<!-- MAIN PANEL -->
		<div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon">

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li>Home</li><li>Add User</li>
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
							<i class="fa-fw fa fa-user"></i> 
							User Management
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

					<!-- START ROW -->
					<div class="well">				
						
						<!-- widget content -->
						<div class="widget-body no-padding">
	
							<form id="add_user" class="smart-form" method="POST" action="<?=site_url('mzadm/user/add')?>">
								<header>
									Add new admin
								</header>
	
								<fieldset>
									<section>
										<label class="label">Username :</label>
										<label class="input <?=(!empty(form_error('i_uname')) ? 'state-error' : '')?>">
											<input type="text" class="input-sm" name="i_uname" id="i_uname" value="<?=(!empty(set_value('i_uname')) ? set_value('i_uname') : '')?>">
										</label>
										<?php echo form_error('i_uname', '<em for="i_uname" class="invalid" style="display: inline;">', '</em>'); ?>
									</section>
									<section>
										<label class="label">Password :</label>
										<label class="input <?=(!empty(form_error('i_pass')) ? 'state-error' : '')?>">
											<input type="password" class="input-sm" name="i_pass" id="i_pass" value="<?=(!empty(set_value('i_pass')) ? set_value('i_pass') : '')?>">
										</label>
										<?php echo form_error('i_pass', '<em for="i_pass" class="invalid" style="display: inline;">', '</em>'); ?>
									</section>
									<section>
										<label class="label">Repeat Password :</label>
										<label class="input <?=(!empty(form_error('i_repass')) ? 'state-error' : '')?>">
											<input type="password" class="input-sm" name="i_repass" id="i_repass">
										</label>
										<?php echo form_error('i_repass', '<em for="i_repass" class="invalid" style="display: inline;">', '</em>'); ?>
									</section>
									<section>
										<label class="label">Email Address :</label>
										<label class="input <?=(!empty(form_error('i_email')) ? 'state-error' : '')?>">
											<input type="email" class="input-sm" name="i_email" id="i_email" value="<?=(!empty(set_value('i_email')) ? set_value('i_email') : '')?>">
										</label>
										<?php echo form_error('i_email', '<em for="i_email" class="invalid" style="display: inline;">', '</em>'); ?>
									</section>
									<section>
										<label class="label">Display Name :</label>
										<label class="input <?=(!empty(form_error('i_dname')) ? 'state-error' : '')?>">
											<input type="text" class="input-sm" name="i_dname" id="i_dname" value="<?=(!empty(set_value('i_dname')) ? set_value('i_dname') : '')?>">
										</label>
										<div class="note">
											<strong>Note:</strong> The name that will be displayed after login.
										</div>
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

				</section>
				<!-- end widget grid -->

			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->