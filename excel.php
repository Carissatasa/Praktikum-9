<?php
$conn = mysqli_connect("localhost","root","","formulir");
$output = '';

if(ISSET($_POST["export_excel"])){
	$sql = "SELECT * FROM datadiri";
	$result = mysqli_query($conn, $sql);
	$i = 1;
	if(mysqli_num_rows($result)>0){
		$output .= '
			<table class="table" bordered="1">
				<tr>
					<th>No.</th>
					<th>Jenis Pendaftaran</th>
					<th>Tgl Masuk</th>
					<th>NIS</th>
					<th>Nomor Ujian</th>
					<th>Paud</th>
					<th>TK</th>
					<th>No SKHUN</th>
					<th>No Ijazah</th>
					<th>Hobi</th>
					<th>Cita-cita</th>
					<th>Nama Lengkap</th>
					<th>Jenis Kelamin</th>
					<th>NISN</th>
					<th>NIK</th>
					<th>Tempat Lahir</th>
					<th>Tgl Lahir</th>
					<th>Agama</th>
					<th>Khusus</th>
					<th>Alamat</th>
					<th>RT</th>
					<th>RW</th>
					<th>Dusun</th>
					<th>Kelurahan</th>
					<th>Kecamatan</th>
					<th>Kode Pos</th>
					<th>Tempat Tinggal</th>
					<th>Transportasi</th>
					<th>No HP</th>
					<th>No Telp</th>
					<th>Email</th>
					<th>Penerima KPS</th>
					<th>No. KPS</th>
					<th>Kewarganegaraan</th>
				</tr>
		';
		while($row = mysqli_fetch_array($result)){
			$output .= '
				<tr>
					<td>'.$i++.'</td>
					<td>'.$row["jenisdaftar"].'</td>
					<td>'.$row["tglmasuk"].'</td>
					<td>'.$row["nis"].'</td>
					<td>'.$row["nomorujian"].'</td>
					<td>'.$row["paud"].'</td>
					<td>'.$row["tk"].'</td>
					<td>'.$row["skhun"].'</td>
					<td>'.$row["ijazah"].'</td>
					<td>'.$row["hobi"].'</td>
					<td>'.$row["citacita"].'</td>
					<td>'.$row["nama"].'</td>
					<td>'.$row["jk"].'</td>
					<td>'.$row["nisn"].'</td>
					<td>'.$row["nik"].'</td>
					<td>'.$row["tempatlahir"].'</td>
					<td>'.$row["tgllahir"].'</td>
					<td>'.$row["agama"].'</td>
					<td>'.$row["abk"].'</td>
					<td>'.$row["alamat"].'</td>
					<td>'.$row["rt"].'</td>
					<td>'.$row["rw"].'</td>
					<td>'.$row["dusun"].'</td>
					<td>'.$row["desa"].'</td>
					<td>'.$row["kecamatan"].'</td>
					<td>'.$row["kodepos"].'</td>
					<td>'.$row["tempattinggal"].'</td>
					<td>'.$row["transport"].'</td>
					<td>'.$row["hp"].'</td>
					<td>'.$row["telp"].'</td>
					<td>'.$row["email"].'</td>
					<td>'.$row["kps"].'</td>
					<td>'.$row["nokps"].'</td>
					<td>'.$row["kwn"].'</td>
				</tr>
			';
		}
		$output .= '</table';
		header("Content-Type: application/xls");
		header("Content-Disposition:attachment; filename= Data diri.xls");
		echo $output;
	}
}


?>