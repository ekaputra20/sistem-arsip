//
//	jQuery Validate example script
//
//	Prepared by David Cochran
//
//	Free for your use -- No warranties, no guarantees!
//

$(document).ready(function() {

    // Validate
    // http://bassistance.de/jquery-plugins/jquery-plugin-validation/
    // http://docs.jquery.com/Plugins/Validation/
    // http://docs.jquery.com/Plugins/Validation/validate#toptions
    
    $('#admin-form').validate({
        rules: {
            password:{
                required:true,
                minlength:5,
            },
            fullname:{
                minlength:5,
                required:true
            }
        }
    });

    $('#barang-form').validate({
        rules: {
            kodebrg: {
                minlength: 2,
                required: true,
                number: true
            },
            namabrg: {
                minlength: 2,
                required: true
            },
            jumlahbarang: {
                
                required: true,
                number: true
            },
            tgl_pembukuan: {
                minlength: 2,
                required: true
            }
            ,
            tgl_pembelian: {
                minlength: 2,
                required: true
            },
            tgl_penyerahan: {
                minlength: 2,
                required: true
            },
            kwitansi: {
                
                required: true,
                number: true
            },
            harga_barang: {
                
                required: true,
                number: true
            },
            toko: {
                minlength: 2,
                required: true
            },
            merk: {
                minlength: 2,
                required: true
            },
            tipe: {
                minlength: 2,
                required: true
            },
            ukuran: {
                minlength: 2,
                required: true
            },
            thn_pembuatan: {
                maxlength: 4,
                required: true,
                number: true
            },
            
            keterangan: {
                minlength: 2,
                required: true
            }
        },
        highlight: function(element) {
            $(element).closest('.form-group').removeClass('success').addClass('error');
        },
        success: function(element) {
            element
                    .text('OK!').addClass('valid')
                    .closest('.form-group').removeClass('error').addClass('success');
        }
    });

}); // end document.ready