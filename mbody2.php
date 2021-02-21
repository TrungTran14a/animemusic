<!DOCTYPE>
<html>

<body>

		<div id="mbody" class="mbody" onClick="closeNav()">
        	<!-- khoang trong tren phan body -->
        	<div class="ads1">
            </div>
            <!-- slider -->
                <div class="mslider">
                	<?php include('slider.php') ?>
                </div>
            <!-- phan hien thi phim -->
            <div  class="container">
            	
            	<!-- de muc -->
                <div class="row">
                    <div id="tagfilm" class="col-sm-12"><i id="icontag" class="material-icons" >star_border</i>&nbsp Search Results&nbsp <i id="icontag" class="material-icons" >star_border</i></div>     
                </div>
                <!-- tung phim -->
                <div  id="allf" class="row justify-content-around ">
                <?php 
				if(empty($_GET['search']) or !isset($_GET['search'])){	
					include('notfound.php');}
					else{ 
									include("ketnoibh.php");
									$f=$_GET["search"];
									$s="select * from film,photo where photo.IdF = film.IdF and Namee Like('%$f%') and (Namer Like('%$f%')) ";
									$kq=mysqli_query($conn,$s) ;
									
									?>
										<!-- this will show keyword of searching -->
										<div class="kqsearch"> <p1>Search results for the keyword:</p1> <p2><?php echo $f?></p2></div> 
									<?php
									while($d = mysqli_fetch_assoc($kq))
									{
										?>
										
										<div id="fm" class=" col-6 col-sm-4 col-md-3 col-lg-2 ">
											<a href="filmwall.php?o=<?php echo $d["IdF"];?>" class="linkfilm">
												<div class="showep">
													<span><?php echo $d["Eps"]; ?></span>
												</div>
												
												<!-- phan hinh cho anime -->
												<div class="facefilm" 
													 style="background-image:url('<?php echo $d['NameP']; ?>');
													 background-repeat:no-repeat; 
													 background-size:cover"></div>
												<!-- ket thuc phan hinh cho anime -->
												
												<div class="namefilm" >
													<div class="contnamefilm">
														<?php echo $d["Namer"];?>
													</div>
												</div>
											</a>
										</div>   
						   <?php } ?>
					<?php } ?>
                     
                </div>
                <!-- hot film -->
               <?php include('abovebd.php')?>
            </div>
        </div>
        
</body>
</html>