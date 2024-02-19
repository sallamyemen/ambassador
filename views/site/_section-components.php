<?php

use yii\helpers\Url;

$path = '@web/front/img/';

?>

<div class="components" id="components">
   <div class="components__title">
       <div class="components__h1">
           <?= Yii::t('app', 'white imperial ginseng') ?>
       </div>
       <div class="components__h3">
           <?= Yii::t('app', 'A unique source of natural energy and vitality') ?>
       </div>
   </div>
    <div class="components__wrap">
        <div class="components__left">
            <div class="components__left_one">
                <div class="components__text">
                    <div class="components__h2">
                        <?= Yii::t('app', '2 times') ?>
                    </div>
                    <div class="components__h4">
                        <?= Yii::t('app', 'more minerals than in açai berries') ?>
                    </div>
                </div>
                <div class="components__img">
                    <img src="<?= Url::to($path .'berries.png?v=1') ?>" alt="">
                </div>
            </div>
            <div class="components__left_two">
                <div class="components__text">
                    <div class="components__h2">
                        <?= Yii::t('app', '3 times') ?>
                    </div>
                    <div class="components__h4">
                        <?= Yii::t('app', 'more antioxidants than in walnuts') ?>
                    </div>
                </div>
                <div class="components__img">
                    <img src="<?= Url::to($path .'walnuts.png?v=1') ?>" alt="">
                </div>
            </div>
        </div>
        <div class="components__center">
            <img src="<?= Url::to($path .'ginseng.png?v=1') ?>" alt="">
        </div>
        <div class="components__right">
            <div class="components__right_one">
                <div class="components__img">
                    <img src="<?= Url::to($path .'honey.png?v=1') ?>" alt="">
                </div>
                <div class="components__text">
                    <div class="components__h2">
                        <?= Yii::t('app', '7 times') ?>
                    </div>
                    <div class="components__h4">
                        <?= Yii::t('app', 'more vitamins than in honey') ?>
                    </div>
                </div>
            </div>
            <div class="components__right_two">
                <div class="components__img">
                    <img src="<?= Url::to($path .'buckthorn.png?v=1') ?>" alt="">
                </div>
                <div class="components__text">
                    <div class="components__h2">
                        <?= Yii::t('app', '10 times') ?>
                    </div>
                    <div class="components__h4">
                        <?= Yii::t('app', 'more saponins than in sea buckthorn') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
