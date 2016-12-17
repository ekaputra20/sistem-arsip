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
    }
.ac_results {
	padding: 0px;
	border: 1px solid black;
	background-color: white;
	overflow: hidden;
	z-index: 99999;
}

.ac_results ul {
	width: 100%;
	list-style-position: outside;
	list-style: none;
	padding: 0;
	margin: 0;
}

.ac_results li {
	margin: 0px;
	padding: 2px 5px;
	cursor: default;
	display: block;
	/* 
	if width will be 100% horizontal scrollbar will apear 
	when scroll mode will be used
	*/
	/*width: 100%;*/
	font: menu;
	font-size: 12px;
	/* 
	it is very important, if line-height not setted or setted 
	in relative units scroll will be broken in firefox
	*/
	line-height: 16px;
	overflow: hidden;
}

.ac_loading {
	background: white url('indicator.gif') right center no-repeat;
}

.ac_odd {
	background-color: #eee;
}

.ac_over {
	background-color: #0A246A;
	color: white;
}

</style>

<div class="modal fade bs-example-modal-lg" id="modalEditPengelola"  role="dialog" aria-labelledby="modalEditPengelola" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2 class="modal-title" id="myModalLabel">Edit Pengelola</h2>
            </div>
            <form action="<?php echo site_url('pengelola/update_pengelola'); ?>" method="post" id="pengelola-form">  
                <div class="modal-body">
                    <div class="pull-center center-form col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-xs-12">
                                <input type="hidden" class="form-control" name="id" placeholder="" value="<?php echo $hasil->userId;?>">

                                <label>Username</label>
                                    <div class="form-group">
                                    <input type="text" class="form-control" name="userNama" value="<?php echo $hasil->userNama ?>" id="up">

                                    </div>

                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" name="userNamaLengkap" placeholder="Nama Lengkap" value="<?php echo $hasil->userNamaLengkap;?>" id="namalengkap">       
                                </div>

                                <div class="form-group">
                                    <label>NIP</label>
                                    <input type='text' class="form-control" id="nip" name="userNIP" placeholder="NIP" value="<?php echo $hasil->userNIP;?>">       
                                </div>
                                

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type='password' class="form-control" name="userPass" placeholder="Password" value="">  
                                </div>

                                <label>Level</label>
                                <div class="form-group">

                                <?php if ($hasil->userLevel == 'administrator') { ?>
                                    
                                <div class="col-md-6 col-xs-6">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">
                                            <input type="radio" name="userLevel" value="administrator" checked> Administator
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xs-6">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">
                                            <input type="radio" name="userLevel"  value="pengelola"> Pengelola
                                        </span>
                                    </div>
                                </div>
                                <?php } else {?>
                                <div class="col-md-6 col-xs-6">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">
                                            <input type="radio" name="userLevel" value="administrator" > Administator
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xs-6">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">
                                            <input type="radio" name="userLevel"  value="pengelola" checked> Pengelola
                                        </span>
                                    </div>
                                </div>
                                <?php }?>
                                </div>

                                <label>Status</label>
                                <div class="form-group">

                                <?php if ($hasil->userAktif == '1') { ?>
                                    
                                <div class="col-md-6 col-xs-6">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">
                                            <input type="radio" name="userAktif" value="1" checked> Aktif
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xs-6">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">
                                            <input type="radio" name="userAktif"  value="0"> Tidak Aktif
                                        </span>
                                    </div>
                                </div>
                                <?php } else {?>
                                <div class="col-md-6 col-xs-6">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">
                                            <input type="radio" name="userAktif" value="1" > Aktif
                                        </span>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xs-6">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">
                                            <input type="radio" name="userAktif"  value="0" checked> Tidak Aktif
                                        </span>
                                    </div>
                                </div>
                                <?php }?>
                                </div>




                                
                            </div>          

                            </div>
                        </div>
                    </div>

                    <div class="pull-down down-form col-xs-12">
                        <div class="row">
                 
                            
                        </div>
                       

                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary btn-lg" value="Simpan">  
                    <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Tutup</button>
                </div>
            </form>    
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.min.js">
    $(document).ready(function() {
        $("#daftararsip").change(function() {
            var daftarbarang = $("#daftararsip").val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('arsip/get_detail_arsip_by_id'); ?>",
                data: "daftararsip=" + daftararsip,
                cache: false,
                success: function(data) {
                    $('#detail_arsip').html(data);
                    document.frm.add.disabled = false;
                }
            });
        });
    });
</script>
<!-- 
<script type="text/javascript">
    $(function() {
        $("#daftarbrg").autocomplete({
            source: "<?php //secho base_url(); ?>asset/arsip_detail.php",
            minLength: 2,
            select: function(event, ui) {
                $('#kodebrg').val(ui.item.kodebarang);
                $('#namabrg').val(ui.item.namabarang);
                $('#satuan').val(ui.item.satuan);
                $('#kategori').val(ui.item.kategori);
            }
        });

    });
</script>  -->