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
					<input type="submit" value="kirim">
				</div>
			</form>
			<?php
				if(isset($_GET['nama'])){
					$nama = $_GET['nama'];
				if($nama == "")
					$nama = "KAWAN";
				}				
				
				
				else {
				$nama = "world";

				}
				echo "<h1>Hello, $nama </h1>";
				?>
	</body>
	</html>