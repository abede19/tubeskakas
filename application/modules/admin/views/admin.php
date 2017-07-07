<style type="text/css">
    .table-bordered  thead tr th{
        text-align: center;
    }
</style>

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Admin</h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url('dashboard')?>">Beranda</a>
            </li>
           
            <li class="active">
                <strong>Admin</strong>
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
                                    <a href="<?php echo base_url('Admin/tambahAdmin')?>"><button type="button" class="btn btn-w-m btn-primary"><i class="fa fa-plus"></i> Tambah </button></a>
                                </div>
                                <div class="col-sm-4 m-b-xs">
                                   <button type="button" class="btn btn-w-m btn-primary">Export to Excel</button>
                                </div>
                                <div class="col-sm-4 m-b-xs">
                                    <div class="input-group"><input type="text" placeholder="Search" class=" form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-primary"> Go!</button> </span></div>
                                </div>
                                <div class="col-sm-2">
                                   <button type="button" id="loading-example-btn" class="btn btn-white"><i class="fa fa-refresh"></i> Refresh</button>
                                </div>
                            </div>

                            <table class="footable table table-bordered toggle-arrow-tiny" data-page-size="15">
                                <thead >
                                <tr>

                                    <th>No.</th>
                                    <th data-hide="phone">Foto</th>
                                    <th data-hide="phone">Nama</th>
                                    <th data-hide="phone,tablet" >Email</th>
                                    <th data-hide="phone">Jenis Admin</th>
                                   
                                    <th class="text-right">Aksi</th>

                                </tr>
                                </thead>
                                <tbody>
                               
                                
                                <tr>
                                   
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $500.00
                                    </td>
                                    <td>
                                        Customer example
                                    </td>
                                    <td>
                                        $750.00
                                    </td>
                                  
                                    <td>
                                        <span class="label label-success">Shipped</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="btn-group">
                                
                                            <a href="<?php echo base_url()?>"> <button class="btn-white btn btn-md"> <i class="fa fa-edit"></i> Edit</button></a>
                                           <a href=""> <button class="btn-white btn btn-md"><i class="fa fa-trash"></i> Delete</button></a>
                                        </div>
                                    </td>

                                </tr>
                              
                             



                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="7">
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

    