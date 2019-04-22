<?php $this->load->view('layout/header') ?>
<div class="col-md-10">
    <table class="table">
        <a href="<?php echo site_url('jenisLapangan/tambah');?>" class="btn btn-primary">Tambah Data</a>
    </div>     
        <table class="table">

                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jenis Lapangan</th>
                    <th scope="col">Harga/jam</th>
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
                  <td><?php echo $value->jns_lapangan; ?></td>
                  <td><?php echo $value->harga_perjam; ?></td>
                  <td><a class="btn btn-warning" href="<?php echo site_url('jenisLapangan/edit/'.$value->id); ?>">
                                <i class="fa fa-edit"></i>Edit</a>
                                <a class="btn btn-danger" href=" <?php echo site_url('jenisLapangan/hapus/'.$value->id); ?>">
                                <i class="fa fa-trash"></i> Hapus</a>
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