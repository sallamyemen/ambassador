<?php

use yii\helpers\Url;

?>

<div class="anna" id="anna">
    <div class="anna__banner" style="background-image: url('<?= Url::to('@web/front/img/annag.png?v=1') ?>')">
        <div class="anna__wrap">
            <div class="anna__h1">
                <?= Yii::t('app', 'Dear friends!') ?>
            </div>
            <div class="anna__text">
                <?= Yii::t('app', 'My name is Anna Sarukhanyan, and I am the ambassador of the COFFEECELL brand, which grows white imperial ginseng and creates products with it. Many years ago, this ginseng cured me of a dangerous illness. Since then, I have entrusted it with my and my children\'s health. I also know many people who feel vigorous and energetic and extend their active longevity thanks to COFFEECELL\'s products.') ?>
            </div>
        </div>
    </div>
</div>
