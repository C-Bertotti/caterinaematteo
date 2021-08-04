<?php include_once('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Caterina e Matteo</title>

        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $path; ?>/img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $path; ?>/img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $path; ?>/img/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo $path; ?>/img/favicon/site.webmanifest">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo $path; ?>/app.css">

        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

        <style>
            .divider {
                background-image: url("<?php echo $path; ?>/img/bg.jpg");
                background-size: cover;
            }

            .chiesa {
                background-image: url("<?php echo $path; ?>/img/foto/chiesa.jpeg");
                background-position-x: right;
                background-position-y: center;
            }
            
            .ristorante {
                background-image: url("<?php echo $path; ?>/img/foto/rifugiomaranza.jpg");
            }
            
            .img__caterina {
                background-image: url("<?php echo $path; ?>/img/foto/caterina.jpg");
                background-position-y: top;
            }
            
            .img__matteo {
                background-image: url("<?php echo $path; ?>/img/foto/matteo.jpg");
                background-position-x: left;
            }

            .marker {
                background-image: url("<?php echo $path; ?>/img/icone/pin.svg");
                background-size: cover;
                width: 31px;
                height: 39px;
                cursor: pointer;
            }

            .tappa__img.roma {
                background-image: url("<?php echo $path; ?>/img/foto/roma.jpg");
            }
            .tappa__img.napoli {
                background-image: url("<?php echo $path; ?>/img/foto/pompei.jpg");
            }
            .tappa__img.vigolana {
                background-image: url("<?php echo $path; ?>/img/foto/vigolana.jpg");
            }

            .heroBgFlower {
                padding: 40px 0;
                background-image: url("<?php echo $path; ?>/img/bg.jpg");
                background-size: cover;
                text-align: center;
            }
        </style>
    </head>
    <body>
    <header>
            <div class="mycontainer container-l">
                <nav>
                    <div class="nav__left">
                        <p class="nav__title">Caterina e Matteo</p>
                        <img id="burger" src="<?php echo $path; ?>/img/icone/menu.svg" alt="Icona menu">
                    </div>
                    <div id="nav__right">
                        <ul>
                            <li><a href="<?php echo $path; ?>/index<?php echo SITE_MODE == 'loc' ? '.php' : ''; ?>"><span>Home</span></a></li>
                            <li><a href="<?php echo $path; ?>/matrimonio<?php echo SITE_MODE == 'loc' ? '.php' : ''; ?>"><span>Il matrimonio</span></a></li>
                            <li><a href="<?php echo $path; ?>/lista<?php echo SITE_MODE == 'loc' ? '.php' : ''; ?>"><span>La lista nozze</span></a></li>
                            <li><a href="<?php echo $path; ?>/viaggio<?php echo SITE_MODE == 'loc' ? '.php' : ''; ?>" class="active"><span>Il viaggio</span></a></li>
                        </ul>
                    </div>
                </nav>    
            </div>  
        </header>

        <main>
            
    <div class="hero heroBgFlower">
        
    <div class="cerchio">
            <div class="cerchio__caption__wrapper viaggio">
        <div class="viaggio__caption__wrp">
            <p class="viaggio__title">2</p>
            <h1>Sposi <br> 
                Zaini <br> 
                città
            </h1>
        </div>
        
    </div>
    </div>
</div>
    <section>
        <div class="mycontainer container-m">
            <img class="section__fiore" src="<?php echo $path; ?>/img/fiori/papavero.svg" alt="Papavero">
            <h2 class="section__titolo main__title">la nostra luna di <br class="d-none-xs">“m...armellata”!</h2>
            <h5>(100% vegan)</h5>
            <p class="sec__box">Dopo aver viaggiato in lungo in largo e nelle più disparate modalità, ci siamo resi conto di aver dimenticato l’Italia dalla Pianura Padana in giù.</p>
            <p><strong>ROMA</strong> e <strong>NAPOLI!</strong><p>
                <p class="mt-10">
                Ne abbiamo tanto letto e sentito parlare ed ora non vediamo l’ora di farle diventare parte delle nostre avventure. <br class="d-none-xs"> 
                Il tutto come piace a noi… </p>
                <p class="mt-10"><strong>ZAINO IN SPALLA, SI PARTE!</strong> </p>
            <img class="section__cuore" src="<?php echo $path; ?>/img/icone/cuore.svg" alt="Icona cuore">
        </div>
    </section>
    <section class="slider slider__viaggio bg-pri">
        <img class="section__fiore" src="<?php echo $path; ?>/img/fiori/fiore_viola.svg" alt="Viola">
        <h2 class="section__titolo">Identikit</h2>
        <div class="mycontainer container-m">
            <div class="slider__wrapper">
                <!-- Slider sposa -->
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                    <!-- Slides -->
                        <div class="swiper-slide cover">
                            <div>
                                <img class="section__box__icona" src="<?php echo $path; ?>/img/icone/sposa_or.svg" alt="Icona di sposa">
                                <h3>Caterina</h3>
                                <p>la sposa</p>
                            </div>
                        </div>
                        <div class="swiper-slide slider__int bg-pri">
                            <div>
                                <img class="section__box__icona" src="<?php echo $path; ?>/img/icone/identikit.svg" alt="Icona di lente">
                                <h4>profilo</h4>
                                <p>Alla guida del gruppo c’è sicuramente lei!</p>
                                <p><strong>Viaggiatrice super organizzata</strong>, si adatta ad ogni circostanza ed evenienza.</p>
                            </div>
                        </div>
                        <div class="swiper-slide slider__int bg-pri">
                            <div>
                                <img class="section__box__icona" src="<?php echo $path; ?>/img/icone/pro.svg" alt="Icona con coccarda promosso">
                                <h4>punti forti</h4>
                                <p>Amante delle guide, realizza <strong>programmi certosini</strong>  per ogni singolo giorno!</p>
                                <p>La preparazione del kit da viaggio non può non passare dalle sue mani.</p>
                            </div>
                        </div>
                        <div class="swiper-slide slider__int bg-pri">
                            <div>
                                <img class="section__box__icona" src="<?php echo $path; ?>/img/icone/contro.svg" alt="Icona coccarda bocciato">
                                <h4>punti deboli</h4>
                                <p>La <strong>sveglia!</strong></p>
                                <p>Per renderla meno traumatica è necessaria una buona dose di coccole!</p>
                                <p>Anche il suo <strong>orientamento</strong> denota delle lacune, ma ci sta lavorando su (work in progress!)</p>
                            </div>
                        </div>
                        <div class="swiper-slide bg-pri slider__img__wrapper img__caterina">
                            <div class="slider__border"></div>
                        </div>
                    </div>
                
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <!-- Slider sposo -->
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                    <!-- Slides -->
                        <div class="swiper-slide cover">
                            <div>
                                <img class="section__box__icona" src="<?php echo $path; ?>/img/icone/sposo_or.svg" alt="Icona di sposo">
                                <h3>Matteo</h3>
                                <p>lo sposo</p>
                            </div>
                        </div>
                        <div class="swiper-slide slider__int bg-pri">
                            <div>
                                <img class="section__box__icona" src="<?php echo $path; ?>/img/icone/identikit.svg" alt="Icona di lente">
                                <h4>profilo</h4>
                                <p><strong>Reporter fotografico</strong>  di viaggio.</p>
                                <p>Cercatore dell’ottava meraviglia, usa in modo a volte esagerato le frasi <strong>“Che bel!”</strong>  o <strong>“L’é en paradis!”</strong> .</p>
                            </div>
                        </div>
                        <div class="swiper-slide slider__int bg-pri">
                            <div>
                                <img class="section__box__icona" src="<?php echo $path; ?>/img/icone/pro.svg" alt="Icona con coccarda promosso">
                                <h4>punti forti</h4>
                                <p><strong>Iperattivo</strong>, vive appieno ogni posto che visita.</p>
                                <p><strong>Insaziabile visitatore</strong> (impossibile per la sua compagna riuscire a dormire oltre le 7, quando va bene).</p>
                            </div>
                        </div>
                        <div class="swiper-slide slider__int bg-pri">
                            <div>
                                <img class="section__box__icona" src="<?php echo $path; ?>/img/icone/contro.svg" alt="Icona coccarda bocciato">
                                <h4>punti deboli</h4>
                                <p>Si propone come “abile” conoscitore della lingua <strong>inglese</strong>!</p>
                                <p>Smisurata la sua <strong>ansia</strong> di dimenticare le cose, ma per fortuna può contare sulla capacità organizzativa della sua compagna.</p>
                            </div>
                        </div>
                        <div class="swiper-slide bg-pri slider__img__wrapper img__matteo">
                            <div class="slider__border"></div>
                        </div>
                    </div>
                
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                
            </div>
        </div>
    
    </section>
    <div class="divider divider__med"></div>
    <section>
        <div class="mycontainer container-l">
            <img class="section__fiore" src="<?php echo $path; ?>/img/fiori/papavero.svg" alt="Papavero">
            <h2 class="section__titolo">Tutti in carrozza!</h2>
            <div class="tappa__wrp">
                <div class="bg-pri tappa__box">
                    <p class="tappa__date">13 settembre</p>
                    <p class="tappa__title">TRENTO - ROMA</p>
                    <div class="tappa__text">
                        <p>Ci lasciamo alle spalle le alpi e come sempre sappiamo che ci mancheranno, direzione Roma.</p> 
                        <p>Il viaggio in treno ci darà il tempo per mettere ordine nel bagaglio di emozioni dei giorni appena conclusi.</p> 
                        <p>Trascorrere la nostra prima settimana di nozze tra i colli capitolini ha una nota magica.</p>  
                        <p>Siamo sicuri che i passi saranno tanti nella città eterna dove ogni posto racchiude un pezzo di storia!</p>
                    </div>
                </div>
                <div class="tappa__img roma">
                </div> 
            </div>
            <div class="tappa__wrp">
                <div class="bg-pri tappa__box">
                    <p class="tappa__date">14 settembre - 2 ottobre</p>
                    <p class="tappa__title">ROMA - NAPOLI</p>
                    <div class="tappa__text">
                        <p>Dopo sette notti lasciamo la capitale per dirigerci verso Napoli, dal finestrino del treno chissà quali paesaggi potremmo ammirare mentre pregustiamo i sapori di una città tutta da scoprire.</p> 
                        <p>Ci prenderemo del tempo anche per visitare i suoi dintorni. Procida, Ischia, Capri, il Vesuvio, Pompei e la costiera Amalfitana non potranno mancare nel nostro itinerario.</p> 
                    </div>
                </div>
                <div class="tappa__img napoli">
                </div> 
            </div>
            <div class="tappa__wrp">
                <div class="bg-pri tappa__box">
                    <p class="tappa__date">3 ottobre</p>
                    <p class="tappa__title">NAPOLI - TRENTO</p>
                    <div class="tappa__text">
                        <p>Sappiamo già che le settimane in viaggio saranno volate e nemmeno ci saremo resi conto di essere saliti sull’ultimo treno direzione Trento.</p> 
                        <p>Ma la cosa che più conta è che questa volta torniamo a casa da MOGLIE e MARITO.</p>
                    </div>
                </div>
                <div class="tappa__img vigolana">
                </div> 
            </div>
        </div>
    </section>
    <div class="divider divider__med"></div>
    <section>
        <img class="section__box__icona" src="<?php echo $path; ?>/img/icone/uccellini.svg" alt="Icona di uccellini">
        <h3 class="h3--secfont">IL NOSTRO VIAGGIO 
            CONTINUA...</h3>
    </section>



    

        </main>
        
        <footer>
            <div class="mycontainer container-m">
                <div>
                    <img class="footer__sposi" src="<?php echo $path; ?>/img/icone/sposa.svg" alt="Icona di una sposa">
                    <p>392 03 25 501</p>
                </div>
                <div>
                    <p>346 01 64 085</p>
                    <img class="footer__sposi" src="<?php echo $path; ?>/img/icone/sposo.svg" alt="Icona di uno sposo">
                </div>    
            </div>
        </footer>

        
        <script
            src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous">
        </script>

        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>   

        <script src="<?php echo $path; ?>/app.js"></script> 
    </body>
</html>
