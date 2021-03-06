<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
				</li>
			</ul>

			<h4 class="m-0 text-dark">LearnWith FathulMuiin</h4>

			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown dropdown-menu-right">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
						data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Settings
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Profile</a>
						<a class="dropdown-item" href="#">Ubah Password</a>
						<a class="dropdown-item" href="#">Log Out</a>
					</div>
				</li>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="#" class="brand-link text-center">
				<span class="brand-text font-weight-bold">FMuiin App</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?= base_url('assets/') ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2"
							alt="User Image">
					</div>
					<div class="info">
						<a href="#" class="d-block">Alexander Pierce</a>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">
						<!-- Add icons to the links using the .nav-icon class
			   with font-awesome or any other icon font library -->
						<li class="nav-item">
							<a href="<?= base_url('admin/dashboard') ?>" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-database"></i>
								<p>
									Master Data
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('admin/dataStudent') ?>" class="nav-link">
										<i class="fas fa-users nav-icon"></i>
										<p>Data Students</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="<?= base_url('admin/dataParent') ?>" class="nav-link">
										<i class="fas fa-map-marked nav-icon"></i>
										<p>Data Parents</p>
									</a>
								</li>

								<li class="nav-item">
									<a href="<?= base_url('admin/data_pegawai') ?>" class="nav-link">
										<i class="fas fa-address-book nav-icon"></i>
										<p>Data Absensi</p>
									</a>
								</li>

							</ul>
						</li>
					

						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-copy"></i>
								<p>
									Laporan
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('admin/data_pegawai') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Laporan Absensi</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('admin/data_jabatan') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Laporan Students</p>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>
