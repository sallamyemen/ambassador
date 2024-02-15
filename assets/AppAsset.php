<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'front/css/main.min.css',
        'front/libs/animate.min.css',
        'front/libs/slickslider/slick.css',
        'front/libs/fontawesome/css/all.min.css',
    ];
    public $js = [
        'front/libs/jquery.simplemarquee.js',
        'front/libs/jquery-ui/jquery-ui.min.js',
        'front/libs/slickslider/slick.js',
        'front/js/common.js',
        'front/libs/wow.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
