<?php $this->load->view('layout/header') ?>
<div class="col-md-10">
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Edit Jenis Lapangan</h3>
    </div>
    <br>
    <div class="container">
        <a href="<?php echo site_url('data_admin');?>"
        <a href="" class="btn btn-warning"><i class="fas fa-arrow-left"></i> Kembali</a>
        <br></br>

               <form action="<?php echo site_url('JenisLapangan/update');?>" method="post">
               <input type="hidden" name="id" value="<?php echo $data->id; ?>">
                    <div class="form-group row">
                      <label for="jns_lapangan" class="col-sm-2 col-form-label">Nama Lapangan</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $data->jns_lapangan; ?>" type="text" class="form-control" id="jns_lapangan" name="jns_lapangan">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="harga_perjam" class="col-sm-2 col-form-label">Harga/jam</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $data->harga_perjam; ?>" type="text" class="form-control" id="harga_perjam" name="harga_perjam">
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