<?php

use yii\helpers\Url;
use yii\web\View;

$path = '@web/front/img/';

$leaves = [
    (object) [
        'id' => 1,
        'img' => 'black-tea.png?v=1',
        'txt' => 'Black tea with ginseng',
    ],
    (object) [
        'id' => 2,
        'img' => 'green-tea.png?v=1',
        'txt' => 'Green tea with ginseng',
    ],
];

?>

<div id="leaves_slider" class="products__leaves">
    <?php foreach ($leaves as $key => $slide) { ?>
        <div class="gallery-item item products__slide">
            <img src="<?= Url::to($path . $slide->img)?>">
<!--            <div class="products__h5">-->
<!--                --><?//= Yii::t('app', $slide->txt) ?>
<!--            </div>-->
        </div>
    <?php } ?>
</div>

<?php

$js = <<<JS

//$('#leaves_slider').each(function () {
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