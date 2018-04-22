<body class="bg-white full-height">
		<div class="row" style="margin: 0">
			

			<div class="col-lg-6 bg-login hidden-xs hidden-sm text-center">
				<div class="caption">
					<h4 class="text-bold">Ikbal Maulana</h4>
					<h5>
						Solusi menciptakan Ruang kerja sendiri dengan usaha anda sendiri, melalui informasi yang mudah.
					</h5>
				</div>
			</div>

			<div class="col-lg-6 col-xs-12">

				<div class="content full-width-xs">

					<a href="#">
						<br>
						<center>
							<img src="<?=base_url()?>assets/img/logo/logo.png" style="width: 300px;" class="img-responsive">
						</center>
						<br>
					</a>

					<div class="row top-20" style="margin-top: 20px">
						<div class="col-md-12">
							<h4 class="text-bold">Selamat Datang</h4>
							<h5>Silahkan login akun Mitra Anda</h5>
						</div>
					</div>

					<div id="app">

						<div class="row top-20" style="margin-top: 20px">
							<div class="alert alert-success <?=$alert?>" >
								Pendaftaran berhasil, login untuk melanjutkan.
							</div>
							<div class="col-md-12">

								<form action="<?=base_url().getModule().'/'.getController()?>/log" method="POST">

									<div class="form-group">
										<div class="input-group stylish-input-group">
											<span class="input-group-addon">
												<i class="fa fa-envelope"></i>
											</span>
											<input name="email" required="" class="form-control border" type="text" placeholder="Email" autocomplete="no" >
										</div>
									</div>
									<div class="form-group">
										<div class="input-group stylish-input-group">
											<span class="input-group-addon">
												 &nbsp;<i class="fa fa-lock"></i>&nbsp;
											</span>
											<input name="password" required="" class="form-control border" type="password" placeholder="Password" autocomplete="no" >
										</div>
									</div>

									<div class="form-group">
										<small class="pull-right">
											<a href="#" class="text-green"  >Lupa kata sandi ?</a>
										</small>
									</div>

									<div class="clearfix"></div>
									<br clear="all">

									<div class="form-group">
										<button type="submit" class="btn btn-md btn-base btn-length btn-block btn-height text-upper">
											Login
										</button>
									</div>

								</form>

							</div>
						</div>

						<div class="row top-20" style="margin-top: 20px">
							<div class="col-md-12">
								
								<h6>
									Belum Punya Akun ? <a href="#" class="text-green text-bold">Daftar Disini</a>
								</h6>
							</div>
						</div>

					</div>

				</div>
			</div>

		</div>
	</body>