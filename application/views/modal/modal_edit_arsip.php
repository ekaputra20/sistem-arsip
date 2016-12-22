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

a{
        cursor: pointer;
    }

</style>

        
<script type="text/javascript">
var tambah = jQuery.noConflict();
tambah(document).ready(function(){
    var i=1;
    tambah("#tambah").click(function(){
        var div = tambah(document.createElement('div')).attr("id",'div' + i);

        div.after().html('<input type="file" name="lampirans[]'+ i +'" id="input '+ i +'"/>');
        div.appendTo("#group");
        i++;
    });

    tambah("#hapus").click(function(){

        if(i == 1){
            alert("Input tidak bisa di hapus lagi");
            return false;
        }

        i--;
        tambah("#div" + i).remove();

    });
});

</script>


<div class="modal fade bs-example-modal-lg" id="modal_edit_arsip"  role="dialog" aria-labelledby="modal_edit_arsip" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2 class="modal-title" id="myModalLabel">Edit Arsip Kegiatan</h2>
            </div>
            <form action="<?php echo site_url('arsip/upload'); ?>" method="post" id="arsip-form" enctype="multipart/form-data">  
                <div class="modal-body">
                    <div class="pull-center center-form col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-xs-12">
                                <input type="hidden" class="form-control" name="id" placeholder="" value="<?php echo $hasil->id_arsip;?>">

                                <label>Tanggal Kegiatan</label>
                                    <div class="form-group input-group">

                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

                                        <input type="text" class="form-control" name="tgl_kegiatan" id="dp1" value="<?php echo $hasil->tgl_kegiatan ?>">

                                    </div>

                                <div class="form-group">
                                    <label>Nama Kegiatan</label>
                                    <input type="text" class="form-control" name="subjek" id="subjek" placeholder="Nama Kegiatan" value="<?php echo $hasil->subjek;?>">       
                                </div>

                                
                                <div class="form-group">
                                    <label>Tempat Pelaksanaan</label>
                                    <input type="text" class="form-control" name="deskripsi" placeholder="Tempat Kegiatan"  value = "<?php echo $hasil->tempat ?>"> 
                                </div>
                           
                                <div class="form-group">

                                    <label>Lampiran</label>
                                    <?php foreach ($lampiran as $query){ ?>

                                  
                                    <input type ='hidden' name="id_lampiran[]" value="<?php echo $query->id_lampiran; ?>">
                                    <input type='file' name="lampiran[]" size='70' />
      
                                    <?php } ?>    
                                    <p><label>Tambah lampiran baru</label></p>
                                     <div id="group">
                                    <input type='file' name="lampirans[]" size='70' />
                                    </div>

                                    <p><a id="tambah"><label>tambah</label></a>&nbsp &nbsp<a id="hapus"><label>hapus</label></a></p>


                                </div>

                                


                            </div>
                        </div>
                    </div>

                    <div class="pull-down down-form col-xs-12">
                        <div class="row">
                 
                            
                        </div>
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
<script type="text/javascript" src="<?php //echo base_url(); ?>asset/js/jquery.min.js">
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