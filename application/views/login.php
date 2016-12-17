
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <!-- favicon -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>asset/img/favicon.png" />
        <title>Arsip Kegiatan Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>asset/css/jquery.validate.css" rel="stylesheet">

     

        <script type='text/javascript' src="<?php echo base_url(); ?>asset/js/jquery-1.10.2.js"></script>
        <script type='text/javascript' src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
        <script type='text/javascript' src="<?php echo base_url(); ?>asset/js/jquery.validate.js"></script>
        <script type='text/javascript' src="<?php echo base_url(); ?>asset/js/validasi.js"></script>
    

        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->



        <!-- CSS code from Bootply.com editor -->

        <style type="text/css">
            .modal-footer {   border-top: 0px; }
            .form-group{
                text-align: right;
            }
        </style>
    </head>

    <!-- HTML code from Bootply.com editor -->

    <body style="background-color:#535557" > <!--ini buat color pas login-->

        <!--login modal-->
        <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#1c1c1c;">

                        <h1 class="text-center"><a href="<?php echo site_url('login'); ?>"><img src="<?php echo base_url();?>asset/img/logologin.png" style="min-height:50px;width: auto;height: auto;"></a></h1>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo site_url('login/validate_login'); ?>" class="form col-md-12 center-block" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" placeholder="Username" name="username" id="username">
                                
                            </div>
                            <?php echo form_error('username'); ?>
                            <div class="form-group">
                                <input type="password" class="form-control input-lg" placeholder="Password" name="password" id="password">
                                
                            </div>
                            <?php echo form_error('password'); ?>
                            <div class="form-group">
                                <button class="btn btn-lg btn-danger">Sign In</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
<!--                        <div class="col-md-12">
                            <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
                        </div>	-->
                    </div>
                </div>
            </div>
        </div>

        



    
</body>
</html>