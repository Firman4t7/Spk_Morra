<!DOCTYPE html>
<html>

<head>
	<title>CETAK LAPORAN DATA DOSEN</title>
</head>

<body>

	<center>
		<table width="100%" border="0" align="center" cellspacing="1" cellpadding="1" class="no-style">
			<tbody>
				<tr>

				</tr>
			</tbody>
		</table>
		<h2>Hasil Perhitungan Metode Morra</h2>
		<hr style="margin-top:12px;">
		<center>
			<h2>Laporan Hasil Peangkingan Metode Morra</h2>
			<h2>Tanggal : <?php echo date('d/m/Y');?></h2>

		</center>
		<style>
			table {
				border-collapse: collapse;
				width: 100%;
			}

			.table th {
				padding: 8px 8px;
				border: 1px solid #000000;
				text-align: center;
			}

			.table td {
				padding: 3px 3px;
				border: 1px solid #000000;
			}
		</style>
		<table border="1" style="width: 100%;">
			<thead>
				<tr>
					<th align="center">No.</th>
					<th align="center">Nama Alternatif</th>
					<th align="center">Minimum<br>(C1)</th>
					<th align="center">Maximum<br>(C2+C3)</th>
					<th align="center">Nilai Yi</th>
					<th align="center">Perengkingan</th>
				</tr>


			</thead>

			<tbody>
				<!-- <tr class="odd">
					<td class=" " align="center"></td>
					<td class=" " align="center"></td>
					<td class=" " align="center"></td>
					<td class=" " align="center"></td>
					<td class=" " align="center"></td>
				</tr> -->
				<?php
				include 'inc/koneksi.php';

				$quary = mysqli_query($koneksi,"SELECT * FROM tb_alternatif");
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

					$arr_yi[] = round($yi,2);
					$arr_yi_sort[] = round($yi,2);

					$data_arr[$i] = $data;
					$data_arr[$i]['min'] = $min;
					$data_arr[$i]['max'] = $max;
					$data_arr[$i]['yi'] = $yi;

					$i++;
				}

				rsort($arr_yi_sort);
						// die();


				$arrlength = count($arr_yi_sort);
				for($x = 0; $x < $arrlength; $x++) {
					$keys = array_keys($arr_yi, $arr_yi_sort[$x]);
					$value = $data_arr[$keys[0]];
					?>
					<tr class="odd">
						<td class=" " align="center"><?php echo $no++;?></td>
						<td class=" " align="center"><?php echo $value['nama_alternatif']?></td>
						<td class=" " align="center"><?php echo round($value['min'],2)?></td>
						<td class=" " align="center"><?php echo round($value['max'],2)?></td>
						<td class=" " align="center"><?php echo round($value['yi'],2)?></td>
						<td class=" " align="center"><?php echo $x+1; ?></td>
					</tr>
					<?php
				}
				?>

			</tbody>
		</table>





	</center>
	<br>
      <!--   <center>
            <div style="width:40%;  float:right;">Padang Panjang, 23-Oktober-2020</div><br>
            <div style="width:40%;  float:right;">Mengetahui Wakil Rektor 1,</div><br><br><br>
            <div style="width:40%;  float:right;">Dr.Sumijan, M.Sc</div>
        </center> -->
        <script>
        	window.print();
        </script>

    </body>

    </html>