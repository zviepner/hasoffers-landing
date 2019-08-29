<html>
<head>
    <title><?php print $title; ?> | Elixinol</title>
    <style><?php print file_get_contents('./assets/style.css'); ?></style>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
</head>
<body class="tnat300">

    <div id="page"><div class="inner">
        <!-- Lead -->
        <div id="lead" class="tile" style="background-color: <?php print $conf['lead']['bgcolor']; ?>"><div class="inner">
            <h1><?php print $conf['lead']['title']; ?></h1>
            <div>
                <figure class="left">
                    <img class="side" src="<?php print $conf['lead']['image']['src']; ?>"/>
                </figure>
                <div class="leftbox">
                    <p><?php print $conf['lead']['desc']; ?></p>
                    <ul>
                    <?php foreach ($conf['lead']['bullets'] as $k => $v) : print '<li><span class="strong">' . $k . '.</span> ' . $v . '</li>'; endforeach; ?>
                    </ul>
                </div>
            </div>
            <br class="clear" />
        </div></div>

        <!-- LogoBar -->
        <div id="logobar" class="tile" style="background-color: <?php print $conf['logobar']['bgcolor']; ?>"><div class="inner">
            <img src="<?php print $conf['logobar']['image']['src']; ?>" />
        </div></div>

        <!-- Produced -->
        <div id="produced" class="tile dark" style="<?php print $conf['produced']['bgimg']; ?>"><div class="inner">
            <h2><?php print $conf['produced']['title']; ?></h2>
            <p><?php print $conf['produced']['desc']; ?></p>
        </div></div>

        <!-- Doctors Corner -->
        <div id="doctor" class="tile"><div class="inner">
            <figure class="left bgwhite">
                <img src="<?php print $conf['doctor']['image']['src']; ?>" />
                <figcaption><?php print $conf['doctor']['image']['caption']; ?></figcaption>
            </figure>
            <h2><?php print $conf['doctor']['title']; ?></h2>
            <h3><?php print $conf['doctor']['subtitle']; ?></h3>
            <p><?php print $conf['doctor']['desc']; ?></p>
            <h2>&nbsp;</h2>
            <br class="clear"/>
        </div></div>

        <!-- Buy Block -->
        <div id="buyblock1" class="buyblock tile"><div class="inner">
            <h2><?php print $conf['buyblock']['title']; ?></h2>
            <figure class="left m0 p0">
                <img src="<?php print $conf['buyblock']['image']['src']; ?>" />
            </figure>
            <div class="leftbox">
                <p class="tagline"><?php print $conf['buyblock']['tagline']; ?></p>
                <p class="price"><?php print $conf['buyblock']['price']; ?></p>
                <p class="sale_price m0 p0">$<?php print $conf['buyblock']['sale_price']; ?></p>
                <p class="cta"><a class="bggreen" href="<?php print $conf['buyblock']['cta']['link']; ?>"><?php print $conf['buyblock']['cta']['text']; ?></a></p>
            </div>
            <br class="clear"/>
        </div></div>

        <!-- Guarantee -->
        <div id="guarantee" class="tile bggray"><div class="inner">
            <figure class="left">
                <img src="<?php print $conf['guarantee']['hero']['src']; ?>" />
            </figure>
            <div class="leftbox center">
                <h2><?php print $conf['guarantee']['title']; ?></h2>
                <h5><?php print $conf['guarantee']['subtitle']; ?></h5>
                <p class="seal30"><img src="<?php print $conf['guarantee']['image']['src']; ?>" /></p>
            </div>
            <br class="clear"/>
        </div></div>

        <!-- Certifications -->
        <div id="certs" class="tile"><div class="inner">
            <img src="<?php print $conf['certs']['image']['src']; ?>" />
        </div></div>

        <!-- Mission -->
        <div id="mission" class="tile"><div class="inner" style="background-color: <?php print $conf['mission']['bgcolor']; ?>">
            <figure class="center logo">
                <img src="<?php print $conf['mission']['logo']['src']; ?>" />
            </figure>
            <h2 class="center"><?php print $conf['mission']['title']; ?></h2>
            <h3><?php print $conf['mission']['desc']; ?></h3>
            <figure class="left mhimg">
                <img src="<?php print $conf['mission']['image']['src']; ?>" />
            </figure>
            <p class="mtp"><?php print $conf['mission']['body']; ?></p>
            <br class="clear"/>
            
        </div></div>

        <!-- nonprofits -->
        <div id="nonprofits" class="tile"><div class="inner">
            <p><img src="<?php print $conf['nonprofits']['logo']['src']; ?>" /></p>
            <h2><?php print $conf['nonprofits']['title']; ?></h2>
            <p><?php print $conf['nonprofits']['desc']; ?></p>
            <figure>
                <img src="<?php print $conf['nonprofits']['image']['src']; ?>" />
            </figure>
        </div></div>

        <!-- Product -->
        <div id="product" class="tile"><div class="inner">
            <div id="front">
                <figure class="right">
                    <img src="<?php print $conf['product']['front']['image']['src']; ?>" />
                </figure>
                <h2><?php print $conf['product']['front']['title']; ?></h2>
                <h3><?php print $conf['product']['front']['subtitle']; ?></h3>
                <p><?php print $conf['product']['front']['desc']; ?></p>
            </div>
            <br class="clear"/>
            <div id="back">
                <figure class="left">
                    <img src="<?php print $conf['product']['back']['image']['src']; ?>" />
                </figure>
                <div class="leftbox">
                    <h2><?php print $conf['product']['back']['title']; ?></h2>
                    <p class="serving_size m0"><label>Serving Size:</label> <?php print $conf['product']['back']['serving_size']; ?></p>
                    <p class="servings_per_bottle m0"><label>Servings per Bottle:</label> <?php print $conf['product']['back']['servings_per_bottle']; ?></p>
                    <p class="hemp m0"><label>Hemp Extract:</label> <?php print $conf['product']['back']['hemp']; ?></p>
                    <p class="cbd m0"><label>Cannabidiol (CBD):</label> <?php print $conf['product']['back']['cbd']; ?></p>
                    <p class="star m0"><label>*</label> <?php print $conf['product']['back']['star']; ?></p>
                    <p class="ingredients"><label>Other Ingredients:</label> <?php print $conf['product']['back']['ingredients']; ?></p>
                    <p class="directions m0"><label>Directions:</label> <?php print $conf['product']['back']['directions']; ?></p>
                    <p class="storage m0"><label>Storage:</label> <?php print $conf['product']['back']['storage']; ?></p>
                    <p class="safety m0"><label>Safety:</label> <?php print $conf['product']['back']['safety']; ?></p>
                </div>
            </div>
            <br class="clear"/>
        </div></div>

        <!-- Buy Block 2 -->
        <div id="buyblock2" class="buyblock tile"><div class="inner">
            <h2><?php print $conf['buyblock2']['title']; ?></h2>
            <figure class="left m0 p0">
                <img src="<?php print $conf['buyblock2']['image']['src']; ?>" />
            </figure>
            <div class="leftbox">
                <p class="tagline"><?php print $conf['buyblock2']['tagline']; ?></p>
                <p class="price"><?php print $conf['buyblock2']['price']; ?></p>
                <p class="sale_price m0 p0">$<?php print $conf['buyblock2']['sale_price']; ?></p>
                <p class="cta"><a class="bggreen" href="<?php print $conf['buyblock']['cta']['link']; ?>"><?php print $conf['buyblock']['cta']['text']; ?></a></p>
            </div>
            <br class="clear"/>
        </div></div>

        <!-- Disclaimer -->
        <div id="disclaimer" class="tile"><div class="inner">
            <p><span class="strong">Disclaimer:</span> <?php print $conf['disclaimer']['desc']; ?></p>
        </div></div>

    </div></div> <!-- End Page Div -->

</body>

</html>