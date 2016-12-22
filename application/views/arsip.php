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
            <li class="active"><i class="fa fa-archive"></i> Daftar Arsip </li>
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
                            Daftar Arsip
                        </div>
                        <div class="pull-right" style="margin-bottom: auto;">
                            <a class="btn btn-lg btn-primary btn-outline pull-right" href="#modalAddArsip" data-toggle="modal">
                                <i class="fa fa-plus"></i>Tambah Arsip</a>

                            <!-- <a class=" btn btn-lg btn-success" href="#modalCetakArsip" data-toggle="modal"><i class="fa fa-print"> Cetak</i> </a> -->
                            <!-- <a class="btn btn-lg btn-success btn-success btn-outline pull-right" href="#modalCetakArsip" data-toggle="modal">
                                <i class="fa fa-print"></i>Cetak</a> -->
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                     <!--<div class="table-responsive">-->
                    <div class="" style="padding-left:10px">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
<!--                                    <th><input type="checkbox" id="inlineCheckbox1" value="option0"> All</th>-->
                                    <th><i class="fa fa-sort"></i> No.</th>
                                    <th><i class="fa fa-sort"></i> Judul Kegiatan</th>
                                    <th><i class="fa fa-sort"></i> Tanggal</th>
                                    
                                    <th> Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($data_arsip as $query){ ?>

                                    <tr>
<!--                                        <td><input type="checkbox" id="inlineCheckbox1" value="option1"></td>-->
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $query->subjek; ?></td>
                                        <td><?php echo tgl_indo($query->tgl_kegiatan); ?></td>
                                        
                                        
                                        
                                        <td>
                                            <div class="btn-group">
                                                 <!--<button type="button" class="btn btn-xs btn-primary dropdown-toggle" data-toggle="dropdown">Aksi</button>
<!--                                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                                    <ul class="dropdown-menu">-->
                                                    <a href="<?php echo site_url('arsip/arsip_detil/' . $query->id_arsip . ''); ?>"><i class="fa fa-desktop fa-fw"></i> Detail</a>
                                                 <!--    <li class="divider"></li> -->
                                                   <a href="<?php echo site_url('arsip/delete/' . $query->id_arsip . ''); ?>" onclick="return confirm('Apakah anda yakin akan menghapus data?')"><i class="fa fa-eraser fa-fw"></i> Hapus</a>
                                                <!--</ul>-->
                                            </div>
                                        </td>
                                    </tr>                             
                                    <?php $no++; ?>
                                   
                              <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <!-- <div class="well">
                         <h4>DataTables Usage Information</h4>
                         <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                         <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                     </div> -->
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

<?php $this->load->view('modal/modal_add_arsip'); ?>