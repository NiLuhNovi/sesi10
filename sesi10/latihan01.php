<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 01</title>
</head>
<body>

    <form name="latihan01"method="POST" onsubmit="return checkform(this)">
        <div>
            NIM
            <input type="text" name="txNIM">
        </div>
        <div>
            Nama
            <input type="text" name="txNAMA">
        </div>
         <div>
            Jenis Kelamin
            <input type="radio" name="txJK" value="L">Laki-Laki
            <input type="radio" name="txJK" value="P">Perempuan
        </div>
        <div>
            Jurusan
            <select name="txJURUSAN">
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
            <input type="checkbox" name="musik">Musik
            <input type="checkbox" name="tari">Tari
            <input type="checkbox" name="baca">baca
            <input type="checkbox" name="tidur">tidur
            <input type="checkbox" name="jogging">jogging
            <input type="checkbox" name="lari">Lari
            <input type="checkbox" name="badminton">Badminton
            <input type="checkbox" name="menangis">Menangis   
        </div>
        <button type="submit">Kirim Data</button>

    </form>

    <script>
        function checkform(frm){
            let f = frm.elements;
            let nim = f.namedItem("txNIM").value; 
            console.log("NIM: "+nim);
            let nama = f.namedItem("txNAMA").value; 
            console.log("NAMA: "+nama);
            let jeniskelamin = f.namedItem("txJK").value; 
            console.log("JK: "+jeniskelamin);
            let jurusan = f.namedItem("txJURUSAN").value; 
            console.log("JURUSAN: "+jurusan);
            let hobi_musik = f.namedItem("musik").checked; 
            console.log("HOBI: "+hobi_musik);
            let hobi_tari = f.namedItem("tari").checked; 
            console.log("HOBI: "+hobi_tari);
            let hobi_baca = f.namedItem("baca").checked; 
            console.log("HOBI: "+hobi_baca);
            let hobi_tidur = f.namedItem("tidur").checked; 
            console.log("HOBI: "+hobi_tidur);
            let hobi_jogging = f.namedItem("jogging").checked; 
            console.log("HOBI: "+hobi_jogging);
            let hobi_lari = f.namedItem("lari").checked; 
            console.log("HOBI: "+hobi_lari);
            let hobi_badminton = f.namedItem("badminton").checked; 
            console.log("HOBI: "+hobi_badminton);
            let hobi_menangis = f.namedItem("menangis").checked; 
            console.log("HOBI: "+hobi_menangis);
            return false;
        }
    </script>
</body>
</html>