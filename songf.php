
	
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
                         <audio id="amthanh" class="amthanh" controls volume="0.1" loop  > 
                          <source src="<?php echo "music/".$d['LinkS']?>" type="audio/ogg">
                          <source src="<?php echo "music/".$d['LinkS']?>" type="audio/mpeg">
                        		Your browser does not support the audio element.
                        </audio> 
						<button title="Download this song" class="dload" onclick="myFunction()"><i class="material-icons" style="font-size:14px">get_app</i>download</button>
						<button title="Report this song" class="dload" onclick="repo()"><i class="material-icons">error_outline</i>report</button>
                    </div>
                   
                    
                </div>
                

                <?php } ?>
<script>
function repo(){
	alert("We're building this funciton !");
}
function myFunction() {
  var li = document.getElementsByTagName('source')[0].src;
 alert(li);
  var node = document.createElement("a");
  node.setAttribute('href',li);
  node.setAttribute('download','');
  down = document.createTextNode("shit");
  node.appendChild(down); 
  document.getElementById("amthanh").appendChild(node);
  node.click();
  document.getElementById("amthanh").removeChild(node);
}
</script>