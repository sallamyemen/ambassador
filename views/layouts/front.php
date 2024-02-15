<?php

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Menu;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);

$menuLeft = [
    [
        'label' => Yii::t('app', 'About Us'),
        'url' => ['/site/index', '#' => 'about'],
    ],
    [
        'label' => Yii::t('app', 'Ginseng'),
        'url' => ['/site/index', '#' => 'projects'],
    ],
    [
        'label' => Yii::t('app', 'G Premium'),
        'url' => ['/project/view', 'project' => 'white'],
    ],
];

$menuRight = [
    [
        'label' => Yii::t('app', 'Products'),
        'url' => ['/site/index', '#' => 'about'],
    ],
    [
        'label' => Yii::t('app', 'Contacts'),
        'url' => ['/site/index', '#' => 'projects'],
    ],
];

?>

<?php $this->beginContent('@app/views/layouts/main.php') ?>

<div class="app">
    <div class="app__wrapper">
        <header class="app__header header">
            <div class="container">
                <div class="row-nav">
                    <nav class="row-nav__nav">
                        <?= Menu::widget([
                            'items' => $menuLeft,
                            'options' => [
                                'id' => 'menu',
                                'class' => 'row-nav__menu menu',
                            ],
                            'activeCssClass' => 'active',
                            'encodeLabels' => false,
                        ]); ?>
                    </nav>
                    <?= Html::a(Html::img(Url::to('@web/front/img/logo.svg?v=1'), ['class' => 'row-nav__logo-img']), ['/site/index'], ['class' => 'row-nav__logo']) ?>
                    <nav class="row-nav__nav">
                        <?= Menu::widget([
                            'items' => $menuRight,
                            'options' => [
                                'id' => 'menu',
                                'class' => 'row-nav__menu menu',
                            ],
                            'activeCssClass' => 'active',
                            'encodeLabels' => false,
                        ]); ?>
                    </nav>
                    <div class="hum"><span class="hum__item hum__item_one"></span><span class="hum__item hum__item_second"></span><span class="hum__item hum__item_third"></span></div>
                </div>
            </div>
        </header>
        <div class="app__content">
            <?= $content ?>
        </div>
    </div>
    <footer class="app__footer footer">
        <div class="container">
            <div class="row-nav">
                <div class="footer__text">
                    <?= Html::a('E-mail: anna@kolambassador.com', 'mailto:anna@kolambassador.com') ?>
                    <?= Html::a('Telephone: +37495093605', 'tel:37495093605') ?>
                </div>
                <?= Html::a(Html::img(Url::to('@web/front/img/logo-footer.svg?v=1'), ['class' => 'row-nav__logo-img']), ['/site/index'], ['class' => 'row-nav__logo']) ?>
                <div class="footer__text">
                    <?= Yii::t('app', 'All rights reserved') ?>
                </div>
            </div>

        </div>
    </footer>
</div>

<?php $this->endContent() ?>