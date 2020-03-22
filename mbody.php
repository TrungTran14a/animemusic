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
                    <div id="tagfilm" class="col-sm-12"><i id="icontag" class="material-icons" >star_border</i>&nbsp NEW FILM&nbsp <i id="icontag" class="material-icons" >star_border</i></div>     
                </div>
                <!-- tung phim -->
                <div  id="allf" class="row justify-content-around ">
                <?php include('ketnoibh.php');
					$sq = 'select * from film,photo where   photo.IdF = film.IdF';
					$result = mysqli_query($conn, $sq);
					while($row = mysqli_fetch_assoc($result)){ 
					
					?>
					
                	<div id="fm" class=" col-6 col-sm-4 col-md-3 col-lg-2 ">
                    	<a href="filmwall.php?o=<?php echo $row["IdF"];?>" class="linkfilm">
                            <div class="showep">
                                <span><?php echo $row["Eps"]; ?></span>
                            </div>
                            <div class="facefilm" style="background-image:url('<?php echo $row['NameP'];?>'); background-repeat:no-repeat; background-size:cover"></div>
                            <div class="namefilm" >
                                <div class="contnamefilm">
                                    <?php echo $row["Namer"];?>
                                </div>
                            </div>
                        </a>
                    </div>   
                    <?php } ?>        
                     
                </div>
                <!-- hot film -->
                <div class="row">
                    <div id="tagfilm" class="col-sm-12"><i id="icontag" class="material-icons" >star_border</i>&nbsp HOT FILM&nbsp <i id="icontag" class="material-icons" >star_border</i></div>     
                </div>
            	<div  id="allf" class="row justify-content-around ">
                	<div id="fm" class=" col-6 col-sm-4 col-md-3 col-lg-2 ">
                    	<a href="#" class="linkfilm">
                            <div class="showep">
                                <span>05/12</span>
                            </div>
                            <div class="facefilm" style="background-image:url('./image/mbody/small.jpg'); background-repeat:no-repeat; background-size:cover"></div>
                            <div class="namefilm" >
                                <div class="contnamefilm">
                                    Uchiage hanabi, shita kara miru ka, yoko kara miru ka.aaaaaaaaaaa
                                </div>
                            </div>
                        </a>
                    </div>       
                </div>
                <?php include('sglink.php') ?>
            </div>
        </div>
        
</body>
</html>