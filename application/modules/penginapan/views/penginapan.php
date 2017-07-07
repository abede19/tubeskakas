<style type="text/css">
    .table-bordered  thead tr th{
        text-align: center;
    }
</style>

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Penginapan</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('dashboard')?>">Beranda</a>
            </li>
           
            <li class="active">
                <strong>Penginapan</strong>
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
                                    <a href="<?php echo base_url('Penginapan/tambahPenginapan')?>"><button type="button" class="btn dim btn-w-m btn-primary"><i class="fa fa-plus"></i> Tambah Data</button></a>
                                </div>
                                <div class="col-sm-6 m-b-xs">
                                   <button type="button" class="btn dim btn-w-m btn-primary"><i class="fa fa-file-excel-o"></i> Export to Excel</button>
                                </div>
                                <div class="col-sm-4 m-b-xs">
                                    <div class="input-group"><input type="text" placeholder="Search" class=" form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-primary"> Go!</button> </span></div>
                                </div>
                               <!--  <div class="col-sm-2">
                                   <button type="button" id="loading-example-btn" class="btn btn-white"><i class="fa fa-refresh"></i> Refresh</button>
                                </div> -->
                            </div>
                            <?php echo $this->session->flashdata('pesanTambah')?>
                            <?php echo $this->session->flashdata('pesanUbah')?>
                             <?php echo $this->session->flashdata('pesanHapus')?>
                            <table class="footable table table-bordered toggle-arrow-tiny" data-page-size="15">
                                <thead >
                                <tr>

                                    <th>No.</th>
                                    <th data-hide="phone">Foto</th>
                                    <th data-hide="phone">Nama</th>
                                    <th data-hide="phone,tablet" >Fasilitas</th>
                                    <th data-hide="phone">Lokasi</th>
                                    <th data-hide="text-right">Daerah</th>
                                    <th data-hide="phone">Kota</th>
                                    <th data-hide="phone">Jenis Penginapan</th>
                                    <th data-hide="phone">Deskripsi</th>
                                    <th data-hide="phone">Harga</th>
                                    <th class="text-right">Aksi</th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no=1;
                                    foreach ($penginapan as $data ) {
                                  
                                ?>
                                <tr>
                                    <td><?php echo $no++?></td>
                                    <td><img width="60px" height="50px;" style="margin: 0px;" src="<?php echo base_url()."/inspinia/upload/penginapan"?>/<?php echo $data->foto?>"></td>
                                    <td><?php echo $data->nama_penginapan?></td>
                                     <td><?php echo $data->fasilitas?></td>
                                    <td><?php echo $data->lokasi?></td>
                                    <td><?php echo $data->daerah?></td>
                                    <td><?php echo $data->kota?></td>
                                    <td><?php echo $data->jenis_penginapan?></td>
                                    <td><?php echo $data->deskripsi?></td>
                                    <td><?php echo $data->harga?> </td>
                                   
                                    
                                    <td class="text-right">
                                        <div class="btn-group">
                                           
                                           <a href="<?php echo base_url('Penginapan/editPenginapan')?>/<?php echo $data->id_penginapan?>"> <button class="btn-white btn btn-md"><i class="fa fa-edit"></i> Edit</button></a>
                                           <a href="<?php echo base_url('Penginapan/hapusData')?>/<?php echo $data->id_penginapan?>"> <button class="btn-white btn btn-md"><i class="fa fa-trash"></i> Delete</button> </a>
                                        </div>
                                    </td>

                                </tr>
                                <?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="12">
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

    