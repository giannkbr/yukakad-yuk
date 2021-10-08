<div class="sidebar">

	<!-- Sidebar Menu -->
	<nav class="mt-2">
		<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
			<li class="nav-item">
				<a href="#" class="nav-link active">
					<i class="nav-icon fas fa-tachometer-alt"></i>
					<p>
						Dashboard
					</p>
				</a>
			</li>
			<li class="nav-item <?php if (strpos($this->uri->segment(1), 'cms') !== false) { echo "menu-open";} ?>">
				<a href="#" class="nav-link">
					<i class="nav-icon fas fa-archway"></i>
					<p>
						CMS
						<i class="right fas fa-angle-left"></i>
					</p>
				</a>
				<ul class="nav nav-treeview">
					<li class="nav-item">
						<a href="<?= base_url('cms-hero') ?>" class="nav-link <?php if($this->uri->segment(1)=="cms-hero"){echo "active";}?>">
							<i class="far fa-circle nav-icon"></i>
							<p>Hero</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('cms-fitur') ?>" class="nav-link <?php if($this->uri->segment(1)=="cms-fitur"){echo "active";}?>"> 
							<i class="far fa-circle nav-icon"></i>
							<p>Fitur</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= base_url('cms-demo') ?>" class="nav-link <?php if($this->uri->segment(1)=="cms-demo"){echo "active";}?>">
							<i class="far fa-circle nav-icon"></i>
							<p>Demo</p>
						</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link <?php if($this->uri->segment(1)=="cms-packet"){echo "active";}?>">
							<i class="far fa-circle nav-icon"></i>
							<p>Packet</p>
						</a>
					</li>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Testimoni</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Payment Process</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">
					<i class="far fa-circle nav-icon"></i>
					<p>Blog</p>
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('cms-kontak') ?>" class="nav-link <?php if($this->uri->segment(1)=="cms-kontak"){echo "active";}?>">
					<i class="far fa-circle nav-icon"></i>
					<p>Contact</p>
				</a>
			</li>

			<li class="nav-item">
				<a href="<?= base_url('cms-footer') ?>" class="nav-link <?php if($this->uri->segment(1)=="cms-footer"){echo "active";}?>">
					<i class="far fa-circle nav-icon"></i>
					<p>Footer</p>
				</a>
			</li>
		</ul>
		</li>

		<li class="nav-item">
			<a href="#" class="nav-link">
				<i class="nav-icon fas fa-cogs"></i>
				<p>
					Settings
					<i class="right fas fa-angle-left"></i>
				</p>
			</a>
			<ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="#" class="nav-link">
						<i class="far fa-circle nav-icon"></i>
						<p>Users</p>
					</a>
				</li>
			</ul>
		</li>

		<li class="nav-item">
			<a href="#" class="nav-link">
				<i class="nav-icon fas fa-sign-out-alt"></i>
				<p>
					Logout
				</p>
			</a>
		</li>
		</ul>
	</nav>
	<!-- /.sidebar-menu -->
</div>
