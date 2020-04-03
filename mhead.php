



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
    		<iframe name="notrelo" style="display:none"></iframe>
        	<form class="formsearch" action="/action_page.php" method="post" target="notrelo">
              
              <button class="butsearch" type="submit" onClick="checkin()">
              	SEARCH
              </button>
              <input id="basics" class="inputsearch" type="text" placeholder="INSERT YOUR FILM's NAME..." name="search"/>
            </form>
        
    </div>
</div>

<script>
function checkin(){
	
	var ch = document.getElementById('basics').value;
	if(ch==0){alert("Fill some film's name, please !!!")}
}
var options = {
	url: "mau.js",


	list: {
		maxNumberOfElements:5,
		match: {
			enabled: true
		},
		sort: {
			enabled: true
		},
		showAnimation: {
			type: "slide", //normal|slide|fade
			time: 400,
			callback: function() {}
		},

		hideAnimation: {
			type: "slide", //normal|slide|fade
			time: 400,
			callback: function() {}
		}
	},
	
	getValue: function(element) {
		return element.name;
	},

	highlightPhrase: true,
	
	template: {
		type: "links",
		
		
		fields: {
			iconSrc: "icon",
			link: "website-link"
		}
	},
	
};

$("#basics").easyAutocomplete(options);
document.getElementsByClassName("easy-autocomplete")[0].setAttribute("id", "easyAutocomplete"); 
document.getElementById("easyAutocomplete").style.width="90%";
</script>