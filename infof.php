
	 <?php  include("ketnoibh.php");
			    	
					$f=$_GET["o"];
					$s="select * from film,status,type,season,studio,rating 
						where Idf = $f and film.IdStt = status.IdStt and film.IdType = type.IdType and film.IdSea = season.IdSea 
						and film.IdStu = studio.IdStu and film.IdRa = rating.IdRa ";
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
                                     <span> <b>Name Japanese:</b> <?php echo $d['Namej']; ?></span>
                                    </li>
                                    <li>
                                     <span> <b>Name Romanji:</b> <?php echo $d['Namer']; ?></span>
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
                                     <li>
                                     <span> <b>Status:</b> <?php echo $d['NStt']; ?></span>
                                    </li>
                                    <li>
                                     <span> <b>Type:</b> <?php echo $d['NType']; ?></span>
                                    </li>
                                    <li>
                                     <span> <b>Season:</b> <?php echo $d['NSea']; ?></span>
                                    </li>
                                    <li>
                                     <span> <b>Studio:</b> <?php echo $d['NameStu']; ?></span>
                                    </li>
                                    <li>
                                     <span> <b>Rating:</b> <?php echo $d['Nra']; ?></span>
                                    </li>
                                     
                                     <li>
                                     <span> <b>Genres:</b>  
													 <?php $f=$_GET["o"];
                                                        $sq="select * from film,genres 
                                                        where Idf = $f and film.IdF = genres.IdFuck";
                                                        $kql=mysqli_query($conn,$sq);
                                                        while($dd = mysqli_fetch_assoc($kql))
                                                        {  echo $dd['NGen'].'.'?>
                                     </span>     <?php } ?>
                                    </li>
                                </ul>
                        </div>
           <?php } ?>