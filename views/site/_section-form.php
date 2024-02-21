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
        <?php $form = ActiveForm::begin([
            'id' => 'uploadForm',
            'options' => ['enctype' => 'multipart/form-data']
        ]) ?>

        <?= $form->field($model, 'firstName')->textInput(['placeholder' => 'Name, last name', 'class' => 'form__control'])->label(false)?>
        <?= $form->field($model, 'phone')->textInput(['placeholder' => 'Your phone number', 'class' => 'form__control', 'id' => 'phone'])->label(false) ?>
        <?= $form->field($model, 'mail')->textInput(['placeholder' => 'Your e-mail', 'class' => 'form__control'])->label(false) ?>
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

const phoneInput = document.getElementById('phone');

phoneInput.addEventListener('input', function(e) {
    let inputValue = e.target.value.replace(/\D/g, '');
    if(inputValue.length > 12) {
        inputValue = inputValue.slice(0, 12);
    }
    const formattedValue = inputValue.replace(/(\d{1,3})(\d{1,8})/, '+$1 $2');
    e.target.value = formattedValue;
});

phoneInput.addEventListener('keydown', function(e) {
    if(e.key.length === 1 && !/^\d+$/.test(e.key) || e.key === 'Backspace') {
        e.preventDefault();
    }
});

// document.getElementById('phone').addEventListener('input', function (e) {
//    var x = e.target.value.replace(/\D/g, ''); //.match(/(\d{0,3})(\d{0,3})(\d{0,4})/);
//    e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
// });

JS;
$this->registerJs($js);
?>