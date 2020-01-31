<?php $this->load->view('script_header');?>
<?php $this->load->view('menu');?>
<section class="wrapper scrollable">
	<?php $this->load->view('header');?>
	<div class="main-grid">
		<div class="agile-grids">	
			<div class="agile-tables">
				<div class="w3l-table-info">
				  <h3>Daftar User</h3>
				  <a href="<?php echo base_url('user/add')?>">
				  	<button type="button" class="btn" style="background-color: #0E8F9F;float: right;margin-bottom: 30px;"><i class="fa fa-plus-square" aria-hidden="true"></i></button>
				  </a>
			    <table id="table example">
						<thead>
						  <tr>
								<th>Nama</th>
								<th>Email</th>
								<th>Divisi</th>
								<th>Jabatan</th>
								<th>Action</th>
						  </tr>
						</thead>
						<tbody>
						  <?php 
						  	if(!empty($user)){
						  		foreach ($user as $key => $value) {
						  ?>
							<tr>
								<td><?php echo $value['nama'];?></td>
								<td><?php echo $value['email'];?></td>
								<td><?php echo $value['divisi'];?></td>
								<td><?php echo $value['jabatan'];?></td>
								<td>
									<button type="button" class="btn" style="background-color: #fdae2d"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
									<button type="button" class="btn" style="background-color: #e84c3d;"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
								</td>
							</tr>
						  <?php
									}
						  	}
						  ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- footer -->
	<?php $this->load->view('footer');?>
	<!-- //footer -->
</section>
<?php $this->load->view('script_footer');?>