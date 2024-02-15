<?php

use yii\helpers\Html;
use yii\helpers\Url;

?>

<a href="javascript:void(0);" tabindex="1"><?= $langCurrent ?></a>
<ul class="lang__list">
    <?php foreach ($langs as $key => $lang) { ?>
        <li>
            <?= Html::a($lang->name, Url::current(['lang_id' => $lang->id])) ?>
        </li>
    <?php } ?>
</ul>