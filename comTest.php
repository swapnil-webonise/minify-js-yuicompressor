<?php

// INCLUDE COMPRESSOR CLASS
include('yuicompressor.php');
$options = array('type' => 'js',
                             'linebreak' => false,
                             'verbose' => false,
                             'nomunge' => false,
                             'semi' => false,
                             'nooptimize' => false);

// INVOKE CLASS
$comp = new compressor('/var/www/yuicompressor-2.4.8.jar', '/home/weboniselab/compress', $options);

//add file
//$comp->addFile('/home/weboniselab/js/autocomplete.org.js');

// ADD Folder
$comp->addFolder('/home/weboniselab/js');

// COMPRESS
$comp->compress();
?>