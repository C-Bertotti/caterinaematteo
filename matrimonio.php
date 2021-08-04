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

        <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />

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
                <div class="mycontainer container-l ">
    <nav>
        <div class="nav__left">
            <p class="nav__title">Caterina e Matteo</p>
            <img id="burger" src="<?php echo $path; ?>/img/icone/menu.svg" alt="Icona menu">
        </div>
        <div id="nav__right">
            <ul>
                <li><a href="<?php echo $path; ?>/index<?php echo SITE_MODE == 'loc' ? '.php' : ''; ?>" class=""><span>Home</span></a></li>
                <li><a href="<?php echo $path; ?>/matrimonio<?php echo SITE_MODE == 'loc' ? '.php' : ''; ?>" class="active"><span>Il matrimonio</span></a></li>
                <li><a href="<?php echo $path; ?>/lista<?php echo SITE_MODE == 'loc' ? '.php' : ''; ?>" class=""><span>La lista nozze</span></a></li>
                <li><a href="<?php echo $path; ?>/viaggio<?php echo SITE_MODE == 'loc' ? '.php' : ''; ?>" class=""><span>Il viaggio</span></a></li>
            </ul>
        </div>
    </nav>    
</div>  
        </header>

        <main>
            
    <section class="bg-pri">
        <div class="mycontainer container-l">
            <img class="section__fiore" src="<?php echo $path; ?>/img/fiori/papavero.svg" alt="Papavero">
            <h2 class="section__titolo">MA QUANTO MANCA?</h2>
            <div class="section__box date__box">
                <div class="date__wrapper">
                    <div class="date__left">
                        <p>giorni</p>
                        <p class="date" id="date-d">0</p>
                    </div>
                    <div class="date__right">
                        <div>
                            <p>ore</p>
                            <p class="date" id="date-h">0</p>
                        </div>
                        <div>
                            <p>minuti</p>
                            <p class="date" id="date-m">0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="divider divider__small"></div>
    <section class="slider slider__matrimonio">
        <div class="mycontainer container-m">
            <div class="slider__wrapper">
                <!-- Slider ritrovo -->
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                    <!-- Slides -->
                        <div class="swiper-slide cover">
                            <div>
                                <img class="section__box__icona" src="<?php echo $path; ?>/img/icone/ritrovo.svg" alt="Icona di due palloncini">
                                <h3>IL RITROVO</h3>
                            </div>
                        </div>
                        <div class="swiper-slide slider__int bg-pri">
                            <div>
                                <img class="section__box__icona" src="<?php echo $path; ?>/img/icone/sposa_or.svg" alt="Icona della sposa">
                                <h4>Per la sposa</h4>
                                <p>ore 9:00<br>Via Galassa, 18/A - Trento</p>
                            </div>
                        </div>
                        <div class="swiper-slide slider__int bg-pri">
                            <div>
                                <img class="section__box__icona" src="<?php echo $path; ?>/img/icone/sposo_or.svg" alt="Icona dello sposo">
                                <h4>Per lo sposo</h4>
                                <p>ore 9:00<br>Via al Dos del Pin, 18 - Valsorda</p>
                            </div>
                        </div>
                    </div>
                
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <!-- Slider cerimonia -->
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                    <!-- Slides -->
                        <div class="swiper-slide cover">
                            <div>
                                <img class="section__box__icona" src="<?php echo $path; ?>/img/icone/chiesa.svg" alt="Icona di una chiesa">
                                <h3>La cerimonia</h3>
                            </div>
                        </div>
                        <div class="swiper-slide slider__int bg-pri">
                            <div>
                                <h4>Sabato 11 settembre 2021</h4>
                                <p> alle ore 10:00</p>
                                <p>a Bosentino presso il<br><strong>SANTUARIO <br class="d-none-xs"> MADONNA DEL FELES</strong></p>
                            </div>
                        </div>
                        <div class="swiper-slide bg-pri slider__img__wrapper chiesa">
                        </div>
                    </div>
                
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <!-- Slider ristorante -->
                <div class="swiper-container">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                    <!-- Slides -->
                        <div class="swiper-slide cover">
                            <div>
                                <img class="section__box__icona" src="<?php echo $path; ?>/img/icone/ristorante.svg" alt="Icona di un piatto con posate">
                                <h3>IL RISTORANTE</h3>
                            </div>
                        </div>
                        <div class="swiper-slide slider__int bg-pri">
                            <div>
                                <h4>RIFUGIO MARANZA</h4>
                                <p>Siete pronti a mettere alla prova le vostre papille gustative?</p>
                            </div>
                        </div>
                        <div class="swiper-slide bg-pri slider__img__wrapper ristorante">
                        </div>
                    </div>
                
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="map__sec">
        <div>
            <img class="section__fiore" src="<?php echo $path; ?>/img/fiori/fiore_viola.svg" alt="Viola">
            <h2 class="section__titolo">i luoghi</h2>
            <div id='map' class="map"></div>
        </div>
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

        
            <script src="<?php echo $path; ?>/js/matrimonio.js"></script> 
        <script
            src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous">
        </script>

        <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>   

        <script src="<?php echo $path; ?>/matrimonio.js"></script> 
        <script src="<?php echo $path; ?>/app.js"></script> 

    </body>
</html>
