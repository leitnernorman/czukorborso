 <?php
		 ob_start();
		include("intro.php");
		$buffer=ob_get_contents();
		ob_end_clean();

		$title = "Kínálatunk | Czukor Borsó";
		$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
   ?>
   
    <div class="czuk d-flex align-items-center">
        <div class="hero-thumbnail equalize bg-img" style="background-image: url(img/menu.jpg);"></div>
        
        <div class="services hero-content equalize">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="line"></div>
                        <h3>„Mi a jó egy kávéházban?<br>
                            Mi a jó?<br>
                            Az, hogy van.<br>
                            Az, hogy olyan, amilyen.”
                            </h3><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="czukor-services-area section-padding-50-0">
        <div class="container">
		<div> <p class="services-text">Kiváló alapanyagokból sütemények, kekszek, macaronok, borkorcsolyák, egyéb specialitások készülnek. Kávé különlegességekkel, teákkal, forró csokoládékkal, borokkal, jeges italokkal édesítik meg a hozzájuk betérők napját.</p>
                        <p class="services-text">Különleges helyi termékek és ajándékok is vásárolhatóak, így egy kedves ajándékkal, emlékkel, finomsággal térhetünk haza a kirándulásról. A Czukor Borsót Sütemény, tortarendelés miatt is érdemes kipróbálni, mert az ízek egy igazi kalandra hívnak.</p></div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-services-area wow fadeInUp" data-wow-delay="300ms">
                        <h4>Macaron</h4>
                        <img src="img/mac.jpg" alt="">                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-services-area wow fadeInUp" data-wow-delay="600ms">
                        <h4>Piték</h4>
						<img src="img/kinalat/torta.jpg" alt="">                        
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-services-area wow fadeInUp" data-wow-delay="900ms">
                        <h4>Cupcake</h4>
                        <img src="img/kinalat/cupcake.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-services-area wow fadeInUp" data-wow-delay="300ms">
                        <h4>Torták</h4>
                        <img src="img/kinalat/pite.jpg" alt="">    
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-services-area wow fadeInUp" data-wow-delay="600ms">
                        <h4>Kávék</h4>
                        <img src="img/kinalat/kave.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-services-area wow fadeInUp" data-wow-delay="900ms">
                        <h4>Kekszek</h4>
                        <img src="img/kinalat/kex.jpg" alt=""> 
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <div class="services-container">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="call-to-action-content">
                        <img src="img/kinalat/desserttable.jpg" alt="">
                        <h2>Esküvőkre - Czukor Borsó Desszertasztal</h2>
                        <p class="services-text">Süteményeink természetesen csak a legjobb alapanyagokból készülnek.
                                A szép tálalásához nagyméretű kovácsoltvas étagiere, különleges üveg tortatálak, tálalók állnak rendelkezésünkre.
                                </p>
                        <p class="services-text">És, hogy miből állhat egy desszertasztal?:
                                Torta & Cupcake & Macaron & Cake Pop & Pohárkrém & Pite 
                                Menyasszonyi tortáink lehetnek emeletesek, gazdagon díszítettek, különleges megjelenésűek, 
                                A díszek, dekorációk élővirágokkal is készülhetnek, évszaknak, hangulatnak, a rendezvény témájának megfelelően.
                                </p>        
                                <p class="services-text">
                                        Kísérőtortákat is készítünk igény szerint. 
                                        Teljes desszertasztal elkészítését és dekorálását is vállaljuk.
                                        <br>
                                        Örömteli készülődést kívánunk!
                                        
                                </p>
								
								<div class="sor">
									<div class="oszlop">
										<img src="img/eskuvo/1.jpg">
										<img src="img/eskuvo/2.jpg">														
									</div>
									<div class="oszlop">
										<img src="img/eskuvo/3.jpg">
										<img src="img/eskuvo/4.jpg">
									</div>
									<div class="oszlop">
										<img src="img/eskuvo/5.jpg">
										<img src="img/eskuvo/6.jpg">										
									</div>
									<div class="oszlop">										
										<img src="img/eskuvo/7.jpg">
										<img src="img/eskuvo/8.jpg">
									</div>
								</div>
                       
                   <!--     <h2>Vendégszoba</h2>
                        <h5>Pécsi kávézónk emeletén lehetőség van vendéngszobánk foglalására is</h5>
                        <h5>További információk és foglalás lehetséges az alábbi linken:</h5><a href="https://www.airbnb.hu/rooms/35562259?_set_bev_on_new_domain=1558591657_9tEtvH%2BWmGvsKwbi&source_impression_id=p3_1566741392_p%2Bvxp%2B%2F%2BL9d%2BjEf3">Szobafoglalás</a>
                        <h5>További képek megtekinthetőek a galéria menüpont alatt</h5> -->
    
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <?php
		include "outro.php";
?>