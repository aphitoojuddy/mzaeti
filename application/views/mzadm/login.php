		<div id="main" role="main">
			<!-- MAIN CONTENT -->

			<form class="lockscreen animated flipInY" action="<?=site_url('mzadm/login');?>" method="POST">
				<div class="logo">
					<h1 class="semi-bold"><img src="img/logo-o.png" alt="" /> AETI Administration</h1>
				</div>
				<div>
					<img src="<?=img_url('mzadm/default_avatar.jpg');?>" alt="" width="120" height="120" />
					<div>
						<span></span>
						<!-- <small> -->
						<div class="form-group">
							<input class="form-control" type="text" placeholder="Username / Email" name="i_uname">
						</div>
						<div class="form-group">
							<input class="form-control" type="password" placeholder="Password" name="i_pwd">
						</div>
						<div class="form-group-btn">
							<button class="btn btn-primary" type="submit">Login 
								<i class="fa fa-key"></i>
							</button>
						</div>
						<p class="no-margin margin-top-5">
							Forgot your password? <a href="<?=site_url('mzadm/forgot');?>"> Click here</a>
						</p>
						<!-- </small> -->
					</div>

				</div>
				<p class="font-xs margin-top-5">
					AETI | powered by MonkeyZap &copy; 2014.

				</p>
			</form>

		</div>
	</body>
</html>