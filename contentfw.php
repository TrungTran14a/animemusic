<head>
<style>
.flside {
  height: auto;
  width: 100%;
  position: relative;
  z-index: 1;
  top: 0;
  left: 0;
  
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 0px;
  float:left;
  overflow-y:hidden
}


.flside a:hover {
  color: #f1f1f1;
}

.flside {
  position: relative;
  top: 0;
  right: 25px;
  font-size: 36px;
 
}
.closebtn{
		width:100px;
		height:50px;
		font-size:50px;
		text-align:center;
		color:#30D5F7;
		float:left;
		position:relative;
		padding:0px;
		left:0;
		margin:0;
		line-height:50px;
		transition: 0.3s;
	text-decoration: none;
	background-color: #3f5c75;
	}

#mainflside {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .flside {padding-top: 15px;}
  .flside a {font-size: 18px;}
}
body{
	background-color:#373737;
	}
</style>
</head>


<script>
function openfl() {
  document.getElementById("myflside").style.width = "100%";
  document.getElementById("mbdy").style.marginLeft = "0px";
   document.getElementById("openfl").style.display = "none";
}

function closefl() {
  document.getElementById("myflside").style.width = "0";
  document.getElementById("mbdy").style.marginLeft= "0";
  document.getElementById("openfl").style.display = "block";
}
function ch1(){
	document.getElementById("info1").style.display ="block";
	document.getElementById("wp2").style.display ="none";
	}
function ch2(){
	document.getElementById("info1").style.display ="none";
	document.getElementById("wp2").style.display ="block";
	
	}
function ch3(){
	alert("This funciton will be completed soon !!! ^.^ ");
}
</script>


<div class="mbody" onClick="closeNav()">
	<div  id="mbdy" class="mwleft" >
        <div id="myflside" class="flside">       
        	
            <div class="ava" >
            	<?php include('movewall.php')?>
            </div>
            <div id="btnxem" class="hvr-bounce-to-right col-sm-6 col-lg-3" onClick="ch1()">
				<i class="material-icons">info_outline</i>
            	info
            </div>
            <div id="btnsong" class="hvr-bounce-to-right col-sm-6 col-lg-3" onClick="ch2()">
				<i class="material-icons">library_music</i>
            	song
            </div>
            <div id="btnwallpaper" class="hvr-bounce-to-right col-sm-6 col-lg-3" onclick="ch3()">
				<i class="material-icons">filter</i>
            	wallpaper
            </div>
            <div id="btnvi" class="hvr-bounce-to-right col-sm-6 col-lg-3" onclick="ch3()">
				<i class="material-icons">video_library</i>
            	watch
            </div>
            
            <a href="javascript:void(0)" class="closebtn" onclick="closefl()" title="Close This Menu">&times;</a>
            </div>
                
           
 		
    </div>
      <div id="nana" class="namectr">FILM NAME HERE </div>
        <div class="mwright">
        	<span id="openfl" style="" onclick="openfl()">&#9776; more</span>
            <div id="info1">
            	<?php include('infof.php') ?> 
            </div>
            <div id="wp2">
            	<?php include('songf.php') ?>
            </div>
        </div>   
</div>
<script type="text/javascript">
  var na = document.getElementById("NE").innerText;
  var ne = document.getElementById("NJ").innerText;
  document.getElementById("nana").innerHTML = na +" - " +ne; //doan nay dung de cho hien thi name film trong database ra
  var nane = na +" - " +ne;

</script>