<html>
<head>
	<title></title>
</head>
<body>

	<form method="get" action="" onsubmit="return validateForm(this);">
		<div>
			<label>Nama:</label>
			<input type="text" name="nama">
		</div>
		<div>
			<label>Mata Kuliah:</label>
			<input type="text" name="mk">
		</div>
		<div>
			<label>Nilai:</label>
			<input type="text" name="nilai">
		</div>
		<div>
			<input type="submit" value="Kirim">
		</div>
	</form>
	<?php
		if(isset($_GET['nama']) && isset($_GET['mk']) && isset($_GET['nilai'])) {
			$nama = $_GET['nama'];
			$mk = $_GET['mk'];
			$nilai = $_GET['nilai'];
				if($nama == "" || $mk == "" || $nilai == ""){
				$hasil = "Semua harus diisi";
				}
				elseif(!preg_match("/^[0-9]*$/i", $nilai)) { 
     	 			$hasil = "input nilai salah"; 
     				}
				else {
					if($nilai>=0 && $nilai<=100){
						if($nilai >= 60 && $nilai <=100){
						$hasil = "Lulus";
						}
						else{
							$hasil = "Tidak Lulus";
						}
					}
					else{
					$hasil = "input data salah";
					}
			
				}
			}
		if(isset($hasil)){
			echo "<h1>$hasil</h1>";
		}
	?>

</body>
</html>
