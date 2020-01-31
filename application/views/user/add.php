<?php $this->load->view('script_header');?>
<?php $this->load->view('menu');?>
<section class="wrapper scrollable">
	<?php $this->load->view('header');?>
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- validation -->
				<div class="grids">
					<div class="forms-grids">
						<div class="w3agile-validation">
							<div class="panel panel-widget agile-validation">
								<div class="my-div">
									<form method="post" action="<?php echo base_url('')?>" class="valida" autocomplete="off" novalidate="novalidate">
										<div class="input-info">
											<h3>Add New User:</h3>
										</div>

										<label for="nama">Name: (required)&nbsp;<span class="at-required-highlight">*</span></label>
										<div class="form-group">
											<input type="text" name="nama" id="field-1" required="true" class="form-control">
										</div>

										<label for="username">Username: (required)&nbsp;<span class="at-required-highlight">*</span></label>
										<div class="form-group">
											<input type="text" name="username" id="username" required="true" class="form-control">
										</div>

										<label for="password">Password: (required)&nbsp;<span class="at-required-highlight">*</span></label>
										<div class="form-group">
											<input type="password" name="password" id="password" required="true" class="form-control">
										</div>

										<label for="email">Email: (required)&nbsp;<span class="at-required-highlight">*</span></label>
										<div class="form-group">
											<input type="text" name="email" id="email" required="true" class="form-control">
										</div>

										<label for="team">Team: (required)&nbsp;<span class="at-required-highlight">*</span></label>
										<div class="form-group">
											<input type="text" name="team" id="team" required="true" class="form-control">
										</div>

										<label for="position">Position: (required)&nbsp;<span class="at-required-highlight">*</span></label>
										<div class="form-group">
											<select name="position" id="position" required="true" class="form-control">
												<option value="0">Position</option>
												<option value="1">Supervisor</option>
												<option value="2">Non Supervisor</option>
											</select>
										</div>
										<div class="bottom">
											<div class="form-group">
												<button type="submit" class="btn btn-primary">Save</button>
												<button type="button" class="btn btn-warning">Cancel</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- footer -->
	<?php $this->load->view('footer');?>
	<!-- //footer -->
</section>
<?php $this->load->view('script_footer');?>