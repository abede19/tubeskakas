<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Tambah Destinasi</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('dashboard')?>">Beranda</a>
            </li>
            <li>
                <a href="<?php echo base_url('Penginapan')?>">Tabel Penginapan</a>
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
                    <form class="form-horizontal"  method="post" action="<?php echo base_url('Penginapan/masukkanDataPenginapan')?>" enctype="multipart/form-data">
                        <div class="form-group"><label class="col-lg-2">Foto</label>
                            <div class="col-lg-7"><input type="file" name="gambar"  class="form-control"></div>
                            <?php echo "<span class='help-block'>".form_error('gambar')."<span>"?>
                        </div>
                        <div class="form-group"><label class="col-lg-2">Nama Penginapan</label>
                            <div class="col-lg-7"><input type="text" name="nama" value="<?php echo set_value('nama')?>" class="form-control"></div>
                            <?php echo "<span class='help-block'>".form_error('nama')."<span>"?>
                        </div>
                        <div class="form-group"><label class="col-lg-2">Fasilitas</label>
                            <div class="col-lg-7"><input type="text" name="fasilitas" value="<?php echo set_value('fasilitas')?>" class="form-control"></div>
                            <?php echo "<span class='help-block'>".form_error('fasilitas')."<span>"?>
                        </div>
                        <div class="form-group"><label class="col-lg-2 ">Lokasi</label>
                            <div class="col-lg-7"><input type="text" name="lokasi" value="<?php echo set_value('lokasi')?>" class="form-control"></div>
                            <?php echo "<span class='help-block'>".form_error('lokasi')."<span>"?>
                        </div>
                        <div class="form-group"><label class="col-lg-2 ">Daerah</label>
                            <div class="col-lg-7"><input type="text" name="daerah" value="<?php echo set_value('daerah')?>" class="form-control"></div>
                            <?php echo "<span class='help-block'>".form_error('daerah')."<span>"?>
                        </div>
                        <div class="form-group"><label class="col-lg-2 ">kota</label>
                            <div class="col-lg-7"><input type="text" name="kota" value="<?php echo set_value('kota')?>" class="form-control"></div>
                            <?php echo "<span class='help-block'>".form_error('kota')."<span>"?>
                        </div>
                        <div class="form-group"><label class="col-lg-2 ">Jenis Penginapan</label>
                         <div class="col-lg-7"><select class="form-control" name="jenis_penginapan" value="<?php echo set_value('jenis_penginapan')?>">
                                <option value="">Pilih Jenis Wisata</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select></div>
                            <?php echo "<span class='help-block'>".form_error('jenis_penginapan')."<span>"?>
                        </div>
                        <div class="form-group"><label class="col-lg-2 ">Deskripsi</label>
                            <div class="col-lg-7"><input type="text" name="deskripsi" value="<?php echo set_value('deskripsi')?>" class="form-control"></div>
                            <?php echo "<span class='help-block'>".form_error('deskripsi')."<span>"?>
                        </div>
                        <div class="form-group"><label class="col-lg-2 ">Harga</label>
                            <div class="col-lg-7"><input type="text" name="harga" value="<?php echo set_value('harga')?>" class="form-control"></div>
                            <?php echo "<span class='help-block'>".form_error('harga')."<span>"?>
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