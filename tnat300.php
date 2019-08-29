<?php

# Settings
$sku = 'tnat300';
$product_id = '102';
$price = '29.99';
$sale_price = '26.99';
$discount = '10%';
$title = 'CBD Tincture - Hemp Oil Drops 300 mg CBD - Natural Flavor';
$coupon = 'Y2FwczkwMA';
$href_root = 'https://elixinol.com/checkout/';
include_once('./utils.php');
$utils = new Utils();

$product = [
    'front' => [
        'image' => [
            'src' => 'assets/' . $sku . '.png'
        ],
        'title' => 'CBD Tincture - Hemp Oil Drops',
        'subtitle' => 'What our CBD tincture contains and serving suggestion',
        'desc' => 'A 30ml CBD tincture contains 300 mg of cannabidiol extract / CBD hemp oil. The suggested serving is ½ dropper (0.5 ml) taken under the tongue three times daily which will provide many valuable nutrients including 5 mg of CBD.'
    ],
    'back' => [
        'image' => [
            'src' => 'assets/' . $sku . '-back.png'
        ],
        'title' => 'Supplement Facts',
        'serving_size' => '1/2 dropper (approx. 0.5 ml)',
        'servings_per_bottle' => 'Approx 60',
        'hemp' => '10 mg*',
        'cbd' => '5 mg*',
        'star' => 'No Daily Value Set. CBD Naturally occurs in Hemp oil.',
        'ingredients' => 'MCT Coconut Oil, Organic Peppermint Extract, CO2 Cinnamon Extract',
        'directions' => 'Take twice daily with food or as needed.',
        'storage' => 'Avoid excessive heat, light and humidity.',
        'safety' => 'Use only if the tamper-evident seal is intact.'
    ]
];

$conf = [
    'lead' => [
        'bgcolor' => '#ffffff',
        'image' => [
            'src' => 'assets/' . $sku . '.png'
        ],
        'title' => $title,
        'desc' => 'Our naturally flavored and concentrated tinctures contain all the synergistic cannabinoids, terpenoids, essential oils, and other compounds of the original hemp plant. Elixinol tinctures are a reliable, potent, and great-tasting way to enjoy full-spectrum CBD.',
        'bullets' => [
            'Full spectrum' => 'Our 100% organic hemp cannabinoid extract captures the full spectrum of cannabinoids, flavonoids, and terpenes',
            'Pure and potent' => 'Supercritical CO2-extracted for superior quality, and blended only with MCT coconut oil',
            'Other natural compounds retained in our whole food oil include' => 'Nitrogenous compounds, amino acids, ketones, flavonoids, glycosides, omega fatty acids, chlorophyll, and a variety of natural vitamins and nutrients',
            'Great natural cinnamint taste' => 'Made with organic peppermint extract and CO2 cinnamon extract'
        ],
    ],
    'logobar' => $utils->get_logobar(),
    'produced' => [
        'bgimg' => ($utils->is_device() ? 'background-color: #FDF5DE;' : 'background-image: url(assets/mint.jpg);'),
        'title' => 'Our CBD oil production process',
        'desc' => 'Elixinol™ is a Hemp Oil derived from specially bred Industrial Hemp plants with a high CBD content. The Hemp we use is grown organically, and CO2 extracted. The resultant CBD tincture is then added to an easy-to-use dropper bottle, containing 300 mg of CBD (cannabidiol). Elixinol CBD tinctures contain all the synergistic Cannabinoids, Terpenoids, Essential Oils and other compounds of the original plant.'
    ],
    'doctor' => $utils->get_doctor(),
    'buyblock' => $utils->get_buyblock($sku, $title, $price, $sale_price, $discount, $href_root, $product_id, $coupon),
    'guarantee' => $utils->get_guarantee(),
    'certs' => $utils->get_certs(),
    'mission' => $utils->get_mission(),
    'nonprofits' => $utils->get_nonprofits(),
    'product' => $product,
    'buyblock2' => $utils->get_buyblock($sku, $title, $price, $sale_price, $discount, $href_root, $product_id, $coupon),
    'disclaimer' => $utils->get_disclaimer()
];

# Build Page
include('template.php');