<?php

use yii\helpers\Url;
use yii\web\View;

$path = '@web/front/img/';

$slides = [
    (object) [
        'id' => 1,
        'img' => 'anna1.png?v=1',
    ],
    (object) [
        'id' => 2,
        'img' => 'anna2.png?v=1',
    ],
    (object) [
        'id' => 3,
        'img' => 'anna3.png?v=1',
    ],
    (object) [
        'id' => 4,
        'img' => 'anna4.png?v=1',
    ],
    (object) [
        'id' => 5,
        'img' => 'anna5.png?v=1',
    ],
    (object) [
        'id' => 6,
        'img' => 'anna6.png?v=1',
    ],
    (object) [
        'id' => 7,
        'img' => 'anna7.png?v=1',
    ],
    (object) [
        'id' => 8,
        'img' => 'anna8.png?v=1',
    ],
];

?>

<div class="slides" id="slides">
    <div class="wrapper wrapper_block">
        <div id="anna_slider" class="gallery owl-carousel owl-theme">
            <?php foreach ($slides as $key => $slide) { ?>
                <div class="gallery-item item slides__slide" style="background-image: url('<?= Url::to($path . "black.png?v=1")?>'), url('<?= Url::to($path . $slide->img) ?>')">
                    <div class="gallery__text">
                        <div class="gallery-header slides__h1"><?= Yii::t('app', 'What should an Ambassador do?') ?></div>
                        <div class="gallery-description slides__dec">
                            <ul class="slides__desc-ul">
                                <li class="slides__desc-li"><?= Yii::t('app', 'Regularly consume the brand’s products') ?></li>
                                <li class="slides__desc-li"><?= Yii::t('app', 'Talk about their benefits') ?></li>
                                <li class="slides__desc-li"><?= Yii::t('app', 'Monitor product quality') ?></li>
                                <li class="slides__desc-li"><?= Yii::t('app', 'Organize trips for clients') ?></li>
                                <li class="slides__desc-li"><?= Yii::t('app', 'Speak at events and meetings') ?></li>
                                <li class="slides__desc-li"><?= Yii::t('app', 'Conduct online and offline training') ?></li>
                                <li class="slides__desc-li"><?= Yii::t('app', 'Interact with your audience on social media') ?></li>
                            </ul>
                        </div>
<!--                        <div class="gallery__img gallery__img_--><?//= $slide->id ?><!--">-->
<!--                            <img class="" src="--><?//= Url::to($path . $slide->img) ?><!--" alt="phone">-->
<!--                        </div>-->
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php

$js = <<<JS

 // OWL CAROUSEL    
    $('#anna_slider').each(function () {
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
        nav: false,
        margin: 10,			
        smartSpeed: 1000,
        responsive: {
            0: {
                items: 1,
                stagePadding: 0,
                nav: false,
                margin:0
            },
            600: {
                items: 1,
                nav: false,
                stagePadding: 0,
                margin: 0
            },
            1000: {
                items: 1,					
            }
        },			
    });   
});    

JS;
$this->registerJs($js, View::POS_END);