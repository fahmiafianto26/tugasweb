function welcome()
{
    alert("Selamat datang");
}

function lagi()
{
    alert("Terima Kasih");
    var konfir;
    konfir=confirm("Ingin daftar lagi?");
    if(konfir==true)
    {
        document.location.href="form.html";
    }
    else
    {
        
    }
}

function klik() 
{
    var nama = document.getElementById("nama").value;
    var jenis = document.getElementsByName("jenis_kelamin").value;
    var tempat = document.getElementsByName("tempat_lahir").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var alamat = document.getElementById("alamat").value;
    var deskripsi = document.getElementById("deskripsi").value;
    if (nama!="" && jenis!="" && tempat!="" && email!="" && password!="" && alamat!="" && deskripsi!="")
    {
        return true;
    }else
    {
        alert('Anda harus mengisi data dengan lengkap !');
    }
}

function gantiwarna()
{
    var pesan=document.getElementById('pesan');
    var button=document.getElementById('buttonWarna');
        if(button.innerHTML=="Hijau")
        {
            pesan.style.cssText="background-color:green;";
            button.innerHTML="Merah";
        }
        else if(button.innerHTML=="Merah")
        {
        pesan.style.cssText="background-color:red;";
        button.innerHTML="Kuning";
        }
        else if(button.innerHTML=="Kuning")
        {
        pesan.style.cssText="background-color:yellow;";
        button.innerHTML="Biru";
        }
        else if(button.innerHTML=="Biru")
        {
        pesan.style.cssText="background-color:blue;";
        button.innerHTML="Hijau";
        }
}