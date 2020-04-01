



<div class="menu1" >
    <div class="menutop">
        <div class="iconw">
             <!--<img src="image/mhead/iconw.png" alt="ANIME360" width="200px" heightwidth="50px"/> -->
             <a href="home.php">
              <div class="icon"></div>
              </a>
        </div>
        <div class="menuw">
            <div class="menu" style="cursor:pointer">
            	<?php include ('menuside.php'); ?>
            </div>
        </div>
    </div>
    <div class="menubot">
    	
        	<form class="formsearch" action="/action_page.php">
              
              <button class="butsearch" type="submit">
              	SEARCH
              </button>
              <input id="basics" class="inputsearch" type="text" placeholder="INSERT YOUR FILM's NAME..." name="search"/>
            </form>
        
    </div>
</div>

<script>
var options = {
	url: "mau.js"
};

$("#basics").easyAutocomplete(options);
document.getElementsByClassName("easy-autocomplete")[0].setAttribute("id", "easyAutocomplete"); 
document.getElementById("easyAutocomplete").style.width="90%";
</script>