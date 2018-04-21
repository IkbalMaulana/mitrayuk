<div class="container">

	<?= getBread() ?>

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-border panel-primary">
				<div class="panel-heading">
					<h4 class="panel-title">Attributes</h4>
				</div>
				<div class="panel-body">
					<?php if(hak_akses('create')){ ?>
					<div class="row">
						<div class="col-md-12 text-right">
							<a href="<?php echo base_url().getModule().'/'.getController('').'/add' ?>"><button type="button" class="btn btn-default btn-primary"><i class="fa fa-plus"> </i> Tambah Data</button></a>
						</div>
					</div>
					<?php } ?>
					<div class="row" style="margin-top:20px;">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<table id="" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Nama Atribut</th>
										<th class="text-center">Menu Atribut</th>
										<?php if(hak_akses('update') || hak_akses('delete')){ ?>
										<th class="text-center">Action</th>
										<?php } ?>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($data as $key => $value) {
										?>
										<tr>
											<td style="vertical-align:middle;" class="text-center"><?= $no++ ?></td>
											<td style="vertical-align:middle;" class="text-center"><?= $value['namePAttribute'] ?></td>
											<td style="vertical-align:middle;" class="text-center"><?= $value['idMenu'] ?></td>
											<?php if(hak_akses('update') || hak_akses('delete')){ ?>
											<td style="vertical-align:middle;" class="text-center">
												<a href="<?php echo base_url().getModule() ?>/<?php echo getController() ?>/detail/<?php echo $value['idPAttribute'] ?>">
													<button class="btn btn-icon waves-effect waves-light btn-info btn-xs m-b-5" data-attr="<?= $value['idPAttribute'] ?>"><i class="fa fa-eye"></i></button>
												</a>
												<?php if(hak_akses('update')){ ?>
												<a href="<?php echo base_url().getModule() ?>/<?php echo getController() ?>/add/<?php echo $value['idPAttribute'] ?>">
													<button class="btn btn-icon waves-effect waves-light btn-inverse btn-xs m-b-5" data-attr="<?= $value['idPAttribute'] ?>"><i class="fa fa-pencil"></i></button>
												</a>
												<?php } ?>
												<?php if(hak_akses('delete')){ ?>
												<button class="btn btn-icon waves-effect waves-light btn-danger btn-xs m-b-5 sa-params delete" data-id="<?= $value['idPAttribute'] ?>"><i class="fa fa-trash"></i></button>
												<?php } ?>
											</td>
											<?php } ?>
										</tr>
										<?php
									}
									?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>