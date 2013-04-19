<?php include("functions/_global.php"); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php echo $imageURL_local; ?>/assets/css/core.css">
        <script src="<?php echo $imageURL_local; ?>/assets/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <header role="banner">
            <h1 class="logo">
                <a href="<?php echo $imageURL_local; ?>">SNACSS</a>
            </h1>
            <a href="https://github.com/brandonferrua/SNACSS/fork" class="u-button u-button-success fork-me"><i class="icon-github"></i>Fork this project</a>
            <span class="updated-on"><i class="icon-certificate"></i>Last updated on: <strong>April 19th, 2013, 12:19 PST</strong></span>
        </header>
        <div class="site">
            <div class="wrapper">
                <?php include("_nav.php"); ?>