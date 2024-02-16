<?php

//use yii\helpers\Html;

?>

<!--<form action="mailto:anna@kolambassador.com" method="post" enctype="text/plain">-->
<!--    <input type="hidden" name="subject" value="Presentation order">-->
<!--    <input type="hidden" name="body" value="Hello my name is %Name, lastname%! %0A %0A %message%. %0A %0A You can contact me by email: %email% or phone: %phone% please?">-->
<!--    <input type="text" name="Name" placeholder="Your Name" required><br>-->
<!--    <input type="text" name="email" placeholder="Your Email" required><br>-->
<!--    <input type="text" name="phone" placeholder="Your Phone" required><br>-->
<!--    <textarea name="message" placeholder="Your Message" required></textarea><br>-->
<!--    <input type="submit" value="Send">-->
<!--</form>-->

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
<!--        --><?//= Html::input('text', 'name', '', ['class' => 'form__control', 'placeholder' => 'Name, last name']) ?>
<!---->
<!--        --><?//= Html::input('text', 'phone', '', ['class' => 'form__control', 'placeholder' => 'Your phone number']) ?>
<!---->
<!--        --><?//= Html::input('text', 'email', '', ['class' => 'form__control', 'placeholder' => 'Your e-mail']) ?>
<!---->
<!--        --><?//= Html::input('text-area', 'message', '', ['class' => 'form__control', 'placeholder' => 'Message']) ?>

        <form action="mailto:anna@kolambassador.com" method="post" enctype="text/plain">
            <input type="hidden" name="subject" value="Presentation order">
            <input type="hidden" name="body" value="Hello my name is %Name, lastname%! %0A %0A %message%. %0A %0A You can contact me by email: %email% or phone: %phone% please?">
            <input type="text" name="Name" class="form__control" placeholder="Your Name" required><br>
            <input type="text" name="email" class="form__control" placeholder="Your Email" required><br>
            <input type="text" name="phone" class="form__control" placeholder="Your Phone" required><br>
            <textarea name="message" class="form__control" placeholder="Your Message" required></textarea><br>
            <input type="submit" value="Send">
<!--            <div class="form__button">-->
<!--                --><?//= Html::a(Yii::t('app', 'Order'), '#main', ['class' => 'form__link']) ?>

<!--            </div>-->

        </form>
        <div class="form__h2">
            <?= Yii::t('app', 'We’ll try to answer as quickly as possible') ?>
        </div>
    </div>
</div>
