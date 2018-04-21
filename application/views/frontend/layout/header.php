<header>
	<nav class="navbar navbar-default navbar-fixed-top navbar-transparent navbar-scroll">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="<?= base_url() ?>" class="navbar-brand visible-xs">
					KORPS BRIMOB
				</a>
			</div>


			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="<?= $this->uri->segment('2') == '' ? 'active' : '' ?>">
						<a href="<?= base_url() ?>">Beranda</a>						
					</li>
					<li class="<?= $this->uri->segment('2') == 'profil' ? 'active' : '' ?>">
						<a href="<?= base_url('page/profil') ?>">Profil</a>
					</li>
					<li class="<?= $this->uri->segment('2') == 'photo' ? 'active' : '' ?>">
						<a href="<?= base_url('gallery/photo') ?>">Foto</a>
					</li>
					<li class="<?= $this->uri->segment('2') == 'video' ? 'active' : '' ?>">
						<a href="<?= base_url('gallery/video') ?>">Video</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<form class="navbar-form" method="GET" action="<?= base_url('news?q=') ?>" role="search">
						<div class="input-group">
							<input type="text" class="form-control" value="" name="q" placeholder="Search" autocomplete="off" style="border-right: none !important; background: transparent; color: #FFF;">
							<div class="input-group-btn">
								<button class="btn-on-search" type="submit" style="background: transparent;"><i class="fa fa-search text-grey"></i></button>
							</div>
						</div>
					</form>
				</ul>
			</div>

		</div>
	</nav>
</header>