<?php
    define('SITE_MODE', 'live');
    $path = '';

    switch(SITE_MODE):
        case 'loc':
            $path = 'http://localhost:8888/caterinaematteo';
        break;
        case 'live':
            $path = 'http://www.caterinaematteo110921.it';
        break;
    endswitch;
?>