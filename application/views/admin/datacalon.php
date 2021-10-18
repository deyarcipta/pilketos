<?php if ($this->session->flashdata('info')) { ?>
	<script>
		alert("Berhasil Menghapus Data");
	</script>
<?php } ?>
<?php if ($this->session->flashdata('failed')) { ?>
	<script>
		alert("Gagal Menghapus Data");
	</script>
<?php } ?>
<div class="box">
	<div class="box-inner">
		<div class="box-header well">
			<h2>Data Calon Ketua OSIS</h2>
		</div>
		<div class="box-content">
			<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
				<thead>
					<tr>
						<th class="text-center">No</th>
						<th class="text-center">Nama Calon</th>
						<th class="text-center">Video</th>
						<!-- <th class="text-center">Visi Calon</th>
						<th class="text-center">Misi Calon</th> -->
						<th class="text-center">Photo Calon</th>
						<th class="text-center" width="200">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($datacalon as $loaddata) {
					?>
						<tr>
							<td class="text-center"><?php echo $loaddata['no']; ?></td>
							<td><?php echo $loaddata['nama']; ?></td>
							<td style="text-align: center;"><iframe width="150" height="100" src="<?= $loaddata['video'] ?>"></iframe></td>
							<!-- <td><?php echo $loaddata['visi']; ?></td>
							<td><?php echo $loaddata['misi']; ?></td> -->
							<td class="text-center"><img width="50" height="60" src="<?php echo base_url(); ?>/asset/img/<?php echo $loaddata['photo']; ?>"></td>
							<td>

								<a class="btn btn-info" href="<?php echo base_url(); ?>index.php/admin/editcalon/<?php echo $loaddata['nisn']; ?>">
									<i class="glyphicon glyphicon-edit icon-white"></i>
									Edit
								</a>
								<a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/admin/hapuscalon/<?php echo $loaddata['nisn']; ?>">
									<i class="glyphicon glyphicon-trash icon-white"></i>
									Hapus
								</a>
							</td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>