<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Tambah Transfortasi Nasional</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('dashboard')?>">Beranda</a>
            </li>
           
            <li class="active">
                <strong>Tambah Transfortasi Nasional</strong>
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
                    <form class="form-horizontal" method="post" action="<?php echo base_url('Transfortasi/ubahTransfortasiNasional')?>">
                        <div class="form-group"><label class="col-lg-2">Asal</label>
                            <div class="col-lg-7"><input type="text" name="asal" value="<?php echo $nasional->asal?>" class="form-control"></div>
                            <div class="col-lg-7"><input type="hidden" name="id_transfortasi_nasional" value="<?php echo $nasional->id_transfortasi_nasional?>" class="form-control"></div>
                        </div>
                        <div class="form-group"><label class="col-lg-2">Nama</label>
                            <div class="col-lg-7"><input type="text" name="nama" value="<?php echo $nasional->nama?>" class="form-control"></div>
                           
                        </div>
                        <div class="form-group"><label class="col-lg-2 ">Tujuan</label>
                            <div class="col-lg-7"><input type="text" name="tujuan" value="<?php echo $nasional->tujuan?>" class="form-control"></div>
                            
                        </div>
                        <div class="form-group"><label class="col-lg-2 ">Via</label>
                            <div class="col-lg-7"><input type="text" name="via" value="<?php echo $nasional->via?>" class="form-control"></div>
                        </div>
                       
                        <div class="form-group"><label class="col-lg-2 ">Jenis Transfortasi</label>
                         <div class="col-lg-7"><select class="form-control" name="jenis_transfortasi">
                                <option>Pilih Jenis Transortasi</option>
                                <option value="1" <?php if ($nasional->jenis_transfortasi=='1') { echo "selected";}?> >1</option>
                                <option value="2" <?php if ($nasional->jenis_transfortasi=='2') { echo "selected";}?> >2</option>
                            </select></div>
                        </div>
                       
                        <div class="form-group"><label class="col-lg-2 ">Harga</label>
                            <div class="col-lg-7"><input type="text" name="harga" value="<?php echo $nasional->harga?>" class="form-control"></div>
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