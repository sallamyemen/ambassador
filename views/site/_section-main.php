<?php

use yii\helpers\Url;
use yii\helpers\Html;

?>

<div class="main" id="main">
    <div class="main__banner" style="background-image: url('<?= Url::to('@web/front/img/main.jpeg?v=1') ?>')">
        <div class="main__wrap">
            <div class="main__h1">
                <?= Yii::t('app', 'COFFEECELL’s white imperial ginseng in Armenia') ?>
            </div>
            <div class="main__button">
                <?= Html::a(Yii::t('app', 'Order'), '#form', ['class' => 'main__link']) ?>
            </div>
        </div>
    </div>
</div>
