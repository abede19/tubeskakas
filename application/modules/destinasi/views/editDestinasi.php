<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Tambah Destinasi</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('dashboard')?>">Beranda</a>
            </li>
           
            <li class="active">
                <strong>Tambah Destinasi</strong>
            </li>
        </ol>  
    </div>
</div>


<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">    
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Horizontal form</h5>
                   
                </div>
                <div class="ibox-content">
                    <form class="form-horizontal" method="post" action="<?php echo base_url('Destinasi/updateDestinasi') ?>" enctype="multipart/form-data">
                        <div class="form-group"><label class="col-lg-2 ">Foto</label>
                            <div class="col-lg-7"><input type="file" name="gambar"  class="form-control" required>
                            </div >
                        </div>
                        <div class="form-group"><label class="col-lg-2">Nama</label>
                            <div class="col-lg-7">
                            <input type="text" name="nama" value="<?php echo $destinasi->nama?>" class="form-control" required></div>
                            <input type="hidden" name="id_destinasi" value="<?php echo $destinasi->id_destinasi?>" class="form-control">

                        </div>
                        <div class="form-group"><label class="col-lg-2 ">Lokasi</label>
                            <div class="col-lg-7"><input type="text" name="lokasi" value="<?php echo $destinasi->lokasi?>" class="form-control" required></div>
                           
                        </div>
                        <div class="form-group"><label class="col-lg-2 ">Daerah</label>
                            <div class="col-lg-7"><input type="text" name="daerah" value="<?php echo $destinasi->daerah?>" class="form-control" required></div>
                            
                        </div>
                        <div class="form-group"><label class="col-lg-2 ">kota</label>
                            <div class="col-lg-7"><input type="text" name="kota" value="<?php echo $destinasi->kota?>" class="form-control" required></div>
                            
                        </div>
                        <div class="form-group"><label class="col-lg-2 ">Jenis Wisata</label>
                         <div class="col-lg-7"><select class="form-control" name="jenis_destinasi" required>
                                <option value="">Pilih Jenis Wisata</option>
                                <option value='1' <?php if ($destinasi->jenis_destinasi=='1') { echo "selected";} ?> >1</option>
                                <option value='2' <?php if ($destinasi->jenis_destinasi=='2') { echo "selected";} ?> >2</option>
                            </select></div>
                            <?php echo '<span class="help-block">'.form_error('jenis_destinasi').'</span>';?>
                        </div>
                        <div class="form-group"><label class="col-lg-2 ">Deskripsi</label>
                            <div class="col-lg-7"><input type="text" name="deskripsi" value="<?php echo $destinasi->deskripsi?>" class="form-control" required></div>
                           
                        </div>
                        <div class="form-group"><label class="col-lg-2 ">Harga</label>
                            <div class="col-lg-7"><input type="text" name="harga" value="<?php echo $destinasi->harga?>" class="form-control" required></div>
                            
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn  btn-danger" type="submit"><i class="fa fa-times"></i> Batalkan</button>
                                <button class="btn  btn-primary" type="submit"><i class="fa fa-check-square-o"></i> Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>    