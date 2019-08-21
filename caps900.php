<?php

# Settings
$sku = 'caps900';
$product_id = '793';
$price = '79.99';
$sale_price = '71.99';
$discount = '10%';
$title = 'CBD Hemp Oil Capsules 900 MG of CBD';
$coupon = 'Y2FwczkwMA';
$href_root = 'https://elixinol.com/checkout/';

$buyblock = [
    'image' => [
        'src' => 'assets/caps900.png'
    ],
    'title' => $title,
    'tagline' => 'On Sale Now',
    'price' => 'List: <strike>' . $price . '</strike> (' . $discount . ' off)', 
    'sale_price' => $sale_price,
    'cta' => [
        'text' => 'Buy Now', 
        'link' => $href_root . '?add-to-cart=' . $product_id . '&apply_coupon=' . $coupon
    ]
];

$product = [
    'front' => [
        'image' => [
            'src' => 'assets/caps900.png'
        ],
        'title' => 'CBD Hemp Oil Capsules',
        'subtitle' => 'Serving suggestion',
        'desc' => 'A 60-capsule container of Elixinol™ contains a total of 900 mg of CBD. The suggested serving is one CBD capsule daily which will provide many valuable nutrients and cannabinoids, including 15 mg of CBD. We recommend a daily regimen so that you are taking your CBD capsules at approximately the same time each day. CBD capsules are easy for you to consume, without taste, providing convenient and permit controlled dosage. Our CBD oil capsules have a higher potency than our tinctures, Respira CBD and topical products.'
    ],
    'back' => [
        'image' => [
            'src' => 'assets/caps900-back.png'
        ],
        'title' => 'Supplement Facts',
        'serving_size' => '1 capsule',
        'servings_per_bottle' => '60',
        'hemp' => '30 mg*',
        'cbd' => '15 mg*',
        'star' => 'No Daily Value Set. CBD Naturally occurs in Hemp oil.',
        'ingredients' => 'MCT Oil (Naturally Extracted from Coconut Oil), Vegetarian Capsules (Vegetable Cellulose, Purified Water), Silica. <br>Contains: Coconut',
        'directions' => 'Take twice daily with food or as needed.',
        'storage' => 'Avoid excessive heat, light and humidity.',
        'safety' => 'Use only if the tamper-evident seal is intact.'
    ]
];

