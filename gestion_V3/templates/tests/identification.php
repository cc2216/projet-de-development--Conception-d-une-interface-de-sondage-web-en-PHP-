
<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8" />
    </head>
	
    <body>
	
	<p style="font-size:150%">Ecoutez attentivement ce son et dites de quoi il s'agit.<p>
	<p style="font-size:150%">Attention!une seul écoute possible.<p>
	<audio id="audioPlayer" width="300" height="32" src="./__SON__"></audio>
    <button onclick="play('audioPlayer', this)">Ecouter</button>
    <script type="text/javascript">

     function play(idAudioPlayer, context) {
     var audioplayer = document.querySelector('#' + idAudioPlayer);


    if (audioplayer.played) {
        audioplayer.play();
        context.textContent = 'Ecouter';
        
       }
       }

       
</script>
	<form method="post" action="templates/tests/identification_post.php">
	<p>

	<label class='center' for="reponse">Reponse</label>
	<input type="text" name="reponse" id="reponse"/>
	<br/>
	
	<br/>

	

	<input type="submit" value="OK" /><br/>
	
	</p>


<script>
	
		function deactivateTooltips() {
	          var tooltips = document.querySelectorAll('.tooltip'),
	              tooltipsLength = tooltips.length;
	
	             for (var i = 0 ; i < tooltipsLength ; i++) {
	               tooltips[i].style.display = 'none';
	            }
	
	    }
	
	
	    
		
		function getTooltip(elements) {
	         while (elements = elements.nextSibling) {
	             if (elements.className === 'tooltip') {
	                return elements;
	            }
	        }
	     return false;	
	    }
		
	var check = {}; 

	check['reponse']		= function() {
	
	var reponse = document.getElementById('reponse'),
	tooltipStyle = getTooltip(reponse).style;
	
	if (reponse.value.length >1) {
	reponse.className = "correct";
	tooltipStyle.display = 'none';
	return true;
	} else {
	reponse.className = "incorrect";
	tooltipStyle.display = 'inline-block';
	return false;
	}
	
	};
	
	(function() {
	var myForm = document.getElementById('form');
	
	myForm.addEventListener('submit', function(e) {
	
	var result = true;
	
	for (var i in check) {
	result = check[i]() && result;
	}
	
	if (!result) {
	e.preventDefault();
	}
	
	
	}, false);
	
	
	
	})();


	deactivateTooltips();
	
			
 
	
	</script>

	</body>
</html>
	