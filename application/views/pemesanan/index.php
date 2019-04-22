<?php $this->load->view('layout/header_pel') ?>
<div class="jumbotron jumbroton-light" style="background-color: #e3f2fd;">
                <h1 class="display-4">Horizone Futsal</h1>
                
            </div>

   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <div class="py-4">
                   <a href="<?php echo site_url('beranda_pel');?>"
                   <a href="" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
               </div>

               <form action="<?php echo site_url('pemesanan/qsimpan');?>" method="post">
                    <div class="form-group row">
                      <label for="nama_tim" class="col-sm-2 col-form-label">Nama Tim</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control" id="nama_tim" name="nama_tim">
                      </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_lapangan"class="col-sm-2 col-form-label">Jenis Lapangan</label>
                        <div class="col-sm-6">
                            <select name="id_lapangan" id="id_lapangan"
                            class="form-control">
                                <option value="">Pilih Jenis Lapangan</option>

                                <?php foreach($jenis as $value){ ?>
                                    <option value="<?php echo $value->id ?>"><?php
                                    echo $value->jns_lapangan ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="tgl_booking" class="col-sm-2 col-form-label">Tgl Booking</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control" id="tgl_booking" name="tgl_booking">
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="jam_masuk" class="col-sm-2 col-form-label">Jam Masuk</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control" id="jam_masuk" name="jam_masuk">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="jam_keluar" class="col-sm-2 col-form-label">Jam Keluar</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control" id="jam_keluar" name="jam_keluar">
                        </div>
                    </div>
                    <div class="form-group row">
                      <label for="noTelp" class="col-sm-2 col-form-label">No Telp</label>
                        <div class="col-sm-6">
                        <input type="text" class="form-control" id="noTelp" name="noTelp">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="simpan" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Pesan</button>
                      </div>
                    </div>
                </form>
           </div>
        </div>
    </div>

