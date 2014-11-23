		<!-- MAIN PANEL -->
		<div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon">

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li>Home</li><li>Settings</li>
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
						
						<!-- widget content -->
						<div class="widget-body no-padding">
	
							<form class="smart-form">
								<header>
									Standard Form Header
								</header>
	
								<fieldset>
									
									<section>
										<label class="label">Extra Small text input</label>
										<label class="input">
											<input type="text" class="input-xs">
										</label>
									</section>
	
									<section>
										<label class="label">Small text input</label>
										<label class="input">
											<input type="text" class="input-sm">
										</label>
									</section>
	
									<section>
										<label class="label">Default text input with maxlength</label>
										<label class="input">
											<input type="text" maxlength="10">
										</label>
										<div class="note">
											<strong>Maxlength</strong> is automatically added via the "maxlength='#'" attribute
										</div>
									</section>
																	
									<section>
										<label class="label">Large text input</label>
										<label class="input">
											<input type="text" class="input-lg">
										</label>
									</section>
								
								</fieldset>
								
								<fieldset>
										
									<section>
										<label class="label">File input</label>
										<div class="input input-file">
											<span class="button"><input type="file" id="file" name="file" onchange="this.parentNode.nextSibling.value = this.value">Browse</span><input type="text" placeholder="Include some files" readonly="">
										</div>
									</section>
	
									<section>
										<label class="label">Input with autocomlete</label>
										<label class="input">
											<input type="text" list="list">
											<datalist id="list">
												<option value="Alexandra">Alexandra</option>
												<option value="Alice">Alice</option>
												<option value="Anastasia">Anastasia</option>
												<option value="Avelina">Avelina</option>
												<option value="Basilia">Basilia</option>
												<option value="Beatrice">Beatrice</option>
												<option value="Cassandra">Cassandra</option>
												<option value="Cecil">Cecil</option>
												<option value="Clemencia">Clemencia</option>
												<option value="Desiderata">Desiderata</option>
												<option value="Dionisia">Dionisia</option>
												<option value="Edith">Edith</option>
												<option value="Eleanora">Eleanora</option>
												<option value="Elizabeth">Elizabeth</option>
												<option value="Emma">Emma</option>
												<option value="Felicia">Felicia</option>
												<option value="Florence">Florence</option>
												<option value="Galiana">Galiana</option>
												<option value="Grecia">Grecia</option>
												<option value="Helen">Helen</option>
												<option value="Helewisa">Helewisa</option>
												<option value="Idonea">Idonea</option>
												<option value="Isabel">Isabel</option>
												<option value="Joan">Joan</option>
												<option value="Juliana">Juliana</option>
												<option value="Karla">Karla</option>
												<option value="Karyn">Karyn</option>
												<option value="Kate">Kate</option>
												<option value="Lakisha">Lakisha</option>
												<option value="Lana">Lana</option>
												<option value="Laura">Laura</option>
												<option value="Leona">Leona</option>
												<option value="Mandy">Mandy</option>
												<option value="Margaret">Margaret</option>
												<option value="Maria">Maria</option>
												<option value="Nanacy">Nanacy</option>
												<option value="Nicole">Nicole</option>
												<option value="Olga">Olga</option>
												<option value="Pamela">Pamela</option>
												<option value="Patricia">Patricia</option>
												<option value="Qiana">Qiana</option>
												<option value="Rachel">Rachel</option>
												<option value="Ramona">Ramona</option>
												<option value="Samantha">Samantha</option>
												<option value="Sandra">Sandra</option>
												<option value="Tanya">Tanya</option>
												<option value="Teresa">Teresa</option>
												<option value="Ursula">Ursula</option>
												<option value="Valerie">Valerie</option>
												<option value="Veronica">Veronica</option>
												<option value="Wilma">Wilma</option>
												<option value="Yasmin">Yasmin</option>
												<option value="Zelma">Zelma</option>
											</datalist> </label>
										<div class="note">
											<strong>Note:</strong> works in Chrome, Firefox, Opera and IE10.
										</div>
									</section>
								</fieldset>
	
								<fieldset>
									
									<section>
										<label class="label">Select Small</label>
										<label class="select">
											<select class="input-sm">
												<option value="0">Choose name</option>
												<option value="1">Alexandra</option>
												<option value="2">Alice</option>
												<option value="3">Anastasia</option>
												<option value="4">Avelina</option>
											</select> <i></i> </label>
									</section>
									
									<section>
										<label class="label">Select default</label>
										<label class="select">
											<select>
												<option value="0">Choose name</option>
												<option value="1">Alexandra</option>
												<option value="2">Alice</option>
												<option value="3">Anastasia</option>
												<option value="4">Avelina</option>
											</select> <i></i> </label>
									</section>
	
									<section>
										<label class="label">Select Large</label>
										<label class="select">
											<select class="input-lg">
												<option value="0">Choose name</option>
												<option value="1">Alexandra</option>
												<option value="2">Alice</option>
												<option value="3">Anastasia</option>
												<option value="4">Avelina</option>
											</select> <i></i> </label>
									</section>
	
									<section>
										<label class="label">Multiple select</label>
										<label class="select select-multiple">
											<select multiple="" class="custom-scroll">
												<option value="1">Alexandra</option>
												<option value="2">Alice</option>
												<option value="3">Anastasia</option>
												<option value="4">Avelina</option>
												<option value="5">Basilia</option>
												<option value="6">Beatrice</option>
												<option value="7">Cassandra</option>
												<option value="8">Clemencia</option>
												<option value="9">Desiderata</option>
											</select> </label>
										<div class="note">
											<strong>Note:</strong> hold down the ctrl/cmd button to select multiple options.
										</div>
									</section>
								</fieldset>
	
								<fieldset>
									<section>
										<label class="label">Textarea</label>
										<label class="textarea"> 										
											<textarea rows="3" class="custom-scroll"></textarea> 
										</label>
										<div class="note">
											<strong>Note:</strong> height of the textarea depends on the rows attribute.
										</div>
									</section>
	
									<section>
										<label class="label">Textarea resizable</label>
										<label class="textarea textarea-resizable"> 										
											<textarea rows="3" class="custom-scroll"></textarea> 
										</label>
									</section>
	
									<section>
										<label class="label">Textarea expandable</label>
										<label class="textarea textarea-expandable"> 										
											<textarea rows="3" class="custom-scroll"></textarea> 
										</label>
										<div class="note">
											<strong>Note:</strong> expands on focus.
										</div>
									</section>
								</fieldset>
	
								<fieldset>
									<section>
										<label class="label">Columned radios</label>
										<div class="row">
											<div class="col col-4">
												<label class="radio">
													<input type="radio" name="radio" checked="checked">
													<i></i>Alexandra</label>
												<label class="radio">
													<input type="radio" name="radio">
													<i></i>Alice</label>
												<label class="radio">
													<input type="radio" name="radio">
													<i></i>Anastasia</label>
											</div>
											<div class="col col-4">
												<label class="radio">
													<input type="radio" name="radio">
													<i></i>Avelina</label>
												<label class="radio">
													<input type="radio" name="radio">
													<i></i>Basilia</label>
												<label class="radio">
													<input type="radio" name="radio">
													<i></i>Beatrice</label>
											</div>
											<div class="col col-4">
												<label class="radio">
													<input type="radio" name="radio">
													<i></i>Cassandra</label>
												<label class="radio">
													<input type="radio" name="radio">
													<i></i>Clemencia</label>
												<label class="radio">
													<input type="radio" name="radio">
													<i></i>Desiderata</label>
											</div>
										</div>
									</section>
	
									<section>
										<label class="label">Inline radios</label>
										<div class="inline-group">
											<label class="radio">
												<input type="radio" name="radio-inline" checked="checked">
												<i></i>Alexandra</label>
											<label class="radio">
												<input type="radio" name="radio-inline">
												<i></i>Alice</label>
											<label class="radio">
												<input type="radio" name="radio-inline">
												<i></i>Anastasia</label>
											<label class="radio">
												<input type="radio" name="radio-inline">
												<i></i>Avelina</label>
											<label class="radio">
												<input type="radio" name="radio-inline">
												<i></i>Beatrice</label>
										</div>
									</section>
								</fieldset>
	
								<fieldset>
									<section>
										<label class="label">Columned checkboxes</label>
										<div class="row">
											<div class="col col-4">
												<label class="checkbox">
													<input type="checkbox" name="checkbox" checked="checked">
													<i></i>Alexandra</label>
												<label class="checkbox">
													<input type="checkbox" name="checkbox">
													<i></i>Alice</label>
												<label class="checkbox">
													<input type="checkbox" name="checkbox">
													<i></i>Anastasia</label>
											</div>
											<div class="col col-4">
												<label class="checkbox">
													<input type="checkbox" name="checkbox">
													<i></i>Avelina</label>
												<label class="checkbox">
													<input type="checkbox" name="checkbox">
													<i></i>Basilia</label>
												<label class="checkbox">
													<input type="checkbox" name="checkbox">
													<i></i>Beatrice</label>
											</div>
											<div class="col col-4">
												<label class="checkbox">
													<input type="checkbox" name="checkbox">
													<i></i>Cassandra</label>
												<label class="checkbox">
													<input type="checkbox" name="checkbox">
													<i></i>Clemencia</label>
												<label class="checkbox">
													<input type="checkbox" name="checkbox">
													<i></i>Desiderata</label>
											</div>
										</div>
									</section>
	
									<section>
										<label class="label">Inline checkboxes</label>
										<div class="inline-group">
											<label class="checkbox">
												<input type="checkbox" name="checkbox-inline" checked="checked">
												<i></i>Alexandra</label>
											<label class="checkbox">
												<input type="checkbox" name="checkbox-inline">
												<i></i>Alice</label>
											<label class="checkbox">
												<input type="checkbox" name="checkbox-inline">
												<i></i>Anastasia</label>
											<label class="checkbox">
												<input type="checkbox" name="checkbox-inline">
												<i></i>Avelina</label>
											<label class="checkbox">
												<input type="checkbox" name="checkbox-inline">
												<i></i>Beatrice</label>
										</div>
									</section>
								</fieldset>
	
								<fieldset>
									<div class="row">
										<section class="col col-5">
											<label class="label">Radio Toggles</label>
											<label class="toggle">
												<input type="radio" name="radio-toggle" checked="checked">
												<i data-swchon-text="ON" data-swchoff-text="OFF"></i>Alexandra</label>
											<label class="toggle">
												<input type="radio" name="radio-toggle">
												<i data-swchon-text="ON" data-swchoff-text="OFF"></i>Anastasia</label>
											<label class="toggle">
												<input type="radio" name="radio-toggle">
												<i data-swchon-text="ON" data-swchoff-text="OFF"></i>Avelina</label>
										</section>
	
										<div class="col col-2"></div>
	
										<section class="col col-5">
											<label class="label">Checkbox Toggles</label>
											<label class="toggle">
												<input type="checkbox" name="checkbox-toggle" checked="checked">
												<i data-swchon-text="ON" data-swchoff-text="OFF"></i>Cassandra</label>
											<label class="toggle">
												<input type="checkbox" name="checkbox-toggle">
												<i data-swchon-text="ON" data-swchoff-text="OFF"></i>Clemencia</label>
											<label class="toggle">
												<input type="checkbox" name="checkbox-toggle">
												<i data-swchon-text="ON" data-swchoff-text="OFF"></i>Desiderata</label>
										</section>
									</div>
								</fieldset>
	
								<fieldset>
									<section>
										<label class="label">Ratings with different icons</label>
										<div class="rating">
											<input type="radio" name="stars-rating" id="stars-rating-5">
											<label for="stars-rating-5"><i class="fa fa-star"></i></label>
											<input type="radio" name="stars-rating" id="stars-rating-4">
											<label for="stars-rating-4"><i class="fa fa-star"></i></label>
											<input type="radio" name="stars-rating" id="stars-rating-3">
											<label for="stars-rating-3"><i class="fa fa-star"></i></label>
											<input type="radio" name="stars-rating" id="stars-rating-2">
											<label for="stars-rating-2"><i class="fa fa-star"></i></label>
											<input type="radio" name="stars-rating" id="stars-rating-1">
											<label for="stars-rating-1"><i class="fa fa-star"></i></label>
											Stars
										</div>
	
										<div class="rating">
											<input type="radio" name="trophies-rating" id="trophies-rating-7">
											<label for="trophies-rating-7"><i class="fa fa-trophy"></i></label>
											<input type="radio" name="trophies-rating" id="trophies-rating-6">
											<label for="trophies-rating-6"><i class="fa fa-trophy"></i></label>
											<input type="radio" name="trophies-rating" id="trophies-rating-5">
											<label for="trophies-rating-5"><i class="fa fa-trophy"></i></label>
											<input type="radio" name="trophies-rating" id="trophies-rating-4">
											<label for="trophies-rating-4"><i class="fa fa-trophy"></i></label>
											<input type="radio" name="trophies-rating" id="trophies-rating-3">
											<label for="trophies-rating-3"><i class="fa fa-trophy"></i></label>
											<input type="radio" name="trophies-rating" id="trophies-rating-2">
											<label for="trophies-rating-2"><i class="fa fa-trophy"></i></label>
											<input type="radio" name="trophies-rating" id="trophies-rating-1">
											<label for="trophies-rating-1"><i class="fa fa-trophy"></i></label>
											Trophies
										</div>
	
										<div class="rating">
											<input type="radio" name="asterisks-rating" id="asterisks-rating-10">
											<label for="asterisks-rating-10"><i class="fa fa-asterisk"></i></label>
											<input type="radio" name="asterisks-rating" id="asterisks-rating-9">
											<label for="asterisks-rating-9"><i class="fa fa-asterisk"></i></label>
											<input type="radio" name="asterisks-rating" id="asterisks-rating-8">
											<label for="asterisks-rating-8"><i class="fa fa-asterisk"></i></label>
											<input type="radio" name="asterisks-rating" id="asterisks-rating-7">
											<label for="asterisks-rating-7"><i class="fa fa-asterisk"></i></label>
											<input type="radio" name="asterisks-rating" id="asterisks-rating-6">
											<label for="asterisks-rating-6"><i class="fa fa-asterisk"></i></label>
											<input type="radio" name="asterisks-rating" id="asterisks-rating-5">
											<label for="asterisks-rating-5"><i class="fa fa-asterisk"></i></label>
											<input type="radio" name="asterisks-rating" id="asterisks-rating-4">
											<label for="asterisks-rating-4"><i class="fa fa-asterisk"></i></label>
											<input type="radio" name="asterisks-rating" id="asterisks-rating-3">
											<label for="asterisks-rating-3"><i class="fa fa-asterisk"></i></label>
											<input type="radio" name="asterisks-rating" id="asterisks-rating-2">
											<label for="asterisks-rating-2"><i class="fa fa-asterisk"></i></label>
											<input type="radio" name="asterisks-rating" id="asterisks-rating-1">
											<label for="asterisks-rating-1"><i class="fa fa-asterisk"></i></label>
											Asterisks
										</div>
										<div class="note">
											<strong>Note:</strong> you can use more than 300 vector icons for rating.
										</div>
									</section>
								</fieldset>
	
								<footer>
									<button type="submit" class="btn btn-primary">
										Submit
									</button>
									<button type="button" class="btn btn-default" onclick="window.history.back();">
										Back
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