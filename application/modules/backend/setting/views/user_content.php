<div class="container">
	<?= getBread() ?>

	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-border panel-primary">
				<div class="panel-heading">
					<h4 class="panel-title">User List</h4>
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
							<table id="datatable" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th class="text-center">No</th>
										<th class="text-center">Nama</th>
										<th class="text-center">Email</th>
										<th class="text-center">Group</th>										
										<th class="text-center">Status</th>
										<th class="text-center">Last Login</th>
										<?php if(hak_akses('update') || hak_akses('delete')){ ?>
										<th class="text-center">Action</th>
										<?php } ?>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($data as $key => $value) 
									{
										$status = '';

										switch($value['statusUser']){
											case "y":
											$status = "<img src='".base_url('assets/backend/images/icons/y.png')."' class='tip-right' title='Active'>";
											break;
											case "n":
											$status = "<img src='".base_url('assets/backend/images/icons/n.png')."' class='tip-right' title='Not Active'>";
											break;
										}
										?>
										<tr class="gradeU">
											<td style="vertical-align:middle;" class="text-center"><?php echo $no++ ?></td>
											<td style="vertical-align:middle;" ><?php echo $value['nameUser'] ?></td>
											<td style="vertical-align:middle;" ><?php echo $value['emailUser'] ?></td>
											<td style="vertical-align:middle;">
												<?= getField('master_user_role','namaRole',array('idRole' => $value['roleUser'])) ?>
											</td>		
											<td style="vertical-align:middle;" class="text-center"><?php echo $status ?></td>
											<td style="vertical-align:middle;" class="text-center"><?php echo $value['lastLogin'] ?></td>
											<?php if(hak_akses('update') || hak_akses('delete')){ ?>
											<td style="vertical-align:middle;" class="text-center">
												<?php if(hak_akses('update')){ ?>
												<a href="<?php echo base_url().getModule() ?>/<?php echo getController() ?>/add/<?php echo encode($value['idUser']) ?>">
													<button class="btn btn-icon waves-effect waves-light btn-inverse btn-xs m-b-5" data-attr="<?= encode($value['idUser']) ?>"><i class="fa fa-pencil"></i></button>
												</a>
												<?php } ?>
												<?php if(hak_akses('delete')){ ?>
												<button class="btn btn-icon waves-effect waves-light btn-danger btn-xs m-b-5 del-dialog" data-module="<?= getModule() ?>" data-controller="<?= getController() ?>" data-id="<?= encode($value['idUser']) ?>"><i class="fa fa-trash"></i></button>
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