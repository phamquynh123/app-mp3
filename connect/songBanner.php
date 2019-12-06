<?php 
	require "connection.php";
	$query = "Select quangcao.id, quangcao.img, quangcao.content, quangcao.id_baiHat, song.name, song.img  from quangcao, song where quangcao.id_baiHat = song.id";
	$result = mysqli_query($conn, $query);

	$data=array();
	while ($row= $result->fetch_assoc() ){
		$data[]=$row;
	}
	echo json_encode($data);
	
 ?>