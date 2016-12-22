
<div id="page-wrapper">
    <div class="row">
        <ol class="breadcrumb">
            <li class=""><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class=""><a href="<?php echo site_url('pengelola'); ?>"><i class="fa fa-archive"></i> Daftar Pengguna</a></li>
            <li class="active"><i class="fa fa-archive"></i> Detail Pengelola</li>
        </ol>

        <div class="col-md-12">
            <h1 class="page-header">Detail Pengelola</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-grey"> 
                <div class="panel-heading"> 
                    <div class="clearfix">
                        <div class="pull-left" style="font-size:30px;">
                            <?php echo $hasil->userNama; ?>
                        </div>
                        <div class="pull-right" style="margin-bottom: auto;">
                            <a class=" btn btn-lg btn-info" href="#modalEditPengelola" data-toggle="modal"><i class="fa fa-edit"> Edit</i> </a> 
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-hover table-condensed table-striped tablesorter">

                                <!-- <tr>
                                    <th class="th_detil">Tanggal Kegiatan</th>
                                    <td>:</td>
                                    <td><?php //echo $detail_arsip->tgl_kegiatan; ?></td>
                                </tr> -->

                                <!-- <tr>
                                    <th class="th_detil">Username</th>
                                    <td>:</td>
                                    <td><?php //echo $hasil->userNama; ?></td>


                                </tr>
 -->
                                 <tr>
                                    <th class="th_detil">Nama Lengkap</th>
                                    <td>:</td>
                                    <td><?php echo $hasil->userNamaLengkap; ?></td>
                                </tr>

                                <tr>
                                    <th class="th_detil">NIP</th>
                                    <td>:</td>
                                    <td><?php echo $hasil->userNIP; ?></td>
                                </tr>
                                
                                <!-- <tr>
                                    <th class="th_detil" type ="password" >Password</th>
                                    <td>:</td>
                                    <td><?php //echo $hasil->userPass; ?></td>
                                </tr> -->

                                <tr>
                                    <th class="th_detil">Status</th>
                                    <td>:</td>
                                        <?php
                                        $userAktif = $hasil->userAktif;
                                        if ($userAktif == '1') {
                                        ?>
                                    <td>Aktif</td>
                                        <?php } else { ?>
                                    <td>Tidak Aktif</td>
                                        <?php } ?>
                                </tr>
                                
                                <tr>
                                    <th class="th_detil">Level</th>
                                    <td>:</td>
                                        <?php
                                        $userLevel = $hasil->userLevel;
                                        if ($userLevel == 'administrator') {
                                        ?>
                                    <td>Administator</td>
                                        <?php } else { ?>
                                    <td>Pengelola</td>
                                        <?php } ?>
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

<?php $this->load->view('modal/modal_edit_pengelola'); ?>