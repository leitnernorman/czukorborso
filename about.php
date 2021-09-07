 <?php
		 ob_start();
		include("intro.php");
		$buffer=ob_get_contents();
		ob_end_clean();

		$title = "Kedvenc gondolatok | Czukor Borsó";
		$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
   ?>
   
    <div class="czuk d-flex align-items-center">
        <div class="hero-thumbnail  equalize bg-img" style="background-image: url(img/czuk1.jpg);"></div>
        <div class="hero-content  equalize">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="line"></div>
                        <h2>„Belekóstolni az emlékekbe egy kávé mellett és egy finom süteménnyel a tányéron egyszerűen felülmúlhatatlan”</h2>
					</div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="czukor-about-us-area bg-img" style="background-image: url(img/Czukor-19.jpg);">  
		<div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-10 col-lg-7">
                    <div class="about-us-content bg-white">
                        <div class="section-heading text-left wow fadeInUp" data-wow-delay="300ms">
                            <div class="line"></div>
                            <h2>„Az egész egy vasárnap reggel kezdődött..”</h2>
                        </div>
                        <p class="wow fadeInUp" data-wow-delay="600ms">..amikor meghallottam reggelizés közben a vadgalambok búgását; azt a bizonyos hangot, amit minden egyes vakáció reggelén hallottam egyszeriben felidéződött minden.</p>
                        <p class="wow fadeInUp" data-wow-delay="600ms">A levélmintás függöny nagyszüleim hálószobájában, a nagypapám pincéjének hűvössége és szinte éreztem a kakaós krém ízét, amit nővérmmel ehettünk meg, a sütemény készítése közben. Láttam magam előtt a tájképes tapétát a nagyszobájukban, éreztem a kiállhatatlan kemény díszpárnát, amin nem lehetett kényelmesen aludni a vasárnapi ebéd után.
                            Olyan ez, mint amikor egy régen érzett ízt rögtön meg akarunk kóstoltatni másokkal.
                            Szeretnénk megbizonyosodni arról, hogy valós emléket érzünk-e és hogy azt mások is érzik-e. 
                            </p>
                        <p class="wow fadeInUp" data-wow-delay="600ms">Meg akarjuk osztani azt a bizonyos élményt, azt az ízt, azokkal, akik fontosak nekünk. Hisz nem csak az ízre emlékezünk, hanem az ahhoz köthető eseményre. Felidéződnek helyszínek, hangulatok és a történtekhez köthető ismerősök, családtagok.
                            Gyermekkorunk meghatározó ízei és eseményei ezek, melyek elraktározódtak és beépültek tudatunkba és személyiségünk építőkövei lettek. Olyan élmények, melyekkel nem találkozunk minden nap, mégis elegendő egy falatot megízlelnünk vagy egy illatot megéreznünk és egy teljes kép jelenik meg előttünk. A boldogság íze.
                            Mikor is éreztük magunkat boldognak? Mitől volt az a pillanat boldog számunkra? Milyen ízek, színek és illatok emlékeit őrizzük a gondtalan évekből?
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="czukor-about-us-area second-part bg-img" style="background-image: url(img/Czukor-1.jpg);">
      
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-12 col-md-10 col-lg-7">
                    <div class="about-us-content bg-white">
                        <div class="section-heading text-left wow fadeInUp" data-wow-delay="300ms">
                            <div class="line"></div>
                        </div>
                        <p class="wow fadeInUp" data-wow-delay="600ms">Nagymamával együtt töltött értékes percek, melyek a tanításról, segítésről és végtelen törődésről árulkodnak. Az elcsent tésztacsücskök, falatok, amiket bátran tunkolhatunk, mártogathatunk. Szabad játék a szinte soha el nem fogyó süteményhalmokkal.</p>
                        <p class="wow fadeInUp" data-wow-delay="600ms">A nagymamákról, mamákról és nagyikról megosztott történetekben rengeteg karakterjegy rajzolódott ki. Számos gesztust és érzelmet őriznek ezek az ízek, amit igazán csak tőlük kaphattunk meg.</p>
                        <p class="wow fadeInUp" data-wow-delay="600ms">Kirándulások és utazások, melyek megbontották a hétköznapokat. Izgalmas új helyek, melyek csodavilágot mutattak. Különleges és tökéletesnek hitt cukorálmok és otthonos vasárnap délutánok.
                            Történetek, emlékek igazi nyugodt vasárnapokról, amikor választhattunk a töménytelen tömény szeletek közül. Mindent elrendezős hét utáni jól megérdemelt finomságok.
                            </p>
                        <p class="wow fadeInUp" data-wow-delay="600ms">Magunk szedtük a friss málnát a gyümölcsös kert végében izgalmas szabad hónapok, felejthetetlen nyári szünidők. Csavargások utáni palacsintahegyek és porcukros epertálak.
                            Önállóságunk első lépései a jól beosztott vagy éppen elszórt zsebpénzünkkel.
                            Ízek, melyek a szabadság ízeit és emlékeit őrzik. 
                            és valahogy minden így kezdődött.
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
		
   <?php
		include "outro.php";
?>