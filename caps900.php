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
$useragent = $_SERVER['HTTP_USER_AGENT'];

$is_device = (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)));

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
        'bgimg' => ($is_device ? 'background-color: #FDF5DE;' : 'background-image: url(assets/family-stroll.jpg);'),
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
            'src' => 'assets/elixinol-white.png'
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
    <style><?php print file_get_contents('./assets/style.css'); ?></style>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
</head>
<body>

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
        <div id="produced" class="tile" style="<?php print $conf['produced']['bgimg']; ?>"><div class="inner">
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