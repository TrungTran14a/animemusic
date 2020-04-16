


<?php 
	$ss='select * from photo where photo.IdF = $d['IdF']';
	$kqq=mysqli_query($conn,$ss);
	while($e = mysqli_fetch_assoc($kqq))
	{ 
		echo $e['NameP']; 
	}?>