<?php $this->load->view('layout/header') ?>
<div class="col-md-10">
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Edit Pesanan</h3>
    </div>
    <br>
    <div class="container">
        <a href="<?php echo site_url('data_admin');?>"
        <a href="" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
        <br></br>
               <form action="<?php echo site_url('data_admin/update');?>" method="post">
               <input type="hidden" name="id" value="<?php echo $data->id; ?>">
                    <div class="form-group row">
                      <label for="nama_tim" class="col-sm-2 col-form-label">Nama Tim</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $data->nama_tim; ?>" type="text" class="form-control" id="nama_tim" name="nama_tim">
                      </div>
                    </div>
    
                    <div class="form-group row">
                        <label for="id_lapangan" class="col-sm-2
                        col-form-label">Jenis Lapangan</label>
                        <div class = "col-sm-6">
                            <select name="id_lapangan" id="id_lapangan"
                            class="form-control">
                            <option value ="">Pilih Jenis Lapangan</option>

                            <?php foreach($jenis as $value) { ?>
                                <option <?= ($value->id == $data->id_lapangan)?
                                'selected':'' ?> value="<?php echo $value->id ?>"><?php
                                echo $value->jns_lapangan ?></option>
                            <?php } ?>
                        </select>
                       </div>
                    </div>


                    <div class="form-group row">
                      <label for="tgl_booking" class="col-sm-2 col-form-label">Tanggal Booking</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $data->tgl_booking; ?>" type="text" class="form-control" id="tgl_booking" name="tgl_booking">
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="jam_masuk" class="col-sm-2 col-form-label">Jam Masuk</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $data->jam_masuk; ?>" type="text" class="form-control" id="jam_masuk" name="jam_masuk">
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="jam_keluar" class="col-sm-2 col-form-label">Jam Keluar</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $data->jam_keluar; ?>" type="text" class="form-control" id="jam_keluar" name="jam_keluar">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="noTelp" class="col-sm-2 col-form-label">No Telp</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $data->noTelp; ?>" type="text" class="form-control" id="noTelp" name="noTelp">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="tgl_bayar" class="col-sm-2 col-form-label">Tgl Bayar</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $data->tgl_bayar; ?>" type="text" class="form-control" id="tgl_bayar" name="tgl_bayar">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="harga" class="col-sm-2 col-form-label">Total</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $data->harga; ?>" type="text" class="form-control" id="harga" name="harga">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="simpan" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                    </div>
                </form>
           </div>
        </div>
    </div>

<?php $this->load->view('layout/footer') ?>