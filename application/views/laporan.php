

<div id="page-wrapper">
    <div class="row-baru">
         <ol class="breadcrumb">
            <li class=""><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active"><i class="fa fa-archive"></i> Laporan Kegiatan</li>
        </ol>
    </div>
    <!-- /.row -->
   
        <div class="col-lg-12">
            <div class="panel panel-grey">
                <div class="panel-heading">
                 <div class="clearfix">
                        <div class="pull-left" style="font-size:30px;">
                    Laporan Arsip Kegiatan
                </div>
                </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">

                    <!-- /.table-responsive -->

                    <ul class="nav nav-tabs">
                        <!-- <li class="active"><a href="#list" data-toggle="tab">List</a>
                        </li> -->
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="list">
                            <h4></h4>
                            <form method="post" action="<?php echo site_url().'laporan'?>">


                        <div class="form-group col-lg-5">
                
                <select class="form-control" name="bulan">
                  <option value="" selected >--Bulan--</option>
                                        <?php 
                                        $month = array(1 =>'Januari', 'Februari','Maret', 'April', 'Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                                       
                                        for($x=01; $x <= 12; $x++)
                                        {
                                            echo "<option value=$x>$month[$x]</option>";
                                        }
                                        ?>
                </select>
              </div>

                                    <div class="form-group col-lg-5" >
                
                <select class="form-control" name="tahun">
                  <option value="" selected >--Tahun--</option>
                                        <?php 
                                        $year=date("Y");
                                        for($x=2013; $x <= $year; $x++)
                                        {
                                            echo "<option value=$x>$x</option>";
                                        }
                                        ?>
                </select>
              </div>



              

                                    <button class="btn btn-md btn-primary" type="submit">Pilih</button> 
                                </form>
                                
                                <?php
                                if(!isset($record)) {
                    
                                }
                                else { ?>
                                
                        <table class="table table-striped table-bordered table-hover" >
                            <thead>
                                <tr>
<!--                                    <th><input type="checkbox" id="inlineCheckbox1" value="option0"> All</th>-->
                                    <th><i class="fa fa-sort"></i> No.</th>
                                    <th><i class="fa fa-sort"></i> Judul Kegiatan</th>
                                    <th><i class="fa fa-sort"></i> Tanggal</th>
                                    <th><i class="fa fa-sort"></i> Status</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($record as $query){ ?>

                                    <tr>
<!--                                        <td><input type="checkbox" id="inlineCheckbox1" value="option1"></td>-->
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $query['subjek']; ?></td>
                                        <td><?php echo $query['tgl_kegiatan']; ?></td>

                                        <?php if ($query['arsip_show']==0)
                                        {  ?>
                                        <td>
                                        <div class="btn-group">
                                        <a href="<?php echo site_url('laporan/restore/' . $query['id_arsip'].''); ?>" onclick="return confirm('Apakah anda yakin akan mengembalikan data?')"><i class="fa fa-reply fa-fw"></i> Restore</a>
                                        </div>
                                        </td>  
                                        <?php } 
                                        else  {?> 
                                            <td>Ada</td>
                                            <?php } ?>
                                     </tr>                             
                                    <?php $no++; ?>
                                   
                              <?php } ?>
                            </tbody>
                        </table>

                        <div class="form-group col-lg-5" >
                        <form method="post" action="<?php echo site_url().'laporan/excel'?>">
                            <input type="hidden" name="bulan" value="<?php echo $this->session->userdata('bulan'); ?>">

                            <input type="hidden" name="tahun" value="<?php echo $this->session->userdata('tahun'); ?>">

                            <button formtarget="__blank" class="btn btn-lg btn-primary btn-outline pull-left" type="submit"><i class="fa fa-download"> Download Excel</i></button> 
                        </form>
                        
                         <form method="post" action="<?php echo site_url().'laporan/cetak'?>">
                            <input type="hidden" name="bulan" value="<?php echo $this->session->userdata('bulan'); ?>">

                            <input type="hidden" name="tahun" value="<?php echo $this->session->userdata('tahun'); ?>">

                            <button class="btn btn-lg btn-primary btn-outline pull-right" formtarget="__blank" type="submit"><i class="fa fa-download"> Download PDF</i></button>
                        </form>
                        </div>

                                <?php }
                                ?>
                                
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
