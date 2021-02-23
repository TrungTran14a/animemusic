


<div id="mbody" class="mbody" onClick="closeNav()">
   <div  class="container">
      <!-- de muc -->
      <div class="row">
         <div id="tagfilm" class="col-sm-12"><i id="icontag" class="material-icons" >star_border</i>&nbsp Search Results&nbsp <i id="icontag" class="material-icons" >star_border</i></div>
      </div>
      <!-- tung phim -->
      <div  id="allf" class="row justify-content-around ">
         <?php 
            if(empty($_GET['id']) or !isset($_GET['id'])){  
              include('notfound.php');}
              else{ 
                      include("ketnoibh.php");
                      $f=$_GET["id"];
                      $s="select * from dschool,film,photo where  dschool.IdGen=$f and film.IdF = dschool.IdF and photo.IdF = film.IdF";
                      $kq=mysqli_query($conn,$s) ;
                      
                      ?>
         <!-- this will show keyword of searching -->
         <div class="kqsearch">

            <p1 id="naofgen"><?php $ss="select * from genres where genres.IdGen = $f" ;
                      $kqq=mysqli_query($conn,$ss) ;
                      while($dd = mysqli_fetch_assoc($kqq)){ echo $dd['NGen'];}?></p1>

         </div>
         <?php
            while($d = mysqli_fetch_assoc($kq))
            {
              ?>
         <div id="fm" class=" col-6 col-sm-4 col-md-3 col-lg-2 ">
            <a href="filmwall.php?o=<?php echo $d["IdF"];?>" class="linkfilm">
               <div class="showep">
                  <span><?php echo $d["IdF"];?></span>
               </div>
               <!-- phan hinh cho anime -->
               <div class="facefilm" 
                  style="background-image:url('<?php echo $d['NameP']; ?>');
                  background-repeat:no-repeagetElementsByTagName('')t; 
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


<script type="text/javascript">
  //this script will set the title of the page
  document.getElemn
</script>