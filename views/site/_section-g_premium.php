<?php

use yii\helpers\Url;

$path = '@web/front/img/';

?>

<div class="premium">
    <div class="premium__title">
        <div class="premium__h1">
            <?= Yii::t('app', 'white imperial ginseng') ?>
        </div>
        <div class="premium__h3">
            <?= Yii::t('app', 'A unique source of natural energy and vitality') ?>
        </div>
    </div>
    <div class="premium__wrap">
        <div class="premium__left">
            <div class="premium__text">
                <?= Yii::t('app', 'Supports all body functions at the cellular level ') ?>
            </div>
            <div class="premium__text">
                <?= Yii::t('app', 'Stimulates cognitive functions and information processing speed') ?>
            </div>
            <div class="premium__text">
                <?= Yii::t('app', 'Increases endurance, performance and stress resistance') ?>
            </div>
            <div class="premium__text">
                <?= Yii::t('app', 'A superfood and not a medicine, making it harmless with no contraindications') ?>
            </div>
        </div>
        <div class="premium__center">
            <img src="<?= Url::to($path .'gpremium.png?v=1') ?>" alt="">
<!--            <video class="premium__video video__iframe" autoplay loop muted playsinline>-->
<!--                <source src="--><?//= Url::to($path.'premium.webm?v=1') ?><!--" type="video/mp4">-->
<!--            </video>-->
        </div>
        <div class="premium__right">
            <div class="premium__text">
                <?= Yii::t('app', 'Provides neuro-nutrition and replenishes essential nutrients') ?>
            </div>
            <div class="premium__text">
                <?= Yii::t('app', 'Causes a surge of strength from the first days of use and energizes for a long time') ?>
            </div>
            <div class="premium__text">
                <?= Yii::t('app', 'Innovative French production, certified quality') ?>
            </div>
            <div class="premium__text">
                <?= Yii::t('app', 'One serving is equivalent to 12 capsules of vitamins and dietary supplements') ?>
            </div>
        </div>
    </div>
</div>
