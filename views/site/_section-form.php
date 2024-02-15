<?php

use yii\helpers\Html;

?>

<div class="form" id="form">
    <div class="form__title">
        <div class="form__h1">
            <?= Yii::t('app', 'write to us') ?>
        </div>
        <div class="form__text">
            <?= Yii::t('app', 'You can order a presentation from us in Yerevan with a product tasting or tell us which products and in what quantity you want to purchase.') ?>
        </div>
    </div>
    <div class="form__wrap">
        <?= Html::input('text', 'name', '', ['class' => 'form__control', 'placeholder' => 'Name, last name']) ?>

        <?= Html::input('text', 'phone', '', ['class' => 'form__control', 'placeholder' => 'Your phone number']) ?>

        <?= Html::input('text', 'email', '', ['class' => 'form__control', 'placeholder' => 'Your e-mail']) ?>

        <?= Html::input('text-area', 'message', '', ['class' => 'form__control', 'placeholder' => 'Message']) ?>

        <div class="form__button">
            <?= Html::a(Yii::t('app', 'Order'), '#main', ['class' => 'form__link']) ?>
        </div>
        <div class="form__h2">
            <?= Yii::t('app', 'We’ll try to answer as quickly as possible') ?>
        </div>
    </div>
</div>
