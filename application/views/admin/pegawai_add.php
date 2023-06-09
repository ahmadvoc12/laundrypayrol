    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">

          <section class="col-lg-12 connectedSortable">

            <!-- Map card -->
            <div class="card">
              <div class="card-header"> Tambah data karyawan </h3>
              </div>
              <form method="post" action="<?=base_url('admin/pegawai_simpan/')?>">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" required="">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required="">
                  </div>
                  <div class="form-group">
                    <label>password</label>
                    <input type="password" name="nip" class="form-control" required="" >
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                      <option value="" selected="" disabled="">Pilih Jenis Kelamin</option>
                      <option value="L">Laki-Laki</option>
                      <option value="P">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Cabang</label>
                    <select name="departemen" class="form-control">
                      <option value="" selected="" disabled="">Pilih Cabang</option>
                      <?php foreach ($data as $d) { ?>
                      <option value="<?=$d->departemen_id?>"><?=$d->departemen?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Waktu masuk</label>
                    <input type="date" name="masuk" class="form-control" required="">
                  </div>
                  <div class="form-group">
                    <label>Gaji</label>
                    <input type="number" name="gaji" class="form-control" required="">
                  </div>
                </div>
                <div class="card-footer">
                  <a href="<?=base_url('admin/pegawai')?>" class="btn btn-danger">Kembali</a>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
          </section>
        </div>
      </div>
    </section>