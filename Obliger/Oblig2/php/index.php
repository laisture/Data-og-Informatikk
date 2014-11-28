<?php

$content = "Hello worldHello worldHello worldHello worldHello world";
include 'Template_header.php';

?>

<script>
		function popUp()
		{
			alert("Thank you for voting!");
		}
</script>

<p class="skriftAlt"Hey and welcome to my webpage.<br>
		Here I will present my cat Dennis, who is very special to me.<br>
		Dennis is of the breed Persian, he is 10 years old and loves to play.<br>
		Additionally I will try to the best of my abilty to use HTML, CSS and JavaScript in my webpage.<br>
		Any feedback would me much appreciated, thank you for reading.<br>
		Please rate my site with the slider below!
		</p>
		<a href="111.jpg" class="pictureAlt">
		<img src="111.jpg" width="20%" height="20%"/></a>
		<form name="input" class="rating">
			<p class="rating">Low<input type="range" size="1" name="satisfaction" min="1" max="5" value="3">High</p>
-			<p class="submit"><input type="submit" value="Submit" onclick="popUp()"></p>
		</form>
<?php include 'Template_footer.php'; ?>
