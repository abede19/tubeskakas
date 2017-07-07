<style type="text/css">
    .table-bordered  thead tr th{
        text-align: center;
    }
</style>

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Nasional</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('dashboard')?>">Beranda</a>
            </li>
           
            <li class="active">
                <strong>Nasional</strong>
            </li>
        </ol>  
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
             <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <div class="row" style="margin-bottom: 20px;">
                                <div class="col-sm-2 m-b-xs">
                                    <a href="<?php echo base_url('Transfortasi/tambahTransfortasiNasional')?>"><button type="button" class="btn dim btn-w-m btn-primary"><i class="fa fa-plus"></i> Tambah Data </button></a>
                                </div>
                                <div class="col-sm-6 m-b-xs">
                                   <button type="button" class="btn dim btn-w-m btn-primary"><i class="fa fa-file-excel-o"></i> Export to Excel</button>
                                </div>
                                <div class="col-sm-4 m-b-xs">
                                    <div class="input-group"><input type="text" placeholder="Search" class=" form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-primary"> Go!</button> </span></div>
                                </div>
                                <!-- <div class="col-sm-2">
                                   <button type="button" id="loading-example-btn" class="btn btn-white"><i class="fa fa-refresh"></i> Refresh</button>
                                </div> -->
                            </div>
                            <?php echo $this->session->flashdata('pesanTambah')?>
                            <?php echo $this->session->flashdata('pesanUbahData')?>
                             <?php echo $this->session->flashdata('pesanHapusData')?>
                            <table class="footable table table-bordered toggle-arrow-tiny" data-page-size="15">
                                <thead >
                                <tr>

                                    <th>No.</th>
                                    <th data-hide="phone">Asal</th>
                                    <th data-hide="phone">Nama</th>
                                    <th data-hide="phone,tablet" >Tujuan</th>
                                    <th data-hide="phone">Via</th>
                                    <th data-hide="text-right">Jenis Transfortasi</th>
                                    <th data-hide="phone">Harga</th>
                                    <th class="text-right">Aksi</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no=1;
                                    foreach ($nasional as $nasional ) {
                                       
                                ?>
                                <tr>
                                    <td><?php echo $no++?></td>
                                    <td><?php echo $nasional->asal?></td>
                                    <td><?php echo $nasional->nama?></td>
                                    <td><?php echo $nasional->tujuan?></td>
                                    <td><?php echo $nasional->via?></td>
                                    <td><?php echo $nasional->jenis_transfortasi?></td>
                                   
                                    <td>
                                        <span class="label label-primary"><?php echo $nasional->harga?></span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                            
                                           <a href="<?php echo base_url('Transfortasi/editTransfortasiNasional')?>/<?php echo $nasional->id_transfortasi_nasional?>"><button class="btn-white btn btn-md"><i class="fa fa-edit"></i> Edit</button></a> 
                                           <a href="<?php echo base_url('Transfortasi/hapusTransfortasiNasional')?>/<?php echo $nasional->id_transfortasi_nasional?>"> <button class="btn-white btn btn-md"><i class="fa fa-trash"></i> Delete</button></a>
                                        </div>
                                    </td>

                                </tr>
                                <?php } ?>
                                
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="10">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

            
</div>            

    