
<style>
#seasonitem:hover{
	cursor:pointer;
	background:#199981;
	color:white;
	}
#seasonitem{
	font-size: 14px;
text-align: center;
background: ;
color: black;

text-transform: uppercase;
	}


</style>

	<ul class="navbar-nav">
    
     <?php include("./ketnoibh.php");
			$s = "select * from singer";
			$kq = mysqli_query($conn,$s);
			while($d = mysqli_fetch_assoc($kq))
			{ ?>
            	<li class="nav-item">
        			<a id="seasonitem"class="nav-link" href="#"><?php echo $d['NameSin'];?></a>
      			</li>
                
		<?php } ?>
          
    </ul>