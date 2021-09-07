 <?php
		 ob_start();
		include("intro.php");
		$buffer=ob_get_contents();
		ob_end_clean();

		$title = "Galéria | Czukor Borsó";
		$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
   ?>
   <div class="czuk d-flex align-items-center">
        <div class="hero-thumbnail equalize bg-img" style="background-image: url(img/gallerythumb.jpg);"></div>
        
        <div class="hero-content equalize">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="line"></div>
                        <h2>Galéria</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!--<div class="galnav">
		<button class="btn czukor-btn m-2 Siklos">Siklós-Máriagyűd</button>
		<button class="btn czukor-btn m-2 Pecs">Pécs</button>
		<button class="btn czukor-btn m-2 Vendeg">Vendégszoba</button>
	</div>-->
	<div class="container" id="Pecs">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
		<div class="carousel-inner">
			<div class="item active">
				<img src="img/siklos/1.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/new/2.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/new/3.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/new/4.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/new/5.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/new/6.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/new/7.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/new/8.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/new/9.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/new/10.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/new/1.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/2.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/3.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/4.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/5.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/6.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/7.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/8.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/9.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/10.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/11.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/12.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/13.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/14.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/15.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/16.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/17.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/18.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/19.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/20.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/21.jpg" alt="" style="width:100%;">			
			</div>
		</div>

		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
		</div>
	</div>
	
	<div class="container" id="Siklos">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
		<div class="carousel-inner" id="allokep">
			<div class="item active">
				<img src="img/siklos/1.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/2.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/3.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/4.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/5.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/6.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/7.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/8.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/9.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/10.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/11.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/12.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/13.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/14.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/15.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/16.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/17.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/18.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/19.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/20.jpg" alt="" style="width:100%;">			
			</div>
			<div class="item">
				<img src="img/siklos/21.jpg" alt="" style="width:100%;">			
			</div>
		</div>

		<a class="left carousel-control" href="#myCarousel2" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel2" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
		</div>
	</div>
	
<!--	<div class="container" id="Vendeg">
		<div id="myCarousel3" class="carousel slide" data-ride="carousel">
   
		<div class="carousel-inner">
			<div class="item active">
				<img src="img/vendegszoba/Czukor-39.jpg" alt="" style="width:100%;">		
			</div>
			<div class="item">
				<img src="img/vendegszoba/Czukor-35.jpg" alt="" style="width:100%;">		
			</div>
			<div class="item">
				<img src="img/vendegszoba/Czukor-34.jpg" alt="" style="width:100%;">		
			</div>
			<div class="item">
				<img src="img/vendegszoba/Czukor-32.jpg" alt="" style="width:100%;">		
			</div>
			<div class="item">
				<img src="img/vendegszoba/Czukor-23.jpg" alt="" style="width:100%;">		
			</div>			
			<div class="item">
				<img src="img/vendegszoba/Czukor-33.jpg" alt="" style="width:100%;">
			</div>
		</div>

		<a class="left carousel-control" href="#myCarousel3" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel3" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
		</div>
	</div> -->
	
	<div class="index-story" id="galer">
		<!--<p>A siklósi kávézó költözése miatt jelenleg nem rendelkezünk az új heylről megfelelő képekkel.
		Feltöltésük hamarosan :)</p>-->
	</div>
<?php
include "outro.php";

?>
