
jQuery(function(){
    
    jQuery("#id_speedy").validate({
        expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
        message: "Please enter a valid number"
    });
    jQuery("#tunjangan").validate({
        expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
        message: "Please enter a valid number"
    });
    
    jQuery("#email").validate({
        expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
        message: "Please enter a valid Email ID"
    });
    
    jQuery("#alasan").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    
    jQuery("#ValidField").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#username").validate({
        expression: "if (VAL) return true; else return false;",
        message: "username tidak boleh kosong"
    });
    jQuery("#password").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#nip").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#nuptk").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#nama").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#tmplahir").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#pos").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#pt").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#nemipk").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#perusahaan").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#gaji").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#tgllahir").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#foto").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#ijazah").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#transkrip").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    
    jQuery("#tgl").validate({
        expression: "if (VAL=='') return false; else return true;",
        message: "Please select the Required field"
    });
    jQuery("#bln").validate({
        expression: "if (VAL=='') return false; else return true;",
        message: "Please select the Required field"
    });
    jQuery("#thn").validate({
        expression: "if (VAL=='') return false; else return true;",
        message: "Please select the Required field"
    });
    jQuery("#thnmulai").validate({
        expression: "if (VAL=='') return false; else return true;",
        message: "Please select the Required field"
    });
    jQuery("#thnselesai").validate({
        expression: "if (VAL=='') return false; else return true;",
        message: "Please select the Required field"
    });
    jQuery("#pilihnip").validate({
        expression: "if (VAL=='') return false; else return true;",
        message: "Please select the Required field"
    });
    
    jQuery("#level").validate({
        expression: "if (VAL=='') return false; else return true;",
        message: "Please select the Required field"
    });
    
    jQuery("#lama").validate({
        expression: "if (VAL=='') return false; else return true;",
        message: "Please select the Required field"
    });
    
    jQuery("#alamat").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#isi").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#isi2").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#jenjang").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#institusi").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#tgl_tayang").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#tgl_tutup").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#tgl_masuk").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#judul").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#jab").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#gapok").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#divisi").validate({
        expression: "if (VAL=='') return false; else return true;",
        message: "Please select the Required field"
    });
    jQuery("#provinsi").validate({
        expression: "if (VAL=='') return false; else return true;",
        message: "Please select the Required field"
    });
    jQuery("#propinsi").validate({
        expression: "if (VAL=='') return false; else return true;",
        message: "Please select the Required field"
    });
    jQuery("#kota").validate({
        expression: "if (VAL=='') return false; else return true;",
        message: "Please select the Required field"
    });
    jQuery("#agama").validate({
        expression: "if (VAL=='') return false; else return true;",
        message: "Please select the Required field"
    });
    jQuery("#pendidikan").validate({
        expression: "if (VAL=='') return false; else return true;",
        message: "Please select the Required field"
    });
    jQuery("#jabatan").validate({
        expression: "if (VAL=='') return false; else return true;",
        message: "Please select the Required field"
    });
    jQuery("#thn").validate({
        expression: "if (VAL.length >= 4 && VAL) return true; else return false;",
        message: "Please enter the Required field"
    });
    jQuery("#pass").validate({
        expression: "if (VAL.length > 5 && VAL) return true; else return false;",
        message: "Please enter a valid Password"
    });
    
    jQuery("#ceked").validate({
        expression: "if (isChecked(SelfID)) return false; else return true;",
        message: "Please check atleast one checkbox"
    });
    
    jQuery("#ConfirmPass").validate({
        expression: "if ((VAL == jQuery('#pass').val()) && VAL) return true; else return false;",
        message: "Confirm password field doesn't match the password field"
    });
    jQuery("#telp").validate({
        expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
        message: "Please enter a valid number"
    });
    jQuery("#hp").validate({
        expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
        message: "Please enter a valid number"
    });
    jQuery("#ValidNumber").validate({
        expression: "if (!isNaN(VAL) && VAL) return true; else return false;",
        message: "Please enter a valid number"
    });
    jQuery("#ValidInteger").validate({
        expression: "if (VAL.match(/[0-9][0-9]\\/[0-9][0-9][0-9][0-9][0-9][0-9]\\/SV\\/[0-9][0-9][0-9][0-9][0-9]/)) return true; else return false;",
        message: "Please enter a valid integer"
    });
    jQuery("#ValidDate").validate({
        expression: "if (!isValidDate(parseInt(VAL.split('-')[2]), parseInt(VAL.split('-')[0]), parseInt(VAL.split('-')[1]))) return false; else return true;",
        message: "Please enter a valid Date"
    });
    jQuery("#ValidEmail").validate({
        expression: "if (VAL.match(/^[^\\W][a-zA-Z0-9\\_\\-\\.]+([a-zA-Z0-9\\_\\-\\.]+)*\\@[a-zA-Z0-9_]+(\\.[a-zA-Z0-9_]+)*\\.[a-zA-Z]{2,4}$/)) return true; else return false;",
        message: "Please enter a valid Email ID"
    });
    jQuery("#ValidPassword").validate({
        expression: "if (VAL.length > 5 && VAL) return true; else return false;",
        message: "Please enter a valid Password"
    });
    jQuery("#ValidConfirmPassword").validate({
        expression: "if ((VAL == jQuery('#ValidPassword').val()) && VAL) return true; else return false;",
        message: "Confirm password field doesn't match the password field"
    });
    jQuery("#ValidSelection").validate({
        expression: "if (VAL != '0') return true; else return false;",
        message: "Please make a selection"
    });
    jQuery("#ValidMultiSelection").validate({
        expression: "if (VAL) return true; else return false;",
        message: "Please make a selection"
    });
    jQuery("#ValidRadio").validate({
        expression: "if (isChecked(SelfID)) return true; else return false;",
        message: "Please select a radio button"
    });
    jQuery("#ValidCheckbox").validate({
        expression: "if (isChecked(SelfID)) return true; else return false;",
        message: "Please check atleast one checkbox"
    });
    jQuery('.frm').validated(function(){
        alert("Use this call to make AJAX submissions.");
    });


    // jQuery("#ValidNim").validate({
    //     expression: "if (VAL.match(/^[0-9]*$/) return true; else return false;",
    //     message: "Please enter a valid NIM ID"
    // });
});