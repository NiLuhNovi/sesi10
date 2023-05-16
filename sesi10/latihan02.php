<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 02</title>
</head>
<body>

    <form name="latihan02" id="latihan02" method="POST" onsubmit="return checkform()">
        <div>
            NIM
            <input type="text" id="nim" name="txNIM">
        </div>
        <div>
            Nama
            <input type="text" id="nama" name="txNAMA">
        </div>
         <div>
            Jenis Kelamin
            <input type="radio" id="JK" name="txJK" value="L">Laki-Laki
            <input type="radio" id="JK" name="txJK" value="P">Perempuan
        </div>
        <div>
            Jurusan
            <select name="txJURUSAN"  id="jurusan">
                <option value="KAB">KAB</option>
                <option value="MTI">MTI</option>
                <option value="DKV">DKV</option>
                <option value="DGM">DGM</option>
                <option value="TIPAR">TIPAR</option>
                <option value="SK">SK</option>
            <select>
        </div>
        <div>
            Hobi
            <input type="checkbox" id="txhobi" name="musik">Musik
            <input type="checkbox" id="txhobi" name="tari">Tari
            <input type="checkbox" id="txhobi" name="baca">baca
            <input type="checkbox" id="txhobi" name="tidur">tidur
            <input type="checkbox" id="txhobi" name="jogging">jogging
            <input type="checkbox" id="txhobi" name="lari">Lari
            <input type="checkbox" id="txhobi" name="badminton">Badminton
            <input type="checkbox" id="txhobi" name="menangis">Menangis   
        </div>
        <button type="submit">Kirim Data</button>

    </form>

    <script>
        function checkform(){
            let f = document.getElementById("latihan02").elements;
            let nim = f.nim.value; 
            console.log("NIM: "+nim);
            let nama = f.nama.value; 
            console.log("NAMA: "+nama);
            let jeniskelamin = f.JK.value; 
            console.log("JK: "+jeniskelamin);
            let jurusan = f.jurusan.value; 
            console.log("JURUSAN: "+jurusan);
            let hobi_musik = f.txhobi[0].checked; 
            console.log("HOBI: "+hobi_musik);
            let hobi_tari = f.txhobi[1].checked; 
            console.log("HOBI: "+hobi_tari);
            let hobi_baca = f.txhobi[2].checked; 
            console.log("HOBI: "+hobi_baca);
            let hobi_tidur = f.txhobi[3].checked; 
            console.log("HOBI: "+hobi_tidur);
            let hobi_jogging = f.txhobi[4].checked; 
            console.log("HOBI: "+hobi_jogging);
            let hobi_lari = f.txhobi[5].checked; 
            console.log("HOBI: "+hobi_lari);
            let hobi_badminton = f.txhobi[6].checked; 
            console.log("HOBI: "+hobi_badminton);
            let hobi_menangis = f.txhobi[7].checked; 
            console.log("HOBI: "+hobi_menangis);
            return false;
        }
    </script>
</body>
</html>