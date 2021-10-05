<div class="header_home">
	<div class="header_home_top">
		<div class="container">
			<div class="logo"><img src="View/style/img/logo.jpg" alt=""></div>
			<div class="login_home">
			<?php if(isset($_SESSION['login']) && ($_SESSION['login'][0]['level'] == "0" || $_SESSION['login'][0]['level'] == "1")) {?>
				<h4>Hi <?php echo $_SESSION['login'][0]['name'];?>&nbsp;<a href="?action=logout">LOGOUT</a></h4>		
				<?php }if(!isset($_SESSION['login'])){ ?><a href="?action=login">LOGIN</a> <?php }?>
			</div>
		</div>
	</div>
	<div class="menu">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="#">HOME</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">LAPTOP</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">INTRODUCE</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">BLOG</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">GIỚI THIỆU</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">LIÊN HỆ</a>
			</li>
		</ul>
		<form class="form-inline ">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	</div>
	<div class="banner">
		<img src="View/style/img/banner.jpg" alt="">
	</div>
</div>