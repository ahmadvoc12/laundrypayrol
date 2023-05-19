<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><i class="fas fa-info"></i> Note:</h5>
              Jika ingin mencetak Slip, gunakan tombol download di pojok kiri bawah
            </div>

 
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <img style="width: 50px" src="<?=base_url('assets/img/'.$web->logo)?>"> <?=$web->nama?>
                    <small class="float-right">Date :  <?=$this->M_data->hari(date('D')).', '.$this->M_data->tgl_indo(date('Y-m-d'));?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong><?=ucfirst($data->nama)?></strong><br>
                    <?=$data->alamat?><br>
                    Phone: <?=$data->nohp?><br>
                    Email: <?=$data->email?>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong><?=ucwords($data->nama)?></strong><br>
                  
                    Email: <?=$data->email?><br>
                    Cabang : <?=$data->departemen?><br>
                    Gaji perbulan : Rp. <?=number_format($data->gaji)?>
                  </address>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                      <tr>
                        <th style="width:50%">Jumlah Kehadiran :</th>
                        <td><?=$absen?> hari </td>
                      </tr>
                      <tr>
                        <th>Jumlah Cuti :</th>
                        <td><?=$cuti?> hari </td>
                      </tr>
                      <tr>
                        <th>Jumlah Sakit :</th>
                        <td><?=$sakit?> hari </td>
                      </tr>
                      <tr>
                        <th>Jumlah Izin Tidak Masuk :</th>
                        <td><?=$izin?> hari </td>
                      </tr>
                      <tr>
                        <th>Gaji :</th>
                        <td>Rp. <?=$data->gaji?></td>
                      </tr>
                    </table>
                </div>
                <!-- /.col -->
              </div>

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="<?=base_url('pegawai/print_slip')?>" target="_blank" class="btn btn-primary"><i class="fas fa-print"></i> Print</a>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>