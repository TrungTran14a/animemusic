

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
						  $s = "select * from film,thumb where thumb.IdF = film.IdF  ";
						  $kq=mysqli_query($conn,$s);
						  while($d = mysqli_fetch_assoc($kq))
							{
								?>
    <div  class="carousel-item">
								<div class="d-block w-100" id="fmsli" style="background-image:url('<?php echo $d['LinkTh']?>');">
									<div class="infosli" >
										<div class="infsli">

												<li><b>name:</b> <?php echo $d['Namer']?></li>
												<li><b>type:</b> <?php echo $d['NType']?></li>
												<li><b>aired:</b> <?php echo $d['AirF']?></li>
												<li><b>studio:</b> <?php echo $d['NameStu']?></li>
												<li><b>episodes:</b> <?php echo $d['Eps']?></li>

										</div>
										<div class="btnwatch" >
											<p1>details</p1>
										</div>
									</div>
								</div>
				 
                  
    </div>
	  
	   <?php }?>
  </div>

 
  <a id="mnext" class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a id="mprev" class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  
</div>