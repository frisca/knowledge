<nav class="main-menu">
	<ul>
		<li>
			<a href="index.html">
				<i class="fa fa-home nav_icon"></i>
				<span class="nav-text">
				Dashboard
				</span>
			</a>
		</li>
		<?php if($this->session->userdata('role') == 1){ ?>
		<li>
			<a href="<?php echo base_url('user/index');?>">
				<i class="fa fa-user nav_icon"></i>
				<span class="nav-text">
					User
				</span>
			</a>
		</li>
		<?php }else if($this->session->userdata('role') == 2){ ?>
		<li class="has-subnav">
			<a href="<?php echo base_url('project/index');?>">
				<i class="fa fa-list-ul" aria-hidden="true"></i>
				<span class="nav-text">Product</span>
			</a>
		</li>
		<?php } ?>
	</ul>
	<ul class="logout">
		<li>
			<a href="<?php echo base_url('login/logout');?>">
				<i class="icon-off nav-icon"></i>
				<span class="nav-text">
					Logout
				</span>
			</a>
		</li>
	</ul>
</nav>