<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
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
<!--        <form action="mailto:anna@kolambassador.com" method="get" enctype="text/plain">-->
<!--            <input type="hidden" name="subject" value="Presentation order">-->
<!--            <input type="hidden" name="body" value="Hello my name is %name%! %0A %0A %message%. %0A %0A You can contact me by email: %email% or phone: %phone% please?">-->
<!--            <input type="text" name="name" class="form__control" placeholder="Your Name" required><br>-->
<!--            <input type="text" name="email" class="form__control" placeholder="Your Email" required><br>-->
<!--            <input type="text" name="phone" class="form__control" placeholder="Your Phone" required><br>-->
<!--            <textarea name="message" class="form__control" placeholder="Your Message" required></textarea><br>-->
<!--            <input type="submit" value="Send">-->
<!--        </form>-->
        <?php $form = ActiveForm::begin([
            'id' => 'uploadForm',
            'options' => ['enctype' => 'multipart/form-data']
        ]) ?>

        <?= $form->field($model, 'firstName')->textInput(['placeholder' => 'First name', 'class' => 'form__control'])->label(false)?>
        <?= $form->field($model, 'mail')->textInput(['placeholder' => 'E-mail', 'class' => 'form__control'])->label(false) ?>
        <?= $form->field($model, 'phone')->textInput(['placeholder' => 'phone', 'class' => 'form__control', 'id' => 'model-phone'])->label(false) ?>
        <?= $form->field($model, 'comment')->textInput(['placeholder' => 'Message', 'class' => 'form__control'])->label(false) ?>
        <?= Html::submitButton('Send', ['class' => 'form__submit', 'name' => 'submit-button']) ?>

        <?php ActiveForm::end() ?>
        <div class="form__h2">
            <?= Yii::t('app', 'We’ll try to answer as quickly as possible') ?>
        </div>
    </div>
</div>
<?php
$js = <<<JS
$('#model-phone').mask('999-999-9999');
JS;
$this->registerJs($js);
?>