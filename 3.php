<html>
	<head>
	</head>
	<body>
			<form method="get" action="">
				<div>
					<label>Nama:</label>
					<input type="text" name="nama">
				</div>
				<div>
					<label>Mata Kuliah:</label>
					<input type="text" name="MK">
				</div>
				<div>
					<label>Nilai:</label>
					<input type="text" name="nilai">
				</div>
				<div>
					<input type="submit" value="kirim">
				</div>
			</form>
			<?php
					$warn = "";
				if(isset($_GET['nama'])){
					$nama = $_GET['nama'];
				if($nama == "")
					$warn = "kosong";
				}				
				
				
				else {
				$nama = "";

				}
				if(isset($_GET['MK'])){
					$MK = $_GET['MK'];
				if($MK == "")
					$warn = "kosong";
				}				
				
				
				else {
				$MK = "";

				}
				if(isset($_GET['nilai'])){
					$nilai = $_GET['nilai'];
				if($nilai>=0 && $nilai<=100 && $nilai != ""){
					if($nilai >= 60){
						$warn = "Lulus";
					}
					else{
						$warn = "Tidak Lulus";
					}
				}	
				elseif ($nilai = "" || $nilai = 0) {$warn = "Kosong";
				}
				else{
					$warn = "kosong";
				}
				}			
				
				
				echo "<h1>$warn </h1>";
				?>
	</body>
	</html>