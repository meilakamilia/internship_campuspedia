function validate() {
    //validasi nama
    if(document.formSiswa.nama.value == ""){
        alert("Nama lengkap harus diisi");
        document.formSiswa.nama.focus();
        return false;
    }

    //validasi email
    if(document.formSiswa.email.value == ""){
        alert("Email harus diisi");
        document.formSiswa.email.focus();
        return false;
    }
    else{
        var emailID = document.formSiswa.email.value;
        atpos = emailID.indexOf("@");
        dotpos = emailID.lastIndexOf(".")

        if(atpos < 1 || (dotpos - atpos < 2)){
            alert("Masukkan email yang valid");
            document.formSiswa.email.focus();
            return false;
        }
    }

    //validasi telepon
    if(document.formSiswa.telepon.value == ""){
        alert("Nomor telepon harus diisi");
        document.formSiswa.nama.focus();
        return false;
    }
    else if(document.formSiswa.telepon.value.length > 12){
        alert("Nomor telepon harus kurang dari 12 digit");
        document.formSiswa.telepon.focus();
        return false;
    }
    else if(isNaN(document.formSiswa.telepon.value)){
        alert("Nomor telepon hanya terdiri atas angka");
        document.formSiswa.telepon.focus();
        return false;
    }
    return( true);
}