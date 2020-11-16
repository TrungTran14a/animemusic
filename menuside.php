
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: auto;
  width: 0;
  position: absolute;
  z-index: 90;
  top: 0;
  right: 0;
  background-color: #dbdbdb;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  cursor:default;
}

.sidenav a {
 
  text-decoration: none;
  color: black;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  padding:20px 0px 0px 0px ;
  width:100%;
  font-size: 25px;
  text-align:center;
  color:white;
}
#mySidenav{
  overflow-y: hidden;
  overflow-x: hidden;
	}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<span class="openmenu" style="" onclick="openNav()">&#9776;</span>

<div id="mySidenav" class="sidenav">
  <a id="btnmenuclose" href="javascript:void(0)" class="closebtn" onclick="closeNav()"> &#9776 MENU</a>
  <button id="btnitem" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar1">
    <div class="iconitemmenu">&#10017 </div>
    <div  class="itemmenu"> Genres</div>
    
  </button>
   
  <!-- genres films -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar1">
    <div class="allitemin">
      <?php include('menu/genres/genres.php'); ?>
    </div>
  </div>  

  
   <!-- type films -->
  <button id="btnitem" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar4">
    <div class="iconitemmenu">&#10017 </div>
    <div class="itemmenu">type</div>
  </button>
  
  <div class="collapse navbar-collapse" id="collapsibleNavbar4">
   <?php include('menu/type/type.php'); ?>
  </div>
  
  
  
  <!-- season films -->
  <button id="btnitem" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar2">
  	<div class="iconitemmenu">&#10017 </div>
    <div class="itemmenu">Season</div>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar2">
    <?php include ('menu/season/season.php');?>
  </div>  
  
  <!-- studio films -->
  <button id="btnitem" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar3">
    <div class="iconitemmenu">&#10017 </div>
    <div class="itemmenu">Studio</div>
  </button>
 
  <div class="collapse navbar-collapse" id="collapsibleNavbar3">
   <?php include('menu/studio/studio.php'); ?>
  </div>  
  
  
   <!-- type films -->
  <button id="btnitem" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar5">
    <div class="iconitemmenu">&#10017 </div>
    <div class="itemmenu">singer</div>
  </button>
  
  <div class="collapse navbar-collapse" id="collapsibleNavbar5">
   <?php include('menu/singer/singer.php'); ?>
  </div>
  
  
  
  
   <!-- login account user -->
   <div class="logi">
   	<div class="btnlogin">
    	 login
    </div>
    <div class="btnregis">
    	 register
    </div>
   </div>
	 <!-- custom them -->
	<div class="logi">
   		<div class="ctheme" onClick="ctheme()">
    	 change theme
		</div>
   </div>
   
</div>



<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "350px";
  document.getElementById("mbody").style.filter="blur(3px)";
  

}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("mbody").style.filter = "none";
}
</script>
   
</body>
</html> 
