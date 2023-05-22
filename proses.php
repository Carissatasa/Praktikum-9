<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$conn = mysqli_connect("localhost","root","","formulir");

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$jenisdaftar = $_POST['jenisdaftar'];
$tglmasuk = $_POST['tglmasuk'];
$nis = $_POST['nis'];
$nomorujian = $_POST['nomorujian'];
$paud = $_POST['paud'];
$tk = $_POST['tk'];
$skhun = $_POST['skhun'];
$ijazah = $_POST['ijazah'];
$hobi = $_POST['hobi'];
$citacita = $_POST['citacita'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$nisn = $_POST['nisn'];
$nik = $_POST['nik'];
$tempatlahir = $_POST['tempatlahir'];
$tgllahir = $_POST['tgllahir'];
$agama = $_POST['agama'];
$abk = $_POST['abk'];
$alamat = $_POST['alamat'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$dusun = $_POST['dusun'];
$desa = $_POST['desa'];
$kecamatan = $_POST['kecamatan'];
$kodepos = $_POST['kodepos'];
$tempattinggal = $_POST['tempattinggal'];
$transport = $_POST['transport'];
$hp = $_POST['hp'];
$telp = $_POST['telp'];
$email = $_POST['email'];
$kps = $_POST['kps'];
$nokps = $_POST['nokps'];
$kwn = $_POST['kwn'];

$query = "INSERT INTO datadiri VALUES('$jenisdaftar','$tglmasuk','$nis','$nomorujian','$paud','$tk','$skhun','$ijazah','$hobi','$citacita','$nama','$jk','$nisn','$nik','$tempatlahir','$tgllahir','$agama','$abk','$alamat','$rt','$rw','$dusun','$desa','$kecamatan','$kodepos','$tempattinggal','$transport','$hp','$telp','$email','$kps','$nokps','$kwn')";

if(mysqli_query($conn, $query) == TRUE){
	echo "Data berhasil disimpan";
}else{
	echo "Terjadi kesalahan : " .mysql_error($conn);
}

}

echo "<h2>Data Pribadi Peserta Didik</h2>";
echo "1. Jenis Pendaftaran : ".$jenisdaftar;
echo "<br>";
echo "2. Tanggal Masuk : ".$tglmasuk;
echo "<br>";
echo "3. NIS : ".$nis;
echo "<br>";
echo "4. Nomor Peserta Ujian : ".$nomorujian;
echo "<br>";
echo "5. Pernah PAUD : ".$paud;
echo "<br>";
echo "6. Pernah TK : ".$tk;
echo "<br>";
echo "7. No Seri SKHUN Sebelumnya : ".$skhun;
echo "<br>";
echo "8. No Seri Ijazah Sebelumnya : ".$ijazah;
echo "<br>";
echo "9. Hobi : ".$hobi;
echo "<br>";
echo "10. Cita-cita : ".$citacita;
echo "<br><br>";
echo "11. Nama Lengkap : ".$nama;
echo "<br>";
echo "12. Jenis Kelamin : ".$jk;
echo "<br>";
echo "13. NISN : ".$nisn;
echo "<br>";
echo "14. NIK : ".$nik;
echo "<br>";
echo "15. Tempat Lahir : ".$tempatlahir;
echo "<br>";
echo "16. Tanggal Lahir : ".$tgllahir;
echo "<br>";
echo "17. Agama : ".$agama; 
echo "<br>";
echo "18. Berkebutuhan Khusus : ".$abk;
echo "<br>";
echo "19. Alamat Jalan : ".$alamat;
echo "<br>";
echo "20. RT : ".$rt;
echo "<br>";
echo "21. RW : ".$rw;
echo "<br>";
echo "22. Nama Dusun : ".$dusun;
echo "<br>";
echo "23. Nama Kelurahan/Desa : ".$desa;
echo "<br>";
echo "24. Kecamatan : ".$kecamatan;
echo "<br>";
echo "25. Kode Pos : ".$kodepos;
echo "<br>";
echo "26. Tempat Tinggal : ".$tempattinggal;
echo "<br>";
echo "27. Moda Transportasi : ".$transport;
echo "<br>";
echo "28. Nomor HP : ".$hp;
echo "<br>";
echo "29. Nomor Telepon : ".$telp;
echo "<br>";
echo "30. Email Pribadi : ".$email;
echo "<br>";
echo "31. Penerima KPS/KKS/PKH/KIP : ".$kps;
echo "<br>";
echo "32. No. KPS/KKS/PKH/KIP : ".$nokps;
echo "<br>";
echo "33. Kewarganegaraan : ".$kwn;

?>
<form method="post" action="excel.php">
	<p><br><input type="submit" name="export_excel" class="btn btn-success" value="Export to Excel"></p>
</form>

</body>
</html>

