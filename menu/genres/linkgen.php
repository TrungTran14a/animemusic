        
        <?php 
				$e = "select * from genres where IdGen = $maphim ";
				$qk = mysqli_query($conn,$e);
				while($q = mysqli_fetch_assoc($qk))
				{
					$id = $q["IdGen"];
					?>
            <div class="itemdetailmore" onclick="location='gend.php?id=<?php echo $id?>'" title="<?php echo $d['NGen']?>" > 
        	<?php
					echo $q["NGen"];							
				?>
            </div>
        <?php } ?>

 