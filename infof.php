
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
                                     <span> <p1>Name English:</p1> <p2><?php echo $d['Namee']; ?></p2></span>
                                    </li>
                                    <li>
                                     <span> <p1>Name Japanese:</p1> <p2><?php echo $d['Namej']; ?></p2></span>
                                    </li>
                                    <li>
                                     <span> <p1>Name Romanji:</p1> <p2><?php echo $d['Namer']; ?></p2></span>
                                    </li>
                                    <li>
                                     <span> <p1>Episodes:</p1> <p2><?php echo $d['Eps']; ?></p2></span>
                                    </li>
                                    <li>
                                     <span> <p1>Duration:</p1><p2><?php echo $d['LongF']; ?></p2></span>
                                    </li>
                                    <li>
                                     <span> <p1>Aired:</p1> <p2><?php echo $d['AirF']; ?></p2></span>
                                    </li>
                                    <li>
                                     <span> <p1>Views:</p1> <p2><?php echo $d['ViewF']; ?></p2></span>
                                    </li>
                                     <li>
                                     <span> <p1>Status:</p1> <p2><?php echo $d['NStt']; ?></p2></span>
                                    </li>
                                    <li>
                                     <span> <p1>Type:</p1> <p2><?php echo $d['NType']; ?></p2></span>
                                    </li>
                                    <li>
                                     <span> <p1>Season:</p1> <p2><?php echo $d['NSea']; ?></p2></span>
                                    </li>
                                    <li>
                                     <span> <p1>Studio:</p1> <p2><?php echo $d['NameStu']; ?></p2></span>
                                    </li>
                                    <li>
                                     <span> <p1>Rating:</p1> <p2><?php echo $d['Nra']; ?></p2></span>
                                    </li>
                                     
                                     <li>
                                     <span> <p1>Genres:</p1>  
													 <?php $ff=$_GET["o"];
                                                        $sq="select * from film,dschool,genres
                                                        where film.Idf = $ff and dschool.IdF = film.IdF and dschool.IdGen = genres.IdGen";
                                                        $kql=mysqli_query($conn,$sq);
                                                        while($dd = mysqli_fetch_assoc($kql))
                                                        {  ?><p2> <?php echo $dd['NGen'].'; '?></p2>
                                     </span>     <?php } ?>
                                    </li>
                                </ul>
							<button class="dload" onclick="repo()">report</button>
                        </div>
           <?php } ?>