<style>
        .tengah{
        text-align: center;
    }
    .kanan{
        text-align: right;
    }
    
</style>

<div id="page-wrapper">    

    <div class="row-baru">
        <ol class="breadcrumb">
            <li class=""><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><i class="fa fa-archive"></i> Daftar Pengguna</li>
        </ol>
<!--        <div class="col-lg-12">
            <h1 class="page-header">Daftar Barang</h1>
        </div>-->

        <!-- /.col-lg-12 -->
    </div>
    <br>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-grey">
                <div class="panel-heading">
                    
                    <div class="clearfix">
                        <div class="pull-left" style="font-size:30px;">
                            Daftar Pengguna
                        </div>
                        <div class="pull-right" style="margin-bottom: auto;">
                            <a class="btn btn-lg btn-primary btn-outline pull-right" href="#modalAddPengelola" data-toggle="modal">
                                <i class="fa fa-plus"></i>Tambah Pengguna</a>

                           
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
<!--                                    <th><input type="checkbox" id="inlineCheckbox1" value="option0"> All</th>-->
                                    <th><i class="fa fa-sort"></i> No.</th>
                                    <th><i class="fa fa-sort"></i> Nama</th>
                                    <th><i class="fa fa-sort"></i> Level</th>
                                    <th><i class="fa fa-sort"></i> Status</th>
                                   
                                    <th> Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($data_pengelola as $query){ ?>

                                    <tr>

                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $query->userNamaLengkap; ?></td>
                                    
                                        <td><?php echo $query->userLevel; ?></td>

                                         <?php if ($query->userAktif == '1')
                                        {  ?>
                                        <td>Aktif</td>
                                        <?php } 
                                        else  {?> 
                                            <td>Tidak Aktif</td>
                                            <?php } ?>
                                            

                                        <?php if ($query->userLevel == 'pengelola')
                                        {  ?>
                                        <td>
                                        <div class="btn-group">
                                        <a href="<?php echo site_url('pengelola/pengelola_detil/' . $query->userId . ''); ?>"><i class="fa fa-desktop fa-fw"></i> Detail</a>
                                                  <!--   <li class="divider"></li> -->
                                        <a href="<?php echo site_url('pengelola/delete/' . $query->userId . ''); ?>" onclick="return confirm('Apakah anda yakin akan menghapus data?')"><i class="fa fa-eraser fa-fw"></i> Hapus</a>
                                        </div>

                                        </td> 

                                        <?php } 
                                        else  {?> 
                                            <td></td>
                                            <?php } ?>

                                       
                                    
                                        </div>
                                        
                                    </tr>                             
                                    <?php $no++; ?>
                                   
                              <?php } ?>
                            </tbody>
                        </table>
                    </div>
                   
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->

<?php $this->load->view('modal/modal_add_pengelola'); ?>   
