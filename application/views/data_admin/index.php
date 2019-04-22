<?php $this->load->view('layout/header') ?>
<div class="col-md-10">
<table class="table">
        <a href="<?php echo site_url('data_admin/tambah');?>" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah Data</a>
    </div>
    
    <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Tim</th>
                <th scope="col">Jns Lapangan</th>
                <th scope="col">Tgl Booking</th>
                <th scope="col">Jam Masuk</th>
                <th scope="col">Jam Keluar</th>
                <th scope="col">No Telp</th>
                <th scope="col">Tgl Bayar</th>
                <th scope="col">Total</th>
                <th scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>
            <?php
                $no +=1;
                foreach($data as $value){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $value->nama_tim; ?></td>
                        <td><?php echo $value->jns_lapangan; ?></td>
                        <td><?php echo $value->tgl_booking; ?></td>
                        <td><?php echo $value->jam_masuk; ?></td>
                        <td><?php echo $value->jam_keluar; ?></td>
                        <td><?php echo $value->noTelp; ?></td>
                        <td><?php echo $value->tgl_bayar; ?></td>
                        <td><?php echo $value->harga; ?></td>
    
                        <td>
                            <a class="btn btn-warning  btn-sm" href="<?php echo site_url('data_admin/edit/'.$value->id); ?>">
                            Edit</a>
                            <a class="btn btn-danger  btn-sm" href=" <?php echo site_url('data_admin/hapus/'.$value->id); ?>">Hapus</a>
                        </td>   
                    </tr>           
                <?php } ?>
            </tbody>
        </table>
            <?php 
            echo $this->pagination->create_links();
            ?>
    </div>
</div>

<?php $this->load->view('layout/footer') ?>
