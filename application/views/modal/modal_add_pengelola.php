<style>
    .ui-autocomplete{
        z-index: 10000 !important;
    }
    .ui-autocomplete-input{
        z-index: 10000 !important;
    }
    .ui-helper-hidden-accessible{
        z-index: 10000 !important;
    }
    .ui-menu-item{
        z-index: 100000 !important;
        display: block;
    }
</style>
<div class="modal fade bs-example-modal-lg" id="modalAddPengelola"  role="dialog" aria-labelledby="modalAddPengelola" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2 class="modal-title" id="myModalLabel">Tambah Pengguna</h2>
            </div>
            <form action="<?php echo site_url('pengelola/insert_pengelola'); ?>" method="post" id="pengelola-form">  
                <div class="modal-body">
                    <div class="pull-center center-form col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-xs-12">


                               
                                <div class="form-group">
                                    <label>Username</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="userNama" placeholder="Username" id="userpengelola">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="userNamaLengkap" placeholder="Nama Lengkap" autocomlete="off" id="namalengkap">       
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type='password' id="passs" class="form-control" name='userPass' placeholder="Password" >     
                                </div>

                                <div class="form-group">
                                    <label>Ulangi Password </label>
                                    <input class="form-control" name="passwordCek" id="ConfirmPass" type="password" placeholder="Ulangi Password"/>
                                </div>

                                <div class="form-group">
                                    <label>NIP</label>
                                    <input type='text' class="form-control" name='userNIP' placeholder="NIP" >     
                                </div>

                               <label>Level</label>
                                <div class="form-group">

                                    
                                <div class="col-md-6 col-xs-6">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">
                                            <input type="radio" name="userLevel" value="administrator"> Administator
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xs-6">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">
                                            <input type="radio" name="userLevel" checked="" value="pengelola"> Pengelola
                                        </span>
                                    </div>
                                </div>

                                </div>


                                
                            </div>
                        </div>
                    </div>

                    <div class="pull-down down-form col-lg-12 col-xs-12">
                        <div class="row">
                            
                        </div>
                    </div>   

                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary btn-lg" name = 'submit' value="Simpan">  
                    
                    <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Tutup</button>
                </div>
            </form>    
        </div>
    </div>
</div>    
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
 <link rel="stylesheet" href="http://static.jquery.com/ui/css/base2.css" type="text/css" media="all" /> 
     $(document).ready(function() {
         $("#daftararsip").change(function() {
             var daftarpengelola = $("#daftarpengelola").val();
             $.ajax({
                type: "POST",
                 url: "<?php //echo site_url('pengelola/get_detail_pengelola_by_id'); ?>",
                 data: "daftarpengelola=" + daftarpengelola,
                 cache: false,
                 success: function(data) {
                     $('#detail_pengelola').html(data);
                     document.frm.add.disabled = false;
                 }
             });
         });
     });
 </script>
