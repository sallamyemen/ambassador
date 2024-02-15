<?php

use yii\helpers\Url;
use yii\web\View;

$path = '@web/front/img/';

$slides = [
    (object) [
        'id' => 1,
        'img' => 'ginseng1.png?v=1',
    ],
    (object) [
        'id' => 2,
        'img' => 'ginseng2.png?v=1',
    ],
    (object) [
        'id' => 3,
        'img' => 'ginseng3.png?v=1',
    ],
    (object) [
        'id' => 4,
        'img' => 'ginseng4.png?v=1',
    ],
];

?>
<div class="ginseng" id="slider_2">
    <div class="wrapper wrapper_block ginseng__wrap">

        <div class="ginseng__title">
            <div class="ginseng__h1">
                <?= Yii::t('app', 'Why is COFFEECELL’s ginseng the best?') ?>
            </div>
            <div class="ginseng__text">
                <?= Yii::t('app', 'Ideal natural conditions and adherence to age-old traditions help the company create a true masterpiece.') ?>
            </div>
        </div>

        <div  id="ginseng_slider" class="gallery owl-carousel owl-theme ginseng__slider">
            <?php foreach ($slides as $key => $slide) { ?>
                <div class="gallery-item item ginseng__slide" style="background-image: url('<?= Url::to($path . $slide->img) ?>')">
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php

$js = <<<JS

//jQuery(document).ready(function($) { 

   
    // OWL CAROUSEL    
    $('#ginseng_slider').each(function () {
    var owlStacked = $(this);
    
    owlStacked
        .on('initialized.owl.carousel resized.owl.carousel', function (event) {
            setTimeout(function () {
                owlStacked
                    .width(owlStacked.find('.owl-item').width());
                        
                owlStacked.find('.owl-next').removeClass('disabled');
                        
                owlStacked.find('.owl-item').each(function(k, item) {
                    $(this)
                        .addClass('transition')
                        .css({
                            'z-index': k
                        });
                });                
                owlStacked.trigger('to.owl.carousel', [0, 0]);
            }, 100, owlStacked);
        })
        .on('change.owl.carousel', function (event) {
            if (event.item.index > event.property.value) {
                owlStacked.find('.owl-item.active').eq(0).prev().removeClass('stacked');   
                owlStacked.find('.owl-item.active').eq(0).nextAll().removeClass('stacked');   
            } else if (event.item.index < event.property.value) {
                owlStacked.find('.owl-item.active').eq(0).addClass('stacked');
            }
            if (event.property.value == 0) {
                owlStacked.find('.owl-item').removeClass('stacked');   
            }
            if (owlStacked.is('[data-related]')) {
                owlGoTo(owlStacked.data('related'), event.property.value, 1000);
            }
        });
      
        
    var owlStackedItems = owlStacked.attr('data-items') ? owlStacked.attr('data-items').split('-') : false,
            owlStackedLoop = owlStacked.attr('data-loop') == 'true' ? true : false;
            
    owlStacked.owlCarousel({
        stagePadding: 0,            
        loop: true,        
        nav: true,
        navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
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
                items: 1,					
            }
        },			
    });   
});       
   
//});

JS;
$this->registerJs($js, View::POS_END);