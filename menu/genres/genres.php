    
    
    
    <?php include("./ketnoibh.php");
			$s = "select * from genres";
			$kq = mysqli_query($conn,$s);
			while($d = mysqli_fetch_assoc($kq))
			{ ?>
            	<div class="itemdetail">

					<?php $maphim = $d['IdGen']; include("linkgen.php"); ?>
                </div>
                
		<?php } ?>
    