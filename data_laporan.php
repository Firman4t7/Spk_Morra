<div class="container">
	<h1>Hasil Akhir
	</h1>
</div>



<!-- halaman matriks keputusan -->
<div class="">
	<h1 class="h3 mb-2 text-gray-800"></h1>
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Menentukan Nilai Yi

				<a href="cetak_laporan.php" class="btn btn-secondary" target="_blank" style="float: right;"><i class="fas fa-print"></i> Cetak</a>
			</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Nomor</th>
							<th>Nama Alternatif</th>
							<th>Minimum<br>(C1)</th>
							<th>Maximum<br>(C2+C3)</th>
							<th>Nilai Yi</th>
						</tr>
					</thead>
					<tbody>

						<?php
						include 'inc/koneksi.php';

						$quary = mysqli_query($koneksi, "SELECT * FROM tb_alternatif");
						$no = 1;
						$total = 0;
						while ($data = mysqli_fetch_array($quary)) {


							$Normalisasi1 = $data['c1'] / 9.53;
							$optimasi1 = $Normalisasi1 * 0.3;

							$min = $optimasi1;

							$Normalisasi2 = $data['c2'] / 95.39;
							$optimasi2 = $Normalisasi2 * 0.5;


							$Normalisasi3 = $data['c3'] / 95.39;
							$optimasi3 = $Normalisasi3 * 0.4;

							$max = $optimasi2 + $optimasi3;

							$yi = $max - $min;


						?>

							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $data['nama_alternatif'] ?></td>
								<td><?php echo round($min, 2) ?></td>
								<td><?php echo round($max, 2) ?></td>
								<td><?php echo round($yi, 2) ?></td>
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


<!-- Matriks Normalisasi -->
<div class="">
	<h1 class="h3 mb-2 text-gray-800"></h1>
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Menentukan Rangking Hasil Perhitungan Moora

			</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Nomor</th>
							<th>Nama Alternatif</th>
							<th>Minimum<br>(C1)</th>
							<th>Maximum<br>(C2+C3)</th>
							<th>Nilai Yi</th>
							<th>Perengkingan</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include 'inc/koneksi.php';

						$quary = mysqli_query($koneksi, "SELECT * FROM tb_alternatif");
						$no = 1;
						$Perengkingan = 1;

						$data_arr = [];
						$i = 0;
						$arr_yi = [];
						while ($data = mysqli_fetch_array($quary)) {

							$Normalisasi1 = $data['c1'] / 9.53;
							$optimasi1 = $Normalisasi1 * 0.3;

							$min = $optimasi1;

							$Normalisasi2 = $data['c2'] / 95.39;
							$optimasi2 = $Normalisasi2 * 0.5;


							$Normalisasi3 = $data['c3'] / 95.39;
							$optimasi3 = $Normalisasi3 * 0.4;

							$max = $optimasi2 + $optimasi3;

							$yi = $max - $min;

							$arr_yi[] = round($yi, 2);
							$arr_yi_sort[] = round($yi, 2);

							$data_arr[$i] = $data;
							$data_arr[$i]['min'] = $min;
							$data_arr[$i]['max'] = $max;
							$data_arr[$i]['yi'] = $yi;

							$i++;
						}

						rsort($arr_yi_sort);
						// die();


						$arrlength = count($arr_yi_sort);
						for ($x = 0; $x < $arrlength; $x++) {
							$keys = array_keys($arr_yi, $arr_yi_sort[$x]);
							$value = $data_arr[$keys[0]];
						?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $value['nama_alternatif'] ?></td>
								<td><?php echo round($value['min'], 2) ?></td>
								<td><?php echo round($value['max'], 2) ?></td>
								<td><?php echo round($value['yi'], 2) ?></td>
								<td><?php echo $x + 1; ?></td>
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