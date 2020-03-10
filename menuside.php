
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
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
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
    <div class="itemmenu"> aaa</div>
    
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar1">
    <div class="allitemin">
      <div class="itemdetail">
        adult
      </div>
      <div class="itemdetail" >
        comedy
      </div>
      <div class="itemdetail" >
        school life
      </div>
      <div class="itemdetail" >
        school life
      </div>
      <div class="itemdetail" >
        school life
      </div>
      <div class="itemdetail" >
        school life
      </div>
      <div class="itemdetail" >
        school life
      </div>
      <div class="itemdetail" >
        school life
      </div>
      <div class="itemdetail" >
        school life
      </div>    
    </div>
  </div>  
  <button id="btnitem" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar2">
  	<div class="iconitemmenu">&#10017 </div>
    <div class="itemmenu">aaa</div>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar2">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>    
    </ul>
  </div>  
  <button id="btnitem" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar3">
    <div class="iconitemmenu">&#10017 </div>
    <div class="itemmenu">aaa</div>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar3">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>    
    </ul>
  </div>  
   <div class="logi">
   	<div class="btnlogin">
    	 login
    </div>
    <div class="btnregis">
    	 register
    </div>
   </div>
   
</div>



<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("mbody").style.filter="blur(3px)";
  
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("mbody").style.filter = "none";
}
</script>
   
</body>
</html> 
