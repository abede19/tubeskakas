<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Edit Destinasi</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('dashboard')?>">Beranda</a>
            </li>
           <li>
                <a href="<?php echo base_url('Penginapan')?>">Tabel Penginapan</a>
            </li>
            <li class="active">
                <strong>Edit Destinasi</strong>
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
                    <form class="form-horizontal"  method="post" action="<?php echo base_url('Penginapan/ubahDataPenginapan')?>" enctype="multipart/form-data">
                        <div class="form-group"><label class="col-lg-2">Foto</label>
                            <div class="col-lg-7"><input type="file" name="gambar"  class="form-control"></div>
                             <div class="col-lg-7"><input type="hidden" name="id_penginapan" value="<?php echo $penginapan->id_penginapan?>"  class="form-control"></div>
                            
                        </div>
                        <div class="form-group"><label class="col-lg-2">Nama Penginapan</label>
                            <div class="col-lg-7"><input type="text" value="<?php echo $penginapan->nama_penginapan?>" name="nama"  class="form-control"></div>
                            
                        </div>
                        <div class="form-group"><label class="col-lg-2">Fasilitas</label>
                            <div class="col-lg-7"><input type="text" value="<?php echo $penginapan->fasilitas?>" name="fasilitas" class="form-control"></div>
                            
                        </div>
                        <div class="form-group"><label class="col-lg-2 ">Lokasi</label>
                            <div class="col-lg-7"><input type="text" value="<?php echo $penginapan->lokasi?>" name="lokasi"  class="form-control"></div>
                            
                        </div>
                        <div class="form-group"><label class="col-lg-2 ">Daerah</label>
                            <div class="col-lg-7"><input type="text" value="<?php echo $penginapan->daerah?>" name="daerah"  class="form-control"></div>
                           
                        </div>
                        <div class="form-group"><label class="col-lg-2 ">kota</label>
                            <div class="col-lg-7"><input type="text" name="kota" value="<?php echo $penginapan->kota?>"   class="form-control"></div>
                           
                        </div>
                        <div class="form-group"><label class="col-lg-2 ">Jenis Penginapan</label>
                         <div class="col-lg-7"><select class="form-control" name="jenis_penginapan" ">
                                <option value="">Pilih Jenis Wisata</option>
                                <option value="1" <?php if ($penginapan->jenis_penginapan=='1') { echo "selected" ;} ?> >1</option>
                                <option value="2" <?php  if ($penginapan->jenis_penginapan=='2') { echo "selected";}?> >2</option>
                            </select></div>
                          
                        </div>
                        <div class="form-group"><label class="col-lg-2 ">Deskripsi</label>
                            <div class="col-lg-7"><input type="text" value="<?php echo $penginapan->deskripsi?>" name="deskripsi"  class="form-control"></div>
                           
                        </div>
                        <div class="form-group"><label class="col-lg-2 ">Harga</label>
                            <div class="col-lg-7"><input type="text" name="harga" value="<?php echo $penginapan->harga?>" class="form-control"></div>
                           
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