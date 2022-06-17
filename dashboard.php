  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Selamat Datang di Dashboard</h1>
    
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            <a href="?module=kriteria_pestisida">Kriteria</a>
                        </div>
                        <?php

                        include "inc/koneksi.php";

                        $total_pestisida = mysqli_query($koneksi,"SELECT COUNT(*) as total FROM tb_kriteria");

                        $hasil = mysqli_fetch_array($total_pestisida);

                        ?>

                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $hasil['total']?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            <a href="?module=subkriteria">SubKriteria</a></div>
                            <?php

                            include "inc/koneksi.php";

                            $total_pestisida = mysqli_query($koneksi,"SELECT COUNT(*) as total FROM tb_subkriteria");

                            $hasil = mysqli_fetch_array($total_pestisida);

                            ?>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php echo $hasil['total']?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="?module=alternatif">Alternatif</a>
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <?php

                                    include "inc/koneksi.php";

                                    $total_pestisida = mysqli_query($koneksi,"SELECT COUNT(*) as total FROM tb_alternatif");

                                    $hasil = mysqli_fetch_array($total_pestisida);

                                    ?>
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $hasil['total']?></div>
                                </div>
                                <div class="col">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                <a href="?module=perhitungan">Hasil Perhitungan</a></div>
                                <?php

                                include "inc/koneksi.php";

                                $total_pestisida = mysqli_query($koneksi,"SELECT COUNT(*) as total FROM tb_alternatif");

                                $hasil = mysqli_fetch_array($total_pestisida);

                                ?>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    
                                </div>
                            </div>
                            <div class="col-auto">
                               <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>

       