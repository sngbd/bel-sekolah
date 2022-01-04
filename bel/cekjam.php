<?php 
date_default_timezone_set("Asia/Jakarta");
$jam = date('H:i:s');
echo $jam;

$konek = mysqli_connect("localhost","root","","bel");
//cek jam
$sql = mysqli_query($konek,"select * from jam order by id asc");
$myAudioFile = "assets/audio.wav";
while($data= mysqli_fetch_array($sql))
{
	$id = $data['id'];
	$jamdb = $data['jam'];
	if($jam == $jamdb)
	{
		echo '<script>window.location.replace("audio.php");</script>';
		mysqli_query($konek, "update jam set status=1 where id='$id'");
	}
}

 ?>