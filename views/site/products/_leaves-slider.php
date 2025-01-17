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
                items: 2,
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
                items: 2,
                nav: false,                 
            }
        },	
    });

// var elem_1 = document.querySelector('#ground_slider > div.owl-nav');
// var elem_2 = document.querySelector('#ground_slider > div.owl-nav > button.owl-prev');
// var elem_3 = document.querySelector('#ground_slider > div.owl-nav > button.owl-next');
//
// var screen_width = screen.width;
//
// if (screen_width <= 575 && screen_width >= 320){  
//      console.log(screen_width);
//      elem_1.style = "top: 25%";
//      elem_2.style = "left: -120px !important";     
//      elem_3.style = "left: 8em !important";     
// }


JS;
$this->registerJs($js, View::POS_END);