$conf = [
    'lead' => [
        'bgcolor' => '#ffffff',
        'image' => [
            'src' => 'assets/caps900.png'
        ],
        'title' => $title,
        'desc' => 'With a consistent amount of CBD in easy-to-swallow capsules, our Elixinol hemp extract capsules ensure you enjoy the peace of mind that comes with getting the precise amount of CBD, every time. Made with natural ingredients, our CBD capsules are perfect for those who prefer a no-taste, more discreet CBD experience. Our CBD Capsules are one of the most convenient ways to make full-spectrum CBD extract a part of your daily routine-with a much higher single-serving potency.',
        'bullets' => [
            'Consistent CBD' => '15 mg of CBD and 30 mg of hemp extract per capsule',
            'Full-spectrum' => 'Our 100% organic hemp cannabinoid extract captures the full spectrum of cannabinoids, flavonoids, and terpenes',
            'Pure and potent compounds' => 'Organic hemp CO2 extracted in a chemical-free process for maximum purity and quality.',
            'Other natural compounds retained in our whole food extract include:' => 'nitrogenous compounds, amino acids, ketones, flavonoids, glycosides, omega fatty acids, chlorophyll, and a variety of natural vitamins and nutrients'
        ],
    ],
    'logobar' => [
        'bgcolor' => '#d3d3d3',
        'image' => [
            'src' => 'https://elixinol.com/wp-content/uploads/2018/05/featured_on.jpg'
        ]
    ],
    'produced' => [
        'bgimg' => 'assets/family-stroll.jpg',
        'title' => 'How our CBD Capsules are produced',
        'desc' => 'Elixinol™ produces a whole-plant hemp-oil extract, derived from specially bred, organically grown industrial hemp plants with a high cannabidiol (CBD) content.  Our hemp oil extract is non-synthetic and wholesome. We apply a supercritical fluid extraction method which uses CO2 and no harmful chemicals in the process.  It contains all the synergistic cannabinoids, terpenoids, essential oils and other compounds in the original plant. All the hemp we grow and use in your capsules is non-GMO industrial hemp which is grown in the USA.  Our CBD capsules contain a full spectrum of terpenes, phytocannabinoids and other important compounds found in the original plant.'
    ],
    'doctor' => [
        'title' => 'Doctor\'s Corner',
        'subtitle' => 'How do CBD capsules work in the body?',
        'desc' => 'CBD is unique in that it (and often in combination with other cannabinoids) can positively interact with your endocannabinoid system (ECS). This neural network exists throughout your body and in every organ. The importance of the endocannabinoid system is clear when you consider it is responsible for the regulation of  biological functions such as appetite, sleep, immune response, mood and pain. These are mechanisms which when faulty, contribute to a wide range of health problems. Cannabinoids act by attaching to receptors in the ECS and modifying their activity. This interaction can reduce symptoms caused by imbalance in the ECS such as inflammation, tremor, stress, lack of appetite and pain. CBD oil capsules will work differently depending on the person and should not be considered as a replacement for any prescribed medication, nor be taken with other medications without getting advice from a medical professional.',
        'image' => [
            'src' => 'assets/blair.jpg',
            'caption' => 'Philip Blair, M.D.'
        ]
    ],
    'buyblock' => $buyblock,
    'guarantee' => [
        'hero' => [
            'src' => 'assets/eight_products.jpg'
        ],
        'title' => 'Quality you can trust',
        'subtitle' => 'with the',
        'image' => [
            'src' => 'assets/money-back.png'
        ]
    ],
    'certs' => [
        'image' => [
            'src' => 'assets/certs.png'
        ]
    ],
    'mission' => [
        'bgcolor' => '#3773b9',
        'logo' => [
            'src' => 'assets/eleixinol-white.png'
        ],
        'title' => 'The world\'s most trusted CBD brand.',
        'image' => [
            'src' => 'assets/paul.png'
        ],
        'desc' => 'Elixinol’s mission is to produce the highest-quality full-spectrum hemp cannabidiol (CBD) products on the worldwide market through superior product sourcing, product traceability, pharmaceutical-grade testing, and global manufacturing processing standards.',
        'body' => 'In 1991, Elixinol co-founder Paul Benhaim learned that hemp seed is a superior source of essential fatty acids. He immediately began tracking down the best hemp in the world. Since his first product, the ‘9bar’ snack bar (still one of the world’s best-selling hemp products), Paul has developed numerous businesses, and supported government policies and global strategies to grow and develop the industrial hemp industry.'
    ],
    'nonprofits' => [
        'logo' => [
            'src' => 'assets/nonprofits-logo.gif'
        ],
        'title' => 'Giving Back',
        'desc' => 'We believe it\'s important to support non-profit organizations with values that align with our own. You can direct 5% of the value of your purchase to one of these organizations:',
        'image' => [
            'src' => 'assets/nonprofits.png'
        ],
    ],
    'product' => $product,
    'buyblock2' => $buyblock,
    'disclaimer' => [
        'desc' => 'This product should be used with caution when driving motor vehicles or operating heavy machinery. Use this product under the guidance of a physician if you have a medical condition, are pregnant, or lactating. Keep out of reach of children. This product meets federal requirements for hemp products, however consumption may be flagged by some drug tests. This product is not intended to diagnose, treat, cure, or prevent any disease. These statements have not been evaluated by the Food and Drug Administration.']
];

