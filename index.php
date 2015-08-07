<?php

// quick guide: http://twig.sensiolabs.org/doc/intro.html#basic-api-usage

$twig_lib = __DIR__ . '/vendor/Twig/lib/Twig';
$twig_templates = __DIR__ . '/templates';
$twig_cache = __DIR__ . '/cache'; // remember to `chmod 777 cache` (make this directory writable)

require_once $twig_lib . '/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem($twig_templates);
$twig = new Twig_Environment($loader, array(
    'cache' => $twig_cache,
));

$output = $twig->render('index.html', array(fhdhdh
    'a_variable' => 'Hello World',
    'navigation' => array(
        array(
            'href' => 'http://twig.sensiolabs.org/doc/intro.html#basic-api-usage',
            'caption' => 'Basic Twig usage'
        ),
        array(
            'href' => 'http://twig.sensiolabs.org/',
            'caption' => 'Twig main webpage'
        )
    )
));

echo $output;
