

   <?php

		 ob_start();

		include("intro.php");

		$buffer=ob_get_contents();

		ob_end_clean();



		$title = "Kezdőlap | Czukor Borsó";

		$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);



    echo $buffer;

   ?>

         

    <div class="container homepage">

		<div id="myCarousel" class="carousel slide" data-ride="carousel">

			<!--<ol class="carousel-indicators">

				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>

				<li data-target="#myCarousel" data-slide-to="1"></li>

				<li data-target="#myCarousel" data-slide-to="2"></li>

			</ol>

			-->

		<div class="carousel-inner">

			<div class="item active">

				<img src="img/czukopen.jpg" alt="open" style="width:100%;">

				<div class="carousel-caption">

					<h3 class="feher"></h3>					

				</div>

			</div>


			<div class="item">

				<img src="img/IMG_0155.jpg" alt="czuki" style="width:100%;">

				<div class="carousel-caption">

					

				</div>

			</div>

		<!--

			<div class="item">

				<img src="img/siklos/indexpecs.jpg" alt="pecs" style="width:100%;">

				<div class="carousel-caption">

					<h3 class="feher">Pécs</h3>					

				</div>

			</div>

	

			<div class="item">

				<img src="img/vendegszoba/Czukor-33.jpg" alt="" style="width:100%;">

				<div class="carousel-caption">

					<h3 class="feher">Vendégszoba</h3>					

				</div>

			</div>-->

		</div>

		

		<!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">

			<span class="glyphicon glyphicon-chevron-left"></span>

			<span class="sr-only">Previous</span>

		</a>

		<a class="right carousel-control" href="#myCarousel" data-slide="next">

			<span class="glyphicon glyphicon-chevron-right"></span>

			<span class="sr-only">Next</span>

		</a>-->

		</div>

	</div>	

	<div class="index-story">

		<p class="services-text">„Mielőtt hátraszaladsz a kertbe, és szemed elé tárul a Tenkes hegy, a Siklósi Vár és Máriagyűdi Kegytemplom gyönyörű képe és sehol sem találsz cukorborsót a kertben, akkor lassítsd le a lépteidet, kérj egy pohár bort, kávét és kóstold meg a saját készítésű süteményeket, élvezd a pillanatot. Ezt tettük mi is, amikor ide először beléptünk és tesszük ezt az óta is, minden nap. Megállítjuk az időt."</p>

		<p class="services-text"> A ház hangulata különlegessé teszi a mindennapot, még szebbé az ünnepet. Tökéletes helye, egy baráti, családi rendezvénynek. 

A tematikus heteken az idényjellegű specialitások mellett, különleges programok, játékok, koncertek várják a vendégeket. 

</p>

<p class="services-text"> Hamisítatlan vidéki vintage hangulat, a kávézóban és a kertben is. A Czuki műhelyéből, sütemény, és csokoládé illata terjeng keveredve a frissen vágott fű és virágillattal. A szomszédban kakas kukorékol. A kutyusokat kutyakeksz, víz, és árnyék várja. </p>

	</div>

<?php

		include "outro.php";

?>

       