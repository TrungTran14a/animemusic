
	
				<div class="totalinfo row ">
                	<div id="tagfilm" class="col-sm-12"><i id="icontag" class="material-icons" >star_border</i>&nbsp songs &nbsp <i id="icontag" class="material-icons" >star_border</i></div> 
                    <?php include('ketnoibh.php');
						$get = $_GET['o'];
						$s="select * from film,song,singer where film.IdF = $get and song.IdF = $get and song.IdSin = singer.IdSin ";
						$kq=mysqli_query($conn,$s);
						while($d = mysqli_fetch_assoc($kq))
							{
						?>
                    <div id="iffilm" class="col-sm-12 infodetail">
                        <span> <b>Song Name:</b> <?php echo $d['NameS'];?></span>
                        <p></p>
                        <span> <b>Singer:</b> <?php echo $d['NameSin'];?></span>
                        <p></p>
                         <audio class="amthanh" controls>
                          <source src="<?php echo "music/".$d['LinkS']?>" type="audio/ogg">
                          <source src="<?php echo "music/".$d['LinkS']?>" type="audio/mpeg">
                        		Your browser does not support the audio element.
                        </audio> 
                    </div>
                   
                    
                </div>
                <?php } ?>