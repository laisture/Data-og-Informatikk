<!DOCTYPE html>
<html lang="en">
  <head>
	   <link rel="stylesheet" type="text/css" href="../Stylesheet-1.css">
	   <title>TV Series for you</title>
  </head>
 <body>
  <header>
	  <nav>
	      <div class="logo">
			  <a href="../Navigation/Home.html"><img class="logo" src="Logo.jpg" width=28.6% alt="The logo of the website"></a>
	      </div>

  	 <ul id="menu">
	       <li><a href="../Navigation/Signup.html">Sign up</a></li>
       <li><a href="../Navigation/Login.html">Log in</a></li>
       <li class="last"><a href="../Navigation/AllSeries.html">All series</a></li>
      </ul>
	</nav>
  </header>
  
   <div class="title">
  	 <div class="placeTitle">
    <h1>
    <p><?php echo $title?></p>
    </h1>
   </div>
  </div>

  <!-- TOP RATED SHOWS -->
  <div class="additional-content">
  	<div class="placeAdditional-content">
		<ul>
			<li id="TopRated">Top Rated Tv Series</li>
				<li>
				<a href="VampireDiaries.php"><img src="VampireDiaries.png" alt="The poster of Vampire Diaries"></a>
				</li>
				<li>
				<a href="NCIS.php"><img src="NCIS.png" alt="The poster of NCIS"></a>
				</li>
				<li>
				<a href="WalkingDead.php"><img src="WalkingDead.png" alt="The poster of The Walking Dead"></a>
				</li>
				<li>
				<a href="BreakingBad.php"><img src="BreakingBad.png" alt="The poster of Breaking Bad"></a>
				</li>
				<li>
				<a href="GossipGirl.php"><img src="GossipGirl.png" alt="The poster of Gossip Girl"></a>
			</li>
  		</ul>
	</div>
  </div>

<!-- Tv show info -->
<div class="main-content">
 <div class="placeMain-content">
	<div class="review">
	<p class="text"> <b>Summary:</b> <br><?php echo $summary ?></p>
	<br>
        <label for="txtReview"><b>Write your review here:</b></label>
	<textarea title="Write your review here" name="txtReview"
	id="txtReview" rows="5" cols="40"
	class="input" ></textarea><br>
	<button onclick="alert('Your comment has been submitted for review.')">Submit</button>
    <br>
    <h4>Reviews:</h4>
    <p class="reviewText">
    	<i><b>By <?php echo $name1 ?> </b> <?php echo $date1 ?> </i> <br /> <?php echo '<img src="' . $stars1 . '" alt ="' . $altStars1 . '" width="20%"/>';?> <br />
	<?php echo $review1 ?></p>
	<p class="reviewText">
	    <i><b>By <?php echo $name2 ?> </b> <?php echo $date2 ?> </i> <br /> <?php echo '<img src="' . $stars2 . '" alt ="' . $altStars2 .  '" width="20%"/>';?> <br />
	<?php echo $review2 ?></p>
   </div>

   <div class="placing">
   	<a><?php echo '<img src="' . $poster . '" alt ="' . $altPoster . '" width="70%"/>';?></a>
	 </div>
	 </div>
</div>
