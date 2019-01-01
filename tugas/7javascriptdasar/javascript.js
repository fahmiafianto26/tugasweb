
function klik()
{
    var konfir;
    konfir=confirm("Apakah data yang anda masukkan sudah benar?");
    if(konfir==true)
    {
        document.location.href="form2.php";
    }
    else
    {
        document.location.href="form.html";
    }
}

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