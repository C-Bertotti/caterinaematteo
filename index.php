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
       <main>
            <div class="hero heroBgFlower">
                <div class="cerchio">
                    <div class="cerchio__caption__wrapper">
                        <img class="icona" src="<?php echo $path; ?>/img/icone/uccellini.svg" alt="Icona di due uccellini che si danno un bacino">
                        <h1>Caterina<br>Matteo</h1>
                        <p>11 settembre 2021</p>    
                    </div>
                </div>
            </div>
            <section>
                <div class="mycontainer container-m">
                    <img class="section__fiore" src="<?php echo $path; ?>/img/fiori/papavero.svg" alt="Papavero">
                    <h2 class="section__titolo">Grazie di cuore!</h2>
                    <p>Per noi é una vera <strong>gioia</strong> sapere che la nostra grandissima <strong>famiglia</strong>  ci accompagna in questa meravigliosa <strong>tappa</strong> del nostro cammino.</p>
                    <img class="section__cuore" src="<?php echo $path; ?>/img/icone/cuore.svg" alt="Icona cuore">
                </div>
            </section>
            <section class="bg-pri">
                <div class="mycontainer container-l">
                    <img class="section__fiore" src="<?php echo $path; ?>/img/fiori/fiore_viola.svg" alt="Viola">
                    <h2 class="section__titolo">Il nostro giorno</h2>
                    <div class="section__box__wrapper">
                        <a href="<?php echo $path; ?>/matrimonio<?php echo SITE_MODE == 'loc' ? '.php' : ''; ?>" class="section__box">
                            <img class="section__box__icona" src="<?php echo $path; ?>/img/icone/anelli.svg" alt="Icona di due anelli">
                            <h3>Il matrimonio</h3>
                            <p>La cerimonia<br>e il ricevimento.</p>
                        </a>
                        <a href="<?php echo $path; ?>/lista<?php echo SITE_MODE == 'loc' ? '.php' : ''; ?>" class="section__box">
                            <img class="section__box__icona" src="<?php echo $path; ?>/img/icone/lista-nozze.svg" alt="Icona di una lettera">
                            <h3>La lista nozze</h3>
                            <p>“‘Sa ghe regalan?<br>I g’ha za tut!”</p>                    
                        </a>
                        <a href="<?php echo $path; ?>/viaggio<?php echo SITE_MODE == 'loc' ? '.php' : ''; ?>" class="section__box">
                            <img class="section__box__icona" src="<?php echo $path; ?>/img/icone/viaggio.svg" alt="Icona di una macchina fotografica">
                            <h3>Il viaggio</h3>
                            <p>Dove inizieremo<br>la nostra nuova avventura?</p>
                        </a>
                    </div>
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