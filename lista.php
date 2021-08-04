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
                            <li><a href="<?php echo $path; ?>/lista<?php echo SITE_MODE == 'loc' ? '.php' : ''; ?>" class="active"><span>La lista nozze</span></a></li>
                            <li><a href="<?php echo $path; ?>/viaggio<?php echo SITE_MODE == 'loc' ? '.php' : ''; ?>"><span>Il viaggio</span></a></li>
                        </ul>
                    </div>
                </nav>    
            </div>  
        </header>

    <main>
        <section>
            <div class="mycontainer container-m">
                <img class="section__fiore" src="<?php echo $path; ?>/img/fiori/fiore_viola.svg" alt="Viola">
                <h2 class="section__titolo">E LA LISTA NOZZE?</h2>
                <p>Ve lo ripeteremo più e più volte!<br>Per noi il fatto di poter <strong>condividere con voi</strong>  questo nostro giorno di festa è davvero il dono più gradito. </p>
            </div>
        </section>
    
        <section class="bg-pri">
            <div class="mycontainer container-m">
                <img class="section__box__icona" src="<?php echo $path; ?>/img/icone/regalo.svg" alt="Icona di un regalo">
                <h2 class="section__titolo">il regalo perfetto!</h2>
                <p>L’idea di regalo vi perseguita e non riuscite ad abbandonarla?</p>
                <p class="mt-10">In quel caso potrebbe esserci una soluzione: un aiuto nella realizzazione del nostro <strong>viaggio di nozze</strong>.</p>
            </div>
            <div class="mycontainer container-l">
                <div class="regalo__box">
                    <div class="regalo__box__column">
                        <h5>IBAN</h5>
                        <p>IT28 M030 5801 6041 0057 2088 761</p>
                    </div>
                    <div class="regalo__box__column">
                        <h5>causale</h5>
                        <p>matrimonio Caterina e Matteo</p>
                    </div>
                    <div class="regalo__box__column">
                        <h5>intestatario</h5>
                        <p>Matteo Furlani</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <img class="section__box__icona" src="<?php echo $path; ?>/img/icone/viaggio.svg" alt="Icona di due palloncini">
            <h3 class="h3--secfont"><a href="<?php echo $path; ?>/viaggio<?php echo SITE_MODE == 'loc' ? '.php' : ''; ?>">Il viaggio ></a></h3>
        </section>
        <div class="divider divider__lg"></div>
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