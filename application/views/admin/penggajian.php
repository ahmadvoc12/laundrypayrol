    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">

          <section class="col-lg-12 connectedSortable">

            <!-- Map card -->
            <div class="card">
              <div class="card-header"> <?=$title?> </h3>
              </div>
              <div class="card-body table-responsive">
                <table border="1" id="myTable" class="table table-bordered table-striped text-center">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Aksi</th>
                   
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      
                      $no=1; foreach ($list as $data) { 
                        $tahun  = date('Y');
                        $bulan  = date('m');
                        $jumlah = 0;
                        $stotal = 0;
                        $absen  = $this->M_data->absenbulan($data->nip,$tahun,$bulan)->num_rows(); 
                        $cuti   = $this->M_data->cutibulan($data->nip,$tahun,$bulan)->num_rows(); 
                        $sakit  = $this->M_data->sakitbulan($data->nip,$tahun,$bulan)->num_rows(); 
                        $izin   = $this->M_data->izinbulan($data->nip,$tahun,$bulan)->num_rows();

                        $gaji   = ($absen * $data->gaji) + ($cuti * $data->gaji) + ($sakit * $data->gaji);
                        //var_dump($cuti);
                        //hitung hari cuti
                      ?>
                      <tr>
                        <td width="1%"><?=$no++?></td>
                        <td><?=ucfirst($data->nama)?></td>
                        <td>
                          <a href="<?=base_url('admin/detailspenggajian/'.$data->nip)?>" class="btn btn-success">detail</a>
                        </td>
                      
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
              </div>
            </div>
          </section>
        </div>
      </div>
    </section>