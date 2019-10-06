<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="" ng-app="oregonGoApp"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Oregon Go</title>

        <meta name="author" content="Glenn Peters">
        <meta name="description" content="Information and resources for the board game of Go (also known as: wei qi, or baduk) in
        Oregon and the surrounding region.">
        <meta name="keywords" content="Portland Go Club,Willamette Valley Go Club,WVGC,Oregon,Northwest,Portland,
        Corvallis,Eugene,Rogue Valley,Sunset Go Club,Beaverton,go club,go,,igo,goe,wei qi,wei chi,baduk,paduk,Go Masters,tournament,AGA">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Facebook Open Graph -->
        <meta property="fb:app_id"             content="353297841714562" />
        <meta property="og:url"                content="http://oregongo.org/" />
        <meta property="og:title"              content="Oregon Go" />
        <meta property="og:description"        content="Information and resources for the Oregon Go Community and the Portland Go Club." />
        <meta property="og:image"              content="http://oregongo.org/img/two_white_stones_on_goban.jpg" />
        <meta property="og:image:type"         content="image/jpeg" />
        <meta property="og:image:width"        content="2048" />
        <meta property="og:image:height"       content="1530" />

        <link rel="shortcut icon" href="/img/icons/favicon.ico">
        <!-- <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <style>
            body {
                background-color: #000;
                color: #ccc;
                padding: 0;
            }
        </style>
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        <!-- <link rel="stylesheet" href="/css/vendor/lity.min.css"> -->
        <link rel="stylesheet" href="/css/oregongo.css">
        <link rel="stylesheet" href="/css/oregongo-patch.css">

        <!-- <script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script> -->

        <script src="/js/vendor/ng/angular.min.js"></script>
        <script src="/js/vendor/ng/angular-route.min.js"></script>

        <!-- <script src="/js/min/ng-app-min.js"></script> -->
        <!-- <script src="/js/min/ng-controllers-min.js"></script> -->
        <!-- <script src="/js/min/ng-filters-min.js"></script> -->
        <script src="/js/ng-app.js"></script>
        <script src="/js/ng-directives.js"></script>
        <!-- <script src="/js/ng-filters.js"></script> -->

        <script src="/js/modules/ClubController.js"></script>
        <script src="/js/modules/ContactController.js"></script>
        <script src="/js/modules/EventsController.js"></script>
        <script src="/js/modules/FaqController.js"></script>

        <script src="/js/services/goData.js"></script>

    </head>

    <body ng-app ng-class="{ngLoaded: true}">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div ng-hide="true" class="loading-wrapper">
            <div class="loading-screen">
                <h1>Loading...</h1>
            </div>
        </div>

        <navbar-top></navbar-top>

        <div class="body-content">
            <!-- <div class="col-md-10 col-md-offset-1"> -->
            <div ng-view class="body-view"></div>
            <!-- </div> -->
        </div>

        <main-footer></main-footer>

    </div> <!-- /container -->

        <script src="/js/vendor/jquery-2.1.3.min.js"></script>

        <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/vendor/jquery-2.1.3.min.js"><\/script>')</script> -->

        <script src="/js/vendor/bootstrap.min.js"></script>
        <!-- <script src="/js/vendor/lity.min.js"></script> -->

        <!-- // <script src="/js/min/oregongo-min.js"></script> -->
    </body>
</html>
