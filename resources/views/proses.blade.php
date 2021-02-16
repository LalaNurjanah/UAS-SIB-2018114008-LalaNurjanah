<?php
if(isset($_POST['users'])){
	include '.env';
	if(!is_numeric($_POST['telepon'])){
		header("location:index.blade.php?err1");
	}else{
		$daftar = mysqli_query($koneksi, "INSERT INTO users
			'".$_POST['email']."',
			'".$_POST['passwor']."')");
		if($users){
			echo 'oke';
		}else{
			echo 'hmmmm'.mysqli_error($koneksi);
		}
	}
}
?>
