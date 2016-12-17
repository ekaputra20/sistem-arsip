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

        div.after().html('<input type="file" name="lampiran'+ i +'" id="input '+ i +'"/>');
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

<div class="modal fade bs-example-modal-lg" id="modalAddArsip"  role="dialog" aria-labelledby="modalAddArsip" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2 class="modal-title" id="myModalLabel">Tambah Arsip Kegiatan</h2>
            </div>
            <form action="<?php echo site_url('arsip/insertSync'); ?>" method="post" id="arsip-form" enctype="multipart/form-data">  
                <div class="modal-body">
                    <div class="pull-center center-form col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-xs-12">


                               
                                <div class="form-group">
                                    <label>Tanggal Kegiatan</label>
                                    <div class="form-group input-group">

                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

                                        <input type="text" class="form-control" name="tgl_kegiatan" id="dp1">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Judul Kegiatan</label>
                                    <input type="text" class="form-control" name="subjek" placeholder="Judul Kegiatan" id="nama">       
                                </div>

                                 <div class="form-group">
                                    <label>Tempat Pelaksanaan</label>
                                    <input type="text" class="form-control" name="deskripsi" placeholder="Tempat Pelaksanaan" rows="8" id="deskripsi" >  
                                </div>

                                <div class="form-group">

                                    <label>Lampiran</label>
                                    <div id="group">
                                    <input type='file' name='lampiran0' size='70' id="lampiran">
                                    </div>

                                    <p><a id="tambah"><label>tambah</label></a>&nbsp &nbsp<a id="hapus"><label>hapus</label></a></p>
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
<!-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
// <link rel="stylesheet" href="http://static.jquery.com/ui/css/base2.css" type="text/css" media="all" /> 
//     $(document).ready(function() {
//         $("#daftararsip").change(function() {
//             var daftararsip = $("#daftararsip").val();
//             $.ajax({
//                 type: "POST",
//                 url: "<?php //echo site_url('arsip/get_detail_arsip_by_id'); ?>",
//                 data: "daftararsip=" + daftararsip,
//                 cache: false,
//                 success: function(data) {
//                     $('#detail_arsip').html(data);
//                     document.frm.add.disabled = false;
//                 }
//             });
//         });
//     });
// </script>-->
