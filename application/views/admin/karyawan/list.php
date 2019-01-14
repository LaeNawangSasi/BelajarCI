<table border= "1px" class="table table-hover" id="dataTable" width="100%" cellspacing="0" >
		<thead>
		<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Telepon</th>
		</tr>
</thead>
		<tbody>
	<?php foreach ($karyawan as $karyawan): ?>
		<tr>
            <td width="150">
				<?php echo $karyawan->Karyawan_id ?>
			</td>
			<td >
				<?php echo $karyawan->Karyawan_nama ?>
			</td>
			<td>
				<?php echo $karyawan->Karyawan_alamat ?>
			</td>
			<td>
				<?php echo $karyawan->Karyawan_telepon ?>
			</td>	
		</tr>
<?php endforeach; ?>
</tbody>
</table>
						
