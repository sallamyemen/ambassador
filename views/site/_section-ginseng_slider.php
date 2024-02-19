<?php

use yii\helpers\Url;
use yii\web\View;

$path = '@web/front/img/';

$slides = [
    (object) [
        'id' => 1,
        'img' => 'ginseng1.svg?v=1',
    ],
    (object) [
        'id' => 2,
        'img' => 'ginseng2.svg?v=1',
    ],
    (object) [
        'id' => 3,
        'img' => 'ginseng3.svg?v=1',
    ],
    (object) [
        'id' => 4,
        'img' => 'ginseng4.svg?v=1',
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
                <?= Yii::t('app', 'Ideal natural conditions and adherence to age-{br}old traditions help the company create a true masterpiece.', ['br' => '<br>']) ?>
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
        dots: false,      
        nav: true,        
        autoplay: true,
        autoplayTimeout: 3000,
        margin: 10,			
        smartSpeed: 1000,
        responsive: {
            0: {
                items: 1,
                stagePadding: 0,
                nav: true,
                dots: true,
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
                dots: true,
                navText: [
        '<svg xmlns="http://www.w3.org/2000/svg" width="31" height="35" viewBox="0 0 31 85" fill="none"><path d="M28.3902 82.436L3.34375 42.6089L28.3902 2.78174" stroke="#293B42" stroke-width="4" stroke-linecap="round"/></svg>',
        '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" viewBox="0 0 30 85" fill="none"><path d="M2.56683 82.436L27.6133 42.6089L2.56684 2.78174" stroke="#293B42" stroke-width="4" stroke-linecap="round"/></svg>'
    ],
            },
            1000: {
                items: 1,	
                navText: [
        '<svg xmlns="http://www.w3.org/2000/svg" width="31" height="85" viewBox="0 0 31 85" fill="none"><path d="M28.3902 82.436L3.34375 42.6089L28.3902 2.78174" stroke="#293B42" stroke-width="4" stroke-linecap="round"/></svg>',
        '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="85" viewBox="0 0 30 85" fill="none"><path d="M2.56683 82.436L27.6133 42.6089L2.56684 2.78174" stroke="#293B42" stroke-width="4" stroke-linecap="round"/></svg>'
    ],				
            }
        },			
    });   
});      

JS;
$this->registerJs($js, View::POS_END);