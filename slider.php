

<!-- slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol id="mmovesli" class="carousel-indicators">
    <li id="changesli" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
    <li id="changesli" data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li id="changesli" data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li id="changesli" data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li id="changesli" data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div id="allfmsli" class="carousel-inner">
	  <?php include('ketnoibh.php');
						  $s = "select * from film,thumb,type,studio where thumb.IdF = film.IdF and  film.IdStu = studio.IdStu and film.IdType = type.IdType";
						  $kq=mysqli_query($conn,$s);
						  while($d = mysqli_fetch_array($kq))
							{
								?>
    <div  id="slayder" class="carousel-item" data-id="<?php echo $d['IdThu']."s" ?>">
								<div class="d-block w-100" id="fmsli" style="background-image:url('<?php echo $d['LinkTh']?>');">
									<div class="infosli" >
										<div class="infsli">

												<li><b>name:</b> <?php echo $d['Namer']?></li>
												<li><b>type:</b> <?php echo $d['NType']?></li>
												<li><b>aired:</b> <?php echo $d['AirF']?></li>
												<li><b>studio:</b> <?php echo $d['NameStu']?></li>
												<li><b>episodes:</b> <?php echo $d['Eps']?></li>

										</div>
										<div class="btnwatch" onClick="dem()">
											<p1>details</p1>
										</div>
									</div>
								</div>
				 
                  
    </div>
	  
	   <?php }?>
  </div>
	
	
	
	
<!-- this script is used for slayder -->
<script>
	
	var a = document.getElementsByClassName('carousel-item')[0];
	var b = a.getAttribute('data-id');
	var c = "1s";
	if(b == c)
	   {
		  a.setAttribute( "class", "carousel-item active" );
	   }
	
</script>
<!-- this script is used for slayder -->
	
	
	
	
	
	
  <a id="mnext" class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a id="mprev" class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" onClick="dem()">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div>