<?php

use yii\helpers\Url;
use yii\helpers\Html;

?>
<div class="products">
    <div class="products__logo-wrap">
        <div class="products__logo">
            <?= Html::img(Url::to('@web/front/img/coffeelogo.svg?v=1')) ?>
        </div>
    </div>
    <div class="products__title">
        <div class="products__h1">
            <?= Yii::t('app', 'products') ?>
        </div>
        <div class="products__h3">
            <?= Yii::t('app', 'with the addition of white imperial ginseng') ?>
        </div>
    </div>
    <div class="products__wrap">
        <div class="products__sublime-slide">
            <div class="products__h2">
                <?= Yii::t('app', 'Sublimotion Collection') ?>
            </div>
            <?= $this->renderFile('@app/views/site/products/_sublime-slider.php') ?>
        </div>

        <div class="products__ground-slide">
            <div class="products__h2">
                <?= Yii::t('app', 'Ground Collection') ?>
            </div>
            <?= $this->renderFile('@app/views/site/products/_ground-slider.php') ?>
        </div>

        <div class="products__leaves-slide">
            <div class="products__h2">
                <?= Yii::t('app', 'Leaves Collection') ?>
            </div>
            <?= $this->renderFile('@app/views/site/products/_leaves-slider.php') ?>
        </div>
    </div>
</div>
