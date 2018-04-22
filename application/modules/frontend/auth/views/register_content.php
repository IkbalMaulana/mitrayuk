<body class="bg-white full-height">
	<div class="row" style="margin: 0">
		
		<div class="col-lg-6 bg-register hidden-xs text-center">
			<div class="caption">
				<h4 class="text-bold">Ismail Adi Prasojo</h4>
				<h5>
					Situs luar biasa yang telah membantu perekonomian keluarga saya.
				</h5>
			</div>
		</div>

		<div class="col-lg-6 col-xs-12">

			<div class="content full-width-xs" style="margin-top: 5vh;">

				<a href="#">
					<center>
						<img src="<?=base_url()?>assets/img/logo/logo.png" style="width: 300px;" class="img-responsive">
					</center>
					
				</a>

				<div class="row top-20">
					<div class="col-md-12">
						<h4 class="text-bold">Silahkan Daftar Disini</h4>
						<h6>Ciptakan ruang kerja dan usaha anda sendiri</h6>
					</div>
				</div>

				<div id="app">

					<div class="row top-20">
						<div class="col-md-12">
							<div class="alert alert-warning <?=$alert?>" >
								Pendaftaran gagal, mohon isi kembali data dengan benar!.
							</div>

							<div class="alert alert-warning <?=$alertLogin?>" >
								Login gagal, ID/Password salah masukkan dengan benar!.
							</div>
							<form action="<?=base_url().getModule().'/'.getController()?>/regist" method="POST">
								<div class="form-group text-left">
									<label class="text-muted">Mendaftar sebagai</label>
									<div class="radio radio-primary">
										<input type="radio" name="type" value="customer" id="customer">
										<label for="type_1">
											<div>Customer</div>
										</label>
										<input type="radio" class="ml-3" name="type" value="mitra" id="mitra">
										<label for="type_2">
											<div>Mitra/Partner</div>
										</label>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group stylish-input-group">
										<span class="input-group-addon">
											<i class="fa fa-user"></i>
										</span>
										<input name="name"  required="" class="form-control border" type="text" placeholder="Nama Lengkap" autocomplete="no" >
									</div>

								</div>

								<div class="form-group">
									<div class="input-group stylish-input-group">
										<span class="input-group-addon">
											<i class="fa fa-phone"></i>
										</span>
										<input name="phone_number" required="" class="form-control border" type="text" placeholder="No. Handphone" autocomplete="no" >
									</div>

								</div>

								<div class="form-group">
									<div class="input-group stylish-input-group">
										<span class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</span>
										<input name="dob" id="dob"  required="" class="form-control border datepicker" type="text" placeholder="Tanggal Lahir (dd-mm-yyyy)"  autocomplete="no" >
									</div>

								</div>

								<div class="form-group">
									<div class="input-group stylish-input-group">
										<span class="input-group-addon">
											<i class="fa fa-envelope"></i>
										</span>
										<input name="email"  required="" class="form-control border" type="email" placeholder="Email" autocomplete="no">
									</div>

								</div>

								<div class="form-group">
									<div class="input-group stylish-input-group">
										<span class="input-group-addon">
											<i class="fa fa-lock"></i> &nbsp;
										</span>
										<input name="password" required="" class="form-control border" type="password" placeholder="Password" autocomplete="no" >
									</div>

								</div>

								<div class="form-group">
									<small class="text-center">
										Dengan mengklik tombol Daftar, Anda setuju dengan <a href="#" target="_blank" class="text-green">Privacy Policy</a> dan <a href="#" target="_blank" class="text-green">Term & Conditions</a> kami
									</small>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-md btn-base btn-length btn-block btn-height text-upper">
										Daftar Sekarang
									</button>
								</div>

							</form>

						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<h6>
								Sudah Punya Akun ? <a href="<?=base_url()?>auth/login" class="text-green text-bold">Login</a>
							</h6>
						</div>
					</div>

				</div>

			</div>

		</div>
	</div>

</body>
