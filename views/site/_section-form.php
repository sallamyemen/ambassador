<?php

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
        <form action="mailto:anna@kolambassador.com" method="post" enctype="text/plain">
            <input type="hidden" name="subject" value="Presentation order">
            <input type="hidden" name="body" value="Hello my name is %name%! %0A %0A %message%. %0A %0A You can contact me by email: %email% or phone: %phone% please?">
            <input type="text" name="name" class="form__control" placeholder="Your Name" required><br>
            <input type="text" name="email" class="form__control" placeholder="Your Email" required><br>
            <input type="text" name="phone" class="form__control" placeholder="Your Phone" required><br>
            <textarea name="message" class="form__control" placeholder="Your Message" required></textarea><br>
            <input type="submit" value="Send">
        </form>
        <div class="form__h2">
            <?= Yii::t('app', 'We’ll try to answer as quickly as possible') ?>
        </div>
    </div>
</div>
