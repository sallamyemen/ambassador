<?php

use yii\helpers\Url;
use yii\web\View;

$path = '@web/front/img/';

$ground = [
    (object) [
        'id' => 1,
        'img' => 'arabica.png?v=1',
        'name' => 'G Arabica',
        'txt' => 'Ground coffee with ginseng',
    ],
    (object) [
        'id' => 2,
        'img' => 'aroma.png?v=1',
        'name' => 'G Arabica',
        'txt' => 'Ground coffee with ginseng and notes of vanilla and caramel',
    ],
    (object) [
        'id' => 3,
        'img' => 'immuno.png?v=1',
        'name' => 'G Arabica',
        'txt' => 'Ground coffee with ginger, turmeric, cinnamon and ginseng',
    ],
];

?>

<div id="ground_slider" class="products__ground">
    <?php foreach ($ground as $key => $slide) { ?>
        <div class="gallery-item item products__slide">
            <img src="<?= Url::to($path . $slide->img)?>">
<!--            <div class="products__h4">-->
<!--                --><?//= Yii::t('app', $slide->name) ?>
<!--            </div>-->
<!--            <div class="products__h5">-->
<!--                --><?//= Yii::t('app', $slide->txt) ?>
<!--            </div>-->
        </div>
    <?php } ?>
</div>

<?php

$js = <<<JS

//$('#ground_slider').each(function () {
//    var owlStacked = $(this);
//    
//    owlStacked
//        .on('initialized.owl.carousel resized.owl.carousel', function (event) {
//            setTimeout(function () {
//                owlStacked
//                    .width(owlStacked.find('.owl-item').width());
//                        
//                owlStacked.find('.owl-next').removeClass('disabled');
//                        
//                owlStacked.find('.owl-item').each(function(k, item) {
//                    $(this)
//                        .addClass('transition')
//                        .css({
//                            'z-index': k
//                        });
//                });                
//                owlStacked.trigger('to.owl.carousel', [0, 0]);
//            }, 100, owlStacked);
//        })
//        .on('change.owl.carousel', function (event) {
//            if (event.item.index > event.property.value) {
//                owlStacked.find('.owl-item.active').eq(0).prev().removeClass('stacked');   
//                owlStacked.find('.owl-item.active').eq(0).nextAll().removeClass('stacked');   
//            } else if (event.item.index < event.property.value) {
//                owlStacked.find('.owl-item.active').eq(0).addClass('stacked');
//            }
//            if (event.property.value == 0) {
//                owlStacked.find('.owl-item').removeClass('stacked');   
//            }
//            if (owlStacked.is('[data-related]')) {
//                owlGoTo(owlStacked.data('related'), event.property.value, 1000);
//            }
//        });
//      
//        
//    var owlStackedItems = owlStacked.attr('data-items') ? owlStacked.attr('data-items').split('-') : false,
//            owlStackedLoop = owlStacked.attr('data-loop') == 'true' ? true : false;
//            
//    owlStacked.owlCarousel({
//        stagePadding: 0,            
//        loop: true,        
//        nav: true,
//        navText: [
//        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
//        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
//    ],
//        margin: 10,			
//        smartSpeed: 1000,
//        responsive: {
//            0: {
//                items: 1,
//                stagePadding: 0,
//                nav: true,
//                margin:0
//            },
//            600: {
//                items: 1,
//                nav: true,
//                stagePadding: 0,
//                margin: 0
//            },
//            1000: {
//                items: 1,					
//            }
//        },			
//    });   
//});

JS;
$this->registerJs($js, View::POS_END);