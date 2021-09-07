 <?php
		 ob_start();
		include("intro.php");
		$buffer=ob_get_contents();
		ob_end_clean();

		$title = "Rólunk írták | Czukor Borsó";
		$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
   ?>
    <div class="czuk d-flex align-items-center">
        <div class="hero-thumbnail equalize bg-img" style="background-image: url(img/bg-img/reviewthumb.jpg);"></div>
        
        <div class="hero-content equalize">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="line"></div>
                        <h2>Rólunk írták</h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <section class="elements-area ">
        <div class="container review-content">

       
            <div class="row">
                <div class="col-12">
                    <div class="elements-title">
                       
                    </div>

                    <div class="row">

                        <div class="col-12 col-md-6">
                            <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel single-accordion">
                                        <h6>
                                            <a class="title">Megérkezni, lelassulni  | Roadster</a>
                                        </h6>
                                        <div>
                                            <img src="img/bg-img/roadster.jpg">
                                            <p style="font-weight: bold">A ma már Siklóshoz tartozó Máriagyűd sokáig csak a keresztények zarándokhelye volt – ma már az újszerű, mégis házias ízekre vadászó édesszájúaké is.</p>
                                            <p> Mindez elsősorban B. András Mártának köszönhető, aki bár évekig lakberendezőként dolgozott, végül egy alig 1500 fős falu sokáig romos parasztházában és a sütésben találta meg igazi hivatását. A Czukor Borsó tíz éve, egy pici, pécsi kávézóból indult, igazi otthonra mégiscsak idén júliusban talált. Márta ma már a gyönyörűen felújított máriagyűdi házban él, és néhány fős lelkes csapatával itt is készíti egyszerre hagyományos és innovatív süteményeit. A szezonális gyümölcsökkel készített sütikből minden napra négy-ötféle jut, ahogy két-három különböző macaron és jó minőségű vajjal készített keksz is választható a kávék, friss turmixok, saját készítésű teák és limonádék mellé. A vörösboros-csokis keksz és a mákos-rozmaringos pite fölött könnyen repül az idő, itt nem ritka, hogy a vendégek több órát is eltöltenek – pedig a régi füstölőben kialakított kisbolt és kiállítótér még el sem készült teljesen.
