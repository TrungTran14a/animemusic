    
    
    
    <?php include("./ketnoibh.php");
			$s = "select * from genres";
			$kq = mysqli_query($conn,$s);
			while($d = mysqli_fetch_assoc($kq))
			{ ?>
            	<div class="itemdetail">
                	<?php echo $d['NGen']?>
                </div>
                
		<?php } ?>
    