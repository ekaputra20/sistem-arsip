<!--call modal edit-->
<?php $this->load->view('modal/modal_edit_admin'); ?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class=""><a href="<?php echo site_url('admin'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li class="active"><i class="fa fa-user"></i> Profil</li>
            </ol>
            <div class="alert alert-info alert-dismissable">
                <button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
                Anda dapat menyunting dengan klik edit
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h3>Profil</h3>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="table-responsive">
                                <table class="table table-hover table-striped tablesorter">
                                    <tr>
                                        <td>Username</td>
                                        <td>:</td>
                                        <td><?php echo $profile->userNama; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td>:</td>
                                        <td><?php echo $profile->userNamaLengkap; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Level</td>
                                       
                                        <td>:</td>
                                        <?php
                                        $userLevel = $profile->userLevel;
                                        if ($userLevel == 'administrator') {
                                        ?>
                                    <td>Administator</td>
                                        <?php } else { ?>
                                    <td>Pengelola</td>
                                        <?php } ?>
                                    </tr>
                                    <tr>
                                        <td><a class="btn btn-lg btn-info" data-toggle="modal" href="#modalAdmin"><i class="fa fa-pencil"></i> Edit</a></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>

<!--<script type="text/javascript">
    $('#modalAdmin').modal('toggle');
</script>-->
