<?php 
	
if (isset($_POST['submit'])) {
	$harga = $_POST['harga'];
	$modal = $_POST['modal'];
	if ($harga < $modal) {
		$rugi = $modal - $harga;
		echo "Anda mendapatkan rugi sebesar ".$rugi;
	}elseif ($modal < $harga) {
		$laba = $modal - $harga;
		echo "Anda mendapatkan laba sebesar ".$laba;
	}else{
		echo "Anda tidak mendapatkan laba ataupun rugi";
	}
}


?>