<?php $this->load->view('script_header');?>
<?php $this->load->view('menu');?>
<section class="wrapper scrollable">
	<nav class="user-menu">
		<a href="javascript:;" class="main-menu-access">
			<i class="icon-proton-logo"></i>
			<i class="icon-reorder"></i>
		</a>
	</nav>
	<section class="title-bar">
		<div class="logo">
			<h1><a href="index.html"><img src="images/logo.png" alt="">Colored</a></h1>
		</div>
		<div class="full-screen">
			<section class="full-top">
				<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
			</section>
		</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="text" name="search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
				<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
		</div>
		<div class="header-right">
			<div class="profile_details">		
				<ul>
					<li class="dropdown profile_details_drop">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							<div class="profile_img">	
								<span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span> 
								<div class="clearfix"></div>	
							</div>	
						</a>
						<ul class="dropdown-menu drp-mnu">
							<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
							<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
							<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</section>
	<!-- footer -->
	<?php $this->load->view('footer');?>
	<!-- //footer -->
</section>
<?php $this->load->view('script_footer');?>
