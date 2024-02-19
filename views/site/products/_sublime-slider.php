<?php

use yii\helpers\Url;
use yii\web\View;

$path = '@web/front/img/';

$sublime = [
    (object) [
        'id' => 1,
        'img' => 'black-coffee.png?v=1',
        'txt' => Yii::t('app', 'Black coffee {br}with ginseng', ['br' => '<br>']),
    ],
    (object) [
        'id' => 2,
        'img' => 'premium-black-coffee.png?v=1',
        'txt' => Yii::t('app', 'Premium Black coffee {br}with ginseng', ['br' => '<br>']),
    ],
    (object) [
        'id' => 3,
        'img' => 'latte.png?v=1',
        'txt' => Yii::t('app', 'Latte {br}with ginseng', ['br' => '<br>']),
    ],
    (object) [
        'id' => 4,
        'img' => 'machaccino.png?v=1',
        'txt' => Yii::t('app', 'Mochaccino {br}with ginseng', ['br' => '<br>']),
    ],
    (object) [
        'id' => 5,
        'img' => 'hot-chocolate.png?v=1',
        'txt' => Yii::t('app', 'Hot chocolate {br}with ginseng', ['br' => '<br>']),
    ],
    (object) [
        'id' => 6,
        'img' => 'white-chocolate.png?v=1',
        'txt' => Yii::t('app', 'White chocolate {br}with ginseng', ['br' => '<br>']),
    ],
    (object) [
        'id' => 7,
        'img' => 'hazelnut.png?v=1',
        'txt' => Yii::t('app', 'Hazelnut cappuccino {br}with ginseng', ['br' => '<br>']),
    ],
    (object) [
        'id' => 8,
        'img' => 'cocoa.png?v=1',
        'txt' => Yii::t('app', 'Cocoa with strawberries {br}and ginseng', ['br' => '<br>']),
    ],
];

?>
    <div  id="sublime" class="gallery owl-carousel owl-theme products__sublime">
        <?php foreach ($sublime as $key => $slide) { ?>
            <div class="gallery-item item products__slide">
                <img src="<?= Url::to($path . $slide->img)?>">
                <div class="products__h5">
                    <?= Yii::t('app', $slide->txt) ?>
                </div>
            </div>
        <?php } ?>
    </div>
<?php

$js = <<<JS
 
$('#sublime').owlCarousel({
        stagePadding: 0,            
        loop: true,
        // autoplay: true,
        // autoplayTimeout: 3000,
        navText: [
                '<svg xmlns="http://www.w3.org/2000/svg" width="31" height="85" viewBox="0 0 31 85" fill="none"><path d="M28.3902 82.436L3.34375 42.6089L28.3902 2.78174" stroke="#293B42" stroke-width="4" stroke-linecap="round"/></svg>',
                '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="85" viewBox="0 0 30 85" fill="none"><path d="M2.56683 82.436L27.6133 42.6089L2.56684 2.78174" stroke="#293B42" stroke-width="4" stroke-linecap="round"/></svg>'
            ],
        margin: 10,			
        smartSpeed: 1000,
        responsive: {
            0: {
                items: 1,
                stagePadding: 0,
                nav: true,
                dots: false,
                margin:0,
                navText: [
        '<svg xmlns="http://www.w3.org/2000/svg" width="31" height="35" viewBox="0 0 31 85" fill="none"><path d="M28.3902 82.436L3.34375 42.6089L28.3902 2.78174" stroke="#293B42" stroke-width="4" stroke-linecap="round"/></svg>',
        '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" viewBox="0 0 30 85" fill="none"><path d="M2.56683 82.436L27.6133 42.6089L2.56684 2.78174" stroke="#293B42" stroke-width="4" stroke-linecap="round"/></svg>'
    ],
            },
            600: {
                items: 1,
                nav: true,
                stagePadding: 0,
                margin: 0,
                dots: false,
                navText: [
        '<svg xmlns="http://www.w3.org/2000/svg" width="31" height="35" viewBox="0 0 31 85" fill="none"><path d="M28.3902 82.436L3.34375 42.6089L28.3902 2.78174" stroke="#293B42" stroke-width="4" stroke-linecap="round"/></svg>',
        '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" viewBox="0 0 30 85" fill="none"><path d="M2.56683 82.436L27.6133 42.6089L2.56684 2.78174" stroke="#293B42" stroke-width="4" stroke-linecap="round"/></svg>'
    ],
            },
            1000: {
                items: 3,	
                dots: false,
                navText: [
        '<svg xmlns="http://www.w3.org/2000/svg" width="31" height="85" viewBox="0 0 31 85" fill="none"><path d="M28.3902 82.436L3.34375 42.6089L28.3902 2.78174" stroke="#293B42" stroke-width="4" stroke-linecap="round"/></svg>',
        '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="85" viewBox="0 0 30 85" fill="none"><path d="M2.56683 82.436L27.6133 42.6089L2.56684 2.78174" stroke="#293B42" stroke-width="4" stroke-linecap="round"/></svg>'
    ],				
            }
        },	
    });

JS;
$this->registerJs($js, View::POS_END);