<?php

namespace app\widgets\langswitcher;

use app\models\Lang;
use Yii;
use yii\base\Widget;

class LangSwitcher extends Widget
{
    public function run()
    {
        $langs = Lang::getAll();
        $langCurrent = '';
        foreach ($langs as $key => $lang) {
            if ($lang->locale === Yii::$app->language) {
                $langCurrent = $lang->name;
                unset($langs[$key]);
            }
        }

        return $this->render('@app/widgets/langswitcher/views/view.php', [
            'langCurrent' => $langCurrent,
            'langs' => $langs,
        ]);
    }
}
