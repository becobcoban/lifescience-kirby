<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $page->title()->html() ?> - <?php echo $site->title()->html() ?></title>
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
    <?php echo css('assets/css/bootstrap-datepicker.standalone.min.css') ?>
    <?php echo css('assets/css/slick.css') ?>
    <?php echo css('assets/css/main.css') ?>
    <!-- Google Web Fonts -->
    <script type="text/javascript">
    WebFontConfig = {
    google: { families: [ 'Open+Sans:400,700,800:latin', 'Francois+One::latin' ] }
    };
    (function() {
    var wf = document.createElement('script');
    wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
    })();
    </script>
</head>
<body>
    <header class="header" role="banner">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <a class="header-logo" href="<?php echo url() ?>">
                        <img class="header-logo__image" src="<?php echo url('assets/images/logo.png') ?>" alt="<?php echo $site->title()->html() ?>">
                    </a><!-- /.header-logo -->
                    <a class="btn btn--book hidden-md hidden-lg" href="#">Book an Appointment</a>
                    <?php snippet('menu') ?>
                </div>
            </div>
        </div><!-- /.header -->
    </header>