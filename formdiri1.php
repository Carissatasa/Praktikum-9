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

	<script>
    function displayDate() {
      var today = new Date();
      var date = today.getDate();
      var month = today.getMonth() + 1;
      var year = today.getFullYear();
      var formattedDate = year + "-" + month + "-" + date;
      document.getElementById("tglmasuk").value = formattedDate;
    }
  	</script>
</head>
<body onload="displayDate()">
	<div class="container mt-4">
		<h1 style="text-align: center;">FORMULIR PESERTA DIDIK</h1><br><br>
    	<?php
    	// Set timezone
    	date_default_timezone_set('Asia/Jakarta');
    	// Get current date and time
    	$dateTime = date('Y-m-d H:i:s');
  		?>
		<p><b>Tanggal : </b><?php echo $dateTime; ?></p>
		<p class="subjudul" style="background-color: black; color: white;">REGISTRASI PESERTA DIDIK DAN DATA PRIBADI</p>
	</div>

	<div class="container mt-4 mb-4">
		<form method="post" action="proses.php">
		
		<!-- 1. Jenis Pendaftaran -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label class="col-form-label font-weight-bold">1. Jenis Pendaftaran</label>
			</div>
			<div class="col">
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="jenisdaftar" id="daftar-baru" value="Siswa Baru">
					<label class="form-check-label" for="Siswa Baru">Siswa Baru</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="jenisdaftar" id="daftar-pindahan" value="Pindahan">
					<label class="form-check-label" for="Pindahan">Pindahan</label>
				</div>
			</div>
		</div>
		<!-- 2. Tanggal Masuk Sekolah -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="tglmasuk" class="col-form-label font-weight-bold">2. Tanggal Masuk Sekolah</label>
			</div>
			<div class="col">
				<input type="date" id="tglmasuk" name="tglmasuk">
				<!-- <input type="text" id="tgl" name="tgl" class="form-control"> -->
			</div>
		</div>
		<!-- 3. NIS -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="" class="col-form-label font-weight-bold">3. NIS</label>
			</div>
			<div class="col">
				<input type="text" id="nis" name="nis" class="form-control">
			</div>
		</div>
		<!-- 4. Nomor peserta ujian -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="nomorujian" class="col-form-label font-weight-bold">4. Nomor Peserta Ujian</label>
			</div>
			<div class="col">
				<input type="text" id="nomorujian" name="nomorujian" class="form-control">
			</div>
		</div>
		<!-- 5. Apakah pernah PAUD -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label class="col-form-label font-weight-bold">5. Apakah pernah PAUD</label>
			</div>
			<div class="col">
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="paud" id="paud-ya" value="Ya">
					<label class="form-check-label" for="paud">Ya</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="paud" id="paud-ya" value="Tidak">
					<label class="form-check-label" for="paud">Tidak</label>
				</div>
			</div>
		</div>
		<!-- 6. Apakah pernah TK -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label class="col-form-label font-weight-bold">6. Apakah pernah TK</label>
			</div>
			<div class="col">
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="tk" id="tk-ya" value="Ya">
					<label class="form-check-label" for="tk">Ya</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="tk" id="tk-ya" value="Tidak">
					<label class="form-check-label" for="tk">Tidak</label>
				</div>
			</div>
		</div>
		<!-- 7. No Seri SKHUN Sebelumnya -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="" class="col-form-label font-weight-bold">7. No Seri SKHUN Sebelumnya</label>
			</div>
			<div class="col">
				<input type="text" id="skhun" name="skhun" class="form-control">
			</div>
		</div>
		<!-- 8. No Seri Ijazah Sebelumnya -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="" class="col-form-label font-weight-bold">8. No Seri Ijazah Sebelumnya</label>
			</div>
			<div class="col">
				<input type="text" id="ijazah" name="ijazah" class="form-control">
			</div>
		</div>
		<!-- 9. Hobi -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="hobi" class="col-form-label font-weight-bold">9. Hobi</label>
			</div>
			<div class="col">
    			<select id="hobi" name="hobi" class="form-select">
     			 <option selected>Pilih opsi..</option>
     			 <option value="Olahraga">Olahraga</option>
     			 <option value="Kesenian">Kesenian</option>
     			 <option value="Membaca">Membaca</option>
     			 <option value="Menulis">Menulis</option>
     			 <option value="Travelling">Travelling</option>
     			 <option value="Lainnya">Lainnya</option>
    			</select>
			</div>
		</div>	
		
		<!-- 10. Cita-cita -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="cita-cita" class="col-form-label font-weight-bold">10. Cita-cita</label>
			</div>
			<div class="col">
    			<select id="citacita" name="citacita" class="form-select">
     			 <option selected>Pilih opsi..</option>
     			 <option value="PNS">PNS</option>
     			 <option value="TNI/POLRI">TNI/POLRI</option>
     			 <option value="Guru/Dosen">Guru/Dosen</option>
     			 <option value="Dokter">Dokter</option>
     			 <option value="Politikus">Politikus</option>
     			 <option value="Wiraswasta">Wiraswasta</option>
     			 <option value="Seni">Seni/Lukis/Artis/Sejenis</option>
     			 <option value="Lainnya">Lainnya</option>
    			</select>
			</div>
		</div>

		<!-- DATA PRIBADI -->
		<!-- 11. Nama Lengkap -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="" class="col-form-label font-weight-bold">11. Nama Lengkap</label>
			</div>
			<div class="col">
				<input type="text" id="nama" name="nama" class="form-control">
			</div>
		</div>
		<!-- 12. Jenis Kelamin -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label class="col-form-label font-weight-bold">12. Jenis Kelamin</label>
			</div>
			<div class="col">
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="jk" id="jk-laki" value="Laki-laki">
					<label class="form-check-label" for="jk">Laki-laki</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="jk" id="jk-pr" value="Perempuan">
					<label class="form-check-label" for="jk">Perempuan</label>
				</div>
			</div>
		</div>
		<!-- 13. NISN -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="" class="col-form-label font-weight-bold">13. NISN</label>
			</div>
			<div class="col">
				<input type="text" id="nisn" name="nisn" class="form-control">
			</div>
		</div>
		<!-- 14. NIK -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="" class="col-form-label font-weight-bold">14. NIK</label>
			</div>
			<div class="col">
				<input type="text" id="nik" name="nik" class="form-control">
			</div>
		</div>
		<!-- 15. Tempat Lahir -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="" class="col-form-label font-weight-bold">15. Tempat Lahir</label>
			</div>
			<div class="col">
				<input type="text" id="tempatlahir" name="tempatlahir" class="form-control">
			</div>
		</div>
		<!-- 16. Tanggal Lahir -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="tgllahir" class="col-form-label font-weight-bold">16. Tanggal Lahir</label>
			</div>
			<div class="col">
				<input type="date" id="tgllahir" name="tgllahir">
				<!-- <input type="text" id="tgl" name="tgl" class="form-control"> -->
			</div>
		</div>
		<!-- 17. Agama -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="agama" class="col-form-label font-weight-bold">17. Agama</label>
			</div>
			<div class="col">
    			<select id="agama" name="agama" class="form-select">
     			 <option selected>Pilih opsi..</option>
     			 <option value="Islam">Islam</option>
     			 <option value="Kristen/Protestan">Kristen/Protestan</option>
     			 <option value="Katholik">Katholik</option>
     			 <option value="Hindu">Hindu</option>
     			 <option value="Buddha">Buddha</option>
     			 <option value="Khong Hu Chu">Khong Hu Chu</option>
     			 <option value="Lainnya">Lainnya</option>
    			</select>
			</div>
		</div>
		<!-- 18. Berkebutuhan Khusus -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="abk" class="col-form-label font-weight-bold">18. Berkebutuhan Khusus</label>
			</div>
			<div class="col">
    			<select id="abk" name="abk"class="form-select">
     			 <option selected>Pilih opsi..</option>
     			 <option value="Tidak">Tidak</option>
     			 <option value="Netra (A)">Netra (A)</option>
     			 <option value="Rungu (B)">Rungu (B)</option>
     			 <option value="Grahita Ringan (C)">Grahita Ringan (C)</option>
     			 <option value="Grahita Sedang (C1)">Grahita Sedang (C1)</option>
     			 <option value="Daksa Ringan (D)">Daksa Ringan (D)</option>
     			 <option value="Daksa Sedang (D1)">Daksa Sedang (D1)</option>
     			 <option value="Laras (E)">Laras (E)</option>
     			 <option value="Wicara (F)">Wicara (F)</option>
     			 <option value="Tuna Ganda (G)">Tuna Ganda (G)</option>
     			 <option value="Hiper Aktif (H)">Hiper Aktif (H)</option>
     			 <option value="Cerdas Istimewa (i)">Cerdas Istimewa (i)</option>
     			 <option value="Bakat Istimewa (J)">Bakat Istimewa (J)</option>
     			 <option value="Kesulitan Belajar (K)">Kesulitan Belajar (K)</option>
     			 <option value="Narkoba (N)">Narkoba (N)</option>
     			 <option value="Indigo (O)">Indigo (O)</option>
     			 <option value="Down Syndrome (P)">Down Syndrome (P)</option>
     			 <option value="Autis (Q)">Autis (Q)</option>
    			</select>
			</div>
		</div>
		<!-- 19. Alamat Jalan -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="" class="col-form-label font-weight-bold">19. Alamat Jalan</label>
			</div>
			<div class="col">
				<input type="text" id="alamat" name="alamat" class="form-control">
			</div>
		</div>
		<!-- 20. RT -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="" class="col-form-label font-weight-bold">20. RT</label>
			</div>
			<div class="col">
				<input type="text" id="rt" name="rt" class="form-control">
			</div>
		</div>
		<!-- 21. RW -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="" class="col-form-label font-weight-bold">21. RW</label>
			</div>
			<div class="col">
				<input type="text" id="rw" name="rw" class="form-control">
			</div>
		</div>
		<!-- 22. Nama Dusun -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="" class="col-form-label font-weight-bold">22. Nama Dusun</label>
			</div>
			<div class="col">
				<input type="text" id="dusun" name="dusun" class="form-control">
			</div>
		</div>
		<!-- 23. Nama Kelurahan/Desa -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="" class="col-form-label font-weight-bold">23. Nama Kelurahan/Desa</label>
			</div>
			<div class="col">
				<input type="text" id="desa" name="desa" class="form-control">
			</div>
		</div>
		<!-- 24. Kecamatan -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="" class="col-form-label font-weight-bold">24. Kecamatan</label>
			</div>
			<div class="col">
				<input type="text" id="kecamatan" name="kecamatan" class="form-control">
			</div>
		</div>
		<!-- 25. Kode Pos -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="" class="col-form-label font-weight-bold">25. Kode Pos</label>
			</div>
			<div class="col">
				<input type="text" id="kodepos" name="kodepos" class="form-control">
			</div>
		</div>
		<!-- 26. Tempat Tinggal -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="tempattinggal" class="col-form-label font-weight-bold">26. Tempat Tinggal</label>
			</div>
			<div class="col">
    			<select id="tempattinggal" name="tempattinggal" class="form-select">
     			 <option selected>Pilih opsi..</option>
     			 <option value="Bersama orang tua">Bersama orang tua</option>
     			 <option value="Wali">Wali</option>
     			 <option value="Kos">Kos</option>
     			 <option value="Asrama">Asrama</option>
     			 <option value="Panti Asuhan">Panti Asuhan</option>
     			 <option value="Lainnya">Lainnya</option>
    			</select>
			</div>
		</div>
		<!-- 27. Mode Transportasi -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="transport" class="col-form-label font-weight-bold">27. Mode Transportasi</label>
			</div>
			<div class="col">
    			<select id="transport" name="transport" class="form-select">
     			 <option selected>Pilih opsi..</option>
     			 <option value="Jalan kaki">Jalan kaki</option>
     			 <option value="Kendaraan pribadi">Kendaraan pribadi</option>
     			 <option value="Kendaraan umum/Angkot/Pete-pete">Kendaraan umum/Angkot/Pete-pete</option>
     			 <option value="Jemputan Sekolah">Jemputan Sekolah</option>
     			 <option value="Kereta Api">Kereta Api</option>
     			 <option value="Ojek">Ojek</option>
     			 <option value="Andong/Bendi/Sado/Dokar/Delman/Becak">Andong/Bendi/Sado/Dokar/Delman/Becak</option>
     			 <option value="Perahu penyebrangan/Rakit/Getek">Perahu penyebrangan/Rakit/Getek</option>
     			 <option value="Lainnya">Lainnya</option>
    			</select>
			</div>
		</div>
		<!-- 28. Nomor HP -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="hp" class="col-form-label font-weight-bold">28. Nomor HP</label>
			</div>
			<div class="col">
				<input type="text" id="hp" name="hp" class="form-control">
			</div>
		</div>
		<!-- 29. Nomor Telepon -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="telp" class="col-form-label font-weight-bold">29. Nomor Telepon</label>
			</div>
			<div class="col">
				<input type="text" id="telp" name="telp" class="form-control">
			</div>
		</div>
		<!-- 30. Email Pribadi -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="email" class="col-form-label font-weight-bold">30. Email Pribadi</label>
			</div>
			<div class="col">
				<input type="text" id="email" name="email" class="form-control">
			</div>
		</div>
		<!-- 31. Penerima KPS/PKH/KIP -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label class="col-form-label font-weight-bold">31. Penerima KPS/PKH/KIP</label>
			</div>
			<div class="col">
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="kps" id="kps" value="Ya">
					<label class="form-check-label" for="kps">Ya</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="kps" id="kps" value="Tidak">
					<label class="form-check-label" for="kps">Tidak</label>
				</div>
			</div>
		</div>
		<!-- 32. No. KPS/KKS/PKH/KIP -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label for="nokps" class="col-form-label font-weight-bold">32. No. KPS/KKS/PKH/KIP</label>
			</div>
			<div class="col">
				<input type="text" id="nokps" name="nokps" class="form-control">
			</div>
		</div>
		<!-- 33. Kewarganegaraan -->
		<div class="row g-3 mt-3 align-items-center">
			<div class="col-3">
				<label class="col-form-label font-weight-bold">33. Kewarganegaraan</label>
			</div>
			<div class="col">
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="kwn" id="kwn" value="WNI">
					<label class="form-check-label" for="kwn">Indonesia (WNI)</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="kwn" id="kwn" value="WNA">
					<label class="form-check-label" for="kwn-wna">Asing (WNA)</label>
				</div>
				
			</div>
			<div class="col-2">
				<label for="negara" class="col-form-label font-weight-bold">Nama Negara</label>
			</div>
			<div class="col">
				<input type="text" id="negara" name="negara" class="form-control">
			</div>
		</div>
		
		<div class="col-md-12 mt-4 d-flex justify-content-end">
      		<button class="btn btn-primary ml-3" type="submit" value="Submit">Submit</button>
    	</div>
		<div class="col-md-12 mt-4 d-flex justify-content-end">
      		<a class="btn btn-primary" href="dataayah.php">Data Ayah >> </a>
      	</div>

		</form>
	</div>

</body>
</html>