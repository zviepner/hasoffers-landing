<?php

class Utils {

    public function is_device() {
        return (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$_SERVER['HTTP_USER_AGENT'])||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($_SERVER['HTTP_USER_AGENT'],0,4)));
    }

    function get_buyblock($sku, $title, $price, $sale_price, $discount, $href_root, $product_id, $coupon) {
        return [
            'image' => [
                'src' => 'assets/' . $sku . '.png'
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
    }

    function get_doctor() {
        return [
            'title' => 'Doctor\'s Corner',
            'subtitle' => 'How do CBD capsules work in the body?',
            'desc' => 'CBD is unique in that it (and often in combination with other cannabinoids) can positively interact with your endocannabinoid system (ECS). This neural network exists throughout your body and in every organ. The importance of the endocannabinoid system is clear when you consider it is responsible for the regulation of  biological functions such as appetite, sleep, immune response, mood and pain. These are mechanisms which when faulty, contribute to a wide range of health problems. Cannabinoids act by attaching to receptors in the ECS and modifying their activity. This interaction can reduce symptoms caused by imbalance in the ECS such as inflammation, tremor, stress, lack of appetite and pain. CBD oil capsules will work differently depending on the person and should not be considered as a replacement for any prescribed medication, nor be taken with other medications without getting advice from a medical professional.',
            'image' => [
                'src' => 'assets/blair.jpg',
                'caption' => 'Philip Blair, M.D.'
            ]
        ];
    }

    function get_guarantee() {
        return [
            'hero' => [
                'src' => 'assets/eight_products.jpg'
            ],
            'title' => 'Quality you can trust',
            'subtitle' => 'with the',
            'image' => [
                'src' => 'assets/money-back.png'
            ]
        ];
    }

    function get_certs() {
        return [
            'image' => [
                'src' => 'assets/certs.png'
            ]
        ];
    }

    function get_logobar() {
        return [
            'bgcolor' => '#d3d3d3',
            'image' => [
                'src' => 'https://elixinol.com/wp-content/uploads/2018/05/featured_on.jpg'
            ]
        ];
    }

    function get_mission() {
        return [
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
        ];
    }

    function get_nonprofits() {
        return [
            'logo' => [
                'src' => 'assets/nonprofits-logo.gif'
            ],
            'title' => 'Giving Back',
            'desc' => 'We believe it\'s important to support non-profit organizations with values that align with our own. You can direct 5% of the value of your purchase to one of these organizations:',
            'image' => [
                'src' => 'assets/nonprofits.png'
            ],
        ];
    }

    function get_disclaimer() {
        return [
            'desc' => 'This product should be used with caution when driving motor vehicles or operating heavy machinery. Use this product under the guidance of a physician if you have a medical condition, are pregnant, or lactating. Keep out of reach of children. This product meets federal requirements for hemp products, however consumption may be flagged by some drug tests. This product is not intended to diagnose, treat, cure, or prevent any disease. These statements have not been evaluated by the Food and Drug Administration.'
        ];
    }

}