</p>
											<!--<a class="cikk" href="https://drunkenkitchen.blog.hu/2015/12/23/bekebeli_edes_es_zold">A teljes cikk</a>-->
                                        </div>
                                    </div>
								<div class="panel single-accordion">
                                    <h6><a class="title">Márta kétszer ment neki a lehetetlennek – egyre többek menedéke a Czukor Borsó | Forbes                             
                                    </a></h6>
                                    <div>
                                        <img src="img/forbes1.jpg">
                                        <p style="font-weight: bold">A Villányi borvidék legjobb cukrászdájában a hangulat egyedi, a szemlélet nyugati. B. András Márta gyerekkori hobbiját ötvözte felnőtt élete vállalkozói tapasztalataival, amikor szinte a lehetetlenbe vágott bele: Baranya megye 1500 fős falujában, majd a fizetőképes keresletet egyre inkább nélkülöző Pécs külvárosában nyitott jó ízlésű, otthonos cukrászdát. Sőt, a célja ennél is több volt: a béke szigeteit akarta megteremteni, egyfajta sokoldalú közösségi otthont. A Czukor Borsó idén fordulhat igazán célegyenesbe.</p>
                                        <p>A Baranya megyei Siklós külső városrészére, a korábban önálló Máriagyűdre háromféle zarándok jár. Mindhárom messziről érkezik, mindhárom céltudatosan jön, mindhárom békét keres, és ha már odaért, nem siet semmivel. Mégis mindegyik máshová tart. A keresztények a kegyhelyen felállított, távolról is jól látható bazilikát látogatják a dombtetőn. A gólyák is magasan keresnek, a póznákon őket váró fészkeket célozzák. A gasztroturisták viszont a völgyben, a fő út közelében B. András Márta kávé- és süteményillatú menedékébe nyitnak be. Egykor Márta is épp azt kereste itt, amit ők.</p>
                                        <img src="img/forbes2.jpg">
										<p>„Hosszú ideig éltem Németországban, építőiparban dolgoztam – meséli a Márta, miközben mákos, diós és csokis kekszeit teszi elém egy csésze kávéval. – A süteményreceptjeim a német-bajor és az itteni, baranyai receptek keverékei, de van bennük egy kis francia töltet, vagy például amerikai, mint ezek a kekszek.” Máriagyűdi kávézó-süteményezőjében, a Czukor Borsóban ugyanígy visszaköszön a múltja: a lendület és a szakértelem, amivel a 122 éves parasztházat renováltatta, a lakberendezési érzék, amivel később pécsi vállalkozását működtette, és a cukrászat szeretete, ami ugyan csak hobbiként, de gyerekkora óta kísérte.										</p>
                                        <a class="cikk" href="https://madeinpecs.hu/etelital/teszteltuk:-czukor-borso">A teljes cikk</a>
                                    </div>
                                </div>
                                <div class="panel single-accordion">
                                    <h6><a class="title">Teszteltük: Czukor Borsó | Made in Pécs                             
                                    </a></h6>
                                    <div>
                                        <img src="img/60970_czukor_nagy.jpg">
                                        <p style="font-weight: bold">Minden a helyére került a frissen nyitott Czukor Borsóban, és a vendégek is hamar fölfedezték. A kihívás adott: folyamatosan jó sütikkel ellátni az édesség-zarándokokat.</p>
                                        <p>Máriagyűdön már van egy Czukor Borsó és most Pécsre is megérkezett, méghozzá a nem is oly lankás domboldalba, ahová már célirányosan érkezik az ember, nem csak úgy erre sétál.</p>
                                        <p>És jól tudják ezt már az alig pár hetes nyitva tartás után a pécsiek, hiszen folyamatos a jövés-menés két egymást követő „sima” hétköznapon is. A terasz-szezon pedig csak dob még egyet a dolgon, így minden körülmény adott egy édes zarándokhely kialakulásához.</p>
                                        <a class="cikk" href="https://madeinpecs.hu/etelital/teszteltuk:-czukor-borso">A teljes cikk</a>
                                    </div>
                                </div>                              
                                <div class="panel single-accordion">
                                    <h6><a class="title">Ennél egy jót? Ruccanj ki Pécsről! | PécsMA </a></h6>
                                    <div>
                                        <img src="img/bg-img/czukorborsó-720x481.jpg">
                                        <p style="font-weight: bold">A máriagyűdi Czukor Borsó október elején nyitott, tehát valóban teljesen új helynek számít a környéken. Kézi készítésű sütemények, cupcake-ek, macaronok, illetve kekszek és különleges bonbonok színesítik a palettát. A hely tulajdonosai tematikus jellegű napokkal is készülnek, ami mind a programokban, mind a kínált ételekben megmutatkozik. Hamarosan a birsalma körül forog majd minden, novemberben pedig természetesen a sütőtök lesz a középpontban.</p>
                                        <p>A Czukor Borsó nehezen jellemezhető egy szóval, nem csak az ízlelő bimbókat, hanem a szemet és a fület, de főként a lelkeket szeretnénk kényezteti az ötletgazdák. A kávézó és kézműves bolt mellett olyan helyiségek is rendelkezésre állnak, ahol a gyermekeknek kézműves foglalkozásokat lehet tartani, ahol lehet bonbont önteni, teakeverékeket csinálni.</p>
                                        <p>Az udvaron kialakítottak egy játszóteret, ami kiegészíti a családos programokat, vagy egyszerűen csak elfoglaltságot kínál a kicsiknek, amíg a szülők elkortyolnak egy bögre finom teát.</p>
                                        <a class="cikk" href="https://www.pecsma.hu/korzo/gasztro/ennel-egy-jot-ruccanj-ki-pecsrol/">A teljes cikk</a>
                                    </div>
                                </div>
                                <div class="panel single-accordion">
                                    <h6>
                                        <a class="title">Czukorborsó cukrászda, Máriagyüd | bicsarattila.com</a></h6>
                                    <div>
                                        <img src="img/bg-img/1.jpg">
                                        <p style="font-weight: bold">Máriagyüdön rátaláltam B.András Márta és Latorczai-Rácz Lilla ékszerdobozára, a Czukorborsó cukrászdára. Amint beléptem az ajtón, egy pillanat alatt gyerekké változtam, alig tudtam abbahagyni a finomságok kóstolását és a kérdezést. Egy jó ízléssel berendezett, otthonos hely, ahol érződik a borászat, cukrászat, evés és munka iránti szeretet, és ahol a kulcsszó a kardamom és a mascarpone. </p>
                                        <p></p>
                                        <p></p>
                                        <a class="cikk" href="https://www.bicsarattila.com/new-blog/2018/3/22/czukorbors-cukrszda-mriagyd">A teljes cikk</a>
                                    </div>
                                </div>
								<div class="panel single-accordion">
                                    <h6>
                                        <a class="title">Czukor Borsó Kávéház | gyerekkel.com</a>
                                    </h6>
                                    <div>                                        
                                        <p style="font-weight: bold">Bemutatni egy cukrászdát, egy kávéházat valójában nem lehet. A megismeréshez az élmény kell: ott ülni a télikert kandallója előtt, vagy a nyári napsütésben az árnyas teraszon, belélegezni a kávé és a sütemények illatát, időt tölteni beszélgetésbe merülve, vagy a gyerekek játékát szemlélve.</p>
                                        <p>Az isteni desszertek mellett játszótér csalogatja a legkisebbeket, valamint kényelmes eldugott lugasok a privát beszélgetésre vágyókat. A kevésbé édesszájúak akár borozhatnak is, de amit kár lenne kihagynotok az a macaron variációk, valamint a gesztenyés "cukorborsó" tiramisu.</p>
                                        <p></p>
                                        <a class="cikk" href="https://gyerekkel.com/listing/czukor-borso-kavehaz/">A teljes cikk</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                                <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
								
                                    <div class="panel single-accordion">
                                        <h6>
                                            <a class="title">Békebeli, édes és zöld: a máriagyűdi Czukorborsó | Drunken Kitchen</a>
                                        </h6>
                                        <div>
                                            <img src="img/bg-img/dsc_0189.jpg">
                                            <p style="font-weight: bold">A CzukorBorsóba belépni pont olyan, mint a Lappföldi Mikulás házába. Az összes felnőtt egy pillanat alatt gyerekké változik, a másikat lökdösi, "menj előre inkább teee!", aztán vagy tátott szájjal veszik el a hangulatban, vagy a finomságok kóstolgatását nem tudja abbahagyni, esetleg a kérdezősködést. De az biztos, hogy nem siet haza a máriagyűdi szívcsakrából.</p>
                                            <p>Nagy zöld asztalon adventi koszorú, a háttérben békebeli, felújított tálalószekrényen karácsonyi fényben úsznak a kézműves bonbonok, pöttyös bögrében habos kakaó, a cserépkályhában tűz, a kályha előtt mintha a Mikulás nagy piros fotelje állna. Decemberben egyébként tényleg van, hogy a Mikulás ül abban a fotelben, az a habos kakaó pedig az ő kezében gőzölög.</p>
                                            <p>A máriagyűdi CzukorBorsó egy cukrászda, kávézó, vagy több is annál. A ház középső része bor- és édességbolt, előrébb a cukrászműhely kapott helyett, legelöl pedig egy vendégház lesz, ha minden jól megy. Az udvaron jutott hely játszótérnek, hátul a kertben pedig tűzrakó- és piknikező helynek. A hosszú épület hátsó része maga a vendéglátóhelyiség, bár ránézésre inkább ez is egy jó ízléssel berendezett otthon, ahol a szeretet koncentrálódik. Nemcsak a borászat, a cukrászat, az evés vagy a munka szeretete, hanem a családi szeretet is.</p>
                                            <a class="cikk" href="https://drunkenkitchen.blog.hu/2015/12/23/bekebeli_edes_es_zold">A teljes cikk</a>
                                        </div>
                                    </div>
									<div class="panel single-accordion">
                                        <h6>
                                            <a class="title">Teszt: Czukor Borsó, Siklós-Máriagyűd | Salt & Sugar</a>
                                        </h6>
                                        <div>
                                            <img src="img/bg-img/DSC_0136-768x514.jpg">
                                            <p style="font-weight: bold">Mivel jelenleg két három év alatti gyermekkel rendelkezünk, elsődlegesen a baranyai (és majd nyáron a balatoni) érdekes gasztro érdekességeket szeretném feltérképezni. Külön nehezítés, hogy a Férjem semmi édességet nem eszik, de majd a borok megkóstolására befogom.</p>
                                            <p>A Czukor Borsó Siklós-Máriagyűdön található,  Kicsit trükkös odatalálni, mert az út kettéágazik, és a tábla elhelyezése kissé megzavart minket, de gyorsan lehetett ezen korrigálni, csak “átvágtunk” a másik útra és már meg is találtuk. Az udvaron homokozó, gyerekház, sajnos nem volt túl  idő, de ezt elraktároztam magamban, a nyár folyamán még biztos kilátogatunk. Biciklisút is van a közelben, ami a Villány – Siklós – Harkány vonalon vezet, szóval a hely ezekből a falvakból bicajjal is megközelíthető (térkép itt, a hely valahol a 12-es helyszín környékén a kegytemplom alatt található). Jó kis programnak hangzik, nem?</p>
                                            <img src="img/bg-img/DSC_0137-768x514.jpg">
                                            <p>Belépve egy aprócska, ha jól emlékszem 6 asztalból álló szobában találjuk magunkat (az asztalok között van 2,4 és 6 személyes is), ami meglepetésemre, majdhogynem tele van. Csütörtök késő délután van, igaz, cupcake napokat hirdettek, de őszintén nem gondoltam, hogy ilyen sok vendég lesz rajtunk kívül is. A pult melletti kis asztalon cupcake-ek hada, macaronok találhatóak (általában sós dolgok és torták is vannak, de most a cupcake volt a főszereplő), és vannak még kézműves Kakas Bonbonok, amiket már máskor is kóstoltam, és bátran ajánlom bárkinek.</p>
                                            <a class="cikk" href="https://saltandsugar.hu/2016/05/teszt-czukor-borso-siklos-mariagyud/">A teljes cikk</a>
                                        </div>
                                    </div>                                    
                                    <div class="panel single-accordion">
                                        <h6>
                                            <a class="title">Édes, Mint A Cukorborsó | Chic & Charm</a>
                                        </h6>
                                        <div>
                                            <img src="img/bg-img/Mariagyud_Czukor-Bors-_21.jpg">
                                            <p style="font-weight: bold">Bár A Czukor Borsó Még Csak Most Ünnepli Első Születésnapját, Mégis, Mind Máriagyűdön, Mind A Környező Városokban Már Híre Van, Milyen Finomságok Készülnek B. András Márta És Latorczai-Rácz Lilla Cukrászdájában. A Két Hölgy Ugyanis Arra Adta A Fejét, Hogy Cukrászdát Nyitnak Közösen, Nem Is Akár Milyet.</p>
                                            <p>Ahogy felfele caplatunk a Máriagyűdi Kegytemplomhoz, a felé vezető úton az egész házat betölti a süteményillat. Kekszek, színes macaronok, piték és torták várják az éhes turistát. A habkönnyű vörösboros csokoládépiskótát, mascarpone krémmel a tetején kár lenne kihagyni, mint ahogyan a frissítő házi limonádét sem érdemes visszautasítani.</p>
                                            <img src="img/bg-img/IMG_20160730_165139338.jpg">
                                            <p>Ide pihenni, kikapcsolódni jön az ember. Miközben nyugodt lassúsággal falatozzuk az édességeket, az ember szeme el-elkalandozik. A tálalópulton sorakozó romantikus edénykék, tányérkák, csészék és bonbontartók, a kredencen pihenő levendulaillatú kencék, a nagymama csipke terítőjével letakart asztalon illatozó virágcsokor mind-mind olyan szépségek, melyek gyönyörködtetik a szemet, és arra késztetnek, hogy lelassuljunk és megpihenjünk.</p>
                                            <a class="cikk" href="https://chic-and-charm.hu/edes-mint-a-cukorborso/">A teljes cikk</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
        <div class="rating"><div class="elfsight-app-33956960-a2a2-4aeb-aca2-3378f2e69cdf"></div></div>
    </section>
  
   <?php
		include "outro.php";
?>