<header class="navbar fixed-top navbar-expand-lg navbar-light navbar-custom bg-white">
	<div class="container">
		<a class="navbar-brand" href="#">
			<img src="<?=base_url()?>assets/img/logo/logo-xs.png" style="height: 40px;">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<?php
			if ($this->session->userdata('type') == 'Mitra') { ?>
			
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#">Daftar Permohonan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Profil Brand</a>
				</li>
				<li  class="nav-item">
					<a  href="#" class="nav-link">
						<i  class="material-icons"></i>
						<span  class="badge-circle badge-xs  notif-count" style="color: #f00000">5</span>
					</a>
				</li>
				<li  class="nav-item dropdown">
					<a  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="nav-link non-caret">
						<img src="https://fitmeb.komit.co.id/assets/img/profile.png" width="32px" class="rounded-circle mr-2 user-pict"> 
						<span>ikbal</span>
						<span class="fa fa-angle-down"></span>
					</a> 
					<div aria-labelledby="navbarDropdown" class="dropdown-menu ">
						<a href="/account/profile" class="dropdown-item">Profil</a> 
						<a href="#" class="dropdown-item">Logout</a>
					</div>
				</li>
			</ul>
			<?php } 
			elseif ($this->session->userdata('type') == 'Customer') { ?>
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#">Daftar Mitra</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Permohonan Anda</a>
				</li>
				<li  class="nav-item dropdown">
					<a  id="notifDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="nav-link non-caret">
						<i  class="material-icons">notifications_none</i>
						<span  class="badge-circle badge-xs  notif-count" style="color: #f00000">5</span>
					</a>
					<div aria-labelledby="notifDropdown" class="dropdown-menu " style="font-size: 0.8em;">
						<a href="/account/profile" class="dropdown-item" style="color: #444"><i style="font-size: 1.3em" class="material-icons">account_circle </i> Lengkapi Profile anda</a> 
						<a href="/account/profile" class="dropdown-item" style="color: #444"><i style="font-size: 1.3em" class="material-icons">assignment_turned_in</i>  0 Permohonan di terima</a> 
						<a href="/account/profile" class="dropdown-item" style="color: #444"><i style="font-size: 1.3em" class="material-icons">assignment_late</i>  0 Permohonan di tolak</a> 
						<a href="/account/profile" class="dropdown-item" style="color: #444"><i style="font-size: 1.3em" class="material-icons">question_answer</i>  0 Diskusi baru</a> 
					</div>
				</li>
				<li  class="nav-item dropdown">
					<a  href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="nav-link non-caret">
						<img src="https://fitmeb.komit.co.id/assets/img/profile.png" width="32px" class="rounded-circle mr-2 user-pict"> 
						<span><?= $this->session->userdata('name'); ?></span>
						<span class="fa fa-angle-down"></span>
					</a> 
					<div aria-labelledby="navbarDropdown" class="dropdown-menu ">
						<a href="<?=base_url()?>account/profile" class="dropdown-item">Profil</a> 
						<a href="#" class="dropdown-item">Logout</a>
					</div>
				</li>
			</ul>
			<?php }
			else{  ?>

			<?php } ?>
		</div>
	</div>
</header>