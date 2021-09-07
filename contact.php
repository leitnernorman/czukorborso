 <?php

		 ob_start();

		include("intro.php");

		$buffer=ob_get_contents();

		ob_end_clean();



		$title = "Kapcsolat | Czukor Borsó";

		$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);



    echo $buffer;

   ?>

    <div class="czuk d-flex align-items-center contact">

       

        <div class="hero-thumbnail equalize bg-img" style="background-image: url(img/Czukor-2.jpg);"></div>

        

        <div class="hero-content equalize">

            <div class="container-fluid h-100">

                <div class="row h-100 align-items-center justify-content-center">

                    <div class="col-12 col-md-8" id="contact-open">

                        <h3>Nyitvatartás</h3>

				
				<div class="sor">
					<div class="col" style="width:50%"><p>Csütörtök</p><p>Péntek</p><p>Szombat</p><p>Vasárnap</p></div>
					<div class="col" style="width:50%"><p>14:00 - 20:00</p><p>14:00 - 20:00</p><p>09:00 - 20:00</p><p>09:00 - 20:00</p></div>
				</div>
				
				<p> Ünnepnapokon a nyitvatartás változhat!</p>

                         <div class="line"></div>

                         <h2>Elérhetőségek:</h2>

                         <p>Tel: +36/ 70 9434504 <br>

                         E-mail: czukorborso.mariagyud@gmail.com</p>

                         Kövessetek minket a különböző közösségi médiákon is! </p>

                         <a href="https://www.facebook.com/SiklosMariagyud/" title="Facebook"><img src="img/facebook-logo-button.png" width="90" height="90"></a>

                         <a href="https://www.instagram.com/czukorborso_mariagyud/" title="Instagram"><img src="img/instagram-logo.png" width="90" height="90"></a>

                            

                    </div>

                </div>

            </div>

        </div>

    </div>



    <section class="czukor-contact-area">

	



 

       			<div class="section-heading text-left wow fadeInUp" data-wow-delay="300ms">

                             <div class="line"></div>

                                    <h2 class="contactheader">Czukor Borsó Siklós-Máriagyűd</h2>

									<p style="text-align:center">Siklós, Arany János utca 19, 7800</p>

                                    

                                </div>

                                <div class="container">

        <div class="row">

            <div class="col-md-6">

             <img src="img/newczuk.jpg">

             </div>

             <div class="col-md-4">

             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d825.8721138784841!2d18.269279503588184!3d45.87347829702463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475d361fc5117843%3A0x144e893ddf24d41!2zU2lrbMOzcywgQXJhbnkgSsOhbm9zIHUuIDE5LCA3ODAw!5e0!3m2!1shu!2shu!4v1566740287357!5m2!1shu!2shu" width="450" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

            </div>

         </div>

    </div>



   <?php

		include "outro.php";

?>