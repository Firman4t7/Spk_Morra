<div class="container">
  <h1>Hasil Perhitungan

    <a href="?module=alternatif" class="btn btn-secondary" style="float: right;"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>

  </h1>
</div>



<!-- halaman matriks keputusan -->
<div class="">
  <h1 class="h3 mb-2 text-gray-800"></h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Matriks Normalisasi

      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nomor</th>
              <th>Nama Alternatif</th>
              <th>C1</th>
              <th>C2</th>
              <th>C3</th>
            </tr>
          </thead>
          <tbody>

            <?php
            include 'inc/koneksi.php';

            $quary = mysqli_query($koneksi, "SELECT * FROM tb_alternatif");
            $no = 1;
            $total = 0;
            while ($data = mysqli_fetch_array($quary)) {


              // $pangkat = pow($data['c1'],2);

              // $total += $pangkat;
              // $hasil_akar = sqrt($total);

              // echo $hasil_akar;




            ?>


              <!-- <?php

                    $nilai_bilangan = 9100;
                    $hasil_akar    = sqrt($nilai_bilangan);
                    echo round($hasil_akar, 2);


                    ?> -->
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nama_alternatif'] ?></td>
                <td><?php echo $data['c1'] ?></td>
                <td><?php echo $data['c2'] ?></td>
                <td><?php echo $data['c3'] ?></td>
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
      <h6 class="m-0 font-weight-bold text-primary">Matriks Normalisasi

      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nomor</th>
              <th>Nama Alternatif</th>
              <th>C1</th>
              <th>C2</th>
              <th>C3</th>
            </tr>
          </thead>
          <tbody>

            <?php
            include 'inc/koneksi.php';

            $quary = mysqli_query($koneksi, "SELECT * FROM tb_alternatif");
            $no = 1;
            while ($data = mysqli_fetch_array($quary)) {

              $Normalisasi1 = $data['c1'] / 9.53;

              $Normalisasi2 = $data['c2'] / 95.39;

              $Normalisasi3 = $data['c3'] / 95.39;

            ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nama_alternatif'] ?></td>
                <td><?php echo round($Normalisasi1, 2) ?></td>
                <td><?php echo round($Normalisasi2, 2) ?></td>
                <td><?php echo round($Normalisasi3, 2) ?></td>
              </tr>
            <?php } ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>





<!-- Matriks ternormalisasi -->
<div class="">
  <h1 class="h3 mb-2 text-gray-800"></h1>
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Matriks Optimasi

      </h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nomor</th>
              <th>Nama Alternatif</th>
              <th>Min</th>
              <th>Max</th>
              <th>Max</th>
            </tr>
          </thead>
          <tbody>
            <?php
            include 'inc/koneksi.php';

            $quary = mysqli_query($koneksi, "SELECT * FROM tb_alternatif");
            $no = 1;
            while ($data = mysqli_fetch_array($quary)) {

              $Normalisasi1 = $data['c1'] / 9.53;
              $optimasi1 = $Normalisasi1 * 0.3;

              $Normalisasi2 = $data['c2'] / 95.39;
              $optimasi2 = $Normalisasi2 * 0.5;


              $Normalisasi3 = $data['c3'] / 95.39;
              $optimasi3 = $Normalisasi3 * 0.4;


            ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nama_alternatif'] ?></td>
                <td><?php echo round($optimasi1, 2) ?></td>
                <td><?php echo round($optimasi2, 2) ?></td>
                <td><?php echo round($optimasi3, 2) ?></td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>