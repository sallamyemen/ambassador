<?php

use yii\helpers\Html;

$this->title = $name;

?>

<section class="error">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="error__title app__title"><?= Yii::t('app', 'Ошибка {number}', ['number' => $exception->statusCode]) ?></h1>
                <div class="error__subtitle fz1"><?= nl2br(Html::encode($message)) ?></div>
                <div class="error__text">
                    <?= Yii::t('app', 'Откройте {the_homepage} сайта и попробуйте самостоятельно найти нужную вам страницу.', [
                        'the_homepage'=>Html::a(Yii::t('app', '{open} главную страницу', ['open'=>'']), ['/site/index']),
                    ]) ?>
                    <?= Yii::t('app', 'Или кликните кнопку {back} вашего браузера, чтобы вернуться к предыдущей странице.', [
                        'back' => Html::a(Yii::t('app', 'Назад (Back)'), 'javascript:history.back()'),
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
//
///** @var yii\web\View $this */
///** @var string $name */
///** @var string $message */
///** @var Exception$exception */
//
//use yii\helpers\Html;
//
//$this->title = $name;
?>
<!--<div class="site-error">-->
<!---->
<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!--    <div class="alert alert-danger">-->
<!--        --><?//= nl2br(Html::encode($message)) ?>
<!--    </div>-->
<!---->
<!--    <p>-->
<!--        The above error occurred while the Web server was processing your request.-->
<!--    </p>-->
<!--    <p>-->
<!--        Please contact us if you think this is a server error. Thank you.-->
<!--    </p>-->
<!---->
<!--</div>-->
