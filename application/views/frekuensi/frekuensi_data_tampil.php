<section class="content-header">
   
    <!-- Main content -->
    <section class="content">

        <div class="box">
            <div class="box-header">
                <h3 class="box-tittle">Data Praktikan Frekuensi </h3>
                <div class="pull-right">
            
                    <a href="<?=site_url('frekuensi')?>" class="btn btn-warning btn-flat">
                        Back
                    </a>
                </div>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Stambuk</th>
                            <th>Card ID</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Kontak</th>
                            <th>Alamat</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1;
                            foreach($row->result() as $key => $data){ ?>
                            <tr>
                                <td><?=$no++?>.</td>
                                <td><?=$data->stambuk?></td>
                                <td><?=$data->no_card?></td>
                                <td><?=$data->nama?></td>
                                <td><?=$data->jk == 'L' ? "Laki-Laki" : "Perempuan"?></td>
                                <td><?=$data->hp?></td>
                                <td><?=$data->alamat?></td>
                                <td>
                                    <?php if($data->foto != null) {?>
                                    <img src="<?=base_url('upload/praktikan/'.$data->foto)?>" style="width: 100px">
                                    <?php } ?> 
                                   
                                </td>
                                <td class="text-center" width="160px">
                
                                        <a href="<?=site_url('frekuensi/delete/'.$data->id_frekuensi) ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger btn-xs">
                                            <i class="fa fa-trash"></i> Delete
                                        </a>
                                </td>
                            </tr>              
                            <?php } ?>
                         </tbody>
                </table>
            </div>
        </div>

    </section>
        </section>