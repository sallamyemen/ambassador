<?php

use yii\helpers\Url;
use yii\web\View;

$path = '@web/front/img/';

$leaves = [
    (object) [
        'id' => 1,
        'img' => 'black-tea.png?v=1',
        'txt' => Yii::t('app', 'Black tea {br}with ginseng', ['br' => '<br>']),
    ],
    (object) [
        'id' => 2,
        'img' => 'green-tea.png?v=1',
        'txt' => Yii::t('app', 'Green tea {br}with ginseng', ['br' => '<br>']),
    ],
];

?>

<div id="leaves_slider" class="gallery owl-carousel owl-theme products__leaves">
    <?php foreach ($leaves as $key => $slide) { ?>
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

$('#leaves_slider').owlCarousel({
        stagePadding: 0,            
        loop: true,        
        nav: true,
        navText: [
        '<svg xmlns="http://www.w3.org/2000/svg" width="31" height="85" viewBox="0 0 31 85" fill="none"><path d="M28.3902 82.436L3.34375 42.6089L28.3902 2.78174" stroke="#293B42" stroke-width="4" stroke-linecap="round"/></svg>',
        '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="85" viewBox="0 0 30 85" fill="none"><path d="M2.56683 82.436L27.6133 42.6089L2.56684 2.78174" stroke="#293B42" stroke-width="4" stroke-linecap="round"/></svg>'
    ],
        // autoplay: true,
        // autoplayTimeout: 3000,
        margin: 10,			
        smartSpeed: 1000,
        responsive: {
            0: {
                items: 1,
                stagePadding: 0,
                nav: true,
                margin:0
            },
            600: {
                items: 1,
                nav: true,
                stagePadding: 0,
                margin: 0
            },
            1000: {
                items: 2,	
                nav: false,	
                dots: false			
            }
        },			
    });

JS;
$this->registerJs($js, View::POS_END);