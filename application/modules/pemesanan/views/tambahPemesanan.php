<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Tambah Pemesanan</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('dashboard')?>">Beranda</a>
            </li>
            <li>
                <a href="<?php echo base_url('Pemesanan')?>">Tabel Pemesanan</a>
            </li>
            <li class="active">
                <strong>Tambah Pemesanan</strong>
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
                    <form class="form-horizontal"  method="post" action="<?php echo base_url('Pemesanan/tambahDataPemesanan')?>">
                        <div class="form-group"><label class="col-lg-2">Nama Pemesanan</label>
                            <div class="col-lg-7"><input type="text" name="nama" value="<?php echo set_value('nama')?>" class="form-control"></div>
                            <?php echo "<span class='help-block'>".form_error('nama')."<span>"?>
                        </div>
                        <div class="form-group"><label class="col-lg-2">Destinasi</label>
                            <div class="col-lg-7"><input type="text" name="destinasi" value="<?php echo set_value('destinasi')?>" class="form-control"></div>
                            <?php echo "<span class='help-block'>".form_error('destinasi')."<span>"?>
                        </div>
                       <div class="form-group"><label class="col-lg-2 ">Jenis Pemesanan</label>
                         <div class="col-lg-7"><select class="form-control" name="jenis_pemesanan">
                                <option value="">Pilih Jenis Pemesanan</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select></div>
                            <?php echo "<span class='help-block'>".form_error('jenis_pemesanan')."<span>"?>
                        </div>
                      
                        <div class="form-group"><label class="col-lg-2 ">Daerah</label>
                            <div class="col-lg-7"><input type="text" name="daerah" value="<?php echo set_value('daerah')?>" class="form-control"></div>
                            <?php echo "<span class='help-block'>".form_error('daerah')."<span>"?>
                        </div>
                        <div class="form-group"><label class="col-lg-2 ">kota</label>
                            <div class="col-lg-7"><input type="text" name="kota" value="<?php echo set_value('kota')?>" class="form-control"></div>
                            <?php echo "<span class='help-block'>".form_error('kota')."<span>"?>
                        </div>
                        
                        <div class="form-group"><label class="col-lg-2 ">Total Harga</label>
                            <div class="col-lg-7"><input type="text" name="total" value="<?php echo set_value('total')?>" class="form-control"></div>
                            <?php echo "<span class='help-block'>".form_error('total')."<span>"?>
                        </div>

                        <div class="form-group"><label class="col-lg-2 ">Status Pemesanan</label>
                            <div class="col-lg-7"><input type="text" name="status" value="<?php echo set_value('status')?>" class="form-control"></div>
                            <?php echo "<span class='help-block'>".form_error('status')."<span>"?>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn dim  btn-danger" type="reset"><i class="fa fa-times"></i> Batalkan</button>
                                <button class="btn dim  btn-primary" type="submit"><i class="fa fa-check-square-o"></i> Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>    