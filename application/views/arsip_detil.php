<!--<style type="text/css">
    ul li {
        list-style: none;
    }
</style>-->
<div id="page-wrapper">
    <div class="row">
        <ol class="breadcrumb">
            <li class=""><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class=""><a href="<?php echo site_url('arsip'); ?>"><i class="fa fa-archive"></i> Daftar Kegiatan</a></li>
            <li class="active"><i class="fa fa-archive"></i> Detail Kegiatan</li>
        </ol>

        <div class="col-md-12">
            <h1 class="page-header">Detail Kegiatan</h1>
        </div>

         <?php if ($this->session->flashdata('errortype')): ?>

           <div class="alert alert-danger">
        <p><?php echo $this->session->flashdata('errortype') ?></p>
           </div>


        <?php endif; ?>

        <?php if ($this->session->flashdata('errorsize')): ?>

              <div class="alert alert-danger">
                <p><?php echo $this->session->flashdata('errorsize') ?></p>
           </div>
           


        <?php endif; ?>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-grey"> 
                <div class="panel-heading"> 
                    <div class="clearfix">
                        <div class="pull-left" style="font-size:30px;">
                            <?php echo $hasil->subjek; ?>

                        </div>
                        <?php $id = $this->uri->segment(3); ?>

                        <div class="pull-right" style="margin-bottom: auto;">
                            <a class=" btn btn-lg btn-info" href="#modal_edit_arsip" data-toggle="modal"><i class="fa fa-edit"> Edit</i> </a>
                            <!-- <a class=" btn btn-lg btn-info" href="#modal_cetak_arsip" data-toggle="modal"><i class="fa fa-print"> Cetak</i> </a> -->
                            <a class=" btn btn-lg btn-info" href='<?php echo site_url("arsip/cetak_detil/$id");?>' target="__blank" data-toggle="modal"><i class="fa fa-download"> Download</i> </a> 
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-hover table-condensed table-striped tablesorter">

                                <tr>
                                    <th class="th_detil">Tanggal Kegiatan</th>
                                    <td>:</td>
                                    <td><?php echo tgl_indo($hasil->tgl_kegiatan); ?></td>
                                </tr>

                                <tr>
                                    <th class="th_detil">Tempat Pelaksanaan</th>
                                    <td>:</td>
                                    <td><?php echo $hasil->tempat; ?></td>
                                </tr>

                                 <tr>
                                    <th class="th_detil">Pembuat</th>
                                    <td>:</td>
                                    <td><?php echo $hasil->userNamaLengkap; ?></td>
                                </tr>

                                <tr>
                                    <th class="th_detil">Tanggal Buat</th>
                                    <td>:</td>
                                    <td><?php echo tgl_indo($hasil->tgl_kelola); ?></td>
                                </tr>

                                 <tr>
                                 
                                    <th class="th_detil">Riwayat Edit</th>
                                    <td>:</td>
                                    <td> 
                                    <ol>
                                    <?php 
                                    foreach ($riwayat as $val) { ?>

                                    <li> <?php echo $val->userNamaLengkap;?> <?php echo tgl_indo($val->tgl_edit); ?></li> 
                                    <?php } ?> 
                                    </ol> 
                                    </td>
                                
                                </tr>

                                 <tr>
                                    <th class="th_detil">Lampiran</th>
                                    <td>:</td>

                                    <td >
                                    <ol>
                                    <?php 
                                    foreach ($lampiran as $val) { ?> 
                                    <li><a href="<?php echo base_url("lampiran/$val->nama_file");?>" >  <?php echo $val->nama_file;?></a></li>
                                    <?php
                                    }
                                    ?> 
                                    </ol>
                                     </td>

                                </tr>


                                
                            </table>
                        </div>

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

<?php $this->load->view('modal/modal_edit_arsip'); ?>