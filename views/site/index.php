<?php

use app\assets\AppAsset;
use yii\web\View;

$this->registerCss('.breadcrumbs {display: none;}');

?>

<?= $this->renderFile('@app/views/site/_section-main.php') ?>
<?= $this->renderFile('@app/views/site/_section-anna.php') ?>
<?= $this->renderFile('@app/views/site/_section-anna_slider.php') ?>
<?= $this->renderFile('@app/views/site/_section-components.php') ?>
<?= $this->renderFile('@app/views/site/_section-ginseng_slider.php') ?>
<?= $this->renderFile('@app/views/site/_section-g_premium.php') ?>
<?= $this->renderFile('@app/views/site/_section-products.php') ?>
<?= $this->renderFile('@app/views/site/_section-form.php') ?>


<?php

$this->registerCssFile("@web/front/vendor/owl-carousel/owl.carousel.css", ['depends' => [AppAsset::class]]);
$this->registerCssFile("@web/front/vendor/owl-carousel/owl.theme.default.css", ['depends' => [AppAsset::class]]);
$this->registerCssFile("@web/front/vendor/vendor/animate/animate.min.css", ['depends' => [AppAsset::class]]);
$this->registerJsFile("@web/front/vendor/owl-carousel/owl.carousel.min.js", ['depends' => [AppAsset::class]]);
$this->registerJsFile("@web/front/vendor/wow/wow.min.js", ['depends' => [AppAsset::class]]);

$js = <<<JS

jQuery(document).ready(function($) {  
    mainMenuScroll = function() {
        $('nav').toggleClass('show', $(window).scrollTop() > $('.header').height() * .5);
        $('.header__nav').css('opacity', (1 - ($(window).scrollTop() / $(window).height()) * 2));
    }

    $(window).scroll(function() {
        mainMenuScroll();
    });
    mainMenuScroll();    
});

JS;
$this->registerJs($js, View::POS_END);