<?php
session_start();
include("../GameEngine/Database.php");
include("../GameEngine/Admin/database.php");
if($funct->CheckLogin()){
	if(isset($_GET['cmd'])){
		if($_GET['cmd']=='delLog'){
			$q = "DELETE FROM " . TB_PREFIX . "admin_log where `id` = '" . $_POST['did'] . "'";
			mysqli_query($database->connection, $q);
		}
		
		if($_GET['cmd']=='NewsManage'){
			$box = "newsbox".$_POST['id'];
			$q = "UPDATE " . TB_PREFIX . "config set $box = '".$_POST['status']."'";
            mysqli_query($database->connection, $q);
		}
	}
}else{
	echo '<h2>Error: You are not Admin!</h2>';
}
?>