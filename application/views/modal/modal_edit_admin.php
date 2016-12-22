<div class="modal fade" id="modalAdmin" tabindex="-1" role="dialog" aria-labelledby="modalAdminLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2 class="modal-title" id="myModalLabel">Edit Profil</h2>
            </div>
            <form action="<?php echo site_url('admin/update_admin'); ?>" method="post" id="admin-form">  
                <div class="modal-body">
                    <input type="hidden" value="<?php echo $profile->userId; ?>" name="id">
                    <labe>Username</labe>
                    <div class="form-group input-group">
                        <span class="input-group-addon">@</span>
                        <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?php echo $profile->userNama; ?>">

                    </div>
                    <labe>Password</labe>
                    <div class="form-group input-group">
                        <input type="password" class="form-control" placeholder="Rewrite Your Password" name="password">
                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                    </div>
                    <?php echo form_error('password'); ?>
                    <labe>Nama Lengkap</labe>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-android"></i></span>
                        <input type="text" class="form-control" id="namalengkap" placeholder="Full Name" name="fullname" value="<?php echo $profile->userNamaLengkap; ?>">
                    </div>
                    <?php echo form_error('fullname'); ?>
                   <!--  <div class="row">
                        <?php
                       // $role = $profile->userLevel;
                        //if ($role == 'administrator') {
                            ?>
                            <div class="col-md-6 col-xs-6">
                                <div class="form-group input-group">
                                    <span class="input-group-addon">
                                        <input type="radio" name="role" checked="" value="administrator"> Administator
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <div class="form-group input-group">
                                    <span class="input-group-addon">
                                        <input type="radio" name="role" value="pengelola"> Pengelola
                                    </span>
                                </div>
                            </div>
                        <?php// } else { ?> 
                            <div class="col-md-6 col-xs-6">
                                <div class="form-group input-group">
                                    <span class="input-group-addon">
                                        <input type="radio" name="role" value="administrator"> Administator
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <div class="form-group input-group">
                                    <span class="input-group-addon">
                                        <input type="radio" name="role" checked="" value="pengelola"> Pengelola
                                    </span>
                                </div>
                            </div>
                        <?php// } ?>   
                    </div> -->
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Simpan">  
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </form>      
        </div>
    </div>
</div>
