		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		<aside id="left-panel">

			<!-- User info -->
			<div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
					
					<a href="javascript:void(0);">
						<img src="<?=img_url('mzadm/default_avatar.jpg');?>" alt="me" class="online" /> 
						<span>
							<?=$user_name?>
						</span>
					</a> 
				</span>
			</div>
			<!-- end user info -->

			<!-- NAVIGATION : This navigation is also responsive-->
			<nav>
				<ul>
					<li class="active">
						<a href="<?=site_url('mzadm/dashboard');?>" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-file-text-o"></i> <span class="menu-item-parent">Pages</span></a>
						<ul>
							<li>
								<a href="<?=site_url('mzadm/pages');?>">View All</a>
							</li>
							<li>
								<a href="<?=site_url('mzadm/gallery');?>">Gallery</a>
							</li>
							<li>
								<a href="<?=site_url('mzadm/news');?>">News</a>
							</li>
							<li>
								<a href="<?=site_url('mzadm/regulation');?>">Regulation</a>
							</li>
							<li>
								<a href="#">About Us</a>
								<ul>
									<li>
										<a href="<?=site_url('mzadm/overview');?>"> Organization Overview </a>
									</li>
									<li>
										<a href="<?=site_url('mzadm/structure');?>"> Organization Structure </a>
									</li>
									<li>
										<a href="<?=site_url('mzadm/members');?>"> Our Members </a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<!-- <li>
						<a href="<?=site_url('mzadm/category');?>"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Category</span></a>
					</li> -->
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-user"></i> <span class="menu-item-parent">User</span></a>
						<ul>
							<li>
								<a href="<?=site_url('mzadm/user');?>">View All</a>
							</li>
							<li>
								<a href="<?=site_url('mzadm/user/add');?>">Add User</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="<?=site_url('mzadm/setting');?>"><i class="fa fa-lg fa-fw fa-wrench"></i> <span class="menu-item-parent">Settings</span></a>
					</li>
				</ul>
			</nav>
			<span class="minifyme" data-action="minifyMenu"> 
				<i class="fa fa-arrow-circle-left hit"></i> 
			</span>

		</aside>
		<!-- END NAVIGATION -->