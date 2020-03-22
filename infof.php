
	 <?php  include("ketnoibh.php");
			    	
					$f=$_GET["o"];
					$s="select * from film where Idf = $f";
					$kq=mysqli_query($conn,$s);
					while($d = mysqli_fetch_assoc($kq))
					{
						?>
                        <div class="totalinfo row ">
                            <div id="tagfilm" class="col-sm-12"><i id="icontag" class="material-icons" >star_border</i>&nbsp info &nbsp <i id="icontag" class="material-icons" >star_border</i></div> 
                            
                                
                                <ul id="iffilm"  class="col-sm-12 infodetail" type="none">
                                	<li>
                                     <span> <b>Name English:</b> <?php echo $d['Namee']; ?></span>
                                    </li>
                                    <li>
                                     <span> <b>Name English:</b> <?php echo $d['Namej']; ?></span>
                                    </li>
                                    <li>
                                     <span> <b>Name English:</b> <?php echo $d['Namer']; ?></span>
                                    </li>
                                    <li>
                                     <span> <b>Episodes:</b> <?php echo $d['Eps']; ?></span>
                                    </li>
                                    <li>
                                     <span> <b>Duration:</b><?php echo $d['LongF']; ?></span>
                                    </li>
                                    <li>
                                     <span> <b>Aired:</b> <?php echo $d['AirF']; ?></span>
                                    </li>
                                    <li>
                                     <span> <b>Views:</b> <?php echo $d['ViewF']; ?></span>
                                    </li>
                                </ul>
                            
                           
                        </div>
                <?php } ?>