# Build Page
?>
<html>
<head>
    <style>
        body {
            margin: 0;
        }

        .left {
            float: left;
            clear: left;
            max-width: 50%;
        }
        .right {
            float: right;
        }

        .tile {
            clear: both;
        }

        .tile .inner {
            max-width: 960px;
            margin: auto;
        }

        #nonprofits {
            text-align: center;
        }

        #produced {
            min-height: 1000px;
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>
</head>
<body>

    <div id="page"><div class="inner">
        <!-- Lead -->
        <div id="lead" class="tile" style="background-color: <?php print $conf['lead']['bgcolor']; ?>"><div class="inner">
            <h1><?php print $conf['lead']['title']; ?></h1>
            <div>
                <img class="side left" src="<?php print $conf['lead']['image']['src']; ?>"/>
                <p><?php print $conf['lead']['desc']; ?></p>
                <ul>
                <?php foreach ($conf['lead']['bullets'] as $k => $v) : print '<li><strong>' . $k . '.</strong> ' . $v . '</li>'; endforeach; ?>
                </ul>
            </div>
        </div></div>

        <!-- LogoBar -->
        <div id="logobar" class="tile" style="background-color: <?php print $conf['logobar']['bgcolor']; ?>"><div class="inner">
            <img src="<?php print $conf['logobar']['image']['src']; ?>" />
        </div></div>

        <!-- Produced -->
        <div id="produced" class="tile" style="background-image: url(<?php print $conf['produced']['bgimg']; ?>)"><div class="inner">
            <h2><?php print $conf['produced']['title']; ?></h2>
            <p><?php print $conf['produced']['desc']; ?></p>
        </div></div>

        <!-- Doctors Corner -->
        <div id="doctor" class="tile"><div class="inner">
            <figure class="left">
                <img src="<?php print $conf['doctor']['image']['src']; ?>" />
                <figcaption><?php print $conf['doctor']['image']['caption']; ?></figcaption>
            </figure>
            <h2><?php print $conf['doctor']['title']; ?></h2>
            <h3><?php print $conf['doctor']['subtitle']; ?></h3>
            <p><?php print $conf['doctor']['desc']; ?></p>
        </div></div>

        <!-- Buy Block -->
        <div id="buyblock1" class="buyblock tile"><div class="inner">
            <h2><?php print $conf['buyblock']['title']; ?></h2>
            <figure class="left">
                <img src="<?php print $conf['buyblock']['image']['src']; ?>" />
            </figure>
            <p class="tagline"><?php print $conf['buyblock']['tagline']; ?></p>
            <p><?php print $conf['buyblock']['price']; ?></p>
            <p><?php print $conf['buyblock']['sale_price']; ?></p>
            <p class="cta"><a href="<?php print $conf['buyblock']['cta']['link']; ?>"><?php print $conf['buyblock']['cta']['text']; ?></a></p>
        </div></div>

        <!-- Guarantee -->
        <div id="guarantee" class="tile"><div class="inner">
            <figure class="left">
                <img src="<?php print $conf['guarantee']['hero']['src']; ?>" />
            </figure>
            <h2><?php print $conf['guarantee']['title']; ?></h2>
            <h5><?php print $conf['guarantee']['subtitle']; ?></h5>
            <p><img src="<?php print $conf['guarantee']['image']['src']; ?>" /></p>
        </div></div>

        <!-- Certifications -->
        <div id="certs" class="tile"><div class="inner">
            <img src="<?php print $conf['certs']['image']['src']; ?>" />
        </div></div>

        <!-- Mission -->
        <div id="mission" class="tile" style="background-color: <?php print $conf['mission']['bgcolor']; ?>"><div class="inner">
            <figure class="left">
                <img src="<?php print $conf['mission']['logo']['src']; ?>" />
            </figure>
            <h2><?php print $conf['mission']['title']; ?></h2>
            <figure class="left">
                <img src="<?php print $conf['mission']['image']['src']; ?>" />
            </figure>
            <p><?php print $conf['mission']['desc']; ?></p>
        </div></div>

        <!-- nonprofits -->
        <div id="nonprofits" class="tile"><div class="inner">
            <p><img src="<?php print $conf['nonprofits']['logo']['src']; ?>" /></p>
            <h2><?php print $conf['nonprofits']['title']; ?></h2>
            <p><?php print $conf['nonprofits']['desc']; ?></p>
            <figure class="left">
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
            <div id="back">
                <figure class="left">
                    <img src="<?php print $conf['product']['back']['image']['src']; ?>" />
                </figure>
                <h2><?php print $conf['product']['back']['title']; ?></h2>
                <p class="serving_size"><label>Serving Size:</label> <?php print $conf['product']['back']['serving_size']; ?></p>
                <p class="servings_per_bottle"><label>Servings per Bottle:</label> <?php print $conf['product']['back']['servings_per_bottle']; ?></p>
                <p class="hemp"><label>Hemp Extract:</label> <?php print $conf['product']['back']['hemp']; ?></p>
                <p class="cbd"><label>Cannabidiol (CBD):</label> <?php print $conf['product']['back']['cbd']; ?></p>
                <p class="star"><label>*</label> <?php print $conf['product']['back']['star']; ?></p>
                <p class="ingredients"><label>Other Ingredients:</label> <?php print $conf['product']['back']['ingredients']; ?></p>
                <p class="directions"><label>Directions:</label> <?php print $conf['product']['back']['directions']; ?></p>
                <p class="storage"><label>Storage:</label> <?php print $conf['product']['back']['storage']; ?></p>
                <p class="safety"><label>Safety:</label> <?php print $conf['product']['back']['safety']; ?></p>
            </div>
        </div></div>

        <!-- Buy Block 2 -->
        <div id="buyblock2" class="buyblock tile"><div class="inner">
            <h2><?php print $conf['buyblock2']['title']; ?></h2>
            <figure class="left">
                <img src="<?php print $conf['buyblock2']['image']['src']; ?>" />
            </figure>
            <p class="tagline"><?php print $conf['buyblock2']['tagline']; ?></p>
            <p><?php print $conf['buyblock2']['price']; ?></p>
            <p><?php print $conf['buyblock2']['sale_price']; ?></p>
            <p class="cta"><a href="<?php print $conf['buyblock2']['cta']['link']; ?>"><?php print $conf['buyblock2']['cta']['text']; ?></a></p>
        </div></div>

        <!-- Disclaimer -->
        <div id="disclaimer" class="tile"><div class="inner">
            <h2>Disclaimer</h2>
            <p><?php print $conf['disclaimer']['desc']; ?></p>
        </div></div>

    </div></div> <!-- End Page Div -->

</body>

</html>